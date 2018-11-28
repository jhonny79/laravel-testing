<?php

namespace App\Http\Controllers;

use App\Ticket;
use Illuminate\Http\Request;
use App\User;
use App\Mail\testingEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Webklex\IMAP\Client;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }



    public function test(){


        $oClient = new Client([
            'host'          => 'smtpcorp.cantv.com.ve',
            'port'          => 110,
            'encryption'    => 'false',
            'validate_cert' => true,
            'username'      => 'iforense@cantv.com.ve',
            'password'      => 'A1s2d3f4',
            'protocol'      => 'pop3'
        ]);
        /* 
        //Get all Mailboxes
        /** @var \Webklex\IMAP\Support\FolderCollection $aFolder */
        $aFolder = $oClient->getFolders();

        //dd($aFolder);

        // Mail::to(Auth::user())->send(new testingEmail());
        $oFolder = $oClient->getFolder('INBOX.name');
      

        

        //dd($oFolder);
        set_time_limit(5000);
        //$aMessage = $oFolder->query()->since('26.10.2018')->get();
         $aMessage = $oFolder->query()->new()->get();
         //$aMessage = $oFolder->query()->all()->get();
         //$aMessage = $oFolder->query()->since(now()->subDays(5))->leaveUnread()->get();
         //$aMessage = $oFolder->query()->new()->leaveUnread()->get();
        dd($aMessage);

        return view('contacto', compact('aMessage'));
        
    }


    public function test2(){
        Mail::to('jbapti01@cantv.com.ve')->cc('i-forense@seguridad.cantv.com.ve')->send(new testingEmail());
    }
}
