<div class="h-full overflow-y-auto no-scrollbar">
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