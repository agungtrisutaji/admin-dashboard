<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];

    protected $appends = [
        'stored_at'
    ];

    public function getStoredAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    /**
     * Get the suplier that owns the Stock
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function suplier(): BelongsTo
    {
        return $this->belongsTo(Suplier::class, 'suplier_id', 'id');
    }
}
