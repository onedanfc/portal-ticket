<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function sheila(){
        return view('pesan',[
            "title" => "Pesan Ticket",
            "band" => "Sheila On 7"
        ]);
    }

    public function setia(){
        return view('pesan',[
            "title" => "Pesan Ticket",
            "band" => "ST 12"
        ]);
    }

    public function judy(){
        return view('pesan',[
            "title" => "Pesan Ticket",
            "band" => "Judy and Mary"
        ]);
    }

    public function konfirmasi(Request $request){
        $data = $request->validate([
            'nama' => 'string|min:4|max:50',
            'email' => 'email:dns|unique:users',
            'phone' => 'string|min:12|max:14'
        ]);
        $data['band'] = $request->band;
        $data['nomor_id'] = rand ( 100000 , 999999 );
        
        return view('konfirmasi',[
            "title" => 'Halaman Konfirmasi',
            "data" => $data
        ]);
    }

    public function cetak(Request $request){
        // dd($request->email);
        $data['nama'] = $request->nama;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['band'] = $request->band;
        $data['nomor_id'] = $request->nomor;
        $data['status'] = '0';
        
        Ticket::create($data);
        $request->session()->flash('success', 'Berhasil Pesan Ticket');
        return view('welcome');
    }
}
