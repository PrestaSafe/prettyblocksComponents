{* alert.tpl *}
{if $params.type == 'info'}
<div class="p-4 mb-4 text-blue-800 border border-blue-300 rounded-lg bg-blue-50" role="alert"
    {if isset($props) && is_array($props)}
        {foreach $props as $attr => $value}
            {$attr}="{$value}"
        {/foreach}
    {/if}
>
    {$content nofilter}
</div>
{elseif $params.type == 'warning'}
<div class="p-4 mb-4 text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50" role="alert"
    {if isset($props) && is_array($props)}
        {foreach $props as $attr => $value}
            {$attr}="{$value}"
        {/foreach}
    {/if}
>
    {$content nofilter}
</div>
{elseif $params.type == 'success'}
<div class="p-4 mb-4 text-green-800 border border-green-300 rounded-lg bg-green-50" role="alert"
    {if isset($props) && is_array($props)}
        {foreach $props as $attr => $value}
            {$attr}="{$value}"
        {/foreach}
    {/if}
>
    {$content nofilter}
</div>
{elseif $params.type == 'danger' || $params.type == 'error'}
<div class="p-4 mb-4 text-red-800 border border-red-300 rounded-lg bg-red-50" role="alert"
    {if isset($props) && is_array($props)}
        {foreach $props as $attr => $value}
            {$attr}="{$value}"
        {/foreach}
    {/if}
>
    {$content nofilter}
</div>
{else}
<div class="p-4 mb-4 text-gray-800 border border-gray-300 rounded-lg bg-gray-50" role="alert"
    {if isset($props) && is_array($props)}
        {foreach $props as $attr => $value}
            {$attr}="{$value}"
        {/foreach}
    {/if}
>
    {$content nofilter}
</div>
{/if} 