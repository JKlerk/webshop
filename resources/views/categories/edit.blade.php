<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">
	<div class="md:flex">
		<form autocomplete="off"  method="POST" action="{{ url('admin/edit/category/' . $category->id) }}" enctype="multipart/formdata" class="flex w-full justify-center" _lpchecked="1">
			@csrf
			<div class="antialiased p-5 w-1/4 rounded border-b shadow mt-4 relative border border-black">
            	<div class="absolute pin-t pin-r">
            		<a class="btn text-black text-xl w-8" href="{{ url()->previous() }}"><i class="fas fa-arrow-left"></i></a>
            	</div>
				<div class="mt-4">
					<p class="text-trans font-semibold text-base">Title</p>
					<input name="title" value="{{$category->title}}" placeholder="Enter the name" class="mt-2 w-full mb-2 border-b border-black">
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