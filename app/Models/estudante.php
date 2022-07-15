<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudante extends Model
{
    use HasFactory;
    protected $fillable =[
        'nome',
        'idade',
        'cpf',
        'user_id'
    ];
    public function Dono() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function CursandoDisciplina() {
        return $this->belongsToMany(disciplina::class, 'user_id');
    }
}
