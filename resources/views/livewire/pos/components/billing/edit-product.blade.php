<div>
    <div class="grid p-2 shadow-sm grid-cols-3">
        <button class="text-gray-500 w-fit h-fit p-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6 text-blue-900">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>                                                   
        </button>
        <div class=" font-black text-blue-900 col-span-2">Product Details</div>
    </div>
    <div class="m-2 flex justify-center">
        <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80" alt="Beef Crowich" class="w-3/5 h-32 object-cover rounded-lg">
    </div>
    <div class="flex p-1 justify-between items-center">
        <span class="inline-block bg-orange-100 text-orange-600 rounded-full px-3 py-1 text-xs font-semibold">{{substr("Food",0,10)}}</span>
    </div>
    <div class="p-1 text-gray-700 font-black">Buttermelt Croissant</div>
    <div class="p-1"><span class="text-m text-blue-900 font-semibold">Rs. 5000</span></div>
    <div class="bg-gray-100 m-2 rounded">
        <textarea maxlength="50" placeholder="description" class="h-18 resize-none bg-transparent text-gray-600 w-full border-none focus:ring-0 focus:border-none block" ></textarea>
    </div>
    <div class="flex">
        <div class="bg-gray-100 m-2 rounded">
            <input maxlength="50" placeholder="discount %" class="h-18 resize-none bg-transparent text-gray-600 w-full border-none focus:ring-0 focus:border-none block" >
        </div>
        <div class="m-2 bg-gray-200 flex rounded-full">
            <button class="text-white bg-blue-600 w-fit m-2 h-fit p-1 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                </svg>                                                   
            </button>
            <div>
                <input maxlength="50" value="10" class=" bg-transparent text-center text-gray-600 w-full border-none focus:ring-0 focus:border-none block">
            </div>
            <button class="text-white bg-blue-600 w-fit m-2 h-fit p-1 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>                                                    
            </button>
        </div>
    </div>
    
    
    <div class="m-2 flex justify-center">
        <button class="text-center w-3/5 rounded-full text-white bg-blue-600 p-2">
            Save
        </button>
    </div>
</div>