<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">
	<div class="container mx-auto w-1/3 border ">
        <h1 class="my-10 ml-3 text-center">Your receipt</h1>
        @if($items != null)
            @foreach($items as $item)
                <div class="mb-5">
                    <div class="flex justify-center">
                        <div class="w-1/2 text-lg">
                            <div class="w-full flex">
                                <p class="mr-5">+ ${{ $item['price']}}</p>
                                <p class="flex flex-1 justify-end">{{ $item['title']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="w-1/2 text-lg mb-1">
                            <p class="flex flex-1 justify-end text-grey">Size: {{ $item['selectedSize'] }}</p>
                            <p class="flex flex-1 justify-end text-grey">Quantity: {{ $item['quantity'] }}</p>
                            <p class="flex flex-1 justify-end text-grey">- {{ $item['selectedTopping'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Shopping cart is empty</p>
        @endif

        <div class="flex justify-center my-10">
            <div class="w-1/2 text-lg">
                <div class="w-full flex">
                    @php
                        $total = 0;

                        foreach ($items as $item) {
                            $total += ($item['price'] * $item['quantity']);
                        }

                        $price = $total;
                    @endphp
                    <p class="flex flex-1 justify-end border-b border-black">Total: ${{ $price }}</p>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <a href="{{ url('/shoppingcart/order') }}" class="py-2 px-10 rounded border border-black hover:underline text-black" href="#">Continue</a>
        </div>
    </div>
</body>
</html>