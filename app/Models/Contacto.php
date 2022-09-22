<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    /* Especifica otra tabla en caso de que no cumpla con el estandar */
    /* protected $table = 'nombre_tablas'; */
    /* Especificacion de otra columna de PK en caso de que no cumpla el estandar */
    /* protected $primaryKey = 'id_alterna'; */
    /* Especificar si la PK no es autoincrementable */
    /* protected $incrementing = false; */
    /* Especificar otro tipo de dato para la PK */
    /* protected $keyType = 'tipo_de_dato'; */
    /* Especificar si la tabla no suenta con columnas de timestamps */
    /* public $timestamps = false; */
    /* Otros nombres para las columnas de timestamps */
    /* const CREATED_AT = 'nombre_nuevo';
    const UPDATED_AT = 'nombre_nuevo'; */
    /* Definir atributos para permitir asignacion masiva */
    protected $fillable = ['name', 'email', 'message'];
}
