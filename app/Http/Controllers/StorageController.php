<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;
use Redirect;

class StorageController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function index()
    {
        return view('storage')->with([
            'data' => Storage::all()
        ]);
    }

    public function save()
    {
        // save to database
        Storage::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('storage');
    }
    public function create()
    {
       return view('create_form.storage');                

    }

    public function update ($id)
    {
        return view('update_form.storage')->with([
            'data' =>Storage::find($id)
        ]);
    }
    public function update_save ($id)
    {
        Storage::find($id)->update(
            $this->request->except('_token')

        );
        return Redirect::route('storage');
    }

    public function delete($id)
    {
        Storage::find($id)->delete();

        return Redirect::route('storage');
    }
 
 
}
