<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Product
 * Сущность "Товар"
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;

    /**
     * Доступные атрибуты сущности
     * @var array
     */
    protected $fillable = ["category", "type", "filling_type", "height", "width", "material", "color", "model"];

    /**
     * Получение всех заказов, в которых может быть товар
     * @return BelongsToMany
     */
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
