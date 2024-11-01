<div class="w-full md:w-3/5 2xl:w-fit p-2 flex-grow md:flex-grow-3 xl:flex-grow-0">
    <div class=" rounded-lg mb-4 flex">
        @include('livewire.pos.components.product.category-list')
    </div>

    <div class="bg-white p-4 rounded-full shadow-sm mb-4">
        @include('livewire.pos.components.product.search-button')
    </div>

    <div class="rounded-lg h-2/3">
        @include('livewire.pos.components.product.product-list')
    </div>
</div>

