<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
      'name',
      'author_id',
      'mobi_file',
      'pdf_file',
    ];


    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function scopeSearchBooks($query, $search)
    {
        return $query->where('name','LIKE', "%$search%");
    }
}
