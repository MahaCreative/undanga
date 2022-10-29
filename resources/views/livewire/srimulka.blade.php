<div class="min-w-full overflow-x-hidden">
    <div id="modal-frame"
        class="hidden w-full h-screen justify-center bg-black/30 backdrop-blur-sm items-center z-50 fixed top-0 left-0">
        <div id="modal"
            class="relative w-[85%] md:w-1/2 rounded-lg shadow-md bg-primary/60 items-center flex flex-col justify-center py-4 px-8">
            <div class="absolute right-3 top-3 p-2 h-6 w-6 justify-center items-center flex rounded-full bg-white">
                <div class="text-black">
                    <svg id="svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-3 h-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <p id="countdown" class="text-sm">1</p>
                </div>
            </div>
            <p data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="linear"
                class="text-white text-lg md:text-xl lg:text-3xl font-bold">بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ
                الرَّحِيْمِ</p>
            <p class="my-6 text-md italic md:text-md text-white">Assalamualaikum Warahmatullahi Wabarakatuh</p>
            <p class="text-sm italic md:text-lg lg:text-xlm text-center text-white">Tanpa mengurangi rasa hormat kami.
                Kami mengundang Bpk/Ibu Sdr(i) untuk menghadiri pernikahan anak kami</p>
        </div>
    </div>
    @livewire('components.slide1')

    @livewire('components.slide2')

    @livewire('components.slide3')

    @livewire('components.slide4')

    @livewire('components.slide5')

    @livewire('components.slide6')

    @livewire('components.slide7')

    @livewire('components.slide8')

    @livewire('components.slide9')

    @livewire('components.slide10')
    @push('scripts')
    <script>
        const svg = document.getElementById('svg');
            svg.classList.add('hidden');
            let down = 6;
            document.addEventListener("DOMContentLoaded", () => {
                document.getElementById('modal-frame').classList.remove('hidden')
                document.getElementById('modal-frame').classList.add('flex')
                
                const x = setInterval(() => {
                    down = down - 1;
                    
                    if(down < 0 ){
                        document.getElementById('modal-frame').classList.add('animate-opacity_Out')
                        document.getElementById('countdown').classList.add('hidden');
                        document.getElementById('svg').classList.remove('hidden');
                        const y = setInterval(() => {
                            document.getElementById('modal-frame').classList.add('hidden')
                        },2000)
                        
                    }else{
                        document.getElementById('modal-frame').classList.add('animate-opacity')
                        document.getElementById('modal').classList.add('animate-opacity')
                        document.getElementById('countdown').innerHTML = down;
                        console.log(down);
                     }
            }, 1000);
         });
         document.getElementById('svg').addEventListener('click', function (){
            document.getElementById('modal-frame').classList.add('hidden')
         })
         
    </script>
    @endpush
</div>