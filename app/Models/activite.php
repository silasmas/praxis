<?php

namespace App\Models;

use App\Models\categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activite extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['ate_at'];
    protected $table = 'activites';
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y à H:i:s');
    }
    public function getDateAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y à H:i:s');
    }
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
}
