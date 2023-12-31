<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Products extends Model
{
    use HasFactory;

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function type(): HasOne
    {
        return $this->hasOne(Type::class, 'id', 'type_id');
    }

    public function gender(): HasOne
    {
        return $this->hasOne(Gender::class, 'id', 'gender_id');
    }

    public function clothesSize(): HasOne
    {
        return $this->hasOne(ClothesSize::class);
    }

    public function shoesSize(): HasOne
    {
        return $this->hasOne(ShoesSize::class);
    }

    public function color(): HasOne
    {
        return $this->hasOne(Color::class);
    }
}
