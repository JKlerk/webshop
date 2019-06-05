<!doctype html>
@include('layouts.header')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body class="animated fadeIn">
        <div class="bg-white rounded-b w-full flex" style="height: 400px;">
            	<div class="flex m-10 justify-center w-full">
            		<div class="w-1/5 border border-1 rounded">
            			<h3 class="text-center m-5">Orders</h3>
            			<div class="flex mb-3 border-b border-t border-1">
	            			<div class="w-1/2 my-auto ml-2">
	            				<p class="">Order 1</p>
	            			</div>
	            			<div class="flex flex-1 justify-end mr-2">
	            				<p class="bg-green rounded text-white p-2 my-1">Finished</p>
	            			</div>
            			</div>
          			<div class="flex mb-3 border-b border-t border-1">
	            			<div class="w-1/2 my-auto ml-2">
	            				<p class="">Order 1</p>
	            			</div>
	            			<div class="flex flex-1 justify-end mr-2">
	            				<p class="bg-orange rounded text-white p-2 my-1">Waiting..</p>
	            			</div>
            			</div>
            		</div>
            		<div class="w-1/5 mx-5">
	            		<p>Your name</p>
	            		<input type="text" disabled="disabled" class="mt-2 w-full block border py-2 px-2 rounded cursor-not-allowed" value="{{ auth()->user()->name }}">
	            		<input type="text" disabled="disabled" class="mt-2 w-full block border py-2 px-2 rounded cursor-not-allowed" value="{{ auth()->user()->email }}">
	            		<p class="mt-5">Profile creation date</p>
	            		<input type="text" disabled="disabled" class="mt-2 w-full block border py-2 px-2 rounded cursor-not-allowed" value="{{ auth()->user()->created_at }}">
	            		<div class="mt-5">
		            		<a class="bg-blue p-2 rounded text-white hover:shadow hover:bg-blue-dark no-underline hover:cursor-pointer" href="#" onclick="passwordChange()">Change password</a>
	            			<a class="bg-red p-2 rounded text-white hover:shadow hover:bg-e-dark no-underline hover:bg-red-dark" href="{{ url('deleteuser/') }}">Delete account</a>
	            		</div>
	            		<div class="mt-5">
	            		@if(auth()->user()->level == 1)
	            			<a class="p-2 rounded hover:shadow border text-black border-1 border-black no-underline " href="/admin/">Admin</a>
	            		</div>
	            		@endif
	            	</div>
            		<div id="pc" class="hidden w-1/5 animated">
            			<form class="flex" method="POST" action="{{ route('password.update') }}" autocomplete="off">
            				@csrf
            				<div>
            					<p>Enter your new password</p>
            					<input class="mt-2 block border py-2 px-2 rounded" type="password" placeholder="Old Password" name="current-password"/>
			            		<input class="mt-2 block border py-2 px-2 rounded" type="password" placeholder="New Password" name="new-password"/>
       							<input class="mt-2 block border py-2 px-2 rounded" type="password" placeholder="Confirm Password" name="new-password_confirmation"/>
       							@if ($errors)
       								<strong class="text-red mt-2">{{ $errors->first('current-password') }}</strong>
       								<strong class="text-red block">{{ $errors->first('new-password') }}</strong>
       								<strong class="text-red">{{ $errors->first('new-password_confirmation') }}</strong>
       							@endif
            					<button type="submit" class="bg-orange p-2 w-full rounded text-white hover:shadow hover:bg-e-dark no-underline mt-3">Change password</button>
            				</div>
            			</form>
            		</div>
            	</div>
        </div>
        <script type="text/javascript">
        	function passwordChange(){
        		document.getElementById("pc").classList.remove('hidden');
        		document.getElementById("pc").classList.add('fadeIn');
        	}
        </script>
    </body>
</html>