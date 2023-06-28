<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'long_description'];//propriedades que podem ser alteradas várias vezes
    
    public function toogleComplete(){
        $this->completed = !$this->completed;
        $this->save();
    }
}
