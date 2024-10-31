<div class="w-full p-2">
    <div class=" rounded-lg mb-4 flex">
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
        
    </div>

    <div class="bg-white p-4 rounded-full shadow-sm mb-4">
        <div class="relative">
            <input wire:model.live="search" type="text" placeholder="Search something sweet on your mind..." class="pl-5 text-base  pr-12 w-full rounded-full border-none focus:ring-0 focus:border-none block">
            <div class="absolute inset-y-0 right-0 flex items-center bg-gray-100 rounded-full p-2">
                <span class="text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                    </svg>                          
                </span>
            </div>
        </div>
    </div>

    <div class="rounded-lg h-2/3 overflow-y-auto no-scrollbar">
        <div class="flex flex-wrap">
            @foreach ($products as $product)
                <div class="w-44 flex-shrink-0 rounded-xl shadow-sm bg-white mx-2 my-2 p-2">
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
            @endforeach
        </div>
    </div>
</div>
