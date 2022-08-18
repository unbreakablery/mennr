<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\UserPlan;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::paginate(20);
        return view('admin.plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plans.create');
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
            'type' => 'required',
            'title' => 'required',
        ];

        $this->validate($request, $rules);

        $data['type'] = $request->get('type');
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['price'] = $request->get('price');
        $data['features'] = $request->get('features');

        Plan::create($data);

        return redirect()->route('plans.index')
            ->with('success', 'Plan created successfully.');
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
     * @param  Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        return view('admin.plans.edit', compact('plan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'type' => 'required',
            'title' => 'required',
        ]);

        $data['type'] = $request->get('type');
        $data['title'] = $request->get('title');
        $data['description'] = $request->get('description');
        $data['price'] = $request->get('price');
        $data['features'] = $request->get('features');

        $plan->update($data);

        return redirect()->route('plans.index')
            ->with('success', 'Plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans.index')
            ->with('success', 'Plan deleted successfully');
    }

    /**
     * User Plan list view for admin
     */
    public function userPlanListview()
    {
        $userPlan = UserPlan::paginate(20);
        return view('admin.users.userplan-list', compact('userPlan'));
    }

    /** User plan delete */
    public function userPlanDelete(UserPlan $userplan)
    {
        $userplan->delete();
        return redirect()->route('userplan.list')
            ->with('success', 'User Plan deleted successfully');
    }
}
