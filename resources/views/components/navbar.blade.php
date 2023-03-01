<nav class="sticky top-0 z-40 py-4 px-20 bg-white drop-shadow-sm">
    <div class="flex justify-between items-center">
        <div id="logo" class="flex items-center gap-3">
            <img src="{{ asset('logo/logo.png') }}" alt="" class="h-12">
            <p class="uppercase font-medium text-sm">Satu data<br>POLHUKAM</p>
        </div>
        <div class="flex justify-center items-center gap-10">
            <a href="/" class="font-medium capitalize text-gray-600 hover:text-black {{ Request::is('/') ? 'text-yellow-600' : '' }}">Beranda</a>
            <a href="/dataset" class="font-medium capitalize text-gray-600 hover:text-black {{ Request::is('dataset') ? 'text-yellow-600' : '' }}">Dataset</a>
            <a href="/organisasi" class="font-medium capitalize text-gray-600 hover:text-black {{ Request::is('organisasi') ? 'text-yellow-600' : '' }}">Organisasi</a>
            <a href="/tentang" class="font-medium capitalize text-gray-600 hover:text-black {{ Request::is('tentang') ? 'text-yellow-600' : '' }}">Tentang</a>
            <a href="" class="font-medium capitalize text-gray-600 hover:text-black">Login</a>
        </div>
    </div>
</nav>
