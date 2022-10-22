<section id="slide10" class="slide2 flex w-full justify-center items-center flex-col relative ucapan mt-32 overflow-hidden">
    <img loading="lazy" class="w-[200px] md:w-[300px] lg:w-[400px] absolute right-0 top-0 rotate-180 " src="{{asset('gambar/gambar1.png')}}" alt="">
    <div wire:ignore
        data-aos="fade-left"
        data-aos-delay="300"
        data-aos-duration="1000"
        data-aos-easing="linear"
    class="absolute top-20 z-10">
        <p class="text-primary text-3xl font-mono font-bold">Ucapan Dan Doa</p>
    </div>
    <div wire:ignore class="absolute top-32 w-[80%] md:w-1/2 z-10">
        <form action="" wire:submit.prevent="submitHandler">
            @csrf
            <div
        data-aos="fade-left"
        data-aos-delay="300"
        data-aos-duration="1000"
        data-aos-easing="linear"
        class="my-2 flex flex-col items-start">
            <label class="font-mono font-extralight text-primary" for="">Nama:</label>
            <input wire:model="nama" type="text" name="nama" class="text-primary outline-none rounded-md border shadow-sm w-full py-1 px-3 shadow-primary hover:outline-dashed hover:outline-primary focus:outline-dashed focus:outline-primary focus:ring-primary ">
        </div>
        <div
        data-aos="fade-left"
        data-aos-delay="400"
        data-aos-duration="1000"
        data-aos-easing="linear"
        class="my-2 flex flex-col items-start">
            <label class="font-mono font-extralight text-primary" for="">Pesan:</label>
            <textarea wire:model="pesan" name="nominal" class="text-primary outline-none rounded-md border shadow-sm w-full py-1 px-3 shadow-primary hover:outline-dashed hover:outline-primary focus:outline-dashed focus:outline-primary focus:ring-primary "></textarea>
        </div>
        <div
        data-aos="fade-left"
        data-aos-delay="500"
        data-aos-duration="1000"
        data-aos-easing="linear"
        class="group">
            <button class="py-1 px-3 bg-primary rounded-lg text-white shadow-md shadow-gray-400 group-hover:scale-105 group-hover:outline-dashed group-hover:outline-primary group-hover:outline-offset-2 group-hover:mt-2 duration-300 ease-in transition">Submit</button>
        </div>
        </form>
    </div>
    
    <div wire:ignore class="absolute z-10 top-80  w-[80%] h-[500px] overflow-y-auto overflow-x-hidden md:w-1/2 mt-5">
        @foreach ($pesanDoa as $item)
            <div
                data-aos="fade-left"
                data-aos-delay="700"
                data-aos-duration="1000"
                data-aos-easing="linear"
            class="mt-2 border border-primary border-dashed bg-primary bg-opacity-20 backdrop-blur-md py-2 px-4 rounded-md">
                <h3 class="text-xl text-primary font-bold font-mono border-b-2 inline border-dashed border-spacing-8 border-primary capitalize">{{$item->nama}}</h3>
                <p class="text-sm font-mono font-light italic mt-3">{{$item->pesan}}</p>
            </div>  
        @endforeach
    </div>
    <img loading="lazy" class="w-[200px] md:w-[300px] lg:w-[400px] absolute left-0 bottom-0" src="{{asset('gambar/gambar1.png')}}" alt="">

</section>