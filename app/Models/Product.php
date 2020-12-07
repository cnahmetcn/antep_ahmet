<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'description',
        'photo',
        'created_by',
        'category_id',
    ];

    // İlişkili olduğu alanlar
    public function user() {
        return $this->hasMany('App\Models\User','id','created_by');
    }

    public function category() {
        return $this->hasOne('App\Models\Category','id','category_id');
    }
}
