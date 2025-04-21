<?php
/**
 * Copyright since 2023 SmartyComponents
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/MIT
 *
 * @author    SmartyComponents <info@example.com>
 * @copyright Since 2023 SmartyComponents
 * @license   https://opensource.org/licenses/MIT MIT License
 */

declare(strict_types=1);

namespace SmartyComponents;

/**
 * SmartyComponentManager - Component manager for Smarty
 * 
 * This class makes it easy to manage Smarty components registration
 * and simplify code in the main file.
 */
class SmartyComponentManager
{
    /**
     * @var \Smarty The Smarty instance
     */
    private $smarty;
    
    /**
     * @var array The registered components
     */
    private $components = [];
    
    /**
     * @var string The path to the components templates directory
     */
    private $componentsDir;
    
    /**
     * Constructor
     * 
     * @param \Smarty $smarty The Smarty instance
     * @param string $componentsDir The path to the components templates directory
     */
    public function __construct(\Smarty $smarty, $componentsDir = 'components')
    {
        $this->smarty = $smarty;
        $this->componentsDir = $componentsDir;
    }
    
    /**
     * Register a component
     * 
     * @param string $name The component name
     * @param string|callable $handler The component handler or null to use the default handler
     * @param string|null $templateFile The template file to use or null to use the component name
     * @return $this
     */
    public function register($name, $handler = null, $templateFile = null)
    {
        // If no handler is provided, create a default handler
        if ($handler === null) {
            $handler = $this->createDefaultHandler($name, $templateFile);
        }
        // If handler is provided but is not a wrapper for extractSlotContent,
        // wrap it to ensure slots are extracted
        else if (is_callable($handler)) {
            $originalHandler = $handler;
            $handler = function($params, $content, $template, &$repeat) use ($originalHandler) {
                // Assign standard variables
                $template->assign('params', $params);
                $template->assign('content', $content);
                
                if (!$repeat && $content !== null) {
                    // Extract slots content
                    $slotsContent = $this->extractSlotsContent($content);
                    
                    // Handle component props
                    $props = [];
                    if(isset($params['props']) && is_array($params['props'])) {
                        $props = $params['props'];
                        // Remove props from params to avoid duplication
                        unset($params['props']);
                    }
                    
                    // Merge direct params (except props) with props array
                    foreach($params as $key => $value) {
                        if($key !== 'props') {
                            $props[$key] = $value;
                        }
                    }
                    
                    $template->assign('props', $props);
                    
                    // Assign slot contents to Smarty variables
                    foreach ($slotsContent as $slotName => $slotContent) {
                        $template->assign($slotName, $slotContent);
                    }
                }
                
                // Call the original handler
                return $originalHandler($params, $content, $template, $repeat);
            };
        }
        
        // Register the plugin in Smarty
        $this->smarty->registerPlugin('block', $name, $handler);
        
        // Store the component in the list
        $this->components[$name] = [
            'handler' => $handler,
            'template' => $templateFile ?: $name . '.tpl'
        ];
        
        return $this;
    }
    
    /**
     * Create a default handler for a component
     * 
     * @param string $name The component name
     * @param string|null $templateFile The template file to use or null to use the component name
     * @return callable The handler
     */
    private function createDefaultHandler($name, $templateFile = null)
    {
        $componentsDir = $this->componentsDir;
        $templatePath = $templateFile ?: "$componentsDir/$name.tpl";
        
        return function($params, $content, $template, &$repeat) use ($templatePath) {
            $template->assign('params', $params);
            $template->assign('content', $content);
            
            if (!$repeat && $content !== null) {
                // Extract slots content
                $slotsContent = $this->extractSlotsContent($content);
                
                // Handle component props
                $props = [];
                if(isset($params['props']) && is_array($params['props'])) {
                    $props = $params['props'];
                    // Remove props from params to avoid duplication
                    unset($params['props']);
                }
                
                // Merge direct params (except props) with props array
                foreach($params as $key => $value) {
                    if($key !== 'props') {
                        $props[$key] = $value;
                    }
                }
                
                $template->assign('props', $props);
                
                // Assign slot contents to Smarty variables
                foreach ($slotsContent as $slotName => $slotContent) {
                    $template->assign($slotName, $slotContent);
                }
                
                return $template->fetch($templatePath);
            }
            
            return null;
        };
    }
    
    /**
     * Register the "card" component
     * 
     * @return $this
     */
    public function registerCardComponent()
    {
        $handler = function($params, $content, $template, &$repeat) {
            if (is_null($content)) {
                // Return nothing when opening the tag
                return;
            }
            if (!$repeat && $content !== null) {
                // Render the 'card.tpl' template
                return $template->fetch($this->componentsDir . '/card.tpl');
            }
        };
        
        return $this->register('card', $handler);
    }
    
    /**
     * Register the "slot" component
     * 
     * @return $this
     */
    public function registerSlotComponent()
    {
        $handler = function($params, $content, $template, &$repeat) {
            // Check if content is null, which means we're at the opening of the block
            if ($content === null) {
                return;
            }
            
            // Get slot name from parameters
            $name = isset($params['name']) ? strtoupper($params['name']) : 'DEFAULT';
            // Assign the slot name to a Smarty variable
            $template->assign('name', $name);
            $template->assign('content', $content);
            // Return the content surrounded by slot markers
            return $template->fetch($this->componentsDir . '/slot.tpl');
        };
        
        return $this->register('slot', $handler);
    }
    
    /**
     * Extract slots content
     * 
     * @param string $content The content to parse
     * @return array The slots contents
     */
    private function extractSlotsContent($content)
    {
        $slotsContent = [];
        
        // Use a regular expression to find all slots
        preg_match_all("/<!-- SLOT_(.*?) -->(.*?)<!-- END_SLOT_\\1 -->/s", $content, $matches, PREG_SET_ORDER);
        
        foreach ($matches as $match) {
            // $match[1] contains the slot name, and $match[2] contains the slot content
            $slotsContent[strtolower($match[1])] = $match[2];
        }
        
        return $slotsContent;
    }
    
    /**
     * Check if a component is registered
     * 
     * @param string $name The component name
     * @return bool
     */
    public function hasComponent($name)
    {
        return isset($this->components[$name]);
    }
    
    /**
     * Get all registered components
     * 
     * @return array
     */
    public function getComponents()
    {
        return $this->components;
    }
    
    /**
     * Set custom components directory
     * 
     * @param string $componentsDir The path to the components templates directory
     * @return $this
     */
    public function setComponentsDir($componentsDir)
    {
        $this->componentsDir = $componentsDir;
        return $this;
    }
    
    /**
     * Get components directory
     * 
     * @return string
     */
    public function getComponentsDir()
    {
        return $this->componentsDir;
    }
    
    /**
     * Bulk register components
     * 
     * @param array $components Array of component configuration
     * @return $this
     */
    public function registerComponents(array $components)
    {
        foreach ($components as $name => $config) {
            $handler = $config['handler'] ?? null;
            $template = $config['template'] ?? null;
            $this->register($name, $handler, $template);
        }
        return $this;
    }
} 