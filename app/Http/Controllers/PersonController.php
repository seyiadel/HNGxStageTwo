<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PersonController extends Controller
{
    
    // Create a Person Resource
    public function store(Request $request, $name=null) {

        // Creating Person with Optional Parameter 
        if($name) {
        $newPerson = Person::create(['name'=>$name]);

        return response()->json([
            'message' => 'Successfully Created',
            'status_code' => 201,
            'data' => $newPerson
        ], 201);

        }else{

            $validatedFields = $request->validate(
                [
                    'name' => 'required'
                ]
                );
            $newPerson = Person::create($validatedFields);

            return response()->json([
                'message' => 'Successfully Created',
                'status_code' => 201,
                'data' => $newPerson
            ]);
        }

    }
 
    // Get Single Person by ID
    public function show($person_id){

        $retrievePerson = Person::find($person_id);

        if(is_null($retrievePerson)) {
            return response()->json([
                'message' => 'Not Found',
                'status_code' => 404,
            ], 404); 

        }else{
            return response()->json([
                'message' => 'Retrieved Successfully',
                'status_code' => 200,
                'data' => $retrievePerson
            ],200);
        }

    }

    // Update Person Detail
    public function edit(Request $request, $person_id) {

        $retrievePerson = Person::find($person_id);

        if($retrievePerson) {
            $formFields = $request->validate(
                [
                    'name' => 'required',
                ]
            );
            $updatedPerson = $retrievePerson->update($formFields);
            return response()->json([
                'message' => 'Details Successfully Updated.',
                'status_code' => 200,
                'data' => $updatedPerson
            ], 200);
        }else{
            return response()->json([
                'message' => 'Person Details not found',
                'status_code' => 404
            ], 404);
        }


    }

    // Delete Person Detail
    public function delete($person_id) {
        $retrievePerson = Person::find($person_id);
        $retrievePerson->delete();
        return response()->json([
            'message' => 'Person Details deleted',
            'status_code' => 204
        ], 204);
    }
    

}
