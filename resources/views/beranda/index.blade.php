@extends('layout.index')

@section('content')
<div class="relative h-[350px]">
    <img src="{{ asset('images/bg.jpg') }}" alt="" class="w-full h-full object-cover">
    <div class="absolute inset-0 px-20 py-10 bg-white/30">
        <h1 class="uppercase font-bold text-2xl text-center mb-5">Statistik satu data polhukam</h1>
        <div class="flex justify-center gap-5 mb-10">
            <div class="w-[200px] bg-white drop-shadow-lg text-center p-5 rounded-lg">
                <p class="text-4xl">20</p>
                <p class="text-xl">Data Internal</p>
            </div>
            <div class="w-[200px] bg-white drop-shadow-lg text-center p-5 rounded-lg">
                <p class="text-4xl">8</p>
                <p class="text-xl">Organisasi</p>
            </div>
            <div class="w-[200px] bg-white drop-shadow-lg text-center p-5 rounded-lg">
                <p class="text-4xl">56</p>
                <p class="text-xl">Sumber Data</p>
            </div>
            <div class="w-[200px] bg-white drop-shadow-lg text-center p-5 rounded-lg">
                <p class="text-4xl">23</p>
                <p class="text-xl">Data Eksternal</p>
            </div>
        </div>
        <div class="w-2/4 mx-auto ">
            <form>
                <label for="search" class="bg-white px-4 py-3 rounded-lg flex items-center text-lg">
                    <input type="search" id="search" name="search" class="outline-none pr-4 w-full" placeholder="Temukan data dari 43 dataset"/>
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </label>
                </form>
        </div>
    </div>
</div>
<div class="px-20 py-10">
    <h1 class="uppercase font-medium text-xl text-center mb-5">topik data</h1>
    <div class="mb-5">
        <div class="flex justify-center items-center gap-10">
            <div class="w-1/6 bg-white drop-shadow-lg aspect-square flex flex-col justify-center items-center gap-4">
                <i class="fa-solid fa-building-columns text-6xl text-yellow-500"></i>
                <p class="text-center">Politik Dalam Negeri</p>
            </div>
            <div class="w-1/6 bg-white drop-shadow-lg aspect-square flex flex-col justify-center items-center gap-4">
                <i class="fa-solid fa-globe text-6xl text-yellow-500"></i>
                <p class="text-center">Politik Luar Negeri</p>
            </div>
            <div class="w-1/6 bg-white drop-shadow-lg aspect-square flex flex-col justify-center items-center gap-4">
                <i class="fa-solid fa-scale-balanced text-6xl text-yellow-500"></i>
                <p class="text-center">Hukum dan HAM</p>
            </div>
            <div class="w-1/6 bg-white drop-shadow-lg aspect-square flex flex-col justify-center items-center gap-4">
                <i class="fa-solid fa-shield-halved text-6xl text-yellow-500"></i>
                <p class="text-center">Pertahanan</p>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <div class="flex justify-center items-center gap-10">
            <div class="w-1/6 bg-white drop-shadow-lg aspect-square flex flex-col justify-center items-center gap-4">
                <i class="fa-solid fa-shield text-6xl text-yellow-500"></i>
                <p class="text-center">Keamanan dan Ketertiban</p>
            </div>
            <div class="w-1/6 bg-white drop-shadow-lg aspect-square flex flex-col justify-center items-center gap-4">
                <i class="fa-solid fa-users text-6xl text-yellow-500"></i>
                <p class="text-center">Kesatuan Bangsa</p>
            </div>
            <div class="w-1/6 bg-white drop-shadow-lg aspect-square flex flex-col justify-center items-center gap-4">
                <i class="fa-solid fa-tower-cell text-6xl text-yellow-500"></i>
                <p class="text-center">Komunikasi</p>
            </div>
            <div class="w-1/6 bg-white drop-shadow-lg aspect-square flex flex-col justify-center items-center gap-4">
                <i class="fa-solid fa-landmark text-6xl text-yellow-500"></i>
                <p class="text-center">Aparatur dan Reformasi</p>
            </div>
        </div>
    </div>
</div>
<div class="px-20 py-10">
    <h1 class="uppercase font-medium text-xl text-center mb-5">Dataset</h1>
    <div class="bg-white drop-shadow p-5 mb-3">
        <p class="text-right mb-3">21 Desember 2022</p>
        <p class="font-medium text-2xl mb-3">Jumlah Pos Lintas Batas</p>
        <p class="text-sm">Sumber Data: <span class="font-bold">Badan Pengelola Perbatasan Negara</span></p>
        <p class="text-sm mb-3">PIC Data: <span class="font-bold">Deputi Bidang Koordinasi Pertahanan Negara</span></p>
        <div class="flex items-center gap-5 mb-3">
            <a href="" class="rounded-lg bg-blue-500 hover:bg-blue-600 text-white p-2">Lihat Detail Data</a>
            <a href="" class="rounded-lg bg-yellow-300 hover:bg-yellow-500 p-2">Dataset Internal</a>
        </div>
    </div>
    <div class="bg-white drop-shadow p-5 mb-3">
        <p class="text-right mb-3">21 Desember 2022</p>
        <p class="font-medium text-2xl mb-3">Jumlah Pos Lintas Batas</p>
        <p class="text-sm">Sumber Data: <span class="font-bold">Badan Pengelola Perbatasan Negara</span></p>
        <p class="text-sm mb-3">PIC Data: <span class="font-bold">Deputi Bidang Koordinasi Pertahanan Negara</span></p>
        <div class="flex items-center gap-5 mb-3">
            <a href="" class="rounded-lg bg-blue-500 hover:bg-blue-600 text-white p-2">Lihat Detail Data</a>
            <a href="" class="rounded-lg bg-yellow-300 hover:bg-yellow-500 p-2">Dataset Internal</a>
        </div>
    </div>
    <div class="bg-white drop-shadow p-5 mb-3">
        <p class="text-right mb-3">21 Desember 2022</p>
        <p class="font-medium text-2xl mb-3">Jumlah Pos Lintas Batas</p>
        <p class="text-sm">Sumber Data: <span class="font-bold">Badan Pengelola Perbatasan Negara</span></p>
        <p class="text-sm mb-3">PIC Data: <span class="font-bold">Deputi Bidang Koordinasi Pertahanan Negara</span></p>
        <div class="flex items-center gap-5 mb-3">
            <a href="" class="rounded-lg bg-blue-500 hover:bg-blue-600 text-white p-2">Lihat Detail Data</a>
            <a href="" class="rounded-lg bg-yellow-300 hover:bg-yellow-500 p-2">Dataset Internal</a>
        </div>
    </div>
    <div class="flex justify-center items-center my-5">
        <a href="" class="rounded-lg bg-yellow-300 hover:bg-yellow-500 p-2">Lihat Semua Data</a>
    </div>
</div>
@stop
