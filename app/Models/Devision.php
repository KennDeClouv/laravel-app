<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Devision extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function employees(): HasMany
    // {
    //     return $this->hasMany(Employee::class);
    // }
    protected $with = ['employees'];
    
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
