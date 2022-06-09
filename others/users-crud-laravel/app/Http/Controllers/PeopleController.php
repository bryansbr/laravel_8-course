<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePeopleRequest;
use App\Http\Requests\EditPeopleRequest;
use App\Models\People;
use App\Models\Country;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = People::all();

        return view("people.index")->with("people", $people);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = ["M", "F", "Others"];
        $countries = Country::all();

        return view("people.create", compact("genders", "countries"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePeopleRequest $request)
    {
        People::create($request->all());

        return redirect()->route("people.index")->with("success_created", "User created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = People::find($id);
        $genders = ["M", "F", "Others"];
        $countries = Country::all();

        return view("people.edit", compact("genders", "countries"))->with("p", $p);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(EditPeopleRequest $request, People $p, $id)
    {
        $p = People::find($id);

        $p->update($request->all());

        return redirect()->route("people.index")->with("success_edited", "User edited successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = People::find($id);
        $p->delete();

        return redirect()->route("people.index")->with("success_removed", "User removed successfully!");
    }
}
