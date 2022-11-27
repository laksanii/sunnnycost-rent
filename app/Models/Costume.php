<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Costume extends Model
{
    use HasFactory;

    protected $guards = [];

    protected $fillable = [
        'costume_name',
        'description',
        'gambar',
        'price',
        'status',
        'category_id'
    ];
    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function sizes(){
        return $this->belongsToMany(Size::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}