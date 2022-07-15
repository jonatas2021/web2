<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disciplina extends Model
{
    use HasFactory;
    protected $fillable =[
        'materia',
        'professor',
        'user_id'
    ];
    public function CursandoDisciplina() {
        return $this->belongsToMany(estudante::class, 'user_id');
    }
}
