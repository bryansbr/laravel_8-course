<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePeopleRequest;
use App\Http\Requests\EditPeopleRequest;

class PeopleController extends Controller
{

    // Constructor to control access to routes
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Retrieve and load home view.
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

    // Retrieve and load the people creation view.
    public function create()
    {
        $genders = ["M", "F", "Other"]; // Array of genders.
        $countries = Country::all(); // Retrieves data from countries table in DB.

        return view("people.create", compact("genders", "countries"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // Retrieves data from DB via 'Request' and saves them
    public function store(CreatePeopleRequest $request)
    {
        // $request->validate([
        //     'first_name'=> 'required',
        //     "last_name" => "required | max:50",
        //     "age" => "required | numeric | min:1 | max:120",
        //     "gender" => "required",
        //     "country" => "required",
        //     "phone_number" => "required | min:3 | max:15",
        //     "email" => "required | email | unique:people"
        // ]);

        // $people = new People();

        // $people->first_name = $request->get("first_name");
        // $people->last_name = $request->get("last_name");
        // $people->age = $request->get("age");
        // $people->gender = $request->get("gender");
        // $people->country = $request->get("country");
        // $people->phone_number = $request->get("phone_number");
        // $people->email = $request->get("email");

        // $people->save();

        //$people = People::create($request->all());
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

    // Shows the data that is being loaded from the DB.
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

    // Retrieves data from DB via 'Request' and update them.
    public function update(EditPeopleRequest $request, People $p, $id)
    {
        // $request->validate([
        //     "first_name" => "required",
        //     "last_name" => "required | max:50",
        //     "age" => "required | numeric | min:1 | max:120",
        //     "gender" => "required",
        //     "country" => "required",
        //     "phone_number" => "required | min:3 | max:15",
        //     "email" => "required | email | unique:people"
        // ]);

        $p = People::find($id);

        // $p->first_name = $request->get("first_name");
        // $p->last_name = $request->get("last_name");
        // $p->age = $request->get("age");
        // $p->gender = $request->get("gender");
        // $p->country = $request->get("country");
        // $p->phone_number = $request->get("phone_number");
        // $p->email = $request->get("email");

        // $p->save();

        $p->update($request->all());

        return redirect()->route("people.index")->with("success_edited", "User edited successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */

    // Retrieves data from DB and delete them.
    public function destroy($id)
    {
        $p = People::find($id);
        $p->delete();

        return redirect()->route("people.index")->with("success_removed", "User removed successfully!");
    }
}
