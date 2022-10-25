<section id="slide6" class=" flex bg-primary py-12  flex-col justify-center items-center gap-y-3 overflow-x-hidden">
    <img loading="lazy" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" data-aos-easing="linear"
        class="h-20  lg:h-28 lg:w-[320px]" src="{{asset('gambar/line2.png')}}" alt="">
    <h3 data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" data-aos-easing="linear"
        class="text-2xl md:text-4xl lg:text-5xl text-white font-mono">Hari Pernikahan</h3>
    <img loading="lazy" data-aos="zoom-in" data-aos-delay="900" data-aos-duration="1000" data-aos-easing="linear"
        class="w-96 my-1" src="{{asset('gambar/line4.png')}}" alt="">
    <div data-aos="fade-right" data-aos-delay="900" data-aos-duration="1000" data-aos-easing="linear"
        class="text-center leading-6">
        <p class="text-white text-xl md:text-3xl lg:text-4xl font-bold font-mono">Kamis</p>
        <p class="text-white text-lg md:text-2xl lg:text-3xl font-bold font-mono">22 Oktober 2022</p>
    </div>
    <img loading="lazy" data-aos="zoom-in" data-aos-delay="900" data-aos-duration="1000" data-aos-easing="linear"
        class="w-96 my-1" src="{{asset('gambar/line4-rotate.png')}}" alt="">
    <div class="grid grid-cols-12 gap-x-4 gap-y-6 md:gap-y-0 lg:gap-x-14">
        <div loading="lazy" data-aos="zoom-in" data-aos-delay="1500" data-aos-duration="1000"
            data-aos-easing="ease-out-cubic"
            class="col-span-12 md:col-span-6 text-center flex flex-col items-center justify-center gap-y-3">
            <img loading="lazy" class="w-24" src="{{asset('gambar/rigns.png')}}" alt="">
            <h3 class="text-white font-bold text-2xl font-mono">Akat Nikah</h3>
            <p class="w-64 text-white">Rumah Mempelai Wanita Jl. Abdul Syakur no 35 Poros Malunda</p>
            <p class="text-white">10.45 - 11.45</p>
        </div>
        <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000" data-aos-easing="ease-out-cubic"
            class="col-span-12 md:col-span-6 text-center flex flex-col items-center justify-center gap-y-3">
            <img loading="lazy" class="w-24" src="{{asset('gambar/cake.png')}}" alt="">
            <h3 class="text-white font-bold text-2xl font-mono">Resepsi</h3>
            <p class="w-64 text-white">Rumah Mempelai Wanita Jl. Abdul Syakur no 35 Poros Malunda</p>
            <p class="text-white">10.45 - 11.45</p>
        </div>
    </div>
    <div data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000" data-aos-easing="linear"
        class="mt-6 flex gap-x-8">
        <button
            class="bg-white py-1.5 px-3  outline-dashed outline-white outline-offset-4 rounded-lg shadow-md shadow-white hover:scale-110 hover:bg-opacity-75 hover:backdrop-blur-md duration-300 ease-in-out transition">Lihat
            Peta</button>
        <button wire:click="saveDate"
            class="bg-white py-1.5 px-3  outline-dashed outline-white outline-offset-4 rounded-lg shadow-md shadow-white hover:scale-110 hover:bg-opacity-75 hover:backdrop-blur-md duration-300 ease-in-out transition">Save
            Tanggal</button>
    </div>
    <img loading="lazy" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000" data-aos-easing="linear"
        class="w-[80%] md:1/2 lg:w-1/3 rotate-180 my-6 " src="{{asset('gambar/line1.png')}}" alt="">
    <iframe
        src="https://calendar.google.com/calendar/embed?src=aff6c951e580a81df70202a0665ca5f56db313adf0f58b2037108417b78e6793%40group.calendar.google.com&ctz=Asia%2FMakassar"
        style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</section>