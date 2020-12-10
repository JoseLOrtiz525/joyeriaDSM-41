<!-- Header -->
<header id="header">
	<a href="{{ route('home')}}" class="logo"><strong>Joyeria</strong> Luminoseté</a>
	@if(empty(session('session_id')))
	<h1></h1>
	@else
	
	Hola {{session('session_name')}}

	@endif
	<ul class="icons">
		<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
		<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
		<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
		<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
		<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>

		@if(!empty(session('session_id')))

		<a href="{{ route ('logout')}}" class="button big">Log Out</a>

		@if (count(Cart::getContent()))

		<a href="{{route('carrito')}}" class="button big"> VER CARRITO </a>

		@endif

		@else
		<h1></h1>
		@endif

	</ul>
</header>