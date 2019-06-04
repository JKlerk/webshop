<link rel="stylesheet" href="{{ asset(mix('css/app.css')) }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/vue"></script>


<div id="app">
	

    <nav class="p-5 border-black border flex mb-8">
        <div class="p-2 flex justify-center w-full">
            <div class="container mx-auto max-w-xl my-auto flex my-auto">
                <div class="flex justify-between w-1/4">
                    <a class="text-black no-underline hover:underline my-auto" href="/login">Tab 1</a>
                    <a class="text-black no-underline hover:underline my-auto" href="/login">Tab 2</a>
                    <a class="text-black no-underline hover:underline my-auto" href="/login">Tab 3</a>
                </div>
                <div class="flex flex-1 justify-end">

                @if (Auth::check()) 
                    <div class="my-auto">
                        <p class="text-white inline"><a class="text-black no-underline hover:underline" href="/profile">My profile</a></p>
                        <a href="/logout" class="text-black hover:text-red no-underline"><i class="fas fa-sign-out-alt"></i></a>                             
                    </div>
                @else
                    <a class="text-black no-underline hover:underline my-auto mr-2" href="/login">Login/Register</a>
                    <a class="bg-green rounded p-2 no-underline" href=""><i class="fas fa-shopping-cart"></i></a>
                @endif
                </div>
            </div>
        </div>
    </nav>
</div>
