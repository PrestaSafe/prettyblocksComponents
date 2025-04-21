{*
* Example template that uses SmartyComponents
*}

<div class="example-components-container my-4">
  {card}
    {slot name="title"}
      <h3 class="font-bold text-lg">Example Card Component</h3>
    {/slot}
    
    {slot name="card_content"}
      <p class="mb-4">{$message}</p>
      
      {alert type="info"}
        <div class="flex items-center">
          <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9a1 1 0 00-1-1z" clip-rule="evenodd"></path>
          </svg>
          This is an example alert using SmartyComponents
        </div>
      {/alert}
      
      <div class="mt-4">
        {button class="bg-blue-500 hover:bg-blue-600"}Click me{/button}
      </div>
    {/slot}
  {/card}
</div> 