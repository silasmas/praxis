<?php

namespace App\Models;

use App\Models\enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class contact extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

    // Mutateur pour formater la date lors de l'enregistrement
    // public function setCreatedAtAttribute($value)
    // {
    //     $this->attributes['created_at'] = \Carbon\Carbon::parse($value)->format('d-m-Y à H:i:s');
    // }

    // Accesseur pour formater la date lors de la récupération
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y à H:i:s');
    }
    public function enseignant()
    {
        return $this->belongsTo(enseignant::class);
    }
}
