<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufaktur extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'made_in'];
    public function assets()
    {
        return $this->hasMany(assets::class);
    }
}
