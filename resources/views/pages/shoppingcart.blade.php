<!DOCTYPE html>
<html>
<head>
	@include('layouts.header')
</head>
<body class="animated fadeIn">
	<div class="container mx-auto max-w-xl border ">
        <h1 class="my-10 ml-3">Shoppingcart</h1>

        @if($items != null)
            @foreach($items as $item)
                <div class="flex border-b border-grey mb-2 m-3">
                    <div class="flex p-4 w-full">
                        <p class="text-black">{{$item['title']}} <span class="text-grey block">{{$item['shortdesc']}}</span></p>
                        <div class="flex flex-1 justify-end items-center">
                            <p class="text-black">${{$item['price']}}</p>
                        </div>
                    </div>
        			<div class="flex flex-1 justify-end items-center">
                        <form id="{{ $item['id'] }}" autocomplete="off"  method="POST" action="{{ url('/shoppingcart/update/' . $item['id']) }}" enctype="multipart/form-data" class="flex w-full justify-center" _lpchecked="1">
            				@csrf
                            <select name="quantity" onchange="submit{{ $item['id'] }}()" class="bg-white border border-black ml-1">
                                @for($i = 1; $i <= 10; $i++)
                                    <option @if($item['quantity'] == $i) selected @endif value="{{ $i }}">{{ $i }}</option>
                                @endfor
            				</select>
                            <noscript><input type="submit" value="Submit"></noscript>
                        </form>
                        <a href="{{ url('/shoppingcart/remove/' . $item['id'])}}" class="no-underline m-2 ml-1 p-2 text-black hover:underline">X</a>
                    </div>
                </div>
            @endforeach
            @php
                $total = 0;

                foreach ($items as $item) {
                    $total += ($item['price'] * $item['quantity']);
                }

                $price = $total
            @endphp
            <div class="flex justify-end mt-5 items-center">
                <p class="border-b border-black mr-4">Total: ${{ $price }}</p>
                <a href="{{ url('/shoppingcart/pay') }}" class="py-2 px-10 m-2 rounded border border-black hover:underline text-black" href="#">Pay</a>
            </div>
        @else
            <p class="text-center mb-20">Shoppingcart is empty</p>
        @endif
    </div>
    <script type="text/javascript">
        @if($items != null)
            @foreach($items as $item)
            function submit{{ $item['id'] }}(){
                document.getElementById("{{ $item['id'] }}").submit();
            }
            @endforeach
        @endif
    </script>
</body>
</html>