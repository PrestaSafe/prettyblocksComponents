<?php

/**
 * SmartyComponentManager - Gestionnaire de composants pour Smarty
 * 
 * Cette classe permet de gérer facilement l'enregistrement des composants Smarty
 * et d'alléger le code dans le fichier principal.
 */
class SmartyComponentManager
{
    /**
     * @var \Smarty L'instance de Smarty
     */
    private $smarty;
    
    /**
     * @var array Les composants enregistrés
     */
    private $components = [];
    
    /**
     * @var string Le chemin vers le dossier des templates des composants
     */
    private $componentsDir;
    
    /**
     * Constructeur
     * 
     * @param \Smarty $smarty L'instance de Smarty
     * @param string $componentsDir Le chemin vers le dossier des templates des composants
     */
    public function __construct(\Smarty $smarty, $componentsDir = 'components')
    {
        $this->smarty = $smarty;
        $this->componentsDir = $componentsDir;
    }
    
    /**
     * Enregistre un composant
     * 
     * @param string $name Le nom du composant
     * @param string|callable $handler Le handler du composant ou null pour utiliser le handler par défaut
     * @param string|null $templateFile Le fichier template à utiliser ou null pour utiliser le nom du composant
     * @return $this
     */
    public function register($name, $handler = null, $templateFile = null)
    {
        // Si aucun handler n'est fourni, on crée un handler par défaut
        if ($handler === null) {
            $handler = $this->createDefaultHandler($name, $templateFile);
        }
        
        // Enregistre le plugin dans Smarty
        $this->smarty->registerPlugin('block', $name, $handler);
        
        // Stocke le composant dans la liste
        $this->components[$name] = [
            'handler' => $handler,
            'template' => $templateFile ?: $name . '.tpl'
        ];
        
        return $this;
    }
    
    /**
     * Crée un handler par défaut pour un composant
     * 
     * @param string $name Le nom du composant
     * @param string|null $templateFile Le fichier template à utiliser ou null pour utiliser le nom du composant
     * @return callable Le handler
     */
    private function createDefaultHandler($name, $templateFile = null)
    {
        $componentsDir = $this->componentsDir;
        $templatePath = $templateFile ?: "$componentsDir/$name.tpl";
        
        return function($params, $content, $template, &$repeat) use ($templatePath) {
            $template->assign('params', $params);
            $template->assign('content', $content);
            
            if (!$repeat && $content !== null) {
                return $template->fetch($templatePath);
            }
            
            return null;
        };
    }
    
    /**
     * Enregistre le composant "card"
     * 
     * @return $this
     */
    public function registerCardComponent()
    {
        $handler = function($params, $content, $template, &$repeat) {
            $props = null;
            if (is_null($content)) {
                // Return nothing when opening the tag
                return;
            }
            if (!$repeat && $content !== null) {
                // Extrait le contenu des slots
                $slotsContent = $this->extractSlotsContent($content);
                if(isset($params['props'])){
                    $props = $params['props'];
                }
                $template->assign('props', $props);
                // Assignation des contenus des slots aux variables Smarty
                foreach ($slotsContent as $slotName => $slotContent) {
                    $template->assign($slotName, $slotContent);
                }
                
                // Rendu du template 'card.tpl'
                return $template->fetch('components/card.tpl');
            }
        };
        
        return $this->register('card', $handler);
    }
    
    /**
     * Enregistre le composant "slot"
     * 
     * @return $this
     */
    public function registerSlotComponent()
    {
        $handler = function($params, $content, $template, &$repeat) {
            // Vérifiez si le contenu est null, ce qui signifie que nous sommes à l'ouverture du bloc
            if ($content === null) {
                return;
            }
            
            // Récupère le nom du slot depuis les paramètres
            $name = isset($params['name']) ? strtoupper($params['name']) : 'DEFAULT';
            // Assign the slot name to a Smarty variable
            $template->assign('name', $name);
            $template->assign('content', $content);
            // Retourne le contenu encadré par les marqueurs de slot
            return $template->fetch('components/slot.tpl');
        };
        
        return $this->register('slot', $handler);
    }
    
    /**
     * Extrait le contenu des slots
     * 
     * @param string $content Le contenu à analyser
     * @return array Les contenus des slots
     */
    private function extractSlotsContent($content)
    {
        $slotsContent = [];
        
        // Utilise une expression régulière pour trouver tous les slots
        preg_match_all("/<!-- SLOT_(.*?) -->(.*?)<!-- END_SLOT_\\1 -->/s", $content, $matches, PREG_SET_ORDER);
        
        foreach ($matches as $match) {
            // $match[1] contient le nom du slot, et $match[2] contient le contenu du slot
            $slotsContent[strtolower($match[1])] = $match[2];
        }
        
        return $slotsContent;
    }
    
    /**
     * Vérifie si un composant est enregistré
     * 
     * @param string $name Le nom du composant
     * @return bool
     */
    public function hasComponent($name)
    {
        return isset($this->components[$name]);
    }
    
    /**
     * Récupère tous les composants enregistrés
     * 
     * @return array
     */
    public function getComponents()
    {
        return $this->components;
    }
} 