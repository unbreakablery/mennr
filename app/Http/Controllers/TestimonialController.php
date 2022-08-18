<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(20);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
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
            'author_name' => 'required',
        ];

        $this->validate($request, $rules);

        $image = $this->fileUpload($request, 'author_image', '');
        $logo = $this->fileUpload($request, 'author_logo', '');

        $data['page_title'] = $request->get('page_title');
        $data['author_name'] = $request->get('author_name');
        $data['author_role'] = $request->get('author_role');
        $data['author_designation'] = $request->get('author_designation');
        $data['author_image'] = $image;
        $data['author_logo'] = $logo;
        $data['comment'] = $request->get('comment');
        
        Testimonial::create($data);

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial created successfully.');
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
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'author_name' => 'required',
        ]);

        if ($request->author_image){
            $author_image = $this->fileUpload($request, 'author_image', '');
        } else {
            $author_image = $request->old_author_image;
        }

        if ($request->author_logo) {
            $author_logo = $this->fileUpload($request, 'author_logo', '');
        } else {
            $author_logo = $request->old_author_logo;
        }

        $data['page_title'] = $request->get('page_title');
        $data['author_name'] = $request->get('author_name');
        $data['author_role'] = $request->get('author_role');
        $data['author_designation'] = $request->get('author_designation');
        $data['comment'] = $request->get('comment');
        $data['author_image'] = $author_image;
        $data['author_logo'] = $author_logo;

        $testimonial->update($data);

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('testimonials.index')
            ->with('success', 'Testimonial deleted successfully');
    }
}
