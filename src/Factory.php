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
 * Factory class for creating and configuring SmartyComponentManager instances
 */
class Factory
{
    /**
     * Create a SmartyComponentManager instance for PrestaShop
     *
     * @param \Smarty $smarty The Smarty instance
     * @param string $moduleName The module name
     * @param string $componentsDir Optional custom components directory
     * @return SmartyComponentManager
     */
    public static function createForPrestaShop(\Smarty $smarty, string $moduleName, string $componentsDir = null): SmartyComponentManager
    {
        // If no custom components directory is provided, use the module's templates/components directory
        if ($componentsDir === null) {
            // Check if we're in a PrestaShop environment
            if (defined('\\_PS_MODULE_DIR_')) {
                $componentsDir = constant('\\_PS_MODULE_DIR_') . $moduleName . '/views/templates/components';
            } else {
                // Fallback to a relative path if not in PrestaShop
                $componentsDir = 'modules/' . $moduleName . '/views/templates/components';
            }
        }
        
        return new SmartyComponentManager($smarty, $componentsDir);
    }
    
    /**
     * Create a SmartyComponentManager instance with default configuration
     *
     * @param \Smarty $smarty The Smarty instance
     * @param string $componentsDir Optional custom components directory
     * @return SmartyComponentManager
     */
    public static function create(\Smarty $smarty, string $componentsDir = 'components'): SmartyComponentManager
    {
        return new SmartyComponentManager($smarty, $componentsDir);
    }
    
    /**
     * Create and initialize a SmartyComponentManager instance with common components
     *
     * @param \Smarty $smarty The Smarty instance
     * @param string $componentsDir Optional custom components directory
     * @return SmartyComponentManager
     */
    public static function createWithCommonComponents(\Smarty $smarty, string $componentsDir = 'components'): SmartyComponentManager
    {
        $manager = new SmartyComponentManager($smarty, $componentsDir);
        
        // Register common components
        $manager->registerCardComponent();
        $manager->registerSlotComponent();
        $manager->register('button');
        $manager->register('alert');
        $manager->register('badge');
        
        return $manager;
    }
} 