<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->belongsToMany(Categorias::class);
    }
    protected $fillable = [
        "name",
        "slug",
        "price",
        "stock",
    ];
}
