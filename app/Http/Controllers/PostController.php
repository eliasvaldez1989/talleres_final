<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function store()
    {
        request()->validate([
            'storeName'=> 'required|min:3|max:120',
            'neighborhood'=>'required',
            'storeAdress'=>'required|max:150',
            'descriptionStore'=>'required|max:400',
            'image'=>'required'
        ],[
            'storeName.required'=>'Este campo es obligatorio',
            'neighborhood.required'=>'Tenes que elegir uno',
            'storeAdress.required'=>'Este campo es obligatorio',
            'descriptionStore.required'=>'Es obligatorio que tenga una descripción',
            'image.mime'=>'required|file|mimes:jpeg,jpg,png'

        ]);

        Post::create(request(['name','neighborhood','adress','description']));

        return redirect('/home');
    }
}
