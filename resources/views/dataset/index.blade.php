@extends('layout.index')

@section('content')
<div class="w-3/5 mx-auto grid grid-cols-4 gap-10 my-10">
    <div class="col-span-1">
        <div class="h-fit bg-white drop-shadow">
            <p class="p-2 text-center bg-gray-100">Topik</p>
            <div class="flex flex-col items-stretch divide-y-2 gap-2 text-center">
                <p class="p-2 hover:bg-gray-50 cursor-pointer">Deputi Bidang Koordinasi<br>Politik Dalam Negeri</p>
                <p class="p-2 hover:bg-gray-50 cursor-pointer">Deputi Bidang Koordinasi<br>Politik Dalam Negeri</p>
                <p class="p-2 hover:bg-gray-50 cursor-pointer">Deputi Bidang Koordinasi<br>Politik Dalam Negeri</p>
                <p class="p-2 hover:bg-gray-50 cursor-pointer">Deputi Bidang Koordinasi<br>Politik Dalam Negeri</p>
                <p class="p-2 hover:bg-gray-50 cursor-pointer">Deputi Bidang Koordinasi<br>Politik Dalam Negeri</p>
                <p class="p-2 hover:bg-gray-50 cursor-pointer">Deputi Bidang Koordinasi<br>Politik Dalam Negeri</p>
            </div>
        </div>
        <div class="h-fit bg-white drop-shadow mt-5">
            <p class="p-2 text-center bg-gray-100">Topik</p>
            <div class="flex flex-col items-stretch divide-y-2 gap-2 text-center">
                <p class="p-2 hover:bg-gray-50 cursor-pointer">Politik</p>
                <p class="p-2 hover:bg-gray-50 cursor-pointer">Hukum</p>
                <p class="p-2 hover:bg-gray-50 cursor-pointer">Keamanan</p>
            </div>
        </div>
    </div>
    <div class="col-span-3 h-fit p-2">
        <form>
            <label for="search" class="w-full py-2 px-4 bg-white drop-shadow rounded-lg flex justify-center items-center">
                <input type="search" name="search" id="search" class=" w-full outline-none pr-4 placeholder:italic" placeholder="Cari Dataset...">
                <button><i class="fa-solid fa-magnifying-glass text-yellow-600"></i></button>
            </label>
        </form>
        <div class="my-5">
            <div class="bg-white drop-shadow p-3 mb-3">
                <p class="text-right mb-2 text-xs text-gray-600">21 Desember 2022</p>
                <p class="font-medium text-lg mb-2">Jumlah Pos Lintas Batas</p>
                <p class="text-xs">Sumber Data: <span class="font-bold">Badan Pengelola Perbatasan Negara</span></p>
                <p class="text-xs mb-3">PIC Data: <span class="font-bold">Deputi Bidang Koordinasi Pertahanan Negara</span></p>
                <div class="flex items-center gap-5 mb-3 text-xs">
                    <a href="" class="rounded-lg bg-blue-500 hover:bg-blue-600 text-white p-2">Lihat Detail Data</a>
                    <a href="" class="rounded-lg bg-yellow-300 hover:bg-yellow-500 p-2">Dataset Internal</a>
                </div>
            </div>
            <div class="bg-white drop-shadow p-3 mb-3">
                <p class="text-right mb-2 text-xs text-gray-600">21 Desember 2022</p>
                <p class="font-medium text-lg mb-2">Jumlah Pos Lintas Batas</p>
                <p class="text-xs">Sumber Data: <span class="font-bold">Badan Pengelola Perbatasan Negara</span></p>
                <p class="text-xs mb-3">PIC Data: <span class="font-bold">Deputi Bidang Koordinasi Pertahanan Negara</span></p>
                <div class="flex items-center gap-5 mb-3 text-xs">
                    <a href="" class="rounded-lg bg-blue-500 hover:bg-blue-600 text-white p-2">Lihat Detail Data</a>
                    <a href="" class="rounded-lg bg-yellow-300 hover:bg-yellow-500 p-2">Dataset Internal</a>
                </div>
            </div>
            <div class="bg-white drop-shadow p-3 mb-3">
                <p class="text-right mb-2 text-xs text-gray-600">21 Desember 2022</p>
                <p class="font-medium text-lg mb-2">Jumlah Pos Lintas Batas</p>
                <p class="text-xs">Sumber Data: <span class="font-bold">Badan Pengelola Perbatasan Negara</span></p>
                <p class="text-xs mb-3">PIC Data: <span class="font-bold">Deputi Bidang Koordinasi Pertahanan Negara</span></p>
                <div class="flex items-center gap-5 mb-3 text-xs">
                    <a href="" class="rounded-lg bg-blue-500 hover:bg-blue-600 text-white p-2">Lihat Detail Data</a>
                    <a href="" class="rounded-lg bg-yellow-300 hover:bg-yellow-500 p-2">Dataset Internal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
