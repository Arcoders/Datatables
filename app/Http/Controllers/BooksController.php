<?php

namespace App\Http\Controllers;

use App\Book;
use Yajra\DataTables\Facades\DataTables;


class BooksController extends Controller
{

    public function index()
    {
        return view('books.list');
    }

    public function booksData()
    {
        $model = Book::with('libraries', 'author')->withTrashed();

        return DataTables::eloquent($model)
                            ->addColumn('actions', 'books.datatables.actions')
                            ->rawColumns(['actions'])
                            ->make(true);
    }

}
