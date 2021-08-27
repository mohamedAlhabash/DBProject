<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <h2> Add New Posts </h2>
        @include('DBViews.errors')
        <form action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text" name="name" placeholder="Name" class="form-control">
                @error('Name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success px-5 btn-lg">Submit</button>
        </form>
    </div>


</body>
</html>
