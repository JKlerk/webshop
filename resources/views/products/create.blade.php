<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">

	{{-- Black bar --}}
	
	<div class="min-h-screen md:flex">
		<form autocomplete="off"  method="POST" action="{{ url("/admin/create") }}" enctype="multipart/formdata" class="flex w-full justify-center" _lpchecked="1">
			@csrf
			<div class="antialiased p-5 w-1/4 rounded border-b shadow mt-4 relative border border-black" style="height: 500px;">
	            @if ($errors)
	                <div class="text-red rounded mt-2">
	                    <span class="invalid-feedback" role="alert">
	                        <strong class="block">{{ $errors->first('title') }}</strong>
	                        <strong class="block">{{ $errors->first('desc') }}</strong>
	                        <strong class="block">{{ $errors->first('price') }}</strong>
	                    </span>
	                </div>
	            @endif
				<div class="mt-4">
					<p class="text-trans font-semibold text-base">Title</p>
					<input name="title" placeholder="Enter the name" class="mt-2 w-full mb-2 border-b border-black">
				</div>

	            <div class="mt-5">
	            	<p class="text-trans font-semibold text-base">Description</p>
	            	<textarea name="desc" placeholder="Enter the description" class="mt-2 rounded h-24 w-full text-base border-b border-black"></textarea>	
	            </div>

				<div class="mt-4">
					<p class="text-trans font-semibold text-base">Price</p>
					<input name="price" type="number" placeholder="Enter price" class="mt-2 w-full mb-2 border-b border-black">
				</div>

            	<div class="absolute pin-t pin-r">
            		<a class="btn text-black text-xl w-8" href="https://webshop.test/admin"><i class="fas fa-arrow-left"></i></a>
            	</div>
            	<div class="absolute pin-b pin-l">
            		<div class="w-12 text-center shadow h-1 my-2 bg-black"></div>
            		<div class="flex">
            			<button type="submit" class="border-t border-r border-black p-2 text-black text-center text-xl w-32 hover:underline" href="#">Add</button>
            		</div>
            	</div>
            </div>
	    </form>	
	</div>
{{-- @include('layouts.footer') --}}
</body>
</html>