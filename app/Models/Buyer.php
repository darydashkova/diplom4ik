<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/*
 * Сущность "Покупатель"
 * В БД содержит только поля id и name
 */

class Buyer extends Model
{
    use HasFactory;

    /**
     * Доступные атрибуты сущности
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Все заказы покупателя
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
