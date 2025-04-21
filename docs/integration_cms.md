# Intégration de SmartyComponents dans un CMS

Ce guide vous montre comment intégrer facilement SmartyComponents dans différents CMS ou frameworks PHP.

## Intégration générique

Pour une intégration basique dans n'importe quel système utilisant Smarty:

```php
<?php
// Inclure l'autoloader de Composer
require_once 'vendor/autoload.php';

// Récupérer l'instance Smarty de votre CMS
$smarty = get_smarty_instance(); // À adapter selon votre CMS

// Initialiser SmartyComponents
use SmartyComponents\SmartyComponentsHelper;

$componentsManager = SmartyComponentsHelper::init($smarty, [
    'custom' => '/path/to/your/custom/components'
]);
```

## Utilisation du fichier bootstrap

Pour une intégration plus simple, vous pouvez utiliser le fichier bootstrap:

```php
<?php
// Inclure le fichier bootstrap
require_once 'vendor/smarty-components/core/src/bootstrap.php';

// Récupérer l'instance Smarty de votre CMS
$smarty = get_smarty_instance(); // À adapter selon votre CMS

// Initialiser SmartyComponents avec des options
initialize_smarty_components($smarty, [
    'components_dirs' => [
        'custom' => '/path/to/your/custom/components'
    ],
    'use_alpine' => true // Active automatiquement AlpineJS
]);
```

## Intégration avec PrestaShop

```php
<?php
// Dans un module PrestaShop
class YourModule extends Module
{
    public function __construct()
    {
        $this->name = 'yourmodule';
        // ...
        
        parent::__construct();
    }
    
    public function install()
    {
        return parent::install() && $this->registerHook('actionDispatcher');
    }
    
    public function hookActionDispatcher()
    {
        // Inclure le bootstrap
        require_once _PS_MODULE_DIR_ . 'yourmodule/vendor/smarty-components/core/src/bootstrap.php';
        
        // Initialiser SmartyComponents
        initialize_smarty_components($this->context->smarty, [
            'components_dirs' => [
                'custom' => _PS_MODULE_DIR_ . 'yourmodule/views/templates/components'
            ],
            'use_alpine' => true
        ]);
    }
}
```

## Intégration avec WordPress (avec Timber)

```php
<?php
// Dans functions.php de votre thème ou dans un plugin

// Charger Composer
require_once get_template_directory() . '/vendor/autoload.php';

// Initialiser Timber
$timber = new Timber\Timber();

// Initialiser SmartyComponents
add_action('timber/twig/filters', function($twig) {
    // Si vous utilisez Smarty avec Timber
    global $smarty;
    
    require_once get_template_directory() . '/vendor/smarty-components/core/src/bootstrap.php';
    
    initialize_smarty_components($smarty, [
        'components_dirs' => [
            'theme' => get_template_directory() . '/components'
        ]
    ]);
    
    return $twig;
});
```

## Création de composants personnalisés

Créez des fichiers .tpl dans votre dossier de composants personnalisés:

```smarty
{* components/icon-button.tpl *}
<button class="icon-button {$class|default:''}" {if isset($props)}{$props nofilter}{/if}>
    <i class="icon {$icon|default:'default-icon'}"></i>
    <span>{$content nofilter}</span>
</button>
```

## Utilisation des composants dans vos templates

```smarty
{* Votre template .tpl *}
{icon-button class="btn-primary" icon="fa fa-user" props='onclick="alert(\'Bonjour!\')"'}
    Mon bouton avec icône
{/icon-button}

{card}
    {slot name="title"}Titre de ma carte{/slot}
    {slot name="content"}
        <p>Contenu de ma carte</p>
        {* Composants imbriqués *}
        {button class="btn-sm"}Bouton intégré{/button}
    {/slot}
{/card}
``` 