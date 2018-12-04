<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection as Collection;
use Webklex\IMAP\Facades\Client;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( User $user)
    {   
        // configuración del modulo de correo para recibir nuevos correos
        $oClient = Client::account('default');
        $oClient->connect();
        $aFolder = $oClient->getFolders();
        $oFolder = $oClient->getFolder('INBOX.name');
        $aMessage = $oFolder->query()->new()->get();

        // $msg = $oFolder->getMessage($uid = 8);
        //$aMessage = Collection::make($aMessage);

      //Esta linea borra los tikect nuevos 
       // $msg->setFlag('deleted');
        
     //dd($msg);
    // dd($aMessage);
        $name = Auth::user()->name;

        $user = Auth::user();
        $contenedor = collect([]);
        
            foreach ($aMessage as $oMessage) {
                $nuevo['id'] = $oMessage->getUid();
                $nuevo['asunto'] = $oMessage->getSubject();
                $contenedor->push($nuevo);
            }
        
        dd($contenedor->toJson());
        return view('home', compact('user', 'aMessage'));
        // return response()->json($aMessage);
    } 






}
