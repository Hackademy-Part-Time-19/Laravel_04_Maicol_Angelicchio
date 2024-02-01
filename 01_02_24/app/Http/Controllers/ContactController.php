<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function visualizzaPagina(){
        return view('contatti');
    }

    public function elaboraDati(Request $request){
        $data = $request->all();

        Mail::to('maicol@gmail.com')->send(new ContactMail($data['name'], $data['email'], $data['message']));

        return redirect()->route('contatti')->with('success', 'il form è stato inviato correttamente');
    }
}
