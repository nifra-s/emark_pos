<div class="h-full overflow-y-auto no-scrollbar">
    <div class="flex flex-wrap">
        @foreach ($products as $product)
        <div class="relative m-2">
          <div class="w-44 flex-shrink-0 rounded-xl shadow-sm bg-white p-2">
            <div class="bg-gray-100 rounded-xl w-40 h-32 mx-auto flex items-center justify-center">
                <img src="https://png.pngtree.com/png-vector/20230918/ourmid/pngtree-beef-steak-with-potatoes-and-rice-in-isolated-white-background-png-image_10094547.png" alt="Beef Crowich" class="max-w-full max-h-full rounded-xl">
            </div>
            <div class="p-1">
                <h3 class="text-lg font-medium mb-2 text-left">{{substr($product->itmNm, 0, 15)}}</h3>
                <div class="flex justify-between items-center">
                    <span class="inline-block bg-orange-100 text-orange-600 rounded-full px-3 py-1 text-xs font-semibold">{{substr($product->catagory_nm,0,10)}}</span>
                    <span class="text-m font-semibold">Rs. {{$product->itm_sl_pr1}}</span>
                </div>
            </div>
          </div>
          <div class="absolute top-0 right-0 z-10 p-1">
            <div
            x-data="{
                open: false,
                toggle() {
                    if (this.open) {
                        return this.close()
                    }
      
                    this.$refs.button.focus()
      
                    this.open = true
                },
                close(focusAfter) {
                    if (! this.open) return
      
                    this.open = false
      
                    focusAfter && focusAfter.focus()
                }
            }"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-button']"
            class="relative"
        >
            <!-- Button -->
            <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-button')"
                type="button"
                class="text-gray-400 hover:text-gray-600 rounded-full pt-2 pl-1"
            >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
            </svg>
            </button>
      
            <!-- Panel -->
            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')"
                style="display: none;"
                class="absolute left-0 mt-2 w-40 rounded-md bg-white shadow-md"
            >
                <button x-on:click="isOpen = true; $dispatch('editProduct', {itemId:{{ $product->id }}})" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                    Edit
                </button>
                <a href="#" class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                    <span class="text-red-600">Disable</span>
                </a>
            </div>
        </div>          
          </div>
        </div>
        @endforeach
    </div>

</div>