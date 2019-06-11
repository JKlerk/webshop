<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">

	<div class="container mx-auto max-w-xl border ">
        <h1 class="my-10 ml-3">Products</h1>
        @foreach($products as $product)
            <div class="flex border border-black mb-2 m-3">
                <div class="bg-black flex p-4 w-full">
                    <p class="text-white">{{$product->title}} <span class="text-grey block">{{$product->shortdesc}}</span></p>
                    <div class="flex flex-1 justify-end items-center">
                        <p class="text-white mr-1">{{$product->status}} |</p>
                        <p class="text-white">${{$product->price}}</p>
                    </div>
                </div>
    			<div class="flex flex-1 justify-end items-center">
    				<select class="bg-white border border-black ml-1">
    					<option value="1">1</option>
    					<option value="2">2</option>
    					<option value="3">3</option>
    					<option value="4">4</option>
    					<option value="5">5</option>
    					<option value="6">6</option>
    					<option value="7">7</option>
    					<option value="8">8</option>
    				</select>
                    <a href="{{ url('/admin/delete/' . $product->id)}}" class="no-underline m-2 ml-1 p-2 text-black hover:underline">X</a>
                </div>
            </div>
        @endforeach

        <div class="w-full flex flex-1 justify-end mb-2 mt-6">
        	<a href="{{ url('/admin/create')}}" class="border-1 border border-black text-black p-4 mr-3 hover:underline">+ Add Product</a>
        </div>
    </div>
</body>
</html>