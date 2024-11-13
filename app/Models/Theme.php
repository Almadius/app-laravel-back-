<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    /**
     * Массово заполняемые атрибуты модели.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'display_name',
    ];


//    В дальнейшем можно реализовать функционал авторизацией с пользователями

//    public function users()
//    {
//        return $this->hasMany(User::class);
//    }
}
