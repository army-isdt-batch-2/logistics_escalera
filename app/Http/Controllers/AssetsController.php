<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Supplier;
use App\Models\Storage;
use Redirect;

class AssetsController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function index()
    {
        return view('assets')->with([
            'data' => Asset::all()
        ]);
    }

    public function save()
    {
        // save to database
        Asset::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('assets');
    }
    public function create()
    {
       return view('create_form.assets')->with([
           'supplier' => Supplier::all(), 
           'storage' => Storage::all()
       ]);                

    }

    public function update ($id)
    {
        return view('update_form.assets')->with([
            'data' =>Asset::find($id)
        ]);
    }
    public function update_save ($id)
    {
        Asset::find($id)->update(
            $this->request->except('_token')

        );
        return Redirect::route('assets');
    }

    public function delete($id)
    {
        Asset::find($id)->delete();

        return Redirect::route('assets');
    }

 
    
}
