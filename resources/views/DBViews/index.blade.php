<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        @if (session('success'))
            @if (session('type'))
                    <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            @endif
        <div class="d-flex mb-5 justify-content-between">
        <h2> All Posts </h2>
     <a href="{{route('add')}}"><button class="btn btn-primary btn-lg">Add New Post</button></a>
</div>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th style="width: 200px">Created At</th>
                <th style="width: 150px">Action</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</th>
                <td>{{$post->title}}</th>
                <td>{{$post->body}}</th>
                <td>{{$post->created_at}}</th>
                <td><a href="{{route('edit',$post->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <form class ="d-inline" onclick="return confirm('Are You Sure ?')" action="{{route('delete',$post->id)}}" method="POST">
                        @csrf @method('delete')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    {{-- <a onclick="return confirm('Are You Sure ?')"
                     href="{{route('delete',$post->id)}}" class="btn btn-danger btn-sm">Delete
                    </a> --}}
                </th>
            </tr>
            @endforeach
        </table>
        {{$posts->links()}}
    </div>
</body>
</html>
        {{-- <form action="{{route('add')}}" method="get">
            @csrf
             <button class="btn btn-primary btn-lg">Add New Post</button>
        {{-- <a href="{{route('add')}}"><button class="btn btn-primary btn-lg">Add New Post</button></a>
    </form> --}}

                        {{-- <form class ="d-inline" action="{{route('edit',$post->id)}}" method="get">
                    @csrf
                    <button class="btn btn-primary btn-sm">Edit</button> --}}
                     {{-- <a href="{{route('edit',$post->id)}}" class="btn btn-primary btn-sm">Edit</a>
                </form>--}}
