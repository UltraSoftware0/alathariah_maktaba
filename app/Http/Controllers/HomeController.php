<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Imports\AuthorImport;

//use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BooksImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');

        return view('home_new')->with([
            'authors' => Cache::remember('authors',
                config('app.default_cache_time_out'),
                fn() => Author::with('books')->has('books')->get()->take(config('app.default_quantity'))),

            'books' => Cache::remember('books',
                config('app.default_cache_time_out'),
                fn() => Book::all()->take(config('app.default_quantity')))
        ]);
    }

    public function test(Request $request)
    {
        ini_set('memory_limit', -1);

        $collection = (new BooksImport)->toCollection($request->file('file_upload'));
        $bookAndAuthorsArrayMixed = $collection->first();

        $authorsArray = array();
        unset($bookAndAuthorsArrayMixed[0]);
        foreach ($bookAndAuthorsArrayMixed as $singleArray) {
            if (!array_key_exists($singleArray[0], $authorsArray)) {
                $authorsArray[$singleArray[0]] = [];
            }
            array_push($authorsArray[$singleArray[0]], $singleArray[1]);
        }

        foreach ($authorsArray as $name => $author) {

            $newauthor = Author::create([
                'name' => $name
            ]);

            if ($newauthor->wasRecentlyCreated) {
                $arrayBook = array();

                foreach ($author as $book) {
                    $arrayBook[] = [
                        'name' => $book,
                        'author_id' => $newauthor->id,
                        'mobi_file' => 'books/' . $newauthor->name . '/' . $book . '/' . $book . ' - ' . $newauthor->name . '.mobi',
                        'pdf_file' => 'books/' . $newauthor->name . '/' . $book . '/' . $book . ' - ' . $newauthor->name . '.pdf',
                    ];
//                books/A. J. Liebling/test2/628d50b86a0ae_A. J. Liebling_New Text Document.txt
                }

                Book::insert($arrayBook);
            }

        }


    }
}
