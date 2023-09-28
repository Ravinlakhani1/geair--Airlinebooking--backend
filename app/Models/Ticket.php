<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    /**
     * Get the flight that owns the Ticket
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function flight(): BelongsTo
    {
        return $this->belongsTo(Flight::class);
    }
}
