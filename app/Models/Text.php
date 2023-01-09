<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'mytext';
    public function mytext()
    {
        return $this->belongsTo(Text::class);
    }

    public function mytodo()
    {
        return $this->belongsTo(Todo::class);
    }
}
