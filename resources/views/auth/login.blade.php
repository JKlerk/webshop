@include('layouts.header')
<form method="POST" action="{{ route('login') }}" autocomplete="off">
    @csrf
    <div class="animated fadeIn container mx-auto rounded shadow border border-grey p-10" style="max-width: 400px;">
        <a class="text-black no-underline hover:underline" href="/"><i class="fas fa-arrow-left"></i></a>
        <div class="text-white">
            <h1 class="text-3xl text-black mb-5 text-center">Login page</h1>
            @if ($errors)
                <div class="text-red rounded mt-2">
                    <span class="invalid-feedback" role="alert">
                        <strong class="block">{{ $errors->first('email') }}</strong>
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                </div>
            @endif
            <input class="border w-full p-2 text-xl border-grey mt-5" type="email" placeholder="E-Mail" name="email" value="{{ old('email') }}"/>
            <input class="border w-full p-2 text-xl border-grey" type="password" placeholder="Password" name="password"/>
            <button type="submit" class="text-xl mt-4 w-full p-3 rounded shadow text-white bg-black">Login</button>
            <p class="text-grey mt-5">Need an account? <a href="/register" class="text-blue no-underline hover:underline">Click here</a></p>
        </div>
    </div>
</form>