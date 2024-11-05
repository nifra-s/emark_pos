<div class="h-full overflow-y-auto no-scrollbar max-w-sm mx-auto">
    <div class="grid grid-cols-1 m-1 pb-20">
        @for ($i = 0; $i < 50; $i++)
            <div class="flex justify-between bg-gray-100 rounded-md m-1 mx-3 px-3">
                <div class="text-center">
                    <div class=" text-m sm:text-sm font-bold text-gray-700 ">Cash Payment</div>
                    <div class=" text-sm sm:text-xs font-bold text-gray-500 ">10 Apr 2024</div>
                </div>
                <div>
                    <div class="flex relative m-2  text-blue-900">
                        <div class="text-xl sm:text-sm font-black p-2 ml-2" >6,544.00</div>
                        <div class="absolute text-xs font-bold">Rs</div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>