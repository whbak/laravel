<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'mytodo';
    public function mytodo()
    {
        return $this->belongsTo(Todo::class);
    }
}
