<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
<title>Graha Wijaya Land</title>
</head>


<body>

  <nav class="px-2 py-2">
    <div class="flex items-center justify-between p-4 mx-auto">
      <img src="{{ asset('storage/img/logos.png')}}" alt="logo" class="w-40 md:w-60">
      <ul class="flex gap-4 md:gap-20 md:mr-16">
        <a href="#">
          <li class="text-[10px] font-normal md:text-xl font-montserrat text-main">Home</li>
        </a>
        <a href="#">
          <li class="text-[10px] font-normal md:text-xl font-montserrat text-main">Projects</li>
        </a>
        <a href="#">
          <li class="text-[10px] font-normal md:text-xl font-montserrat text-main">Pricelist</li>
        </a>
      </ul>
    </div>
  </nav>

  <section>
    <div class="relative h-[40vh] md:h-screen">
      <img src="{{ asset('storage/img/bg-hero.jpg')}}" alt="bg-hero"
        class="absolute inset-0 object-cover w-full h-full blur-[1px] md:blur-sm">
      <div class="absolute w-3/4 transform -translate-x-1/2 -translate-y-1/2 md:w-1/2 top-1/2 left-1/2">
        <img src="{{ asset('storage/img/comingsoon.png')}}" alt="comingsoon" class="w-full">
      </div>
      <div>
        <div
          class="absolute flex w-full justify-center items-center mt-4 transform -translate-x-1/2 -translate-y-1/2 top-[75%] gap-2 md:top-[85%] left-1/2 md:gap-8">
          <img src="{{ asset('storage/img/icon-ctg.png')}}" alt="centang" class="h-4 md:h-16">
          <h3 class="text-[10px] font-bold text-white md:text-2xl font-montserrat">LOKASI STRATEGIS</h3>
          <img src="{{ asset('storage/img/icon-ctg.png')}}" alt="centang" class="h-4 md:h-16">
          <h3 class="text-[10px] font-bold text-white md:text-2xl font-montserrat">LEGALITAS AMAN</h3>
          <img src="{{ asset('storage/img/icon-ctg.png')}}" alt="centang" class="h-4 md:h-16">
          <h3 class="text-[10px] font-bold text-white md:text-2xl font-montserrat">KUALITAS TERBAIK</h3>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="w-1/2 p-2 md:p-6 mx-auto rounded-b-xl bg-gradient-to-r from-main to-[#001629]">
      <h1 class="text-sm font-bold text-center text-white md:text-6xl font-montserrat">GRAHA WIJAYA LAND</h1>
    </div>
    <div class="p-4 mx-auto md:w-1/2 md:p-8">
      <p class="text-sm font-bold text-center md:text-xl text-main font-montserrat">DEVELOPER PERUMAHAN MODERN
        BERKUALITAS YANG
        BERDIRI SEJAK 2020 DENGAN 3 PROYEK BERJALAN. KAMI SELALU BERKOMITMEN UNTUK MENJAGA KUALITAS DAN LEGALITAS PRODUK
        KAMI.</p>
      <img src="{{ asset('storage/img/dpd-rei.png')}}" alt="real-estate-indonesia" class="h-24 mx-auto mt-6 md:mt-12 md:h-40">
      <h3 class="mt-2 text-sm font-bold text-center md:mt-4 md:text-xl text-main font-montserrat">NPA REI 10.00304</h3>
    </div>
  </section>

  <section>
    <div class="w-full p-6 md:p-10 mx-auto bg-gradient-to-r from-main to-[#001629]">
      <h1 class="text-xl font-bold text-center text-white md:text-6xl font-montserrat">KEUNGGULAN KAMI</h1>
    </div>
    <div class="flex items-center justify-around md:h-[60vh] h-[40vh] container mx-auto md:gap-8 md:px-16 px-8 gap-4">
      <div class="flex flex-col gap-8 mx-auto md:gap-12">
        <img src="{{ asset('storage/img/keunggulan-1.png')}}" alt="keunggulan" class="h-20 mx-auto md:h-60">
        <p class="text-[10px] font-bold text-center md:text-xl text-main font-montserrat">LEGALITAS DAN KEPERCAYAAN
          ADALAH
          YANG UTAMA
        </p>
      </div>
      <div class="flex flex-col gap-8 mx-auto md:gap-12">
        <img src="{{ asset('storage/img/keunggulan-2.png')}}" alt="keunggulan" class="h-20 mx-auto md:h-60">
        <p class="text-[10px] font-bold text-center md:text-xl text-main font-montserrat">LOKASI TERBAIK ASET INVESTASI
          MENJANJIKAN</p>
      </div>
      <div class="flex flex-col gap-8 mx-auto md:gap-12">
        <img src="{{ asset('storage/img/keunggulan-3.png')}}" alt="keunggulan" class="h-20 mx-auto md:h-60">
        <p class="text-[10px] font-bold text-center md:text-xl text-main font-montserrat">KUALITAS BANGUNAN DAN KEAMANAN
          TERJAMIN</p>
      </div>
    </div>
  </section>

  <section class="bg-gradient-to-r from-main to-[#001629]">
    <div class="w-1/2 p-4 mx-auto bg-white md:p-6 rounded-b-xl">
      <h1 class="text-2xl font-bold text-center md:text-6xl text-main font-montserrat">PROYEK KAMI</h1>
    </div>
    <div class="flex flex-col items-center justify-around gap-12 px-8 py-12 md:flex-row">
      <div class="w-96">
        <img src="{{ asset('storage/img/natura-kalasan.png')}}" alt="proyek-kami" class="h-[12rem] mx-auto">
        <p class="text-lg text-center text-white font-montserrat">Kawasan seluas 1,4 Ha dengan total 97 unit di Jl.
          Wates KM 10</p>
        <img src="{{ asset('storage/img/barcode-argomulyo.png')}}" alt="barcode" class="h-40 mx-auto mt-12">
      </div>
      <div class="w-96">
        <img src="{{ asset('storage/img/natura-kalasan.png')}}" alt="proyek-kami" class="h-[12rem] mx-auto">
        <p class="text-lg text-center text-white font-montserrat">Kawasan seluas 3000m dengan total 19 unit di Jl. Solo
          KM
          13</p>
        <img src="{{ asset('storage/img/barcode-natura.jpg')}}" alt="barcode" class="h-40 mx-auto mt-12">
      </div>
      <div class="w-96">
        <img src="{{ asset('storage/img/bukit-argomulyo.png')}}" alt="proyek-kami" class="mx-auto h-[12rem]">
        <p class="text-lg text-center text-white font-montserrat">Kawasan seluas 1,9 Ha dengan total 128 unit di Jl.
          Wates KM 9,5</p>
        <img src="{{ asset('storage/img/barcode-bukit.png')}}" alt="barcode" class="h-40 mx-auto mt-10">
      </div>
      <div class="w-96">
        <img src="{{ asset('storage/img/villa-karta.png')}}" alt="proyek-kami" class="flex items-start h-40 mx-auto">
        <p class="text-2xl text-center text-white font-montserrat">COMING SOON</p>
      </div>
    </div>
  </section>

  <section>
    <div class="w-1/2 p-2 md:p-6 mx-auto rounded-b-xl bg-gradient-to-r from-main to-[#001629]">
      <h1 class="text-xl font-bold text-center text-white md:text-6xl font-montserrat">EVENT & PROMO</h1>
    </div>
    <div class="flex justify-center gap-8 p-8 md:gap-12 md:p-12">
      <img src="{{ asset('storage/img/expo.jpg')}}" alt="expo" class="h-60 md:h-96">
      <div class="w-[30%] flex flex-col items-center my-auto">
        <h1 class="text-sm font-bold md:text-4xl font-montserrat">PESTA PROPERTY EXPO 2024</h1>
        <p class="mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, harum perferendis aliquam
          mollitia quis amet explicabo esse? Quae, nobis! Nostrum?</p>
      </div>
    </div>
  </section>

  <section class="pb-12 mt-12 md:pb-20">
    <div class="flex items-center justify-center md:justify-between">
      <div class="bg-gradient-to-r from-main to-[#001629] rounded-r-3xl w-1/2 md:w-1/3 p-6 md:p-8">
        <h1 class="text-xl text-center text-white md:text-5xl font-montserrat">MEDIA SOSIAL</h1>
        <div class="flex items-center gap-2 mt-6 md:gap-4 md:mt-12">
          <img src="{{ asset('storage/img/fb-icon.png')}}" alt="facebook" class="h-6 md:h-10">
          <p class="text-[10px] md:text-xl text-white font-poppins">Graha Wijaya Land</p>
        </div>
        <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
          <img src="{{ asset('storage/img/ig-icon.png')}}" alt="instagram" class="h-6 md:h-10">
          <p class="text-[10px] md:text-xl text-white font-poppins">Grahawijayaland</p>
        </div>
        <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
          <img src="{{ asset('storage/img/ig-icon.png')}}" alt="instagram" class="h-6 md:h-10">
          <p class="text-[10px] md:text-xl text-white font-poppins">Villa.argomulyo</p>
        </div>
        <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
          <img src="{{ asset('storage/img/ig-icon.png')}}" alt="instagram" class="h-6 md:h-10">
          <p class="text-[10px] md:text-xl text-white font-poppins">Villanaturakalasan</p>
        </div>
        <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
          <img src="{{ asset('storage/img/ig-icon.png')}}" alt="instagram" class="h-6 md:h-10">
          <p class="text-[10px] md:text-xl text-white font-poppins">Bukitargomulyoresidence</p>
        </div>
        <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
          <img src="{{ asset('storage/img/ig-icon.png')}}" alt="instagram" class="h-6 md:h-10">
          <p class="text-[10px] md:text-xl text-white font-poppins">Villakarta</p>
        </div>
        <div class="flex items-center gap-2 mt-2 md:gap-4 md:mt-4">
          <img src="{{ asset('storage/img/email-icon.png')}}" alt="email" class="h-6 md:h-10">
          <p class="text-[10px] md:text-xl text-white font-poppins">grahawijayaland@gmail.com</p>
        </div>
      </div>
      <div
        class="bg-gradient-to-r from-main to-[#001629] w-1/2 md:w-1/3 h-20 md:h-60 py-20 rounded-3xl relative flex flex-row mr-2 ml-6 md:mr-12 items-center">
        <div
          class="absolute right-0 flex flex-col items-center justify-end w-2/3 gap-2 text-center md:gap-4 md:right-4">
          <h2 class="text-[10px] md:text-xl text-white font-montserrat pr-10">Hubungi segera untuk informasi selengkapnya!
          </h2>
          <p class="text-sm font-bold text-white md:text-4xl font-montserrat">0813 2005 7400</p>
        </div>
        <img src="{{ asset('storage/img/wa-icon.png')}}" alt="whatsapp" class="absolute h-28 -left-8 md:-top-20 md:-left-56 md:h-96">
      </div>
    </div>
  </section>

</body>

</html>