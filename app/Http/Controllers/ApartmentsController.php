<?php


namespace App\Http\Controllers;
use App\Http\Requests\ApartmentRequest;
use App\Models\Apartment;

use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function getList(){
        return view('admin.layout.master-layout');
    }

    public function getForm(){
        return view('admin.demo.form');
    }

    public function processForm(ApartmentRequest $request){
        $name = $request->get('name');
        $apartment =new Apartment($request->all());
        $apartment->save();
        return redirect('/table')->with('success',"Create new Apartment name = $name, Success");
    }

    public function getTable(){
        return view('admin.demo.table',['items'=>Apartment::where('status','!=',-1)->get()]);
    }



}
