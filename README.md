# SmartyComponents

Un gestionnaire de composants pour Smarty qui simplifie la création et l'utilisation de composants réutilisables dans vos templates, avec un style moderne utilisant Tailwind CSS v4.

## Installation

1. Installez les dépendances avec Composer :
```bash
composer install
```

2. Lancez le serveur de développement :
```bash
php -S localhost:8000
```

## Utilisation du SmartyComponentManager

Le `SmartyComponentManager` vous permet d'enregistrer facilement des composants Smarty sans avoir à écrire beaucoup de code répétitif.

### Initialisation

```php
// Instanciation de Smarty
$smarty = new \Smarty();

// Configuration de base de Smarty
// ...

// Initialisation du gestionnaire de composants
$componentManager = new SmartyComponentManager($smarty, 'components');
```

### Enregistrement d'un composant simple

Pour enregistrer un composant simple, il suffit d'appeler la méthode `register` avec le nom du composant :

```php
// Enregistre un composant "alert" qui utilisera le template "components/alert.tpl"
$componentManager->register('alert');
```

Le gestionnaire créera automatiquement un handler qui assignera les paramètres et le contenu au template et affichera le template correspondant.

### Enregistrement d'un composant avec un handler personnalisé

Si vous avez besoin d'une logique personnalisée pour votre composant, vous pouvez fournir votre propre handler :

```php
$componentManager->register('button', function($params, $content, $template, &$repeat) {
    // Votre logique personnalisée ici
    $template->assign('params', $params);
    $template->assign('content', $content);
    if (!$repeat && $content !== null) {
        return $template->fetch('components/button.tpl');
    }
});
```

### Composants spéciaux

Le gestionnaire inclut également des méthodes pour enregistrer des composants spéciaux comme `card` et `slot` qui ont une logique particulière :

```php
// Enregistre le composant "card"
$componentManager->registerCardComponent();

// Enregistre le composant "slot"
$componentManager->registerSlotComponent();
```

## Création de templates de composants avec Tailwind CSS v4

Pour chaque composant, créez un fichier template dans le dossier `src/templates/components/` avec le nom du composant, par exemple `button.tpl` :

```smarty
{* button.tpl *}
<button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 {$params.class|default:''}">
    {$content nofilter}
</button>
```

## Utilisation des composants dans vos templates

Une fois enregistrés, vous pouvez utiliser vos composants dans vos templates Smarty :

```smarty
{button class="bg-green-500 hover:bg-green-600"}Cliquez ici{/button}

{alert type="warning"}
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
        </svg>
        <span class="font-medium">Attention!</span> Ceci est un message d'alerte.
    </div>
{/alert}

{card}
    {slot name="title"}<h3>Titre de la carte</h3>{/slot}
    {slot name="card_content"}
        <p>Contenu de la carte</p>
    {/slot}
{/card}
```

## Intégration de Tailwind CSS v4

Pour utiliser Tailwind CSS v4 dans votre application, ajoutez simplement le script dans votre template principal :

```html
<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Autres scripts et styles -->
</head>
```

Tous les composants sont déjà configurés pour utiliser Tailwind CSS v4, y compris le support du mode sombre avec les classes `dark:`.

## Personnalisation des composants

Vous pouvez personnaliser n'importe quel composant en passant des classes supplémentaires via le paramètre `class` :

```smarty
{button class="bg-purple-500 hover:bg-purple-600 w-full"}Bouton pleine largeur{/button}
```

## Étendre le gestionnaire

Vous pouvez étendre la classe `SmartyComponentManager` pour ajouter vos propres méthodes pour des composants spécifiques à votre application. 