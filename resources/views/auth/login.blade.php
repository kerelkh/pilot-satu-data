@extends('layout.index')

@section('content')
<div class="flex justify-center py-10">
    <form method="POST" class="w-[300px] bg-white drop-shadow-lg p-5">
        @csrf
        <p class="text-center uppercase tracking-wide mb-5 font-bold">Login</p>
        @if($errors)
            @foreach ($errors as $erros)
                <p>{{ $erros }}</p>
            @endforeach
        @endif
        @if(session('error'))
            <p class="text-red-600 bg-red-50 p-1 text-xs">{{ session('error') }}</p>
        @endif
        <div class="w-full p-1 flex items-center border-b border-black/50 mb-2">
            <input type="text" id="username" name="username" placeholder="username..." class="outline-none p-2 w-full"><i class="fa-solid fa-user" autofocus></i>
        </div>
        <div class="w-full p-1 flex items-center border-b border-black/50 mb-2">
            <input type="password" id="password" name="password" placeholder="password..." class="outline-none p-2 w-full"><i class="fa-solid fa-user"></i>
        </div>

        <button class="p-2 bg-black/50 hover:bg-black text-white w-full mt-5">Sign In</button>
    </form >
</div>
@stop
