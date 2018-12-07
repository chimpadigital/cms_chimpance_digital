<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novelty;
use App\Product;
use App\Catalogue;
use App\Category;

use App\Notifications\Contact;
use Illuminate\Support\Facades\Notification;
use Validation;


class IndexController extends Controller
{
    public function index()
    {

    	$novelties = Novelty::orderBy('organization','ASC')->get();
    	
    	$products = Product::with('categories')->orderBy('organization','ASC')->get();
    	
    	return view('home',[
    		'products' => $products,
    		'novelties' => $novelties,
    	]);
    }

    public function catalogue()
    {
    	$catalogues = Catalogue::orderBy('organization','ASC')->get();

    	return view('catalogo',['catalogues'=>$catalogues]);
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
            'phone'=>'required',
        ]);

        $contact = [
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message'),
            'phone'=>$request->input('phone'),
        ];

        //dd($contact);

        Notification::route('mail', 'sprados@chimpancedigital.com.ar')
                    ->notify(new Contact($contact));

        return back();
             
    }

}
