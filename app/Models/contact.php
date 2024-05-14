<?php

namespace App\Models;

use App\Models\enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class contact extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function enseignant()
    {
        return $this->belongsTo(enseignant::class);
    }
}
