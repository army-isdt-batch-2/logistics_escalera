<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportation;
use Redirect;

class TransportationController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function index()
    {
        return view('transportation')->with([
            'data' => Transportation::all()
        ]);
    }

    public function save()
    {
        // save to database
        Transportation::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('transportation');
    }
    public function create()
    {
       return view('create_form.transportation');                

    }

    public function update ($id)
    {
        return view('update_form.transportation')->with([
            'data' =>Transportation::find($id)
        ]);
    }
    public function update_save ($id)
    {
        Transportation::find($id)->update(
            $this->request->except('_token')

        );
        return Redirect::route('transportation');
    }

    public function delete($id)
    {
        Transportation::find($id)->delete();

        return Redirect::route('transportation');
    }
 
}
