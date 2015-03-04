<?php

class CustomersController extends BaseController {

	/**
	 * Display a listing of customers
	 *
	 * @return Response
	 */
	public function index()
	{
		$customers = Customer::all();
		if ($customers->count() < 1)
		{
		Session::flash('message', 'There is no records yet!'); 
		Session::flash('alert-class', 'alert-success');
		}

		return View::make('Customers/index', compact('customers'));
	}

	/**
	 * Show the form for creating a new customer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('customers.create');
	}

	/**
	 * Store a newly created customer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$file = array('document' => Input::file('document'));
		if (gettype($file["document"]) == 'object')
		{
			if (Input::file('document')->isValid()) 
			{
	      $destinationPath = 'uploads/'; // upload path
	      $extension = Input::file('document')->getClientOriginalExtension(); // getting image extension
	      $fileName = rand(11111,99999).'.'.$extension; // renameing image
	      // uploading file to given path
	      Input::file('document')->move($destinationPath, $fileName);
	    }
	  }
	  else
	  {
	  	$fileName = "defaultImage.bmp";
	  }
		$validator = Validator::make($data = Input::all(), Customer::$rulesForStore);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		
    $data["filepath"] = ("uploads/" . $fileName);

    Customer::create($data);

    if ($data["filepath"] == "uploads/defaultImage.bmp") { 
    		$message = 'Record is successfully created! Default image will be used as your uploaded file.';
    } else {
    	$message = 'Record is successfully created!';
    }

    Session::flash('message', $message );
		Session::flash('alert-class', 'alert-success');
		return Redirect::route('customers.index');
	}

	/**
	 * Display the specified customer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$customer = Customer::findOrFail($id);

		return View::make('Customers/show', compact('customer'));
	}

	/**
	 * Show the form for editing the specified customer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$customer = Customer::find($id);
		return View::make('Customers/edit', compact('customer'));
	}

	/**
	 * Update the specified customer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$customer = Customer::findOrFail($id);
		$file = array('document' => Input::file('document'));
		if (gettype($file["document"]) == 'object')
		{
			if (Input::file('document')->isValid()) 
			{
	      $destinationPath = 'uploads/';//'uploads/'; // upload path
	      $extension = Input::file('document')->getClientOriginalExtension(); // getting image extension
	      $fileName = rand(11111,99999).'.'.$extension; // renameing image
	      // uploading file to given path
	      Input::file('document')->move($destinationPath, $fileName);
	    } 	
	  }

		$validator = Validator::make($data = Input::all(), Customer::$rulesForUpdate);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}		

		if (gettype($file["document"]) == 'object')
		{
			$data["filepath"] = ("uploads/" . $fileName);
		}
		else
		{
			$data["filepath"] = $customer->filepath;
		}
		$customer->update($data);

		Session::flash('message', 'Record is successfully updated!'); 
		Session::flash('alert-class', 'alert-success');

		return Redirect::route('customers.index');
	}

	/**
	 * Remove the specified customer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Customer::destroy($id);

		Session::flash('message', 'Record is deleted!'); 
		Session::flash('alert-class', 'alert-success');
		return Redirect::route('customers.index');
	}

}

//print_r(gettype($file["document"]));
//exit;
