<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Movie extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'title', 'detail', 'movie_url', 'description', 'cast', 'language', 'quality', 'tags', 'duration', 'year', 'upload_date'
    ];
    public $timestamps = false;
}