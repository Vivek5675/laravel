<x-message-banner class="" msg="user in About page // this is componet"/>

@include('common.header')

<h1>About</h1>
<h1>{{$name}}</h1>

@includeif('common.common',['page'=>"This is inner php file content"])
<!-- common.common file does not exist then not error show because use the includeif. -->