<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">

	{{-- Black bar --}}
	
	<div class="min-h-screen md:flex">
		<form autocomplete="off" action="POST" enctype="multipart/formdata" class="flex w-full justify-center" _lpchecked="1">
			@csrf
			<div class="antialiased p-5 w-1/4 rounded border shadow mt-4 relative border-1 border-black" style="height: 500px;">
				<div class="mt-4">
					<p class="text-trans font-semibold text-base">Title</p>
					<input name="title" class="w-full text-2xl mb-2 border border-black">
				</div>

	            <div class="mt-5">
	            	<p class="text-trans font-semibold text-base">Description</p>
	            	<textarea name="description" class="mt-2 rounded h-24 w-full text-base border border-black"></textarea>	
	            </div>

	            <div class="mt-5">
	            	<p class="text-trans font-semibold text-base">Sizes</p>
	            	<select name="size">
	            		<option></option>
	            		<option value="S"></option>
	            		<option value="M"></option>
	            		<option value="L"></option>
	            	</select>
	            </div>

{{-- 	            <div class="mt-5">
	            	<p class="text-trans font-semibold text-base">Status</p>
	            	<input name="status" class="text-base rounded p-2 mt-2 border border-black">
	            </div> --}}

	            <

	            <div class="mt-3">
	            	<input type="file" name="src">
	            </div>

            	<div class="absolute pin-t pin-r">
            		<a class="btn text-black text-xl w-8" href="https://webshop.test/admin"><i class="fas fa-arrow-left"></i></a>
            	</div>
            	<div class="absolute pin-b pin-l">
            		<div class="w-12 text-center shadow h-1 my-2 bg-black"></div>
            		<div class="flex">
            			<a class="border-t border-r border-black p-2 text-black text-center text-xl w-32 hover:underline" href="#">Add</a>
            		</div>
            	</div>
            </div>
	    </form>	
	</div>
{{-- @include('layouts.footer') --}}
</body>
</html>