<?php

namespace App\frontmodels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function Articles()
    {
        return $this->belongsToMany(Article::class);
    }

    protected $fillable = ['name', 'slug'];
}
