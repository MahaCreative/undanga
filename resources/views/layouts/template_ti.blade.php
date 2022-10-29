<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
    <title>Document</title>
    @livewireStyles
</head>

<body class="antialiased overflow-x-hidden">
    <audio id="audio" src="{{asset('Beautiful in White - Violin Cover by Aloysia Edith (128 kbps).mp3')}}"></audio>
    {{$slot}}
    <footer class="bg-red-600 py-2.5 px-5 relative">
        <div class="flex justify-between items-center">
            <div class="flex gap-x-2 items-center">
                <p class="font-cairo text-white text-lg text-center items-center">©</p>
                <p class="font-cairo text-white text-lg text-center items-center"> Copy Right By <a
                        class="hover:text-black" href="https://mcdeveloper.click">Mcdeveloper.click</a></p>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <Script>
        window.addEventListener("DOMContentLoaded", event => {
            const audio = document.getElementById("audio");
            audio.autoplay = true;
        });
        let nom=0;
                window.addEventListener("click", event => {
                const audio = document.getElementById("audio");
                nom +=1;
                if(nom <=1){ audio.play() } });
    </Script>
    <script>
        AOS.init();
        const btn = document.querySelectorAll('.btn');
        const slide1 = document.getElementById("slide1");
        const slide2 = document.getElementById("slide2");
        const slide3 = document.getElementById("slide3");
        const slide4 = document.getElementById("slide4");
        const slide5 = document.getElementById("slide5");
        const slide6 = document.getElementById("slide6");
        const slide7 = document.getElementById("slide7");
        const slide8 = document.getElementById("slide8");
        const slide9 = document.getElementById("slide9");
        const slide10 = document.getElementById("slide10");
        
        function play(){
            slide2.classList.remove('hidden');
            slide2.scrollIntoView({ behavior: 'smooth', block: 'center' });
            audio.play();
            
        }
    
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'bottom',
            showConfirmButton: false,
            timer: 3000,
        });
        window.addEventListener('swal:modal', event => {
            Toast.fire({
                icon: event.detail.type,
                title: event.detail.title,

            });
        })
    </script>
    @stack('scripts')
    @livewireScripts
</body>

</html>