<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vehicle extends Model
{
    use HasFactory;

    public function calls(): BelongsToMany
    {
        return $this->belongsToMany(
            Call::class,
            'calls_vehicles',
            'vehicle_id',
            'call_id'
        );
    }
}
