<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">
	<div class=" md:flex">
		<form autocomplete="off"  method="POST" action="{{ url("/admin/create/category") }}" enctype="multipart/form-data" class="flex w-full justify-center" _lpchecked="1">
			@csrf
			{{csrf_field()}}

			<div class="antialiased p-5 w-1/4 border-b shadow mt-4 relative border border-black">
            	<div class="absolute pin-t pin-r">
            		<a class="btn text-black text-xl w-8" href="{{ url()->previous() }}"><i class="fas fa-arrow-left"></i></a>
            	</div>
	            @if ($errors)
	                <div class="text-red rounded mt-2">
	                    <span class="invalid-feedback" role="alert">
	                        <strong class="block">{{ $errors->first('title') }}</strong>
	                    </span>
	                </div>
	            @endif
				<div class="mt-4">
					<p class="text-trans font-semibold text-base">Title</p>
					<input name="title" placeholder="Enter the name" class="mt-2 w-full mb-2 border-b border-black">
				</div>

            	<div class="mt-5">
            		<div class="w-12 text-center shadow h-1 my-2 bg-black"></div>
            		<div class="flex">
            			<button type="submit" class="border border-black p-2 text-black text-center text-xl w-32 hover:underline" href="#">Add</button>
            		</div>
            	</div>
            </div>
	    </form>	
	</div>
</body>
</html>