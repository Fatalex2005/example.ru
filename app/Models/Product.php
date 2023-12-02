<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //Обратная связь ко многим (от FК К PK)
    public function category() {
        return $this-> belongsTo(Category::class);
    }
    protected $fillable = ['name', 'price', 'quantity', 'description', 'category_id'];

}
