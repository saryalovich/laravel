@extends("layout")
@section("body")
<h1>Блог Васильева Артёма</h1>
@endsection
@section("link")
	@foreach($results as $result)
		<li><a href="/posts/{{$result->id}}">{{$result->name}}</a></li>
	@endforeach
@endsection