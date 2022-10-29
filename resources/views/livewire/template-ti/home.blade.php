<div class="min-w-full">
    @section('style')
    <link rel="stylesheet" href="{{asset('css/template_it.css')}}">
    @endsection
    <div id="modal-frame"
        class="hidden w-full h-screen justify-center bg-black/50 backdrop-blur-sm items-center z-50 fixed text-center">
        <div id="modal"
            class="relative w-[85%] md:w-1/2 rounded-lg shadow-md bg-red-600/30 items-center flex flex-col justify-center py-4 px-8">
            <div class="absolute   right-3 top-3 p-2 h-6 w-6 justify-center items-center flex rounded-full bg-white">
                <div class="text-black">
                    <svg id="svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <p id="countdown" class="text-sm">1</p>
                </div>
            </div>
            <p data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="linear"
                class="text-white text-lg md:text-xl lg:text-3xl font-bold text-center">بِسْــــــــــــــــــمِ اللهِ
                الرَّحْمَنِ
                الرَّحِيْمِ</p>
            <p class="my-2 text-md italic md:text-md text-white text-center w-full">Assalamualaikum Warahmatullahi
                Wabarakatuh
            </p>
            <p class="my-2 font-yellowtail text-xl md:text-2xl lg:text-4xl text-white capitalize">{{$tamu?
                str_replace('-', '
                ', $tamu) : ''}}</p>
            <p class="text-sm italic md:text-lg lg:text-xlm text-center text-white">Tanpa mengurangi rasa hormat kami.
                Kami mengundang Bpk/Ibu Sdr(i) untuk menghadiri pernikahan anak kami</p>
        </div>
    </div>
    @livewire('template-ti.section1')

    <div
        class="w-full text-white flex items-center justify-center text-center px-8 md:px-28 z-30 bg-red-500 py-8 md:py-16 italic font-cairo font-light">
        Every love story is beautiful, but ours is the best one. I loved her since the first time I saw her. My mother
        told me to pick the very best one, and I did. True love stories never have endings.
    </div>
    @livewire('template-ti.section2')
    @livewire('template-ti.section3')
    @livewire('template-ti.section4')

    <section id="slide8" data-aos="fade-left" data-aos-delay="1000" data-aos-duration="1000"
        data-aos-easing="ease-out-cubic"
        class="flex bg-red-600 px-8 py-3 text-center flex-col justify-center items-center ">
        <p class="font-extralight font-mono text-white text-md md:text-lg">Diharapkan kepada seluruh tamu undangan untuk
            mematuhi</p>
        <p class="text-white text-xl md:text-2xl font-semibold font-mono">PROTOKOL KESEHATAN</p>
    </section>
    @livewire('template-ti.section5')
    @livewire('template-ti.section6')

    @push('scripts')
    <script>
        const svg2 = document.getElementById('svg');
                svg2.classList.add('hidden');
                let down1 = 6;
                document.addEventListener("DOMContentLoaded", () => {
                    document.getElementById('modal-frame').classList.remove('hidden')
                    document.getElementById('modal-frame').classList.add('flex')
                    
                    const x1 = setInterval(() => {
                        down1 = down1 - 1;
                                        
                            if(down1 < 0 ){ document.getElementById('modal-frame').classList.add('animate-opacity_Out')
                                document.getElementById('countdown').classList.add('hidden');
                                document.getElementById('svg').classList.remove('hidden'); 
                                const y=setInterval(()=> {
                                document.getElementById('modal-frame').classList.add('hidden')
                                },700)
                            
                                }else{
                                document.getElementById('modal-frame').classList.add('animate-opacity_anim')
                                document.getElementById('modal').classList.add('animate-opacity_anim')
                                document.getElementById('countdown').innerHTML = down1;
                            
                                }
                }, 1000);
             });
             document.getElementById('svg').addEventListener('click', function (){
                document.getElementById('modal-frame').classList.add('hidden')
             })
             
    </script>
    @endpush

</div>