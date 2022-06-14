<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','country','address','zip','town','phone','email','user_id'];

    public function items() {
        return $this->hasMany(OrderItem::class,'order_id','id');
    }
}
