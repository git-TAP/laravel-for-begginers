<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [
        'user_id',
        'title',
        'image',
        'description',
        'status'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');//user_id id the foreign key and the id is the name of the id of the user
    }
}
