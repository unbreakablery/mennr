<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $posts = Post::paginate(20);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'section_title' => 'required',
        ];

        $this->validate($request, $rules);

        $image = $this->fileUpload($request, 'image', '');
        $thumbnail = $this->fileUpload($request, 'thumbnail', '');

        $data['page_title'] = $request->get('page_title');
        $data['section_title'] = $request->get('section_title');
        $data['title'] = $request->get('title');
        $data['sub_title'] = $request->get('sub_title');
        $data['tags'] = $request->get('tags');
        $data['description'] = $request->get('description');
        $data['image'] = $image;
        $data['thumbnail'] = $thumbnail;

        Post::create($data);

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Post $post)
    {
         $request->validate([
            'section_title' => 'required',
        ]);

        if($request->image){
            $image = $this->fileUpload($request, 'image', '');
        }
        else{
            $image = $request->old_image;
        }
        if($request->thumbnail){
            $thumbnail = $this->fileUpload($request, 'thumbnail', '');
        }
        else{
            $thumbnail = $request->old_thumbnail;
        }

        $data['page_title'] = $request->get('page_title');
        $data['section_title'] = $request->get('section_title');
        $data['title'] = $request->get('title');
        $data['sub_title'] = $request->get('sub_title');
        $data['tags'] = $request->get('tags');
        $data['description'] = $request->get('description');
        $data['image'] = $image;
        $data['thumbnail'] = $thumbnail;

        $post->update($data);

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');
    }
}
