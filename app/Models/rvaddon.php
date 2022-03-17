<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rvaddon extends Model
{
    use HasFactory;

    protected $table = 'rv_addons';
    protected $fillable = [
        'rv_id',
        'text',
        'amount'
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
