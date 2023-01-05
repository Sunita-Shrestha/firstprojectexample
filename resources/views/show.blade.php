{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body> --}}
    @extends('postlayouts.layout')
    @include('postlayouts.sidebar')
    <style>
    .table1{
    margin-left: 150;
    width: 85%%;
    }

     </style>


    @section('content')

    <div class="container ">
        <h1 class="text-center">List Of Post</h1>
        @include('flash-message')

              <a href="/create" class="btn btn-success btn-sm float-sm-end float-right">Create Post</a>
        <br> <br>

            <table class="table table-bordered shadow text-center sm-end table-striped table1 mr-auto p-2">
                <tr>
                    <th>S.N</th>
                    <th>Post Title</th>
                    <th>Post Author</th>
                    <th>Post Remark</th>
                    <th>Action</th>

                </tr>
                @foreach($posts as $post)

                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$post->post_title}}</td>
                    <td>{{$post->post_author}}</td>
                    <td>{{$post->Action}}</td>
                    <td><a href="/delete/{{$post->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                       <a href="/edit/{{$post->id}}" class="btn btn-success btn-sm m-2">Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>

    @endsection


{{-- </body>
</html> --}}
