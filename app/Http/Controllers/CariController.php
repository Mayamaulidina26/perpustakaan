<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariController extends Controller
{
   public function search(Request $request) 
     {
         $search = $request->search;
         $borrowings = Borrowing::where('nama_peminjam', 'like', "%" . $search . "%")->paginate();
         return view('borrowings.index',['Borrowing' => $b);
     }
}
