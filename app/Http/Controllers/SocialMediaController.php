<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialmedia = SocialMedia::paginate(20);
        return view('admin.socialmedia.index',compact('socialmedia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.socialmedia.create');
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
            'name' => 'required',
            'link' => 'required',
        ];

        $this->validate($request, $rules);

        $data['name'] = $request->get('name');
        $data['link'] = $request->get('link');

        SocialMedia::create($data);

        return redirect()->route('socialmedia.index')
            ->with('success', 'Created successfully.');
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
    public function edit(SocialMedia $socialmedia)
    {
        return view('admin.socialmedia.edit', compact('socialmedia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMedia $socialmedia)
    {
         $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);

        $data['name'] = $request->get('name');
        $data['link'] = $request->get('link');

        $socialmedia->update($data);

        return redirect()->route('socialmedia.index')
            ->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialmedia)
    {
        $socialmedia->delete();

        return redirect()->route('socialmedia.index')
            ->with('success', 'Deleted successfully');
    }
}
