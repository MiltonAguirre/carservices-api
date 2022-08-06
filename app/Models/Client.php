<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'birthday',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'country',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function cars()
    {
        return $this->hasMany('App\Models\Car');
    }
}
