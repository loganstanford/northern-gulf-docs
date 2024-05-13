<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'buyer_type',
        'seller_type',
        'initiated_date',
        'target_close_date',
        'actual_close_date',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'initiated_date' => 'datetime',
        'target_close_date' => 'datetime',
        'actual_close_date' => 'datetime',
    ];

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    public function vessels(): HasMany
    {
        return $this->hasMany(Vessel::class);
    }
}
