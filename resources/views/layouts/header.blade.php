<link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

<div id="app">
	
	<div class="p-5 bg-yellow w-full shadow text-center">
		<h1 class="font-anton text-5xl text-black">Tabbishop</h1>
		<p class="text-grey-darkest">Tekst</p>
	</div>

    <nav class="bg-black p-3 shadow flex mb-16">
        <div class="p-1 flex justify-center w-full">
            <a class="hover:text-green-light mx-3 text-white text-base" href="{{ url('/') }}">Home</a>
            <a class="hover:text-green-light mx-3 text-white text-base"href="{{ url('/') }}">Figures</a>
            <a class="hover:text-green-light mx-3 text-white text-base"href="{{ url('/') }}">Games</a>
            <a class="hover:text-green-light mx-3 text-white text-base" href="{{ url('/') }}">Contact</a>
        </div>
    </nav>
</div>
