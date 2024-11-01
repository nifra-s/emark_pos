<button wire:click="catFilter('')" class="w-36 h-36 m-2 p-4 bg-white shadow-sm rounded-xl relative flex-shrink-0">
    <div class="absolute top-2 left-2 bg-gray-100 rounded-full p-3">
        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 12h14M12 5l7 7-7 7" />
        </svg>
    </div>
    <div class="absolute bottom-2 left-2">
        <h2 class="text-lg font-semibold text-gray-800">All</h2>
        <p class="text-gray-500">.</p>
    </div>
</button>
<div class="flex overflow-x-auto no-scrollbar">
    
   @foreach ($categories as $category)
        <button wire:key="{{$category->id}}" wire:click="catFilter({{$category->id}})" class="w-36 h-36 m-2 shadow-sm p-4 bg-white rounded-xl relative flex-shrink-0">
            <div class="absolute top-2 left-2 bg-gray-100 rounded-full p-3">
                <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 12h14M12 5l7 7-7 7" />
                </svg>
            </div>
            <div class="absolute bottom-2 left-2">
                <h2 class="text-lg font-semibold text-gray-800">{{substr($category->catagory_nm, 0, 15)}}</h2>
                <p class="text-gray-500">{{$category['cat_count']}} Items</p>
            </div>
        </button>
   @endforeach
</div>