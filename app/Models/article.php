<?php

namespace App\Models;

use App\Models\enseignant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class article extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];
    public function enseignant()
    {
        return $this->belongsTo(enseignant::class);
    }
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }
}
