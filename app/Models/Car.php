<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'brand',
        'model',
        'year',
        'color',
        'patent',
        'fuel',
        'transmission',
        'type',
        'doors',
        'seats',
    ];
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }
}
