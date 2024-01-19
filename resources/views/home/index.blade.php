<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="Developer perumahan modern berkualitas yang berdiri sejak 2020 dengan 3 proyek berjalan. Kami selalu berkomitmen untuk menjaga kualitas dan legalitas produk kami.">
    <meta name="keywords" content="graha,grahawijaya,grahawijayaland,wijaland,perumahan">
    <meta name="author" content="Graha Wijaya Land">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pengembang Properti - Graha Wijaya Land</title>
</head>

<body>
    @include('home.partials.navbar')
    <section>
        <div class="relative h-[40vh] md:h-screen">
            <img src="{{ asset('storage/' . $settings->image) }}" alt="bg-hero"
                class="absolute inset-0 object-cover w-full h-full blur-[1px] md:blur-sm">
            <div class="absolute w-3/4 transform -translate-x-1/2 -translate-y-1/2 md:w-1/2 top-1/2 left-1/2">
                <img src="{{ asset('storage/img/comingsoon.png') }}" alt="comingsoon" class="w-full">
            </div>
            <div>
                <div
                    class="absolute flex w-full justify-center items-center mt-4 transform -translate-x-1/2 -translate-y-1/2 top-[75%] gap-1 md:top-[85%] left-1/2 md:gap-8">
                    <img src="{{ asset('storage/img/icon-ctg.png') }}" alt="centang" class="h-4 md:h-16">
                    <h3 class="text-[10px] font-bold text-white md:text-2xl font-montserrat">LOKASI STRATEGIS</h3>
                    <img src="{{ asset('storage/img/icon-ctg.png') }}" alt="centang" class="h-4 md:h-16">
                    <h3 class="text-[10px] font-bold text-white md:text-2xl font-montserrat">LEGALITAS AMAN</h3>
                    <img src="{{ asset('storage/img/icon-ctg.png') }}" alt="centang" class="h-4 md:h-16">
                    <h3 class="text-[10px] font-bold text-white md:text-2xl font-montserrat">KUALITAS TERBAIK</h3>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="w-3/4 md:w-1/2 p-2 md:p-6 mx-auto rounded-b-xl bg-gradient-to-r from-main to-[#001629]">
            <h1 class="text-lg font-bold text-center text-white md:text-6xl font-montserrat">GRAHA WIJAYA LAND</h1>
        </div>
        <div class="p-4 mx-auto md:w-1/2 md:p-8">
            <p class="text-sm font-normal text-center md:text-xl text-main font-montserrat">
                {{ $settings->description }}</p>
            <img src="{{ asset('storage/img/dpd-rei.png') }}" alt="real-estate-indonesia"
                class="h-24 mx-auto mt-6 md:mt-12 md:h-40">
            <h3 class="mt-2 text-sm font-bold text-center md:mt-4 md:text-xl text-main font-montserrat">NPA REI 10.00304
            </h3>
        </div>
    </section>

    <section>
        <div class="w-full p-6 md:p-10 mx-auto bg-gradient-to-r from-main to-[#001629]">
            <h1 class="text-xl font-bold text-center text-white md:text-6xl font-montserrat">KEUNGGULAN KAMI</h1>
        </div>
        <div
            class="flex items-center justify-around md:h-[60vh] h-[40vh] container mx-auto md:gap-8 md:px-16 px-8 gap-4">
            <div class="flex flex-col gap-8 mx-auto md:gap-12">
                <img src="{{ asset('storage/img/keunggulan-1.png') }}" alt="keunggulan" class="h-20 mx-auto md:h-60">
                <p class="text-[10px] font-bold text-center md:text-xl text-main font-montserrat">LEGALITAS DAN
                    KEPERCAYAAN
                    ADALAH
                    YANG UTAMA
                </p>
            </div>
            <div class="flex flex-col gap-8 mx-auto md:gap-12">
                <img src="{{ asset('storage/img/keunggulan-2.png') }}" alt="keunggulan" class="h-20 mx-auto md:h-60">
                <p class="text-[10px] font-bold text-center md:text-xl text-main font-montserrat">LOKASI TERBAIK ASET
                    INVESTASI
                    MENJANJIKAN</p>
            </div>
            <div class="flex flex-col gap-8 mx-auto md:gap-12">
                <img src="{{ asset('storage/img/keunggulan-3.png') }}" alt="keunggulan" class="h-20 mx-auto md:h-60">
                <p class="text-[10px] font-bold text-center md:text-xl text-main font-montserrat">KUALITAS BANGUNAN DAN
                    KEAMANAN
                    TERJAMIN</p>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-r from-main to-[#001629]">
        <div class="w-3/4 p-2 mx-auto bg-white md:w-1/2 md:p-6 rounded-b-xl">
            <h1 class="text-lg font-bold text-center md:text-6xl text-main font-montserrat">PROYEK KAMI</h1>
        </div>
        <div class="flex flex-col items-center justify-around gap-12 px-8 py-12 md:flex-row">
            @foreach ($projects as $project)
                <div class="px-8 w-96">
                    @if ($project->status_project == 0)
                        <img src="{{ asset('storage/'.$project->logo) }}" alt="proyek-kami" class="flex items-start h-40 mx-auto">
                        <p class="text-2xl text-center text-white font-montserrat">COMING SOON</p>
                    @else
                        <img src="{{ asset('storage/'.$project->logo) }}" alt="proyek-kami" class="h-[12rem] mx-auto">
                        <p class="text-lg text-center text-white font-montserrat">{{ $project->description }}</p>
                        <img src="{{ asset('storage/'.$project->qr_code) }}" alt="barcode" class="h-40 mx-auto mt-12">
                    @endif
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <div class="w-3/4 md:w-1/2 p-2 md:p-6 mx-auto rounded-b-xl bg-gradient-to-r from-main to-[#001629]">
            <h1 class="text-lg font-bold text-center text-white md:text-6xl font-montserrat">EVENT & PROMO</h1>
        </div>
        @foreach ($events as $event)
            <div class="flex justify-center gap-8 p-8 md:gap-12 md:p-12">
                <img src="{{ asset('storage/' . $event->image) }}" alt="event-poster" class="h-60 md:h-96">
                <div class="w-[30%] flex flex-col items-center my-auto">
                    <h1 class="text-sm font-bold md:text-4xl font-montserrat">{{ $event->title }}</h1>
                    {{-- <p class="mt-4">{{ $event->content }}</p> --}}
                </div>
            </div>
        @endforeach
    </section>

    <section class="pb-12 mt-6 md:pb-20">
        <div class="flex flex-col items-center md:flex-row md:justify-between">
            <div
                class="bg-gradient-to-r from-main to-[#001629] rounded-r-3xl flex flex-wrap -ml-24 md:ml-0 flex-col w-3/4 mb-8 md:w-2/5 p-6 md:p-8">
                <h1 class="text-xl text-center text-white md:text-5xl font-montserrat">MEDIA SOSIAL</h1>
                <div class="flex items-center gap-2 mt-6 md:gap-4 md:mt-12">
                    <img src="{{ asset('storage/img/fb-icon.png') }}" alt="facebook" class="h-6 md:h-10">
                    <p class="text-[10px] md:text-xl text-white font-poppins">Graha Wijaya Land</p>
                </div>
                <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
                    <img src="{{ asset('storage/img/ig-icon.png') }}" alt="instagram" class="h-6 md:h-10">
                    <p class="text-[10px] md:text-xl text-white font-poppins">Grahawijayaland</p>
                </div>
                <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
                    <img src="{{ asset('storage/img/ig-icon.png') }}" alt="instagram" class="h-6 md:h-10">
                    <p class="text-[10px] md:text-xl text-white font-poppins">Villa.argomulyo</p>
                </div>
                <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
                    <img src="{{ asset('storage/img/ig-icon.png') }}" alt="instagram" class="h-6 md:h-10">
                    <p class="text-[10px] md:text-xl text-white font-poppins">Villanaturakalasan</p>
                </div>
                <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
                    <img src="{{ asset('storage/img/ig-icon.png') }}" alt="instagram" class="h-6 md:h-10">
                    <p class="text-[10px] md:text-xl text-white font-poppins">Bukitargomulyoresidence</p>
                </div>
                <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
                    <img src="{{ asset('storage/img/ig-icon.png') }}" alt="instagram" class="h-6 md:h-10">
                    <p class="text-[10px] md:text-xl text-white font-poppins">Villakarta</p>
                </div>
                <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
                    <img src="{{ asset('storage/img/email-icon.png') }}" alt="email" class="h-6 md:h-10">
                    <p class="text-[10px] md:text-xl text-white font-poppins">grahawijayaland@gmail.com</p>
                </div>
            </div>
            <div
                class="bg-gradient-to-r from-main to-[#001629] w-3/4 md:w-[40%] h-20 md:h-60 rounded-3xl relative flex flex-row mr-2 ml-6 md:mr-12 items-center">
                <div
                    class="absolute right-0 flex flex-col items-center justify-end w-4/5 gap-2 p-4 text-center md:gap-4 md:right-4">
                    <h2 class="text-[10px] md:text-xl text-white font-montserrat">Hubungi segera untuk informasi
                        selengkapnya!
                    </h2>
                    <p class="text-sm font-bold text-white md:text-4xl font-montserrat">{{ $settings->no_whatsapp }}
                    </p>
                </div>
                <img src="{{ asset('storage/img/wa-icon.png') }}" alt="whatsapp"
                    class="absolute h-28 -left-8 md:-top-10 md:-left-36 md:h-80">
            </div>
        </div>
    </section>

</body>

</html>
