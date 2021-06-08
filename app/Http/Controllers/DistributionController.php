<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;
use Redirect;


class DistributionController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function index()
    {
        return view('distribution')->with([
            'data' => Distribution::all()
        ]);
    }

    public function save()
    {
        // save to database
        Distribution::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('distribution');
    }
    public function create()
    {
       return view('create_form.distribution');                

    }

    public function update ($id)
    {
        return view('update_form.distribution')->with([
            'data' =>Distribution::find($id)
        ]);
    }
    public function update_save ($id)
    {
        Distribution::find($id)->update(
            $this->request->except('_token')

        );
        return Redirect::route('distribution');
    }

    public function delete($id)
    {
        Distribution::find($id)->delete();

        return Redirect::route('distribution');
    }
 
}
