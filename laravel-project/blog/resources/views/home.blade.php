<!-- component -->
<x-message-banner class="success" msg="User login successfully"/>
<br>
<br>
<x-message-banner class="warning" msg="all field are required"/>
<br>
<br>
<x-message-banner class="error" msg="password not correct please try again."/>


<!-- subview(includ file) -->
@include('common.header')

<h1>Home Page</h1>
<h1>{{$user}}</h1>
<!-- <h1><?php echo $user ?></h1> -->
<!-- <h1>{{rand()}}</h1> -->

<div>
	@foreach($arr as $user)
	<h4>{{$user}}</h4>
	@endforeach
</div>

<!-- <div>
	@for($i=0;$i<=10;$i++)
	 <h3>{{$i}}</h3>
	@endfor
</div> -->

<a href="/">Welcome Page</a> <br>
<a href="/about/vivek">About Page</a><br>
<a href="/url-genration">URL Page</a>
<h3>
	{{URL::previous()}}
</h3>

@include('common.inner',['page'=>"This is inner php file content"])

<style>
	.success{
		background-color: black;
		color: green;
		padding: 3px 10px;
		border-radius: 4px;
		display: inline-block;
		margin: 10px;
	}

	.error{
		background-color: black;
		color: red;
		padding: 3px 10px;
		border-radius: 4px;
		display: inline-block;
		margin: 10px;
	}

	.warning{
		background-color: black;
		color: orange;
		padding: 3px 10px;
		border-radius: 4px;
		display: inline-block;
		margin: 10px;
	}
</style>

