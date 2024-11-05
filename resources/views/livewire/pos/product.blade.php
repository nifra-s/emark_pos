<div class="w-full md:w-3/5 2xl:w-fit p-2 flex-grow md:flex-grow-3 xl:flex-grow-0" x-data="{ isOpen: false }">
    <div class=" rounded-lg mb-4 flex">
        @include('livewire.pos.include.product.category-list')
    </div>

    <div class="bg-white p-4 rounded-full shadow-sm mb-4">
        @include('livewire.pos.include.product.search-button')
    </div>

    @include('livewire.pos.include.product.edit-product')

    <div class="rounded-lg h-2/3">
        @include('livewire.pos.include.product.product-list')
    </div>
</div>

