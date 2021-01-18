<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}