<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
	/**
	 * Create add customer form
	 */
	public function create() {
		return view('customer.add');
	}

	/**
	 * Create add customer form data
	 */
	public function store(Request $request) {

		$validatedData = $request->validate([
	        'firstname' => 'required|max:255',
	        'lastname' => 'required|max:255',
	        'email' => 'required|unique:customers|max:50',
	        'telephone' => 'required',
	        'birthdate' => 'required'
	    ]);

		$requestData = $request->input();
		print_r($requestData)
	}
}
