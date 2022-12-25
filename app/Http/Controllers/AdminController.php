<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function daftar(){
        // 'ticket' => Ticket::where('lapangan_id', $id)->get();
        $daftar = DB::table('tickets')->get();
        return view('daftar',[
                "title" => "daftar",
                'daftar' => $daftar,
                'i' => '1'
         ]);
    }

    public function checkin(){
        return view('checkin',[
                "title" => "ci"
         ]);
    }
    public function laporan(){
        $daftar = DB::table('tickets')->get();
        return view('laporan',[
                "title" => "laporan",
                'daftar' => $daftar,
                'i' => '1'
         ]);
    }

    public function hapus(Request $request){
        $ticket = Ticket::where('id', $request->id);
        $ticket->delete();
        return back();
    }

    public function cek(Request $request){
        $ticket = Ticket::where('nomor_id', $request->nomor_id)->first();
        // dump($ticket);
        return view('cek',[
            "title" => "ci",
            'ticket' => $ticket
     ]);

    }
    public function confirm(Request $request){
        $ticket = Ticket::where('nomor_id', $request->nomor)->first();
        $ticket['status'] = '1';
        
        $ticket->save();
        
        $request->session()->flash('berhasil', 'Berhasil Konfirmasi Ticket');
        return view('checkin',[
            "title" => "ci"
        ]);
    }
}
