<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'phone', 'address', 'ward_id', 'gender'];




    public function Ward()
    {
        return $this->belongsTo(Ward::class);
    }
}
