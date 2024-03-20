@extends('layout.main')
@section('content')
<!-- Halaman Produk -->
<div class="w-full px-6 py-6 mx-auto">
 <!-- Header Produk -->
 <div class="flex flex-wrap -mx-3">
    <h1>Produk Unggulan</h1>
 </div>

 <!-- Konten Produk -->
 <div class="flex flex-wrap -mx-3">
    <!-- Contoh Produk 1 -->
    <div class="w-full md:w-1/2 px-3 mb-6">
      <div class="bg-white rounded-lg shadow-lg p-6">
      <img src="assets/img/Asics Gel.jpg" alt="Asics Gel-Excite 9" width="200" height="100">
        <h2 class="text-xl font-bold mb-2">Asics Gel-Excite 9</h2>
        <p class="text-gray-700 text-base">Kombinasi Teknologi Amplifoam™ Cushioning dan Gel™ ditempatkan pada midsole. Fitur-Fitur Ini Memberikan Daya Tahan Yang Lebih Baik Dengan Pendaratan Yang Lebih Mudah Pada Saat Serangan Kaki.</p>
        <p class="text-gray-900 font-bold mt-4">Rp. 950.000</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
          Beli Sekarang
        </button>
      </div>
    </div>

    <!-- Contoh Produk 2 -->
    <div class="w-full md:w-1/2 px-3 mb-6">
      <div class="bg-white rounded-lg shadow-lg p-6">
        <img src="assets/img/Kemeja hitam.jpeg" alt="Kemeja Pria" width="200" height="100">
        <h2 class="text-xl font-bold mb-2">Kemeja Pria</h2>
        <p class="text-gray-700 text-base">Tampil elegan dan bergaya dengan kemeja hitam lengan panjang ini. Terbuat dari bahan katun berkualitas tinggi yang lembut dan nyaman dikenakan. </p>
        <p class="text-gray-900 font-bold mt-4">Rp. 399.000</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
          Beli Sekarang
        </button>
      </div>
    </div>
 </div>

 <!-- Footer -->
 <footer class="pt-4">
    <div class="w-full px-6 mx-auto">
      <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
          <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
            © {{ date("Y") }}
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
            for a better web.
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
          <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
 </footer>
</div>
<!-- End Halaman Produk -->
@endsection
