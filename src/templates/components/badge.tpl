{* badge.tpl *}
{if $params.type == 'primary'}
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 {$params.class|default:''}">
    {$content nofilter}
</span>
{elseif $params.type == 'secondary'}
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 {$params.class|default:''}">
    {$content nofilter}
</span>
{elseif $params.type == 'success'}
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 {$params.class|default:''}">
    {$content nofilter}
</span>
{elseif $params.type == 'danger'}
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 {$params.class|default:''}">
    {$content nofilter}
</span>
{elseif $params.type == 'warning'}
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 {$params.class|default:''}">
    {$content nofilter}
</span>
{elseif $params.type == 'info'}
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-indigo-100 text-indigo-800 {$params.class|default:''}">
    {$content nofilter}
</span>
{else}
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 {$params.class|default:''}">
    {$content nofilter}
</span>
{/if} 