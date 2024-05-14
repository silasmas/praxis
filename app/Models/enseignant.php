<?php

namespace App\Models;

use App\Models\article;
use App\Models\contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class enseignant extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function article()
    {
        return $this->hasMany(article::class);
    }
    public function message()
    {
        return $this->hasMany(contact::class);
    }
}
