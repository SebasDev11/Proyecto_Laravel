<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $name
 * @property $surname
 * @property $date_born
 * @property $dni
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'name' => 'required',
		'surname' => 'required',
		'date_born' => 'required',
		'dni' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','surname','date_born','dni','estado'];

    public function estudiante()
{
    return $this->belongsTo(Estudiante::class, 'id_Estudiante');
}

}
