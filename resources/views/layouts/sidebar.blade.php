<div class="flex-none font-nixie border-r p-10 border-grey-darkest w-full md:max-w-xs text-black">
	<div class="">
		<p class="font-anton text-3xl">Example 1</p>
		<ul class="leading-none pl-2 text-2xl">
			<li class="abtn">Lorem</li>
			<li class="abtn">Lorem</li>
			<li class="abtn">Lorem</li>
		</ul>
	</div>
	<div class="my-5">
		<p class="font-anton text-3xl">Example 2</p>
		<ul class="leading-none pl-2 text-2xl">
			<li class="abtn">Lorem</li>
			<li class="abtn">Lorem</li>
			<li class="abtn">Lorem</li>
		</ul>
	</div>
	<div>
		<p class="font-anton text-3xl">Profile</p>
		<ul class="leading-none pl-2 text-2xl">
			@if (Auth::check())
				<li class="abtn"><a class="abtn" href="/create">Add product</a></li>
				<li class="abtn"><a class="abtn" href="/logout">Logout</a></li>
			@else
				<li><a class="abtn" href="/login">Login</a></li>  
			@endif
		</ul>
	</div>
</div>
