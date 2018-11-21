<?php

namespace App\Http\Controllers;

use App\Catalogue;

use Validator;
use Illuminate\Http\Request;
//comerr
class CatalogueController extends Controller
{
    public function show()
    {
    	$catalogues = Catalogue::orderBy('organization','ASC')->get();

    	return view('catalogos.catalogos-show',['catalogues'=>$catalogues]);
    } 

    public function create()
    {
    	return view('catalogos.catalogos-create');
    }

    public function store(Request $request)
    {	
    	$request->validate([
    		'name'=>'required',
    		'url'=>'required',
    		'date'=>'required',
    		'image'=>'required|image',
    	]);

    	$image = $request->file('image');

    	Catalogue::create([
    		'name'=>$request->input('name'),
    		'url_download'=>$request->input('url'),
    		'date'=>$request->input('date'),
    		'url_image'=>$image->store('catalogues','public'),
    	]);

    	return redirect()->route('catalogue-show');
    }

     public function destroy(Request $request)
    {
        $CatalogueId = $request->input('id');

        $catalogue = Catalogue::where('id',$CatalogueId)->first(); 

        \Storage::disk('public')->delete($catalogue->url_image);

        Catalogue::where('id',$CatalogueId)->delete();

        return redirect()->route('catalogue-show');

    }


    public function order(Request $request)
    {
    	$orders = $request->order;

        Catalogue::where('id','>',0)->update(['organization'=>null]);

        foreach ($orders as $order => $id) {
            if (!is_null($order)) {
               Catalogue::where('id',$id)->update(['organization'=>$order]);
            }
            
        }

        return redirect()->route('catalogue-show');  
    }

    public function edit(Request $request)
    {
    	$catalogue =  Catalogue::where('id',$request->input('id'))->first();

    	return view('catalogos.catalogos-show-edit',['catalogue'=>$catalogue]);
    }

    public function update(Request $request)
    {
    	$request->validate([
    		'name'=>'required',
    		'url'=>'required',
    		'date'=>'required',
    		'id'=>'exists:catalogues'
    	]);

    	$catalogue =  Catalogue::where('id',$request->input('id'))->first();

    	$urlImage = $catalogue->url_image; 

    	if (!empty($request->file('image'))) 
    	{ 
    		\Storage::disk('public')->delete($catalogue->url_image);

    		$image = $request->file('image');

    		$urlImage = $image->store('catalogues','public');
   
    	}

    	Catalogue::where('id',$request->input('id'))->update([
    		'name'=>$request->input('name'),
    		'url_download'=>$request->input('url'),
    		'date'=>$request->input('date'),
    		'url_image'=>$urlImage,
    	]);

    	return redirect()->route('catalogue-show');



    }

}
