@include('layouts.header')
<form method="POST" action="{{ route('login') }}" autocomplete="off">
    @csrf
    <div class="animated fadeIn bg-black container mx-auto rounded shadow p-10" style="max-width: 400px;">
        <div class="text-white">
            <h1 class="text-3xl">Login page</h1>
            <div class="w-full shadow h-1 mt-1 mb-10 bg-yellow"></div>
            <p class="text-lg mb-1">E-Mail</p><input class="rounded w-full p-2 mb-6 text-xl" type="email" placeholder="E-Mail" name="email"></input>
            <p class="text-lg mb-1">Password</p><input class="rounded w-full p-2 mb-6 text-xl" type="password" placeholder="Password" name="password"></input>
            <button type="submit" class="text-xl mt-4 w-full btn btn-yellow">Login</button>
        </div>
    </div>
</form>