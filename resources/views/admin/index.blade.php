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
                    <a href="/admin/edit/{{$product->id}}" class="no-underline p-4 border-r border-black text-black"><i class="fas fa-pencil-alt hover:underline"></i></a>
                    <a href="/admin/delete/{{$product->id}}" class="no-underline p-4 text-black hover:underline">X</a>
                </div>
            </div>
        @endforeach

        <div class="w-full flex flex-1 justify-end mb-2 mt-6">
        	<a href="/admin/create" class="border-1 border border-black text-black p-4 mr-3 hover:underline">+ Add Product</a>
        </div>
    </div>
</body>