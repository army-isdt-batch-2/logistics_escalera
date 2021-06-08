<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Redirect;

class SupplierController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
        $this->request =$request;

    }

    public function index()
    {
        return view('supplier')->with([
            'data' => Supplier::all()
        ]);
    }

    public function save()
    {
        // save to database
        Supplier::create(
            //query - get all data
            $this->request->except('_token')

        );

        return Redirect::route('supplier');
    }
    public function create()
    {
       return view('create_form.supplier');                

    }

    public function update ($id)
    {
        return view('update_form.supplier')->with([
            'data' =>Supplier::find($id)
        ]);
    }
    public function update_save ($id)
    {
        Supplier::find($id)->update(
            $this->request->except('_token')

        );
        return Redirect::route('supplier');
    }

    public function delete($id)
    {
        Supplier::find($id)->delete();

        return Redirect::route('supplier');
    }
 
}
