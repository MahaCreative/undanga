<div class="min-w-full">
    @section('style')
        <link rel="stylesheet" href="{{asset('css/template_it.css')}}">
    @endsection
    @livewire('template-ti.section1')
    {{-- <div class="w-full text-white flex items-center justify-center text-center px-8 md:px-28 z-30 bg-red-500 py-8 md:py-16 italic font-cairo font-light">
        Every love story is beautiful, but ours is the best one. I loved her since the first time I saw her. My mother told me to pick the very best one, and I did. True love stories never have endings.
    </div> --}}
    @livewire('template-ti.section2')
</div>
