<!DOCTYPE html>
<html>
    <head>
        <titile></titile>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <h1 class="text-center">List Of Post</h1>
            <table class="table table-bordered shadow text-center table-striped">
                <tr>
                    <th>Post Id</th>
                    <th>Post Title</th>
                    <th>Post Author</th>
                    <th>Post Remark</th>
                    <th>Post Delete</th>
                    <th>Post Edit</th>
                </tr>
                @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->post_title}}</td>
                    <td>{{$post->post_author}}</td>
                    <td>{{$post->Action}}</td>
                    <td><a href="/delete/{{$post->id}}" class="btn btn-danger btn-sm">Delete</a>
                    <!-- <a href="/edit/{{$post->id}}" class="btn btn-success btn-sm">Edit</a></td> -->
                    <td><a href="/edit/{{$post->id}}" class="btn btn-success btn-sm">Edit</a></td>
                </tr>
                @endforeach
            </table>

        </div>
</body>

</html>