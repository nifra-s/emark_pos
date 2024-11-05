<div class="rounded-lg h-full overflow-y-auto no-scrollbar relative max-w-sm mx-auto">
    <div class="grid grid-cols-1 m-1 pb-20">
        @for ($i = 0; $i < 200; $i++)
            <div class=" xl:flex xl:justify-between p-2 m-1 bg-gray-100 rounded">
                <div class="flex flex-col justify-center">
                    <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80" alt="Beef Crowich" class="2xl:size-20 xl:size-14 object-cover rounded">   
                </div>
                <div class="p-1">
                    <div class="font-bold sm:text-sm text-blue-950">Avagado</div>
                    <div class="text-sm text-gray-500">5x 100</div>
                    <div class="sm:text-sm text-gray-500">description</div>
                </div>
                <div class="flex relative m-2">
                    <div class="font-black sm:text-sm text-blue-950 p-2 ml-2" >544.00</div>
                    <div class="absolute text-xs">Rs</div>
                </div>
            </div>
        @endfor
        <div class=" xl:flex xl:justify-between p-2 m-1 bg-blue-500 rounded">
                <div class="flex flex-col justify-center">
                    <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80" alt="Beef Crowich" class="2xl:size-20 xl:size-14 object-cover rounded">   
                </div>
                <div class="p-1">
                    <div class="font-bold sm:text-sm text-blue-950">Avagado</div>
                    <div class="text-sm text-gray-500">5x 100</div>
                    <div class="sm:text-sm text-gray-500">description</div>
                </div>
                <div class="flex relative m-2">
                    <div class="font-black sm:text-sm text-blue-950 p-2 ml-2" >544.00</div>
                    <div class="absolute text-xs">Rs</div>
                </div>
            </div>
    </div>       
</div>