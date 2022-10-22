<section  id="slide2" class="min-h-screen py-7 bg-secondary overflow-x-auto">     

    <div class="w-full">
        <img class="h-44 md:h-64 lg:h-96 animate__animated animate__pulse animate__infinite animate__slow absolute bottom-0 left-0" src="{{asset('gambar/TemplateTI/Untitled-3.png')}}" alt="">
        <img class="h-44 md:h-64 lg:h-96 absolute top-0 right-0 animate__animated animate__pulse animate__infinite animate__slow" src="{{asset('gambar/TemplateTI/Untitled-3-rotate.png')}}" alt="">
        {{-- <img class="h-72 md:h-96 lg:h-screen absolute -top-5 -right-5 md:top-0 md:-right-5 lg:-top-20 lg:-right-20 animate__animated animate__slideInDown animate__slow" src="{{asset('gambar/Untitled-5.png')}}" alt=""> --}}
        {{-- <img class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute inset-y-[50%] inset-x-[14%] rotate-[0deg] w-[1%]" src="{{asset('gambar/TemplateTI/plush red.png')}}" alt=""> --}}
        {{-- <img class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-2s absolute inset-y-[50%] inset-x-[80%] rotate-[23deg] w-[3%]" src="{{asset('gambar/TemplateTI/plush red.png')}}" alt=""> --}}
        {{-- <img class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-3s absolute inset-y-[21%] inset-x-[23%] rotate-[189deg] w-[2%]" src="{{asset('gambar/TemplateTI/plush red.png')}}" alt=""> --}}
        {{-- <img class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-2s absolute inset-y-[34%] inset-x-[30%] rotate-[233deg] w-[1%]" src="{{asset('gambar/TemplateTI/plush white.png')}}" alt=""> --}}
        {{-- <img class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute inset-y-[78%] inset-x-[89%] rotate-[80deg] w-[1%]" src="{{asset('gambar/TemplateTI/plush white.png')}}" alt=""> --}}
        {{-- <img class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-3s absolute inset-y-[93%] inset-x-[230%]" src="{{asset('gambar/TemplateTI/plush white.png')}}" alt=""> --}}
        
        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-slate-400  rounded-full  h-1 w-[6%] top-[13%] left-[5%]"></div> --}}
        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-red-600  rounded-full  h-1 w-[4%] top-[15%] left-[8%]"></div> --}}

        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-slate-400  rounded-full  h-1 w-[6%] bottom-[10%] right-[5%]"></div> --}}
        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-red-600  rounded-full  h-1 w-[4%] bottom-[8%] right-[8%]"></div> --}}
        
        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-white  rounded-full  h-1 w-[6%] top-[43%] left-[75%]"></div> --}}
        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-red-600  rounded-full  h-1 w-[7%] top-[45%] left-[78%]"></div> --}}
        
        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-slate-400  rounded-full  h-1 w-[6%] bottom-[8%] right-[50%]"></div> --}}
        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-red-600  rounded-full  h-1 w-[4%] bottom-[11%] right-[53%]"></div> --}}

        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-white  rounded-full  h-1 w-[6%] top-[23%] left-[50%]"></div> --}}
        {{-- <div class="animate__animated animate__pulse animate__infinite animate__slow animate__delay-1s absolute bg-red-600  rounded-full  h-1 w-[7%] top-[25%] left-[53%]"></div> --}}

    </div>
    <div class="flex w-full justify-center items-center flex-col relative">
    <div wire:ignore class="relative top-5 z-10">
        <p class="text-white text-3xl font-cairo font-semibold">Ucapan Dan Doa</p>
    </div>
    <div wire:ignore class="relative top-16 w-[80%] md:w-1/2 z-10">
        <form action="" wire:submit.prevent="submitHandler">
            @csrf
            <div
        data-aos="fade-left"
        data-aos-delay="300"
        data-aos-duration="1000"
        data-aos-easing="linear"
        class="my-2 flex flex-col items-start">
            <label class="font-mono font-extralight text-red-600" for="">Nama:</label>
            <input wire:model="nama" type="text" name="nama" class="text-red-600 outline-none rounded-md border shadow-sm w-full py-1 px-3 shadow-red-600 hover:outline-dashed hover:outline-red-600 focus:outline-dashed focus:outline-red-600 focus:ring-red-600 ">
        </div>
        <div
        data-aos="fade-left"
        data-aos-delay="400"
        data-aos-duration="1000"
        data-aos-easing="linear"
        class="my-2 flex flex-col items-start">
            <label class="font-mono font-extralight text-red-600" for="">Pesan:</label>
            <textarea wire:model="pesan" name="nominal" class="text-red-600 outline-none rounded-md border shadow-sm w-full py-1 px-3 shadow-red-600 hover:outline-dashed hover:outline-red-600 focus:outline-dashed focus:outline-red-600 focus:ring-red-600 "></textarea>
        </div>
        <div
        data-aos="fade-left"
        data-aos-delay="500"
        data-aos-duration="1000"
        data-aos-easing="linear"
        class="group">
            <button class="py-1 px-3 bg-red-600 rounded-lg text-white shadow-md shadow-red-50/50 group-hover:scale-105 group-hover:outline-dashed group-hover:outline-red-600 group-hover:outline-offset-2 group-hover:mt-2 duration-300 ease-in transition">Submit</button>
        </div>
        </form>
    </div>
    
    <div wire:ignore class="relative z-10  w-[80%] h-[300px] overflow-y-auto md:w-1/2 mt-20">
        @foreach ($pesanDoa as $item)
            <div class="mt-2 border border-white border-dashed bg-white bg-opacity-20 backdrop-blur-md py-2 px-4 rounded-md">
                <h3 class="text-xl text-white font-bold font-cairo border-b-2 inline border-dashed border-spacing-8 border-red-600 capitalize">{{$item->nama}}</h3>
                <p class="text-sm font-cairo font-light italic mt-3 text-white">{{$item->pesan}}</p>
            </div>  
        @endforeach
    </div>
    </div>
    <div class="absolute w-full h-full bg-black opacity-25  top-0 left-0 text-white"></div>
</section>