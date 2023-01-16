<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Book;

class Author extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
      'name',
    ];

    public function books(){
        return $this->hasMany(Book::class,'author_id','id');
    }

    public function scopeSearchAuthors($query, $search)
    {
        return $query->where('name','LIKE', "%$search%");
    }

}
