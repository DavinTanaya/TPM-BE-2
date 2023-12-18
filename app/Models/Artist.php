<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'artist_name',
        'country',
    ];

    public function music(): HasMany
    {
        return $this->hasMany(Music::class);
    }
}
