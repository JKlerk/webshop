<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>

<body class="animated fadeIn">
	<div class="container mx-auto max-w-xl border ">
        <h1 class="my-10 ml-3">Products</h1>

        <div class="flex border border-black mb-2 m-3">
            <div class="bg-black flex p-4 w-full">
                <p class="text-white">Product 1 <span class="text-grey block">Description</span></p>
                
                <div class="flex flex-1 justify-end items-center">
                    <p class="text-white">$price</p>
                </div>
            </div>
			<div class="flex flex-1 justify-end items-center">
                <a href="" class="no-underline p-4 border-r border-black text-black"><i class="fas fa-pencil-alt hover:underline"></i></a>
                <a href="" class="no-underline p-4 text-black hover:underline">X</a>
            </div>
        </div>

        <div class="flex border border-black mb-2 m-3">
            <div class="bg-black flex p-4 w-full">
                <p class="text-white">Product 2 <span class="text-grey block">Description</span></p>
                
                <div class="flex flex-1 justify-end items-center">
                    <p class="text-white">$price</p>
                </div>
            </div>
			<div class="flex flex-1 justify-end items-center">
                <a href="" class="no-underline p-4 border-r border-black text-black"><i class="fas fa-pencil-alt hover:underline"></i></a>
                <a href="" class="no-underline p-4 text-black hover:underline">X</a>
            </div>
        </div>

        <div class="w-full flex flex-1 justify-end mb-2 mt-6">
        	<a href="/create" class="border-1 border border-black text-black p-4 mr-3 hover:underline">+ Add Product</a>
        </div>
    </div>
</body>