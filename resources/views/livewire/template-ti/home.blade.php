<div class="min-w-full">
    @section('style')
        <link rel="stylesheet" href="{{asset('css/template_it.css')}}">
    @endsection
    @livewire('template-ti.section1')
    <div class="w-full text-white flex items-center justify-center text-center px-8 md:px-28 z-30 bg-red-500 py-8 md:py-16 italic font-cairo font-light">
        Every love story is beautiful, but ours is the best one. I loved her since the first time I saw her. My mother told me to pick the very best one, and I did. True love stories never have endings.
    </div>
    @livewire('template-ti.section2')
     @livewire('template-ti.section3')
     @livewire('template-ti.section4')
     
    <section id="slide8" data-aos="fade-left"   data-aos-delay="1000" data-aos-duration="1000" data-aos-easing="ease-out-cubic" class="flex bg-red-600 px-8 py-3 text-center flex-col justify-center items-center ">
        <p class="font-extralight font-mono text-white text-md md:text-lg">Diharapkan kepada seluruh tamu undangan untuk mematuhi</p>
        <p class="text-white text-xl md:text-2xl font-semibold font-mono">PROTOKOL KESEHATAN</p>
    </section>
     @livewire('template-ti.section5')
     @livewire('template-ti.section6')
</div>
