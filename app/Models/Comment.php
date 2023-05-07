<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $fillable = [
        'movie_id',
        'user_id',
        'comment_body'
    ];

    public function movie(){
        return $this->belongsTo(Movie::class, 'movie_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
