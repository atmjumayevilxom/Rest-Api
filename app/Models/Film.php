<?php

namespace App\Models;

use App\Models\Director;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;
    public function director()
    {

        return $this->belongsTo(Director::class);
    }
}
