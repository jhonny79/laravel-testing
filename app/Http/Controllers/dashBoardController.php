<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection as Collection;
use Illuminate\Support\Facades\Mail;
use Webklex\IMAP\Facades\Client;
use App\Solicitud;
class dashBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio() {
        $user = Auth::user();
        $user = Collection::make($user);
        $user->except('email_verified_at', 'created_at' , 'updated_at');
        return view('web.inicio', compact('user'));
        
    }

    public function user (){
        $user = Auth::user();
        $user = Collection::make($user);
        $user = $user->except('email_verified_at', 'created_at' , 'updated_at');

        return response()->json($user);
    }

    public function solicitudes (){
        
        $oClient = Client::account('default');
        $oClient->connect();
        $aFolder = $oClient->getFolders();
        $oFolder = $oClient->getFolder('INBOX.name');
        $aMessage = $oFolder->query()->new()->get();

        

        foreach ($aMessage as $oMessage) {
            
            $existe = Solicitud::where('message_id', $oMessage->getMessageId())->get();
             

            if($existe->isEmpty()){
                Solicitud::create([
                    'de' => $oMessage->getFrom()[0]->mail,
                    'para' => $oMessage->getTo()[0]->mail,
                    'asunto' => $oMessage->getSubject(),
                    'cuerpo' => $oMessage->getTextBody(),
                    'message_id' => $oMessage->getMessageId(),
                ]);

                $existe = 'se acaban de guardar';
            }else{
                $existe = [ 'alerta' => 'ya esta llena'];
            }
            
        }
        
        $solicitudes = Solicitud::all();
        return response()->Json($solicitudes);
    }
}
