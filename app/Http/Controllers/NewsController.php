<?php

namespace App\Http\Controllers;

use App\Novelty;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function show()
    {
        $imgs = Novelty::orderBy('organization','ASC')->get();

    	return view('novedades.novedades-show',['imgs'=>$imgs]);
    }

    public function create()
    {   
        $count = Novelty::count();

        if ($count >= 6) 
        {
            $count=0;
        }
        else
        {
            $count=6-$count;
        }

        return view('novedades.novedades-create',['count'=>$count]);
    }

    public function store (Request $request)
    {
        $request->validate([
            'slide' => 'file|mimes:webm,mp4,png,jpg,jpeg',
        ]);

    	$image = $request->file('slide');
    	
        Novelty::create([
    		'url_image'=>$image->store('news','dropbox'),
    	]);

        if (Novelty::count() >= 6) 
        {
            $count=0;
        }
        else{
            $count=1;
        }

        return \Response::json($count, 200);
    }

    public function destroy(Request $request)
    {
        $imgId = $request->input('id');

        $img = Novelty::where('id',$imgId)->first(); 

        Storage::disk('dropbox')->delete($img->url_image);

        Novelty::where('id',$imgId)->delete();

        return redirect()->route('news-show');

    }

    public function order(Request $request)
    {

        $orders = $request->order;

        Novelty::where('id','>',0)->update(['organization'=>null]);

        foreach ($orders as $order => $id) {
            if (!is_null($order)) {
               Novelty::where('id',$id)->update(['organization'=>$order]);
            }
            
        }

        return redirect()->route('news-show');   
    }
}
