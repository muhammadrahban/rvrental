<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rvattribute extends Model
{
    use HasFactory;

    protected $table = 'rv_attributes';

    protected $fillable = [
        'rv_id',
        'heading',
        'entity',
        'value',
        'type'
    ];

    /**
     * Get all of the Image for the rvs
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rv()
    {
        return $this->hasOne(rvs::class, 'id', 'rv_id');
    }
}
