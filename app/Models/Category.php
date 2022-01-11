<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id', 'name'];

    public function getResults($name = null)
    {
        if ($name == null) {
            return $this->get();
        } else {
            return $this->where('name', 'LIKE', "%{$name}%")->get();
        }
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
