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

        // Seleccionar un mensaje
        //  $msg = $oFolder->getMessage($uid = 39);
      //Esta linea borra el ticket seleccionado
       // $msg->setFlag('deleted');
        
     //dd($msg);
    // dd($aMessage);
        $name = Auth::user()->name;
        
        $user = Auth::user();
        $contenedor = collect([]);
        //dd($aMessage);
            foreach ($aMessage as $oMessage) {
                $nuevo['id'] = $oMessage->getUid();
                 $nuevo['de'] = $oMessage->getFrom()[0]->mail;
                $nuevo['para'] = $oMessage->getTo()[0]->mail;
                 $nuevo['asunto'] = $oMessage->getSubject();
                 $nuevo['cuerpo'] = $oMessage->getTextBody();
                // $oMessage->getAttachments()->each(function ($oAttachment, $k) use ($oMessage) {

                //     $oAttachment->name;
                //     $oAttachment->content;
                //     //dd($oAttachment->name);
                // });
            
                $contenedor->push($nuevo);
            }
        
        // dd($contenedor->toJson());
        
       return response()->json($contenedor);
    } 






}
