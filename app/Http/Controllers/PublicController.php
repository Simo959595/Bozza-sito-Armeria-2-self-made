<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    //! RACCHIUDERE LA LOGICA (FUNZIONI) - come rispondere alle richieste del client
    public function home()
    {
        return view('welcome');
    }
// contatti
public function contatti(){
    return view('contatti');
}

// dettagli
public function dettagli(){
    return view('components.dettagli');
}



// card
    public function card(){

        $elencoCard = [
            [
                'id' => 1,
                'name' => 'Corso hackademy',
                'duration' => '5 mesi'
            ],
            [
                'id' => 2,
                'name' => 'Corso hackademy 2',
                'duration' => '7 mesi'
            ],
            [
                'id' => 3,
                'name' => 'Hackademy part-time',
                'duration' => '9 mesi'
            ],
            [
                'id' => 4,
                'name' => 'Corso Data Analysis',
                'duration' => '3 mesi'
            ],
        ];
        foreach ($elencoCard as $card) {
            if ($card['id'] == $id) {
                return view('card.detail', ['card' => $card]);
            }
        }
    }
    // dependency injection
    public function contactSubmit(Request $request){

        $name =  $request->input('nome');
        $mail =  $request->input('email');
        $informazioni =  $request->info;
    

        
        Mail::to($mail)->send(new ContactMail());
        return redirect(route('homepage'))->with('emailSent', 'E-mail inviata con successo');
}

}
