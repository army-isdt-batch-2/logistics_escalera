<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distribution;
use Redirect;
use App\Models\Asset;


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
        $asset = $this->request->get('asset_id');
        $quantity =$this->request->get('quantity');
        $status =$this->request->get('status');

        // save to database
        Distribution::create(

           
            //query - get all data
            $this->request->except('_token')

        );

        if($status=='distributed')
        {
            Asset::find($asset)->decrement('total_stocks',$quantity);
     
        }
        //dd($data3);
       
        return Redirect::route('distribution');
    }
    public function create()
    {
       return view('create_form.distribution')->with([
           'asset' => Asset::all()
       ]);                

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

        if($this->request->get('status')=='distributed')
        {
            Asset::find($this->request->get('asset_id'))->decrement('total_stocks', $this->request->get('quantity'));
     
        }

        return Redirect::route('distribution');
    }

    public function delete($id)
    {
        Distribution::find($id)->delete();

        return Redirect::route('distribution');
    }
 
}
