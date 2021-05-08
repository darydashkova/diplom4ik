<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Order
 * Сущность "Заказ"
 * Связана с сущностями "Покупатель" и "Товар"
 * @package App\Models
 */
class Order extends Model
{
    use HasFactory;

    /**
     * Доступные атрибуты сущности
     * @var array
     */
    protected $fillable = ["status", "buyer_id", "total"];

    /**
     * Получение покупателя, которому принадлежит заказ
     * @return BelongsTo
     */
    public function buyer(): BelongsTo
    {
        return $this->belongsTo(Buyer::class);
    }

    /**
     * Получение всех товаров из заказа
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
