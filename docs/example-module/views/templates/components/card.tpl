{* Card component *}
<div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden border border-gray-200 dark:border-gray-700 {$params.class|default:''}">
    {if isset($title)}
    <div class="px-4 py-3 border-b border-gray-200 dark:border-gray-700">
        {$title nofilter}
    </div>
    {/if}
    <div class="p-4">
        {$card_content nofilter}
    </div>
</div> 