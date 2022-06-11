<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcategory_id' ,
        'brand'  ,
        'title' ,
        'price' ,
        'old_price' ,
        'short_description' ,
        'description' ,
        's' ,
        'm' ,
        'x' ,
        'xl' ,
        'moderation' ,
        'preview_image' ,
        'second_image',
        'third_image' ,
        'partner_id' ,
    ];
}
