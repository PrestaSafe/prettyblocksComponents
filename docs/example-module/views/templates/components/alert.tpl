{* Alert component *}
{if isset($params.type)}
    {assign var="alertClass" value=""}
    {if $params.type == 'info'}
        {assign var="alertClass" value="bg-blue-50 text-blue-800 dark:bg-blue-900 dark:text-blue-300"}
    {elseif $params.type == 'success'}
        {assign var="alertClass" value="bg-green-50 text-green-800 dark:bg-green-900 dark:text-green-300"}
    {elseif $params.type == 'warning'}
        {assign var="alertClass" value="bg-yellow-50 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300"}
    {elseif $params.type == 'error'}
        {assign var="alertClass" value="bg-red-50 text-red-800 dark:bg-red-900 dark:text-red-300"}
    {/if}
{/if}

<div class="p-4 mb-4 rounded-lg {$alertClass} {$params.class|default:''}">
    {$content nofilter}
</div> 