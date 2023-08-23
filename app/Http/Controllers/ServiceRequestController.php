<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    public function create()
{
    return view('create');
}

public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'Title' => 'required',
        'issue' => 'required',
        'priority' => 'required|in:low,medium,high',
        'name' => 'required',
        'place' => 'required',
        'attachment' => 'required',
    ]);

    // Store the service request in the database (you need to set up a database connection)
    // Example:
    // ServiceRequest::create($validatedData);

    return redirect('/request-support')->with('success', 'Request submitted successfully!');
}
public function receive()
{
    return view('receive');
}
public function action()
{
    return view('ActionsTaken');
}
public function handing()
{
    return view('handing');
}

public function SpareParts()
{
    return view('SpareParts');
}

public function evaluation()
{
    return view('evaluation');
}

public function Dashboard()
{
    return view('layouts.Dashboard');
}
}
