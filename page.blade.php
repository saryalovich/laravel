@extends("layout")
@section("body")
	<h1></h1>
	@foreach($posts as $post)
		<h1>{{$post->title}}</h1>
		{{str_limit($post->body, 100)}}
		<li><a href="/post/{{$post->id}}">Читать дальше</a></li>
	@endforeach
@endsection
@section("link")
	@foreach($results as $result)
		<li><a href="/posts/{{$result->id}}">{{$result->name}}</a></li>
	@endforeach
@endsection