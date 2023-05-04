<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(Request $request) {
        $request->session()->put('Ameliya','Politeknik Negeri Jember');
        echo "Data telah ditambahkan ke session.";
    }

    public function show(Request $request) {
        if($request->session()->has('Ameliya')) {
            echo $request->session()->get('Ameliya');
        } else {
            echo 'Tidak ada data dalam session.';
        }
    }

    public function delete(Request $request) {
        $request->session()->forget('Ameliya');
        echo "Data telah dihapus dari session.";
    }
}
