# SmartyComponents

A component manager for Smarty that simplifies the creation and use of reusable components in your templates, with a modern style using Tailwind CSS v4. Compatible with PrestaShop.

## Installation

1. Install dependencies with Composer:
```bash
composer require prestasafe-smarty-components/core
```

2. For a standard project:
```bash
php -S localhost:8000
```

## PrestaShop Compatibility

SmartyComponents is designed to work perfectly with a PrestaShop module. It offers specific features to facilitate integration:

- Support for Smarty 3.1+ (used by PrestaShop 1.7+) and Smarty 4.3+
- Specific factory for PrestaShop modules with automatic path detection
- Basic components compatible with PrestaShop design

### Usage in a PrestaShop module

1. Add the dependency to your module's `composer.json` file:
```json
{
    "require": {
        "smarty-components/core": "^1.0"
    }
}
```

2. In your main module file, initialize the component manager with the factory method:

```php
// In a hook method or controller
$smarty = $this->context->smarty;
$componentManager = \SmartyComponents\Factory::createForPrestaShop($smarty, $this->name);

// Register the components you want to use
$componentManager->registerCardComponent();
$componentManager->registerSlotComponent();
$componentManager->register('button');
$componentManager->register('alert');
```

3. Create component templates in the `views/templates/components/` folder of your module.

4. Use them in your Smarty templates as in the example below.

## Using the SmartyComponentManager

The `SmartyComponentManager` allows you to easily register Smarty components without having to write a lot of repetitive code.

### Initialization

```php
// Instantiating Smarty
$smarty = new \Smarty();

// Basic Smarty configuration
// ...

// Initializing the component manager
$componentManager = new \SmartyComponents\SmartyComponentManager($smarty, 'components');

// OR with the Factory
$componentManager = \SmartyComponents\Factory::create($smarty, 'components');

// OR with pre-registered components
$componentManager = \SmartyComponents\Factory::createWithCommonComponents($smarty);
```

### Registering a simple component

To register a simple component, just call the `register` method with the component name:

```php
// Registers an "alert" component that will use the "components/alert.tpl" template
$componentManager->register('alert');
```

The manager will automatically create a handler that assigns parameters and content to the template and displays the corresponding template.

### Registering a component with a custom handler

If you need custom logic for your component, you can provide your own handler:

```php
$componentManager->register('button', function($params, $content, $template, &$repeat) {
    // Your custom logic here
    $template->assign('params', $params);
    $template->assign('content', $content);
    if (!$repeat && $content !== null) {
        return $template->fetch('components/button.tpl');
    }
});
```

### Special components

The manager also includes methods to register special components like `card` and `slot` that have particular logic:

```php
// Register the "card" component
$componentManager->registerCardComponent();

// Register the "slot" component
$componentManager->registerSlotComponent();
```

## Creating component templates with Tailwind CSS v4

For each component, create a template file in the `components/` folder (or the one specified during initialization) with the name of the component, for example `button.tpl`:

```smarty
{* button.tpl *}
<button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 {$params.class|default:''}">
    {$content nofilter}
</button>
```

## Using components in your templates

Once registered, you can use your components in your Smarty templates:

```smarty
{button class="bg-green-500 hover:bg-green-600"}Click here{/button}

{alert type="warning"}
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
        </svg>
        <span class="font-medium">Warning!</span> This is an alert message.
    </div>
{/alert}

{card}
    {slot name="title"}<h3>Card Title</h3>{/slot}
    {slot name="card_content"}
        <p>Card content</p>
    {/slot}
{/card}
```

## Integrating Tailwind CSS v4

To use Tailwind CSS v4 in your application, simply add the script to your main template:

```html
<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Other scripts and styles -->
</head>
```

All components are already configured to use Tailwind CSS v4, including dark mode support with the `dark:` classes.

## Customizing components

You can customize any component by passing additional classes via the `class` parameter:

```smarty
{button class="bg-purple-500 hover:bg-purple-600 w-full"}Full width button{/button}
```

## Extending the manager

You can extend the `SmartyComponentManager` class to add your own methods for components specific to your application or PrestaShop module.

## Examples

Check the `docs/example-module/` folder for a complete example of usage in a PrestaShop module. 