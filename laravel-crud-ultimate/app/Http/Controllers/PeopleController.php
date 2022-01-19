<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePeopleRequest;
use App\Http\Requests\EditPeopleRequest;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
        $genders = ["M", "F", "Other"];
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
        $people = new People();

        $people->first_name = $request->get("first_name");
        $people->last_name = $request->get("last_name");
        $people->age = $request->get("age");
        $people->gender = $request->get("gender");
        $people->country = $request->get("country");
        $people->phone_number = $request->get("phone_number");
        $people->email = $request->get("email");

        $people->save();

        return redirect("/people")->with("success", "User created successfully!");
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
        $genders = ["M", "F", "Other"];
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
    public function update(EditPeopleRequest $request, $id)
    {
        $p = People::find($id);

        $p->first_name = $request->get("first_name");
        $p->last_name = $request->get("last_name");
        $p->age = $request->get("age");
        $p->gender = $request->get("gender");
        $p->country = $request->get("country");
        $p->phone_number = $request->get("phone_number");
        $p->email = $request->get("email");

        $p->save();

        return redirect("/people");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //with("confirm", "Sure?");
        $p = People::find($id);


        $p->delete();

        return redirect("/people");
    }
}
