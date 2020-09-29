<?php

namespace App\Http\Controllers;

use App\Models\A_Case;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = A_Case::select('id','number_case', 'folio','name','requirement','comment')->get();
        return view('cases.index', compact('cases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        A_Case::create($request->all());

        $request->session()->flash('cases_stored', true);
        return redirect()->route('cases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $case = A_Case::findOrFail($id);
        return view('cases.show', compact('case'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $case = A_Case::findOrFail($id);
        return view('cases.edit', compact('case'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $case = A_Case::findOrFail($id);

        $case->update($request->all());

        $request->session()->flash('cases_updated', true);
        return redirect()->route('cases.show', $case->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        A_Case::destroy($id);

        $request->session()->flash('cases_destroyed', true);
        return redirect()->route('cases.index');
    }
}
