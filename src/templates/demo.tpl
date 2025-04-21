<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SmartyComponents Demo</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="bg-gray-50 p-6">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-900 mb-8">SmartyComponents Demo</h1>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Card Component</h2>
                {card props=[
                    'x-data' => '{ show: false, count: 0 }'
                ]}
                    {slot name="title"}<h3>Card avec Tailwind CSS</h3>{/slot}
                    {slot name="card_content"}
                        <p class="mb-4">Ce composant utilise maintenant Tailwind CSS v4 pour le style.</p>
                        {button props=[
                            'x-on:click' => 'show = true'
                        ]} Show dynamic content {/button}
                        <div x-show="show" x-transition>
                            <p>Dynamic content</p>
                        </div>
                        {button props=[
                            'x-on:click' => 'count++'
                        ]} Incrementer <span x-text="count"></span>{/button}

                    {/slot}
                {/card}
            </section>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Button Component</h2>
                <div class="space-y-2">
                    {button} Bouton standard {/button}
                    {button class="bg-green-500 hover:bg-green-600"} Bouton vert {/button}
                    {button class="bg-red-500 hover:bg-red-600"} Bouton rouge {/button}
                    {button class="bg-purple-500 hover:bg-purple-600"} Bouton violet {/button}
                </div>
            </section>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Advanced Button Component</h2>
                <div class="space-y-4">
                    <p class="text-gray-700">Boutons avec icônes, libellés et propriétés Alpine.js:</p>
                    
                    {button 
                        icon="<svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z' clip-rule='evenodd'></path></svg>"
                        label="Mon bouton" 
                        props=[
                            'x-data' => '{ message: "I ❤️ Alpine" }',
                            '@click' => 'alert(message)',
                            'class' => 'p-2'
                        ]
                    }
                        Avec <span x-text="message"></span>
                    {/button}
                    
                    {button 
                        icon="<svg class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414 0l-3 3a1 1 0 101.414 1.414L9 11.414V15a1 1 0 102 0v-3.586l1.293 1.293a1 1 0 001.414-1.414l-3-3z' clip-rule='evenodd'></path></svg>"
                        label="Bouton avec icône" 
                        class="bg-green-500 hover:bg-green-600"
                    }
                    {/button}
                </div>
            </section>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Alert Component</h2>
                
                {alert type="info"}
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Info!</span> Ce message utilise le style Tailwind CSS.
                    </div>
                {/alert}
                
                {alert type="warning"}
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Attention!</span> Ce message d'avertissement utilise le style Tailwind CSS.
                    </div>
                {/alert}
                
                {alert type="success"}
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Succès!</span> L'opération a réussi avec le style Tailwind CSS.
                    </div>
                {/alert}
                
                {alert type="danger"}
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="font-medium">Erreur!</span> Une erreur est survenue avec le style Tailwind CSS.
                    </div>
                {/alert}
            </section>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Composants combinés</h2>
                {card}
                    {slot name="title"}<h3>Carte avec alerte</h3>{/slot}
                    {slot name="card_content"}
                        <p class="mb-4">Cette carte contient une alerte et un bouton.</p>
                        
                        {alert type="warning"}
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-medium">Attention!</span> N'oubliez pas de confirmer.
                            </div>
                        {/alert}
                        
                        <div class="mt-4">
                            {button class="bg-green-500 hover:bg-green-600"} Confirmer {/button}
                        </div>
                    {/slot}
                {/card}
            </section>
            
            <section class="mb-10">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Badge Component</h2>
                <div class="flex flex-wrap gap-2 items-center">
                    {badge type="primary"}Badge{/badge}
                    {badge type="secondary"}Secondary{/badge}
                    {badge type="success"}Success{/badge}
                    {badge type="danger"}Danger{/badge}
                    {badge type="warning"}Warning{/badge}
                    {badge type="info"}Info{/badge}
                </div>
                
                <div class="mt-6">
                    <p class="text-gray-700 mb-2">Badges with icons:</p>
                    <div class="flex flex-wrap gap-2 items-center">
                        {badge type="primary"}
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            Completed
                        {/badge}
                        
                        {badge type="warning"}
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                            </svg>
                            Pending
                        {/badge}
                    </div>
                </div>
            </section>
            
            <footer class="text-center text-gray-500 mt-10 pt-5 border-t border-gray-200">
                <p>SmartyComponents avec Tailwind CSS v4</p>
            </footer>
        </div>
    </body>
</html>