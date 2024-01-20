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
    <title>Projects - Graha Wijaya Land</title>
</head>

<body>
    @include('home.partials.navbar')

    <div class="relative w-full lg:h-full h-3/4  lg:bg-cover bg-center"
        style="background-image: url('{{ asset('storage/img/rumah1.jpg')}}'); ">
        <div class="bg-biru w-full h-full mix-blend-multiply  " style="filter: blur;">
            <!-- Gradient ke atas -->
            <div class="absolute inset-0 bg-gradient-to-t from-transparent  to-blue-200 flex items-center justify-center">
            </div>
            <!-- Akhir gradient ke atas -->
        </div>
        <!-- Tulisan di luar elemen yang terkena mix-blend-mode dan gradient -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 lg:px-0">
            <p class="text-4xl lg:text-9xl font-bold  font-montserrat text-white">PROJECT</p>
            <p class=" lg:text-3xl text-xs font-montserrat lg:px-28 text-white">DEVLOVER PERUMAHAN MODERN BERKUALITAS YANG
                BERDIRI SEJAK 2020 DENGAN 3 PROYEK BERJALAN. KAMI SELALU BERKOMITMEN UNTUK MENJAGA KUALITAS DENGAN LEGALITAS PRODUCT KAMI.</p>
            <div class="bg-yellow-500 pt-2 pb-3 font-montserrat mt-5 mb-4 text-black p-7 mx-auto text-xs justify-center text-center lg:text-2xl py-1 font-medium rounded-full">
                Info Selengkapnya
            </div>
        </div>
    </div>

    <!-- vila argomulyo -->
    <div class="md:w-full py-10  md:h-full flex lg:font-montserrat bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('storage/img/1.png') }}');">
        <div class="w-1/2 flex flex-col items-center justify-center">
            <img src="{{ asset('storage/img/Logo Villa2.png') }}" alt="Logo Villa 2" class="w-1/2 lg:w-1/3 lg:top-20 lg:mt-8 lg:p-4">
            <div class="px-4 lg:px-0">
                <p class="text-white text-xs px-2 lg:px-12 text-center">Kawasan SmartHome Pertama Di Yogyakarta Barat</p>
                <br>
                <p class="text-white text-xs lg:text-2xl lg:px-52 text-center">Kawasan seluas 1,9 Ha dengan total 128 unit di JL. Wates KM 9,5</p>
            </div>
            <img src="{{ asset('storage/img/barkode2.png') }}" alt="barkode-2" class=" w-1/2 lg:w-1/3 mt-2 justify-center items-center ">
        </div>
        <div class="w-1/2 relative">
            <div class="absolute bottom-7 lg:bottom-5 lg:right-24 right-3 bg-yellow-500  md:w-1/2 md:p-2 p-[5px] mt-5 mb-4 text-black mx-auto text-xs justify-center text-center md:text-3xl py-1 font-bold rounded-full">
                <a class="" href="#">Info Selengkapnya</a>
            </div>
        </div>
    </div>

    <!-- villa natura kalasan -->
    <div class="md:w-full py-10 md:h-full flex lg:font-montserrat bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('storage/img/2.png') }}');">
        <div class="w-1/2 relative items-center justify-center flex">
            <div class=" absolute bottom-5 lg:items-center bg-yellow-500 px-1 lg:p-2 mt-5 mb-4 text-black mx-auto text-xs text-center lg:text-3xl py-1 font-bold rounded-full">
                <a href="#">Info Selengkapnya</a>
            </div>
        </div>
        <div class="w-1/2  flex  flex-col items-center justify-center">
            <img src="{{ asset('storage/img/villanaturakalasan2.png') }}" alt="Logo Project" class="w-1/2 lg:w-1/3 lg:top-20 lg:mt-8 lg:p-4  ">
            <div class="px-4 lg:px-0">
                <p class="text-white text-xs lg:text-2xl lg:px-52 text-center">Kawasan seluas 3000m dengan total 19 unit di JL.Solo KM 13</p>
            </div>
            <img src="{{ asset('storage/img/barkode3.jpg') }}" alt="Barcode" width="200" class="w-1/2 lg:w-1/3 mt-5 justify-center items-center ">
        </div>
    </div>


    <!-- bukit argo mulyo -->
    <div class="md:w-full py-10 md:h-full flex lg:font-montserrat bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('storage/img/1.png') }}');">
        <div class="w-1/2  flex  flex-col items-center justify-center">
            <img src="{{ asset('storage/img/bukitargomulyo2.png') }}" alt="Logo Project" class=" w-1/2 lg:p-4 top-20 mt-8 items-center">
            <div class="px-4 lg:px-0">
                <p class="text-white text-xs lg:text-2xl lg:px-52  mt-5 text-center">Kawasan seluas 1,9 Ha dengan total 128 unit di JL. Wates KM 9,5</p>
            </div>
            <img src="{{ asset('storage/img/barcode1.png')}}" alt="Barcode" class=" w-1/2 lg:w-1/3 mt-5 justify-center items-center ">
        </div>
        <div class="w-1/2 relative">
            <div class="absolute bottom-5 lg:right-24 right-3 bg-yellow-500  md:w-1/2 md:p-2 p-[5px] mt-5 mb-4 text-black mx-auto text-xs justify-center text-center md:text-3xl py-1 font-bold rounded-full">
                <a class="" href="#">Info Selengkapnya</a>
            </div>
        </div>
    </div>


    <!-- yang ke 4 -->
    <div class="md:w-full py-10 md:h-full lg:h-full flex lg:font-montserrat bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('storage/img/4.png') }}');">
        <div class="w-1/2 relative items-center justify-center flex">
            <div class="absolute bottom-5 lg:items-center bg-yellow-500 px-1 lg:p-2 mt-5 mb-4 text-black mx-auto text-xs text-center lg:text-3xl py-1 font-bold rounded-full">
                <a href="#">Info Selengkapnya</a>
            </div>
        </div>
        <div class="w-1/2 relative flex items-center justify-center py-24 ">
            <img src="{{ asset('storage/img/vilakarta.png')}}" alt="" class="w-1/2 lg:w-1/2 lg:top-20 lg:mt-8 lg:p-4">
        </div>
    </div>
</body>

</html>
