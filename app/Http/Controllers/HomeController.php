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
        $aMessage = $oFolder->query()->new()->get()->paginate(10);

        $aMessage;
        //$newMessage = Collection::make($aMessage);

        //dd($newMessage);

        $name = Auth::user()->name;

        $user = Auth::user();
        
        return view('home', compact('user', 'aMessage'));
    }






}