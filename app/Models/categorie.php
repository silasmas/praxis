<?php

namespace App\Models;

use App\Models\activite;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'categories';

    public function activites()
    {
        return $this->hasMany(activite::class);
    }
}
