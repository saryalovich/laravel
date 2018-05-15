@extends("layout")
@section("body")
	<form action="/addPost" method="post" enctype="multipart/form-data">
		@csrf
		<input type="text" name="title">
		<input type="text" name="body">
		<input type="file" name="img">
		<button>new post</button>
	</form>

@endsection