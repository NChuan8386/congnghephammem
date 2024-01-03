<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Book extends Model
{
    protected $fillable = ['bookname', 'info', 'years','author_id'];
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}