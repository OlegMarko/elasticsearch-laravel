<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $data = [];

    public function index()
    {
        $this->data['items'] = [];

        $query = request('query');

        if ($query) {
            $this->data['items'] = Book::search($query)->get();
        };

        return view('welcome', $this->data);
    }
}
