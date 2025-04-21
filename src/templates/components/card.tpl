{** card.tpl **}
<div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden" {if isset($props)}{$props nofilter}{/if}>
    <div class="p-5">
        {if isset($title)}
            <div class="mb-4 text-xl font-bold tracking-tight text-gray-900">
                {$title nofilter}
            </div>
        {/if}
        {if isset($card_content)}
            <div class="text-gray-700">
                {$card_content nofilter}
            </div>
        {/if}
    </div>
</div>