<div class="w-full md:w-2/5 xl:w-[920px] bg-white shadow-sm border-2  md:flex-grow-2 relative">
    <div class="w-full flex flex-none h-1/2 lg:h-[55%] 2xl:h-[68%] 4xl:h-[85%] shadow-[rgba(0,0,0,0.05)_5px_5px_50px_0px]">
        <div class="w-1/2 p-1 rounded bg-white">
            <div class="rounded-lg h-full overflow-y-auto no-scrollbar relative max-w-sm mx-auto">
                @include('livewire.pos.include.billing.product-list')
            </div>
        </div>
        
        <div class="w-1/2 bg-black">
            <div class="h-2/5 lg:h-[200px] md:h-[150px] p-1">
                @include('livewire.pos.include.billing.price-overview')
            </div>
            <div class="h-full pb-[200px]">
                @include('livewire.pos.include.billing.payment-list')
            </div>  
        </div>
    </div>
    <div class="p-2 bg-white w-full absolute inset-x-0 bottom-0 h-fit flex justify-center">
        <div>
            <div class="flex justify-between ">
                <div class="bg-gray-100 h-fit m-1 p-1 rounded shadow-sm">
                    <input type="text"  placeholder="0" class=" text-right bg-transparent text-gray-600 font-black text-2xl w-full rounded border-none focus:ring-0 focus:border-none block">
                </div>
                <div class="p-2 bg-slate-100 rounded-md">
                    @include('livewire.pos.include.billing.payment-button')
                </div>
            </div> 
            <div class="flex justify-center">
                @include('livewire.pos.include.billing.numpad')
            </div>
            </div>
        </div>
</div>