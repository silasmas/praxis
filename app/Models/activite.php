<?php

namespace App\Models;

use App\Models\categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class activite extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['ate_at'];
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y à H:i:s');
    }
    public function getDateAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y à H:i:s');
    }
    public function categories()
    {
        return $this->belongsTo(categorie::class);
    }
}
