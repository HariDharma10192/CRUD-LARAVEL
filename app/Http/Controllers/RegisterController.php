<?php

namespace App\Http\Controllers;

use App\Models\register;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        $register = register::all();
        return view('register.index', compact(['register']));
    }


    public function create()
    {
        return view('register.create');
    }


    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nim' => 'required|string|max:20|unique:register', // Add nim validation
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:register|max:255',
            'password' => 'required|string|min:2', // Add password validation
            // Add more validation rules as needed
        ]);

        // Create a new user
        $register = new Register;
        $register->nim = $validatedData['nim'];
        $register->name = $validatedData['name'];
        $register->email = $validatedData['email'];
        $register->password = bcrypt($validatedData['password']); // Hash the password
        // Set other attributes as needed
        $register->save();

        // Redirect to the index page or show a success message
        return redirect()->route('register.index')->with('success', 'Registration successful!');
    }




    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $register = register::find($id);
        return view('register.edit',  compact(['register']));
    }


    public function update(Request $request, string $id)
    {
        $register = register::find($id);
        $register->update($request->except(['_token', 'submit']));
        return redirect()->route('register.index')->with('success', 'Updated successful!');
    }


    public function destroy(string $id)
    {
        $register = register::find($id);
        if ($register) {
            $register->delete();
            return response()->json([
                "message" => "Deleted Successfully!"
            ], 200);
        } else {
            return response()->json([
                "message" => "Failed Deleting Data!"
            ], 401);
        }
    }
}
