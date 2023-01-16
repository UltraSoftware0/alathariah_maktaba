<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Doctrine\DBAL\Query\QueryException;
use http\Exception\BadQueryStringException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AuthorsController extends Controller
{
    public function __construct(){
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('authors.authors',['authors' => Author::all()]);
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        try {
            Author::create([
                'name' => $request->name,
            ]);

        }catch (\Illuminate\Database\QueryException $e){
            return  back()->with('error',config('messages.default.error'));
        }

        return  back()->with('success',"Author saved successfully !");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        if($author->update(['name' => $request->name])){
            return  back()->with('success',"Author has been updated successfully !");
        }
        return  back()->with('error',config('messages.default.error'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        if($author->delete()){
            return response()->json(['message' => 'the author has been deleted successfully'],204);
        }
        return response()->json(['message' => 'Error occurred please try again later'],512);
    }

    public function getAllAuthors(){
        return response()->json(['data' => ['authors' => Author::all()]],200);
    }

    public function searchAuthors(Request $request){
        return response()->json([
            'data'=>[
                'authors' => Author::query()->with('books')->has('books')->searchAuthors($request->search)->get()->take(config('app.default_quantity'))
            ]
        ],201);
    }


    public function getDataAuthorsAfterLastIndex(Request $request){

        $alreadyPrintedAuthors = $request->authors;

        $query = Author::query()->with('books')
                                ->has('books')
                                ->whereNotIn('id',$alreadyPrintedAuthors);

        if($request->has('search')){
            $query->searchAuthors($request->search);
        }

        return response()->json([
            'data'=>[
                'authors' => $query->orderBy('id')->get()->take(config('app.default_quantity'))
            ]
        ],201);

    }


}
