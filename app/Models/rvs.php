<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rvs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'price',
        'des_id',
        'image',
        'slug',
        'short_desc',
        'desc',
        'price_night',
        'price_week',
        'price_month',
        'booking_deposite',
        'security_deposite',
        'balance_due',
        'approve'
    ];

    /**
     * Get all of the Image for the rvs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Images()
    {
        return $this->hasMany(Image::class, 'refrence_id', 'id');
    }

    /**
     * Get the destination associated with the rvs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function destination()
    {
        return $this->hasOne(destination::class, 'id', 'des_id');
    }

    /**
     * Get all of the rvAddon for the rvs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rvAddon()
    {
        return $this->hasMany(rvaddon::class, 'rv_id', 'id');
    }

    /**
     * Get all of the rvAddon for the rvs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rvservices()
    {
        return $this->hasMany(rvservices::class, 'rv_id', 'id');
    }

    /**
     * Get all of the rvAddon for the rvs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rvAttribute()
    {
        return $this->hasMany(rvattribute::class, 'rv_id', 'id');
    }
}
