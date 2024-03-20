@extends('layout.main')
@section('content')
<!-- Konten Biodata -->
<div class="w-full px-6 py-6 mx-auto">
 <div class="flex flex-wrap -mx-3">
    <div class="w-full px-3 mb-6">
      <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex items-center">
          <img src="assets/img/profil.jpg" alt="Profile Picture" class="w-24 h-24 rounded-full mr-4" width="200" height="100">
          <div>
            <h2 class="text-xl font-bold">Nama Lengkap</h2>
            <p class="text-gray-700 text-base">Ranti Zia Ramadania</p>
          </div>
        </div>
        <div class="mt-4">
          <h2 class="text-lg font-bold">Alamat</h2>
          <p class="text-gray-700 text-base">Pontianak, Kalimantan Barat</p>
          <h2 class="text-lg font-bold">Kontak</h2>
          <p class="text-gray-700 text-base">rantizia14@gmail.com</p>
        </div>
      </div>
    </div>
 </div>
</div>
<!-- End Konten Biodata -->
@endsection
