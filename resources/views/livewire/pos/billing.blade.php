<div class="w-2/5 flex relative bg-white shadow-sm border-2 flex-col">
    <div class="w-full flex flex-none h-3/5 shadow-[rgba(0,0,0,0.05)_5px_5px_50px_0px]">
        <div class="w-1/2 p-1 rounded bg-white">
            <div class="rounded-lg h-full overflow-y-auto no-scrollbar relative max-w-sm mx-auto">
                <div class="grid grid-cols-1 m-1">
                    @for ($i = 0; $i < 5; $i++)
                        <div class=" xl:flex xl:justify-between p-2 m-1 bg-gray-100 rounded">
                            <div class="flex flex-col justify-center">
                                <img src="https://images.unsplash.com/photo-1501196354995-cbb51c65aaea?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=80" alt="Beef Crowich" class="2xl:size-20 xl:size-14 object-cover rounded">   
                            </div>
                            <div class="p-1">
                                <div class="font-bold text-blue-950">Avagado</div>
                                <div class="text-sm text-gray-500">5x 100</div>
                                <div class=" text-gray-500">description</div>
                            </div>
                            <div class="flex relative m-2">
                                <div class="font-black text-blue-950 p-2 ml-2" >544.00</div>
                                <div class="absolute text-xs">Rs</div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            {{-- <div>
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
            </div> --}}
        </div>
        
        <div class="w-1/2 bg-black">
            <div class="h-2/5 p-1">
                <div class="grid grid-cols-1 bg-slate-50 rounded-md justify-items-center">
                    <div class="m-1 text-gray-600 text-center font-bold">Total Amount</div>
                    <div class="flex relative">
                        <div class="text-5xl font-black p-2 ml-4" >131,544.00</div>
                        <div class="absolute text-m font-bold">Rs</div>
                    </div>
                </div>
                <div class="grid grid-cols-2 divide-x-2 ">
                    <div class="m-1 grid grid-rows-1 justify-items-center">
                        <div class="m-2 text-gray-300 text-center font-bold">Paid Amount</div>
                        <div class="flex text-white relative m-2">
                            <div class="text-2xl font-black p-2 ml-3" >1,544.00</div>
                            <div class="absolute text-sm font-bold">Rs</div>
                        </div>
                    </div>
                    
                    <div class="m-1 grid grid-rows-1 justify-items-center">
                        <div class="m-2 text-gray-300 text-center font-bold">Balance</div>
                        <div class="flex relative m-2 text-red-600">
                            <div class="text-2xl font-black p-2 ml-3" >6,544.00</div>
                            <div class="absolute text-sm font-bold">Rs</div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class=" h-3/5">
                <div class="h-full overflow-y-auto no-scrollbar relative max-w-sm mx-auto">
                    <div class="grid grid-cols-1 m-1">
                        @for ($i = 0; $i < 5; $i++)
                            <div class="flex justify-between bg-gray-100 rounded-md m-2 mx-5 px-5">
                                <div class="text-center">
                                    <div class=" text-m font-bold text-gray-700 ">Cash Payment</div>
                                    <div class=" text-sm font-bold text-gray-500 ">10 Apr 2024</div>
                                </div>
                                <div>
                                    <div class="flex relative m-2 text-blue-900">
                                        <div class="text-xl font-black p-2 ml-2" >6,544.00</div>
                                        <div class="absolute text-xs font-bold">Rs</div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>  
        </div>
    </div>

    <div class="p-2 w-full shadow-[rgba(0,0,0,0.05)_5px_-5px_50px_0px]">
        <div class="flex justify-between">
            <div class="bg-gray-100 h-fit m-1 p-1 rounded shadow-sm">
                <input type="text"  placeholder="0" class=" text-right bg-transparent text-gray-600 font-black text-2xl w-full rounded border-none focus:ring-0 focus:border-none block">
            </div>
            <div class="flex p-2 bg-slate-100 rounded-md  justify-items-center">
                <button class="bg-white grid grid-rows-2 justify-items-center rounded-md w-20  p-1">
                    <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                    <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
                    </svg>
                    <div class="text-sm font-bold text-blue-500 ">Card</div>
                </button>
                <button class=" grid grid-rows-2 justify-items-center rounded-md w-20  p-1">
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                        <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z" clip-rule="evenodd" />
                        <path d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                    </svg>
                    <div class="text-sm font-bold text-gray-400 ">Cash</div>
                </button>
                {{-- <button class=" grid grid-rows-2 justify-items-center rounded-md w-20  p-1">
                    <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                        <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z" clip-rule="evenodd" />
                        <path d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                    </svg>
                    <div class="text-sm font-bold text-gray-400 ">Pickme</div>
                </button> --}}
                <button class=" grid grid-rows-2 justify-items-center rounded-md w-20  p-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" stroke="currentColor" fill="currentColor" viewBox="0 0 448 512">
                        <path d="m414.1 32h-380.2c-18.7 0-33.9 15.2-33.9 33.9v380.1c0 18.8 15.2 34 33.9 34h380.1c18.7 0 33.9-15.2 33.9-33.9v-380.2c.1-18.7-15.1-33.9-33.8-33.9zm-176.5 359.1c-74.6 7.5-141.2-46.9-148.7-121.5h94.4v20.4c0 3.7 3 6.8 6.8 6.8h67.9c3.7 0 6.8-3 6.8-6.8v-67.9c0-3.7-3-6.8-6.8-6.8h-67.9c-3.7 0-6.8 3-6.8 6.8v20.4h-94.4c7-69.4 65.4-122.2 135.1-122.2s128.1 52.8 135.1 122.2c7.5 74.5-46.9 141.1-121.5 148.6z"/>
                    </svg>
                    <div class="text-sm font-bold text-gray-400 ">Uber</div>
                </button>
            </div>
        </div> 
        <div class="flex justify-center">
            <div style="width: 34rem;" class="grid h-full font-bold grid-cols-8  m-1 gap-0.5">
                <button class="bg-gray-200 p-3 col-span-2 rounded">Table</button>
                <button class="bg-blue-200 p-3 rounded">500</button>
                <button class="bg-red-200  p-3 text-3xl rounded">1</button>
                <button class="bg-yellow-200  p-3 text-3xl rounded">2</button>
                <button class="bg-orange-200  p-3 text-3xl rounded">3</button>
                <button class="bg-red-200 p-3 rounded">Clear</button>
                <button class="bg-red-200 p-3 rounded">Reset</button>
                <button class="bg-gray-200 col-span-2 p-3 rounded">Orders</button>
                <button class="bg-purple-200 p-3 rounded">1000</button>
                <button class="bg-pink-200  p-3 text-3xl rounded">4</button>
                <button class="bg-green-200  p-3 text-3xl rounded">5</button>
                <button class="bg-violet-200  p-3 text-3xl rounded">6</button>
                <button class="bg-orange-200 text-black col-span-2  flex justify-center p-3 text-3xl rounded">    
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75 14.25 12m0 0 2.25 2.25M14.25 12l2.25-2.25M14.25 12 12 14.25m-2.58 4.92-6.374-6.375a1.125 1.125 0 0 1 0-1.59L9.42 4.83c.21-.211.497-.33.795-.33H19.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25h-9.284c-.298 0-.585-.119-.795-.33Z" />
                    </svg>
                </button>
                
                <button class="bg-gray-200 p-3 col-span-2 rounded">Bill</button>
                <button class="bg-blue-200 p-3 rounded">5000</button>
                <button class="bg-yellow-200 p-3 text-3xl  rounded">7</button>
                <button class="bg-red-200 p-3 text-3xl  rounded">8</button>
                <button class="bg-orange-200 p-3 text-3xl  rounded">9</button>
                <button class="bg-green-200 col-span-2 row-span-2 p-3 rounded">
                    <div class="flex justify-center">
                        <svg class="w-10 h-10" viewBox="0 0 1024 1024" version="1.1" fill="currentColor" stroke-width="2" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M864 192c-19.2 0-32 12.8-32 32v224c0 89.6-70.4 160-160 160H236.8l105.6-105.6c12.8-12.8 12.8-32 0-44.8s-32-12.8-44.8 0l-160 160c-3.2 3.2-6.4 6.4-6.4 9.6-3.2 6.4-3.2 16 0 25.6 3.2 3.2 3.2 6.4 6.4 9.6l160 160c6.4 6.4 12.8 9.6 22.4 9.6s16-3.2 22.4-9.6c12.8-12.8 12.8-32 0-44.8L236.8 672H672c124.8 0 224-99.2 224-224V224c0-19.2-12.8-32-32-32z"  />
                        </svg>
                    </div>
                </button>
                <button class="bg-gray-200 p-3 col-span-2 rounded">Return</button>
                <button class="bg-red-200 p-3 rounded">Total</button>
                <button class="bg-blue-200  p-3 text-3xl rounded">0</button>
                <button class="bg-orange-200  p-3 text-3xl rounded">00</button>
                <button class="bg-pink-200  p-2 rounded">
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-2">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14ZM" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>