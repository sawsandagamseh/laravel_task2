<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class capital extends Model
{
    use HasFactory;
    public function capital()
    {
        return $this->belongsTo(Country::class);
    }
}
