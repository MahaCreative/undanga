<div id="slide3" class="flex w-full py-4   flex-col justify-center items-center bg-primary">
    <p data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out"
        class="text-white font-semibold text-lg md:text-2xl">Hari Yang Ditunggu</p>
    <p data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-easing="ease-in-out"
        class="text-white font-light text-md md:text-lg">Minggu, 13 November 2022</p>
    <div class="flex gap-x-6 md:gap-x-8 lg:gap-x-16 my-6">

        <div data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
            class=" flex items-center justify-center">
            <img loading="lazy" class="h-16 md:h-24 lg:h-32 relative" src="{{asset('gambar/hari.png')}}" alt="">
            <div class="absolute text-center leading-3 text-white text-[8pt] md:text-sm">
                <p id="hari" class=""></p>
                <p class="">
                    Hari
                </p>
            </div>
        </div>
        <div data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="linear"
            class=" flex items-center justify-center">
            <img loading="lazy" class="h-16 md:h-24 lg:h-32 relative" src="{{asset('gambar/hari.png')}}" alt="">
            <div class="absolute text-center leading-3 text-white text-[8pt] md:text-sm">
                <p id="jam" class=""></p>
                <p class="">
                    Jam
                </p>
            </div>
        </div>

        <div data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000" data-aos-easing="linear"
            class=" flex items-center justify-center">
            <img loading="lazy" class="h-16 md:h-24 lg:h-32 relative" src="{{asset('gambar/hari.png')}}" alt="">
            <div class="absolute text-center leading-3 text-white text-[8pt] md:text-sm">
                <p id="menit" class=""></p>
                <p class="">
                    Menit
                </p>
            </div>
        </div>

        <div data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000" data-aos-easing="linear"
            class=" flex items-center justify-center">
            <img loading="lazy" class="h-16 md:h-24 lg:h-32 relative" src="{{asset('gambar/hari.png')}}" alt="">
            <div class="absolute text-center leading-3 text-white text-[8pt] md:text-sm">
                <p id="seconds" class=""></p>
                <p class="">
                    Detik
                </p>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>
        var x = setInterval(function() {
        let now = new Date().getTime();
        console.log(now);
        let tanggal = new Date(@js($tanggal)).getTime();
        let distance = now - tanggal ;
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);
        const spanHari = document.getElementById('hari').innerHTML = Math.abs(days);
        const spanJam = document.getElementById('jam').innerHTML = Math.abs(hours);
        const spanMenit = document.getElementById('menit').innerHTML = Math.abs(minutes);
        const spanSeconts = document.getElementById('seconds').innerHTML = Math.abs(seconds);
        if(distance > 0){
        const spanHari = document.getElementById('hari').innerHTML = 0;
        const spanJam = document.getElementById('jam').innerHTML = 0;
        const spanMenit = document.getElementById('menit').innerHTML = 0;
        const spanSeconts = document.getElementById('seconds').innerHTML = 0;
        }
        }, 1000);
    </script>
    @endpush
</div>