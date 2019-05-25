<link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/vue"></script>


<div id="app">
	
	<div class="p-5 bg-white w-full shadow text-center">
		<h1 class="font-anton text-5xl text-black">Webshop</h1>
		<p class="text-grey-darkest">Tekst</p>
	</div>

    <nav class="bg-black p-3 shadow flex mb-8">
        <div class="p-1 flex justify-end w-full">
            <div class="w-full my-auto flex justify-end mr-3">
                <a class="text-white no-underline hover:underline" href="/login">Login/Register</a>
            </div>
            <a class="bg-green rounded text-white p-3 no-underline" href=""><i class="fas fa-shopping-cart"></i></a>
        </div>
    </nav>
</div>
