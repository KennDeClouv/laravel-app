<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $with = ['devision'];

    public function devision():BelongsTo
    {
        return $this->belongsTo(Devision::class);
    }
    // public function devision():HasMany
    // {
    //     return $this->hasMany(Devision::class);
    // }
}
