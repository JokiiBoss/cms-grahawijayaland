<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Developer perumahan modern berkualitas yang berdiri sejak 2020 dengan 3 proyek berjalan. Kami selalu berkomitmen untuk menjaga kualitas dan legalitas produk kami.">
    <meta name="keywords" content="graha,grahawijaya,grahawijayaland,wijaland,perumahan">
    <meta name="author" content="Graha Wijaya Land">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pengembang Properti - Graha Wijaya Land</title>
</head>

<body class="font-montserrat">
    <!-- navbar -->
    @include('home.partials.navbar')
    <!-- untuk gambar rumah -->
    <div class="relative w-full h-48 lg:h-full bg-cover" style="background-image: url('{{ asset('storage/img/rumah2.jpg') }}')">
        <div class="absolute px-4 left-0 w-96">
            <img src="{{ asset('storage/img/villanaturakalasan.png') }}" class="lg:mx-12 lg:w-36" alt="" width="40" />
        </div>

        <div class="absolute bottom-0 px-2 mb-3 left-0 w-full lg:px-4">
            <img src="{{ asset('storage/img/400.png') }}" alt="" width=" 70 " class="lg:w-52" />
        </div>
    </div>

    <!-- untuk footer -->
    <div class="w-full h-36 lg:h-72 px-3 text-center text-white lg:p-2 bg-customGreen">
        <p class="font-bold text-xl lg:mt-4 lg:text-4xl">Kawasan Private Stratergis</p>
        <p class="w-full text-xs lg:text-3xl lg:p-2">
            Villa Natura Kalasan Adalah kawasan dengan total 19 unit yang terletak
            hanya 500 meter dari jl.Solo Dikelilingi fasilitas terbaik Dijogja
            seperti kampus negeri dan Sewasta Rumah sakit dan Objek Wisata termuka
            DiJogja
        </p>

        <div
            class="bg-yellow-500 lg:mt-6 mt-5 mb-4 text-black w-3/4 mx-auto text-xs justify-center text-center lg:text-5xl py-1 font-bold rounded-full">
            DAPATKAN INFORMASI MENARIK LAINNYA
        </div>
    </div>

    <div class="w-full items-center text-center">
        <div class="bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('storage/img/bg2.png')}}')">
            <div class="w-24 h-24 lg:w-64 lg:h-64 lg:mt-4 items-center justify-center mx-auto rounded-full bg-cover"
                style="background-image: url('{{ asset('storage/img/rumah2.jpg') }}')"></div>
            <div
                class="mb-1 bg-yellow-500 text-white lg:mx-auto w-14 lg:w-52 lg:m-4 lg:p-2 text-center text-xs mx-auto lg:text-5xl m-2 lg:pt-2 font-bold rounded-full">
                TIPE 45
            </div>

            <p class="font-bold text-xl text-customGreen lg:text-4xl">
                Lokasi Stratergis Harga Manis
            </p>

            <p class="px-3 text-xs lg:text-3xl lg:mx-12 lg:m-5">
                Dekat dengan jalan raya solo serta rencana exil tol.Hanya 10 menit dari
                Candi Perambanan dan Objek lainnya.Harga menarik sangat mungkin untuk
                naik...
            </p>
        </div>
    </div>

    <!-- untuk locasi -->

    <div class="w-full h-full lg:flex  lg:gap-8">
        <div class=" p-2 h-2/3  lg:w-3/5  hover:cursor-zoom-in  ">
            <iframe class=" p-2 w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4829.080592804577!2d110.46636236038138!3d-7.773968702362796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5b7c8855473f%3A0xb37fb30ee077c640!2sVilla%20Natura%20Kalasan!5e0!3m2!1sen!2sid!4v1705126382446!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></=>" style=":0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
        <!-- fasilitas kesehatan -->
        <div class="h-3/4 lg:h-2/3 lg:w-2/5 m-2 lg:text-xl bg-customGreen rounded-md lg:rounded-l-3xl">
            <div class="flex text-white p-4">
                <img src="{{ asset('storage/img/rumahsakit.png')}}" alt="" width="30  " />
                <p class="px-2 py-1">Fasilitas Kesehatan</p>
            </div>
            <div class="flex text-white text-xs lg:text-sm gap-6 px-4">
                <p>RS.Panti Rini : 3 Menit</p>
                <p>RS.Bhayangkara : 5 Menit</p>
            </div>
            <p class="px-4 text-white text-xs lg:text-sm">Rs.PDHI: 5 menit</p>

            <!-- candi -->
            <div class="flex text-white p-4">
                <img src="{{ asset('storage/img/candi.png') }}" alt="" width="30   " />
                <p class="px-2 py-1">Candi/ Wisata Sejarah</p>
            </div>
            <div class="flex text-white lg:text-sm text-xs gap-6 px-4">
                <p>Perambanan : 10 Menit</p>
                <p>Tebing Bereksi : 16 Menit</p>
            </div>
            <p class="px-4 text-white text-xs lg:text-sm">Ratu Boko : 5 Menit</p>

            <!-- 4kolom -->
            <div class="lg: grid lg:grid-cols-2 lg:gap-4">
                <!-- fasilitas pendidikan -->
                <div>
                    <div class="flex text-white p-4">
                        <img src="{{ asset('storage/img/rumahsakit.png') }}" alt="" width="30  " />
                        <p class="px-4 py-1">Fasilitas Pendidikan</p>
                    </div>
                    <div class="text-white lg:text-sm text-xs gap-6 px-4">
                        <p>UPN Veteran: 13 Menit</p>
                        <p>UGM : 23 Menit</p>
                    </div>
                </div>

                <!-- rumah sakit -->
                <div>
                    <div class="flex text-white p-4">
                        <img src="{{ asset('storage/img/rumahsakit.png') }}" alt="" width="30   " />
                        <p class="px-4 py-1">Gathering Hall/Mall</p>
                    </div>
                    <div class="text-white lg:text-sm text-xs gap-6 px-4">
                        <p>Ambarukmo Plaza: 15 Menit</p>
                        <p>Transmart Carrefour : 13 Menit</p>
                    </div>
                </div>

                <!-- setasiun -->
                <div>
                    <div class="flex text-white px-4 pb-2">
                        <img src="{{ asset('storage/img/stasiunkereta.png')}}" alt="" width="30   " />
                        <p class="px-2 py-1">Stasiun Kereta Api</p>
                    </div>
                    <div class="text-white lg:text-sm text-xs gap-6 px-4">
                        <p>Maguowo(MGW):8 Menit</p>
                    </div>
                </div>

                <!-- bandara -->
                <div>
                    <div class="flex text-white p-2">
                        <img src="{{ asset('storage/img/bandara.png')}}" alt="" width="30  " />
                        <p class="px-2 py-1 lg:text-sm">Bandara Udara</p>
                    </div>
                    <div class="text-white text-xs gap-6 px-2">
                        <p class="px-2 py-1  lg:text-sm">AdiSucipto:8 Menit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mx-auto mt-80 lg:mt-0">
        <!-- awal video -->
        <div class="relative">
            <div
                class="absolute left-1/2 transform -translate-x-1/2  text-center text-xl md:text-5xl font-bold z-10 bg-green-temp py-10 px-16 rounded-b-3xl">
                <h1 class="text-white">PREVIEW KAWASAN</h1>
            </div>
            <div class="text-center border">
                <iframe class="w-full h-screen"
                    src="https://drive.google.com/file/d/19lsnJ2mGGqo18N5i4QqULXclIWP9_ikV/preview"
                    allow="autoplay"></iframe>
            </div>
        </div>
        <!-- akhir video -->

        <!-- awal footer  -->
        <div class="md:flex bg-cover h-screen w-full bg-no-repeat bg-center gap-x-10 "
            style="background-image: url('storage/img/bg.png')">
            <div class="flex flex-col-3 mt-8">
                <img class="-mr-5 md:w-auto w-44" src="{{ asset('storage/img/cwk.png') }}" alt="" />
                <div class="relative gap-x-5">
                    <div class="md:w-72 w-20 absolute -left-6 md:-left-44 hidden md:block">
                        <img src="{{ asset('storage/img/wa.png')}}" alt="ini wa" />
                    </div>
                    <div class="w-44 md:hidden">
                        <img src="{{ asset('storage/img/KALASAN.png')}}" alt="">
                    </div>
                    <div
                        class="text-center bg-green-temp  md:px-20 md:py-5 text-white rounded-br-3xl rounded-tl-lg rounded-bl-lg md:ml-0 ml-10 pl-5 rounded-tr-3xl md:mt-16 hidden md:block">
                        <div class="md:pl-10 -ml-2 mt-2">
                            <div class="md:text-lg text-xs font-poppins">
                                <p>Hubungi segera untuk</p>
                                <p>informasi selengkapnya</p>
                            </div>
                            <div class="font-bold text-lg md:text-3xl">
                                <a class="hover:text-blue-700 hover:underline"
                                    href="https://wa.me/+6281320057400">0813 2005 7400</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:mt-10">
                <div class="bg-green-temp px-16 py-8 flex flex-col gap-y-3 md:rounded-bl-3xl md:rounded-tl-3xl">
                    <div>
                        <h1 class="text-white text-center text-2xl font-semibold">
                            MAPS
                        </h1>
                    </div>
                    <div class="bg-green-temp flex justify-center">
                        <img class=" w-60" src="{{ asset('storage/img/qr123.jpg')}}" alt="" />
                    </div>
                    <div class="flex gap-x-3 justify-center">
                        <img class="w-9" src="{{ asset('storage/img/ig.png')}}" alt="" />
                        <a class="text-white font-poppins text-center text-2xl font-semibold hover:underline hover:text-blue-700 focus:outline-none focus:ring focus:ring-blue-300"
                            href="https://www.instagram.com/villanatura.kalasan/">Villanaturakalasan</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir footer  -->
    </div>
</body>

</html>
