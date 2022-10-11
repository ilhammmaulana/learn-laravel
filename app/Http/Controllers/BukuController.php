<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Buku;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
class BukuController extends Controller
{
        // Choice Using Query Builder or Elequent
    public function viewBook()
    {
        // ==========================
        // With Elequent
        // $query = Buku::all();


        // ==========================
        // With Query Builder
        $query = DB::table('buku')->get();
        $data['book_list'] = $query;
        return view('home', $data);
    }
    public function postAddBook()
    {
        $tittle = Request::get('tittle');
        $desc = Request::get('desc');

        // ==========================
        // With Elequent Laravel
        // $newBuku = new Buku;
        // $newBuku->tittle = $tittle;
        // $newBuku->desc = $desc;
        // $newBuku->save();
        // return redirect()->route('login') // redirect and route

        // =======================
        // With Query Builder
        DB::table('buku')
        ->insert([
            'tittle' => $tittle,
            'desc' => $desc,
        ]);
        return redirect('buku');
    }
    public function postEditBook()
    {
        $tittle = Request::get('tittle');
        $desc = Request::get('desc');
        $id = Request::get('id');
        // ==========================
        //  Elequent
        // $editBuku = Buku::find($id);
        // $editBuku->tittle = $tittle;
        // $editBuku->desc = $desc;
        // $editBuku->save();


        // =======================
        // Query Builder
        DB::table('buku')->where('id', $id)
        ->update([
            'tittle' => $tittle,
            'desc' => $desc,
        ]);



        return redirect('buku');

    }
    public function postDeleteBook()
    {
    $id = Request::get('id');
    // =======================
    // Elequent
    // $buku = Buku::find($id);
    // $buku->delete();
    // =======================
    // Query Builder
            DB::table('buku')->where('id', $id)
            ->delete();
    return redirect('buku');
    }
}
