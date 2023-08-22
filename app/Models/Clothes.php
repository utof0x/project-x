<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Clothes extends Model
{
    use HasFactory;

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    public function type(): HasOne
    {
        return $this->hasOne(Type::class);
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
