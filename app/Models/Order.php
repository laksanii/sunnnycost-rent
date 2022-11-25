<?php

namespace App\Models;

use App\Models\User;
use App\Models\Costume;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guards = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function costumes(){
        return $this->belongsToMany(Costume::class);
    }
}