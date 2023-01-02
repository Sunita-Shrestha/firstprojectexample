<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;
use App\Http\Requests\PostsFormRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('insert');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsFormRequest $request)
    {
        //  The incoming request is valid

        // Retrieve the validate input data..

        

        $post=new Post;
        $post->post_title=$request->get('title');
        $post->post_author=$request->get('author');
        $post->Action=$request->get('remark');
        // save() insert the data into database
        $post->save();
        // echo "<h1>Data is inserted successfully.....</h1>";
        return redirect()->route('posts.show')->with('success','Post has been created successfully');


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        $posts =Post::all();
        // I want to show this data in view page so created show page
        return view('show', ['posts' => $posts]);
        
          }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
        //
        
        $posts=Post::find($id);
        return view('edit', ['posts' => $posts]);

        


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsFormRequest $request, Post $post ,$id)

    {
        //
        // $request->validate([
        //     'title'=>'required |max:20',
        //     'author'=>'required | alpha',
        //     'remark'=> 'max:200'
        // ]);
        $posts=Post::find($id);
        $posts->post_title = $request->get('title');
        $posts->post_author = $request->get('author');
        $posts->Action = $request->get('remark');
        $posts->save();
        // return redirect('show');
        return redirect()->route('posts.show')->with('update','Post has been updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, $id)
    {
        //

        $post=Post::find($id);
        $post->delete();
        // return redirect('show');
        return redirect()->route('posts.show')->with('delete','Post has been deleted');

        
    }
}
