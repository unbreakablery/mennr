<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $history = History::paginate(20);
        return view('admin.history.index',compact('history'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.history.create');
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
            'year' => 'required',
            'detail' => 'required',
        ];

        $this->validate($request, $rules);

        $image = $this->fileUpload($request, 'image', '');
        

        $data['year'] = $request->get('year');
        $data['detail'] = $request->get('detail');
        $data['image'] = $image;
        
        History::create($data);

        return redirect()->route('history.index')
            ->with('success', 'History created successfully.');
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
    public function edit(History $history)
    {
        return view('admin.history.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
         $request->validate([
            'year' => 'required',
            'detail' => 'required',
        ]);

        if($request->image){
            $image = $this->fileUpload($request, 'image', '');
        }
        else{
            $image = $request->old_image;
        }

        $data['year'] = $request->get('year');
        $data['detail'] = $request->get('detail');
        $data['image'] = $image;

        $history->update($data);

        return redirect()->route('history.index')
            ->with('success', 'History updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
         $history->delete();

        return redirect()->route('history.index')
            ->with('success', 'History deleted successfully');
    }
}
