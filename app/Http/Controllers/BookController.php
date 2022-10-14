<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Book;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Http\Request;    

// use Illuminate\Support\Facades\Request;

class BookController extends Controller
{
    private $datas;
    public function viewBook()
    {
        $query = Book::all();
        $data['book_list'] = $query;
        return view('home', $data);
    }
    // =====================
    //         Add 
    // =====================
    public function postAddBook(Request $request)
    {
        $validation = validationForms($request);
        if ($validation->fails()) {
            return redirect('/buku');
            die();
        }

        $datas = editAddProperties($request); //Helper Global
        $newBook = new Book();
        $newBook->tittle = $datas->tittle;
        $newBook->desc = $datas->desc;
        $newBook->save();
        return redirect('buku'); // redirect and route
    }
    // =====================
    //         Edit 
    // =====================
    public function postEditBook(Request $request)
    {
        $validation = validationForms($request);
        if ($validation->fails())
        {
            return redirect('buku')
                    ->withErrors($validation);
        }
        $datas = editAddProperties($request); //Helper Global
        $editBook = Book::find($datas->id);
        $editBook->tittle = $datas->tittle;
        $editBook->desc = $datas->desc;
        $editBook->save();
        return redirect('buku');
    }
    // =====================
    //         Delete 
    // =====================
    public function postDeleteBook(Request $request)
    {
       $id = getId($request); //Helper Global get id
        $Book = Book::find($id);
        $Book->delete();
        return redirect('buku');
    }
}
