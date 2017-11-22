<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;

class BooksController extends Controller
{

    public function index()
    {
        return view('books.list');
    }

    public function booksData()
    {
        $model = Book::with('libraries', 'author')->withTrashed();
        $actions = 'books.datatables.actions';

        return DataTables::eloquent($model)
                            ->addColumn('action', $actions)
                            ->make(true);
    }

}
