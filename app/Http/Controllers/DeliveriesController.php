<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Delivery;
use App\Models\Distribution;
use App\Models\Transportation;
use App\Models\Asset;
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
        $status =  $this->request->get('status');
        $distrib =  $this->request->get('distribution_id');
        $quantity = Distribution::where('id',$distrib)->value('quantity');
        $asset = Distribution::where('id',$distrib)->value('asset_id');
       
    
        Delivery::create(
            //query - get all data
            $this->request->except('_token')

        );

        if($status=='returned')
        {
            Asset::find($asset)->increment('total_stocks',$quantity);
        }

        

        return Redirect::route('deliveries');
    }
    public function create()
    {
       return view('create_form.deliveries')->with([
        'distribution' => Distribution::all(), 
        'transportation' => Transportation::all()
    ]);                

    }

    public function update ($id)
    {
        return view('update_form.deliveries')->with([
            'data' =>Delivery::find($id)
        ]);
    }
    public function update_save ($id)
    {
        $status =  $this->request->get('status');
        $distrib =  $this->request->get('distribution_id');
        $quantity = Distribution::where('id',$distrib)->value('quantity');
        $asset = Distribution::where('id',$distrib)->value('asset_id');

        Delivery::find($id)->update(
            $this->request->except('_token')

        );
        if($status=='returned')
        {
            Asset::find($asset)->increment('total_stocks',$quantity);
        }
        return Redirect::route('deliveries');
    }

    public function delete($id)
    {
        Delivery::find($id)->delete();

        return Redirect::route('deliveries');
    }


}
