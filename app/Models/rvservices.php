<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rvservices extends Model
{
    use HasFactory;

    protected $table = 'rv_services';

    protected $fillable = [
        'rv_id',
        'service_name',
        'service_amount',
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
