<div>
    <!-- Popup Overlay and Modal Component -->
    <div
    x-show="isOpen"
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @click.away="isOpen = false; document.body.classList.remove('overflow-hidden')"
    @keydown.escape.window="isOpen = false; document.body.classList.remove('overflow-hidden')">
    
    <!-- Popup Content -->
    <div
      x-show="isOpen"
      class="w-full max-w-lg p-6 bg-white rounded-lg shadow-lg transform transition-all"
      x-transition:enter="transition ease-out duration-300"
      x-transition:enter-start="scale-90 opacity-0"
      x-transition:enter-end="scale-100 opacity-100"
      x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="scale-100 opacity-100"
      x-transition:leave-end="scale-90 opacity-0">

      @livewire('pos.components.product-editor')
      <button x-on:click="isOpen = false; document.body.classList.remove('overflow-hidden')" class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-600">
        Close
      </button>
    </div>
    </div>
</div>
