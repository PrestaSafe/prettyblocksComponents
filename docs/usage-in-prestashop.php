<?php
/**
 * Example of how to use SmartyComponents in a PrestaShop module
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Example module that uses SmartyComponents
 */
class ExampleComponentsModule extends Module
{
    public function __construct()
    {
        $this->name = 'examplecomponents';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Your Name';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = [
            'min' => '1.7.7.0',
            'max' => _PS_VERSION_,
        ];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Example Components Module');
        $this->description = $this->l('Shows how to use SmartyComponents in a PrestaShop module');
    }

    /**
     * Install the module
     *
     * @return bool
     */
    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayFooter');
    }

    /**
     * Uninstall the module
     *
     * @return bool
     */
    public function uninstall()
    {
        return parent::uninstall();
    }

    /**
     * Hook to displayFooter
     *
     * @param array $params Hook parameters
     * @return string
     */
    public function hookDisplayFooter($params)
    {
        // Get the Smarty instance from context
        $smarty = $this->context->smarty;
        
        // Initialize the SmartyComponentManager using the Factory
        $componentManager = \SmartyComponents\Factory::createForPrestaShop($smarty, $this->name);
        
        // Register the components you want to use
        $componentManager->registerCardComponent();
        $componentManager->registerSlotComponent();
        $componentManager->register('button');
        $componentManager->register('alert');
        
        // Assign variables to the template
        $this->context->smarty->assign([
            'message' => 'This is an example message',
        ]);
        
        // Return the rendered template
        return $this->display(__FILE__, 'views/templates/hook/footer.tpl');
    }
} 