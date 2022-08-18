<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;

class LeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaders = Leader::paginate(20);
        return view('admin.leaders.index',compact('leaders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.leaders.create');
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
            'designation' => 'required',
            'group' => 'required',
        ];

        $this->validate($request, $rules);

        $image = $this->fileUpload($request, 'image', '');
        

        $data['name'] = $request->get('name');
        $data['designation'] = $request->get('designation');
        $data['group'] = $request->get('group');
        $data['image'] = $image;
        
        Leader::create($data);

        return redirect()->route('leaders.index')
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
    public function edit(Leader $leader)
    {
        return view('admin.leaders.edit', compact('leader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $leader)
    {
         $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'group' => 'required',
        ]);

        if($request->image){
            $image = $this->fileUpload($request, 'image', '');
        }
        else{
            $image = $request->old_image;
        }

        $data['name'] = $request->get('name');
        $data['designation'] = $request->get('designation');
        $data['group'] = $request->get('group');
        $data['image'] = $image;

        $leader->update($data);

        return redirect()->route('leaders.index')
            ->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $leader)
    {
        $leader->delete();

        return redirect()->route('leaders.index')
            ->with('success', 'Deleted successfully');
    }
}
