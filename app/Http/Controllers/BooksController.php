<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreateBooksRequest;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Models\Author;
use App\Http\Requests\UpdateBooksRequest;
use Illuminate\Validation\ValidationException;




class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('books.books', ['books' => Book::with('author')->get()] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBooksRequest $request)
    {
        $authorName = Author::findOrFail($request->author_id)->name;
        $bookName = $request->name;

        $path = 'books/'.$authorName.'/'.$bookName;
        DB::beginTransaction();
        try {
            $pdfFileName = uniqid()."_"."$authorName"."_".$request->file('pdf_file')->getClientOriginalName();
            $mobiFileName = uniqid()."_"."$authorName"."_".$request->file('pdf_file')->getClientOriginalName();

            $pdfBookPath = Storage::putFileAs($path, $request->file('pdf_file'), $pdfFileName);
            $mobiBookPath = Storage::putFileAs($path, $request->file('pdf_file'), $mobiFileName);

            Book::create([
                'name' => $bookName,
                'author_id' => $request->author_id,
                'pdf_file' => $pdfBookPath,
                'mobi_file' => $mobiBookPath,
            ]);

        }catch (QueryException | FileException  $e){
            DB::rollBack();
            return back()->with(['error' => 'Sorry the Book was not created successfully']);
        }
        DB::commit();
        return back()->with(['success' => 'The Book has been added successfully!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        if($book){
            return response()->json(['data' =>['book' => $book, 'authors' => Author::all()]],200);
        }
        return response()->json(['data' => ['message' => 'the book was not found!']],404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBooksRequest $request, Book $book)
    {


        DB::beginTransaction();

        try {
            $data = [
                'name' => $request->name,
                'author_id' => $request->author_id,
            ];

            if($request->has('mobi_file')){
                $mobiFileName = uniqid()."_".$request->file('pdf_file')->getClientOriginalName();
                if(!$mobiFileName){
                    throw ValidationException::withMessages(['mobi_file' => 'the value of the mobi file is incorrect']);
                }
                $test = Storage::putFileAs('books/mobi_files', $request->file('pdf_file'), $mobiFileName);
                if(!$test){
                    throw ValidationException::withMessages(['mobi_file' => 'The mobi file was not saved correct please try again later']);
                }
                $data['mobi_file']  = $mobiFileName;
            }

            if($request->has('pdf_file')){
                $pdfFileName = uniqid()."_".$request->file('pdf_file')->getClientOriginalName();
                if(!$pdfFileName){
                    throw ValidationException::withMessages(['pdf_file' => 'the value of the pdf file is incorrect']);
                }
                $test = Storage::putFileAs('books/pdf_files', $request->file('pdf_file'), $pdfFileName);
                if(!$test){
                    throw ValidationException::withMessages(['mobi_file' => 'The pdf file was not saved correct please try again later']);
                }
                $data['pdf_file']  = $pdfFileName;

            }
            $book->update($data);

        }catch (QueryException $e){
            DB::rollBack();
            return back()->with('error', 'The Book has not been saved please try again later');
        }

        DB::commit();
        return back()->with('success', 'The Book has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        if($book->delete()){
            return response()->json(['message' => 'the books was deleted successfully'],201);
        }
        return response()->json(['message' => 'Error occurred please try again later'],512);
    }


    /**
     * downloads the pdf version of the book.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function downloadPdf(Book $book){
        if(!isset($book->pdf_file)){
            return back()->with(['error' => 'sorry the file was not found']);
        }
        if(Storage::exists('books/'.$book->pdf_file)){
            return Storage::download('books/'.$book->pdf_file);
        }
        return back()->with(['error' => 'sorry the file was not found']);
    }

    /**
     * downloads the mobi version of the book.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function downloadMobi(Book $book){
        if(!isset($book->mobi_file)){
            return back()->with(['error' => 'sorry the file was not found']);
        }

        if(Storage::exists('books/'.$book->mobi_file)){
            return Storage::download('books/'.$book->mobi_file);
        }
        return back()->with(['error' => 'sorry the file was not found']);
    }

    public function searchBooks(Request $request){
        return response()->json([
            'data'=>[
                'books' => Book::query()->searchBooks($request->search)->get()->take(config('app.default_quantity'))
            ]
        ],201);
    }

    public function getDataBooksAfterLastIndex(Request $request){
        $alreadyPrintedBooks = $request->books;
        $query = Book::query()->whereNotIn('id',$alreadyPrintedBooks);

        if($request->has('search')){
            $query->searchBooks($request->search);
        }
        $queryResult = $query->orderBy('id')->get()->take(config('app.default_quantity'));

        return response()->json([
            'data'=>[
                'books' => $queryResult
            ]
        ],201);

    }
}
