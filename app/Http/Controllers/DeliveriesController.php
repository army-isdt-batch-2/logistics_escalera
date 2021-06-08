<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;
use Redirect;

class DeliveriesController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function index()
    {
        return view('deliveries')->with([
            'data' => Delivery::all()
        ]);
    }

    public function save()
    {
        // save to database
        Delivery::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('deliveries');
    }
    public function create()
    {
       return view('create_form.deliveries');                

    }

    public function update ($id)
    {
        return view('update_form.deliveries')->with([
            'data' =>Delivery::find($id)
        ]);
    }
    public function update_save ($id)
    {
        Delivery::find($id)->update(
            $this->request->except('_token')

        );
        return Redirect::route('deliveries');
    }

    public function delete($id)
    {
        Delivery::find($id)->delete();

        return Redirect::route('deliveries');
    }


}
