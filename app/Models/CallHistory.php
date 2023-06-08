<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CallHistory extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'call_histories';

    public function call(): BelongsTo
    {
        return $this->belongsTo(Call::class);
    }
}
