<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'describe',
        'image',
        'cate_id',
        'price'

       
    ];
    public function Categories()
    {
        return $this->hasMany(Categories::class);
    }
}
