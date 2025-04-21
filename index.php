<?php
/**
 * SmartyComponents - Page de démonstration
 * 
 * Pour lancer le serveur:
 * php -S localhost:8000
 */

// Chargement de l'autoloader Composer
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
} else {
    die('Veuillez installer les dépendances avec Composer: <code>composer install</code>');
}

// Vérification de l'installation de Smarty
if (!class_exists('\Smarty')) {
    die('Smarty n\'est pas installé. Veuillez installer les dépendances avec Composer: <code>composer install</code>');
}

// Utilisation du namespace pour SmartyComponentManager
use SmartyComponents\SmartyComponentManager;
use SmartyComponents\Factory;

// Le require_once n'est plus nécessaire car l'autoloader se charge de charger la classe
// require_once __DIR__ . '/src/SmartyComponentManager.php';

// IMPORTANT: Créer une nouvelle instance complètement propre de Smarty
// Cela évite les problèmes de plugins déjà enregistrés
$smarty = new \Smarty();

// Configuration de base
$smarty->force_compile = true;
$smarty->compile_check = true;
$smarty->caching = false;
$smarty->setTemplateDir(__DIR__ . '/src/templates');
$smarty->setCompileDir(__DIR__ . '/src/templates_c');
$smarty->setCacheDir(__DIR__ . '/src/cache');
$smarty->setConfigDir(__DIR__ . '/src/configs');

// Initialisation du gestionnaire de composants
// Option 1: Utiliser directement la classe
$componentManager = new SmartyComponentManager($smarty, 'components');

// Option 2: Utiliser la factory (alternative)
// $componentManager = Factory::create($smarty, 'components');

// Enregistrement des composants
$componentManager->registerCardComponent();
$componentManager->registerSlotComponent();

// Enregistrement du composant button avec un handler personnalisé
$componentManager->register('button', function($params, $content, $template, &$repeat) {
    $template->assign('params', $params);
    $template->assign('content', $content);
    if (!$repeat && $content !== null) {
        return $template->fetch('components/button.tpl');
    }
});

// Enregistrement du composant alert avec le handler par défaut
$componentManager->register('alert');

// Enregistrement du composant badge avec le handler par défaut
$componentManager->register('badge');

// Création des répertoires si besoin
$dirs = [
    $smarty->getTemplateDir()[0], 
    $smarty->getCompileDir(), 
    $smarty->getCacheDir(), 
    $smarty->getConfigDir()[0],
    __DIR__ . '/src/templates/components'
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

try {
    // Afficher le template modifié
    $smarty->display('demo.tpl');
} catch (Exception $e) {
    echo '<div style="color: red; padding: 20px; border: 1px solid #f00; margin: 20px; background: #fff5f5;">';
    echo '<h2>Erreur lors de l\'affichage du template</h2>';
    echo '<p>' . htmlspecialchars($e->getMessage()) . '</p>';
    echo '<p><strong>Trace:</strong></p>';
    echo '<pre>' . htmlspecialchars($e->getTraceAsString()) . '</pre>';
    echo '</div>';
} 