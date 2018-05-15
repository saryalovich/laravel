@extends("layout")
@section("body")

	<h1></h1>
	<img src="{{asset($zapis->path)}}">
	{{$zapis->body}}
	<form method="POST" action="/comment/{{$zapis->id}}">
	@csrf
		<input placeholder="your comment" name="comment_body">
		<button type="submit">Add comment</button>
	</form>
	
@endsection
@section("link")
	@foreach($results as $result)
		<li><a href="/posts/{{$result->id}}">{{$result->name}}</a></li>
	@endforeach
@endsection