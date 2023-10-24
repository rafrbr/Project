<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class financeiro extends Model
{
   protected $fillable = ['data', 'origem', 'tipo', 'valor', 'grupo', 'subgrupo'];
}
