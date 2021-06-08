<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Returns;
use App\Models\Asset;
use Redirect;

class ReturnController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function index()
    {
        return view('return')->with([
            'data' => Returns::all()
        ]);
    }

    public function save()
    {
        // save to database
        Returns::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('return');
    }
    public function create()
    {
       return view('create_form.return')->with([
           'data' => Asset::all()
       ]);                

    }

    public function update ($id)
    {
        return view('update_form.return')->with([
            'data' =>Returns::find($id)
        ]);
    }
    public function update_save ($id)
    {
        Returns::find($id)->update(
            $this->request->except('_token')

        );
        return Redirect::route('return');
    }

    public function delete($id)
    {
        Returns::find($id)->delete();

        return Redirect::route('return');
    }
 
}
