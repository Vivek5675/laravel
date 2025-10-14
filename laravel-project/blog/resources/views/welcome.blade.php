<h1>Hello Laravel</h1>
<h3>
	<a href="/home">Home Page</a>

	<h3>
		{{URL::previous()}}
	</h3>
	<h3><a href="{{URL::to('home')}}">Home Page</a></h3>
	<h3><a href="{{URL::to('about',['Test User'])}}">About Name Page</a></h3><br>
	<h3><a href="{{URL::to('about',['Test User'])}}">About Name Page</a></h3><br>
	<h4><a href="{{route('nr')}}">Go To Name Route Page</a></h4>
</h3> 