<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $table = 'despesas';

    protected $fillable = [
        'data',
        'grupo',
        'subgrupo',
        'forma_pagamento',
        'valor',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
