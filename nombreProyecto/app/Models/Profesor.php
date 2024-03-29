<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'profesors';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombreApellido',
        'profesion',
        'gradoAcademico',
        'telefono'
    ];

    protected $hidden = ['id'];

    public function curso()
    {

        return $this->hasMany(Curso::class);
    }
}
