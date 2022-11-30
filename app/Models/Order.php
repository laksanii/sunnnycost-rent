<?php

namespace App\Models;

use App\Models\User;
use App\Models\Costume;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guards = [];
    protected $dates = ['created_at', 'updated_at','tgl_rental'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function costumes(){
        return $this->belongsToMany(Costume::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }
}