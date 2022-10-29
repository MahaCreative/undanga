<div id="slide7" class="flex  slide2 w-full justify-center items-center flex-col relative py-6">
    <img loading="lazy" class="w-[250px] md:w-[300px] lg:w-[400px] absolute right-0 top-0 rotate-180 "
        src="{{asset('gambar/gambar1.png')}}" alt="">
    <div data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" data-aos-easing="ease-out-cubic"
        class="z-10 w-[80%] md:w-[70%] lg:w-1/2 text-center mt-10 absolute top-0">
        <p class="text-primary text-3xl font-semibold font-mono">Kado Pernikahan</p>
        <p class="italic">Atas restu dan kedatangan kamu ke pesta pernikahan kami sudah sangat merasa bahagia. Tetapi
            jika kamu ingin memberi hadiah, kami menyediakan <span class="font-bold text-primary">Amplop Digital</span>
            untuk memudahkan kamu, Terima Kasih</p>
    </div>

    <div wire:ignore.self data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000"
        data-aos-easing="ease-out-cubic"
        class="absolute top-52 md:top-40 lg:top-36 py-2.5 px-4 my-3 mb-4 bg-white bg-opacity-75 shadow-md shadow-primary text-center rounded-lg backdrop-blur-md">
        <p class="font-bold">Bank Rakyat Indonesia (BRI) Kode (002)</p>
        <p>No. Rekening : <span class="font-bold text-primary">7913.01.01.2256.534</span></p>
        <p>a/n Sri Mulka</p>
        <div class="flex justify-center items-center w-full">
            <img loading="lazy" class="w-24 my-2 " src="{{asset('gambar/BRI.png')}}" alt="">
        </div>
        <p class="font-bold font-mono text-lg text-primary italic">Mohon isi form di bawah ini</p>
        <form wire:ignore.self wire:submit.prevent="submitHandler" action="">
            <div class="my-2 flex flex-col items-start">
                <label class="font-mono font-extralight text-primary" for="">Nama:</label>
                <input wire:model="nama" type="text" name="nama"
                    class="text-primary outline-none rounded-md border shadow-sm w-full py-1 px-3 shadow-primary hover:outline-dashed hover:outline-primary focus:outline-dashed focus:outline-primary focus:ring-primary ">
                @error('nama')
                <p class="text-red-600 italic text-sm">{{$message}}</p>
                @enderror
            </div>

            <div class="my-2 flex flex-col items-start">
                <label class="font-mono font-extralight text-primary" for="">Nama Pemilik Rekening:</label>
                <input type="text" wire:model="nama_pemilik" name="nama_pemilik"
                    class="text-primary outline-none rounded-md border shadow-sm w-full py-1 px-3 shadow-primary hover:outline-dashed hover:outline-primary focus:outline-dashed focus:outline-primary focus:ring-primary ">
                @error('nama_pemilik')
                <p class="text-red-600 italic text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="my-2 flex flex-col items-start">
                <label class="font-mono font-extralight text-primary" for="">Pesan:</label>
                <input type="text" wire:model="pesan" name="pesan"
                    class="text-primary outline-none rounded-md border shadow-sm w-full py-1 px-3 shadow-primary hover:outline-dashed hover:outline-primary focus:outline-dashed focus:outline-primary focus:ring-primary ">
                @error('pesan')
                <p class="text-red-600 italic text-sm">{{$message}}</p>
                @enderror
            </div>
            <div class="my-2 flex flex-col items-start">
                <label class="font-mono font-extralight text-primary" for="">Nominal:</label>
                <input type="number" wire:model="nominal" name="nominal"
                    class="text-primary outline-none rounded-md border shadow-sm w-full py-1 px-3 shadow-primary hover:outline-dashed hover:outline-primary focus:outline-dashed focus:outline-primary focus:ring-primary ">
                @error('nominal')
                <p class="text-red-600 italic text-sm">{{$message}}</p>
                @enderror
            </div>
            <button type="submit"
                class="w-full text-white  text-sm italic rounded-bl-lg rounded-br-lg bg-primary py-2">Lanjutkan</button>
        </form>
    </div>
</div>