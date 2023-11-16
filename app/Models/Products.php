<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory, HasUuids;

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    protected $fillable = [
        "name",
        "price",
    ];
}
