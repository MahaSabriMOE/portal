<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Str;


use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        return view('blog.index')
        ->with('posts',Post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('blog.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     


      /* $request->validate([
            'title' => 'required',
            'postText' => 'required',
            'postImg' => ['required','mimes:jpeg,png,bmp'],

        ]);*/
        
        $slug = Str::slug($request->title, '-');
        $newImageName=uniqid() . '-' . $slug . '.' . $request->postImg->extension();
        $request->postImg->move(public_path('images_folder'),$newImageName);
        Post::create([
            'title'=> $request->input('title'),
            'descriptions'=>$request->input('postText'),
            'slug'=>$slug,
            'image_path'=>$newImageName,
            'user_id'=>auth()->user()->id,
            'yturl'=>$request->input('yturl')


        ]);

        return redirect('/blog');
       //dd($request);

        


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
       return view('blog.show')
        ->with('post',Post::where('slug',$slug)->first());
       // dd(Post::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view ('blog.edit')
        ->with('post',Post::where('slug',$slug)->first());


        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {

        /* $request->validate([
            'title' => 'required',
            'postText' => 'required',
            'postImg' => ['required','mimes:jpeg,png,bmp'],

        ]);*/ 

        $newImageName=uniqid() . '-' . $slug . '.' . $request->postImg->extension();
        $request->postImg->move(public_path('images_folder'),$newImageName);

        Post::where('slug',$slug)
        ->update([
            'title'=> $request->input('title'),
            'descriptions'=>$request->input('postText'),
            'slug'=>$slug,
            'image_path'=>$newImageName,
            'user_id'=>auth()->user()->id,
            'yturl'=>$request->input('yturl')


        ]);
        

        return redirect ('/blog/' . $slug)
        ->withSuccess('تم التعديل بنجاح');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {

        $image_path = Post::where('slug', $slug)->pluck('image_path')->first();
        if(file_exists(public_path('images_folder/'. $image_path))){
            unlink(public_path('images_folder/'. $image_path));
          }else{
            dd('File not found');
          }
       // dd('public/images_folder/'.$image_path);
        

        Post::where('slug',$slug)->delete();
        //File::delete('public/images_folder/'.$image_path);
        return redirect('/blog')
        ->withSuccess('تم الحذف بنجاح');

        //
    }

   
}
