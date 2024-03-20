@extends('layout.main')
@section('content')
<!-- Halaman Biodata -->
<div class="w-full px-6 py-6 mx-auto">
 <!-- Header Biodata -->
 <div class="flex flex-wrap -mx-3">
    <h1>Biodata Saya</h1>
 </div>

 <!-- Konten Biodata -->
 <div class="flex flex-wrap -mx-3">
    <div class="w-full px-3 mb-6">
      <div class="bg-white rounded-lg shadow-lg p-6">
        <h2 class="text-xl font-bold mb-2">Nama Lengkap</h2>
        <p class="text-gray-700 text-base">Nama lengkap Anda.</p>
        <h2 class="text-xl font-bold mb-2">Tanggal Lahir</h2>
        <p class="text-gray-700 text-base">Tanggal lahir Anda.</p>
        <h2 class="text-xl font-bold mb-2">Alamat</h2>
        <p class="text-gray-700 text-base">Alamat Anda.</p>
        <h2 class="text-xl font-bold mb-2">Kontak</h2>
        <p class="text-gray-700 text-base">Nomor telepon Anda.</p>
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
<!-- End Halaman Biodata -->
@endsection
