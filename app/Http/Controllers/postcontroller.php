<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class postcontroller extends Controller
{
    public function index(){

        $postsFromDB=Post::all();

        return view('index',['posts'=>$postsFromDB]);
    }


     public function show($post)
    {

        $singlePost=Post::findorfail($post);
        return view('show',['post'=>$singlePost]);
    }

    public function create()
    {
        $users=User::all();






        return view('create',['users'=>$users]);
    }


    public function store(Request $request)
    {
        // $data=request();
        $title=$request->title;
        $description=$request->description;
        $userId=$request->user_id;

        $post=Post::create(
            ['title' => $title,
            'description' =>$description,
            'user_id'=>$userId


            ]
        );

        return redirect(route('posts.index'));

    }


    public function edit(Post $post)
    {

        $users=User::all();




         return view('edit',['posts'=>$post,'users'=>$users]);



    }
    public function update(Request $request , $post)
    {
        $singlePost=Post::findorfail($post);
        $singlePost->update(
            ['title' => $request->title,
            'description' =>$request->description,
            'user_id' =>$request->user_id , ]
        );
         return redirect()->route('posts.index');
    }

    public function destroy($post)
    {
        $singlePost=Post::findorfail($post);
        $singlePost->delete();

        return redirect()->route('posts.index');


    }


}

