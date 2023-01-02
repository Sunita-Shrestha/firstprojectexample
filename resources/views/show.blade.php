<!DOCTYPE html>
<html>
    <head>
        <titile></titile>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <h1 class="text-center">List Of Post</h1>
            <div>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
           </div> 
            @endif
            @if(Session::has('update'))
            <div class="alert alert-primary" role="alert">
            {{Session::get('update')}}
           </div> 
            @endif
            @if(Session::has('delete'))
            <div class="alert alert-danger" role="alert">
            {{Session::get('delete')}}
           </div> 
            @endif
           

         </div>

            <a href="/create" class="btn btn-success btn-sm float-sm-end">Create Post</a> 
            <br> <br>
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