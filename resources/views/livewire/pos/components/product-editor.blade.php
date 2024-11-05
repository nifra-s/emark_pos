<div>
    @if($product) 
        <div class="m-2 flex justify-center">
            <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80" alt="Beef Crowich" class="w-3/5 h-32 object-cover rounded-lg">
        </div>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" wire:model="name" value="{{$product->itmNm}}" required>
            @error('name') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" wire:model="price" step="0.01" required>
            @error('price') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="imageUrl">Image URL:</label>
            <input type="url" id="imageUrl" wire:model="imageUrl">
            @error('imageUrl') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
    @endif
</div>