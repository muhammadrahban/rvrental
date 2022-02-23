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
        'desc'
    ];

    /**
     * Get all of the Image for the rvs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Image()
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
}
