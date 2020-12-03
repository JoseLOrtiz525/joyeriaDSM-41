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
						@if(empty(session('session_id')))
					<h1></h1>
					@else
					<a href="{{ route ('logout')}}">Log Out</a>
					@endif
						
					</ul>
				</header>