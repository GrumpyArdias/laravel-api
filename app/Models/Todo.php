<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'completed',
    ];


    static function createTodo($text)
    {
        return Todo::create([
            'text' => $text,
        ]);
    }
}
