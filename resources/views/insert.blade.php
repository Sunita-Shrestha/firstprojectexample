<html>
    <head>
        <title></title>
        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
<body>

<div class="container">
    <h1 class="text-center">Add Post</h1>
    <form method="POST" action="{{route('posts.store')}}">
        <!-- @csrf token is used for security purpose -->
        @csrf
        <!-- mb-3 margin bottom style from bootstrap -->
        <div class="mb-3">
            <label><b>Post titile:</b></label>
            <input type="text", name="title" class="form-control" >
            <span style="color:red">@error('title'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label><b>Post author:</b></label>
            <input type="text", name="author" class="form-control">
            <span style="color:red">@error('author'){{$message}}@enderror</span>

        </div>
        <div class="mb-3">
            <label><b>Remark:</b></label>
            <input type="text", name="remark" class="form-control" >
            <span style="color:red">@error('remark'){{$message}}@enderror</span>

        </div>
        <input type="submit" name="insert" value="Insert" class="btn btn-primary">

    </form>
</div>

</body>
</html>