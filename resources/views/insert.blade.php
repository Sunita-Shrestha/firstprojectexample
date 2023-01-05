
    @extends('postlayouts.layout')
    @include('postlayouts.sidebar')
    <style>
        .table1{
      margin-left: 150;
      width: 85%%;
      }
      .btnll{
          margin-left: 150;

      }
      </style>


    @section('content')
    <div class="container">
    <h1 class="text-center">Add Post</h1>
    <form method="POST" action="{{route('posts.store')}}">
        <!-- @csrf token is used for security purpose -->
        @csrf
        <!-- mb-3 margin bottom style from bootstrap -->
        <div class="mb-3 table1">
            <label><b>Post titile:</b></label>
            <input type="text", name="title" class="form-control" >
            <span style="color:red">@error('title'){{$message}}@enderror</span>
        </div>
        <div class="mb-3 table1">
            <label><b>Post author:</b></label>
            <input type="text", name="author" class="form-control">
            <span style="color:red">@error('author'){{$message}}@enderror</span>

        </div>
        <div class="mb-3 table1">
            <label><b>Remark:</b></label>
            <input type="text", name="remark" class="form-control" >
            <span style="color:red">@error('remark'){{$message}}@enderror</span>

        </div>
        <input type="submit" name="insert" value="Insert" class="btn btn-primary btnll">

    </form>
</div>
@endsection
