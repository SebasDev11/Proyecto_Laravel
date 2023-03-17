<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nota
 *
 * @property $id
 * @property $id_Estudiante
 * @property $nota3
 * @property $nota2
 * @property $nota1
 * @property $date_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    
    static $rules = [
		'id_Estudiante' => 'required',
		'nota3' => 'required',
		'nota2' => 'required',
		'nota1' => 'required',
		'date_at' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_Estudiante','nota3','nota2','nota1','date_at'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'id', 'id_Estudiante');
    }

}
