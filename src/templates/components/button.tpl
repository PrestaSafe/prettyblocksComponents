{* button.tpl *}
<button
    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 {$params.class|default:''}"
    {if isset($props) && is_array($props)}
        {foreach $props as $attr => $value}
            {$attr}="{$value}"
        {/foreach}
    {/if}
>
    {if isset($params.icon)}
        <span class="inline-block mr-2 align-text-bottom">{$params.icon}</span>
    {/if}
    
    {if isset($params.label)}
        <span>{$params.label}</span>
    {/if}
    
    {$content nofilter}
</button> 