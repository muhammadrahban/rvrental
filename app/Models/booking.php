<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $table = 'vehicle_bookings';
    protected $fillable = ['user_id','vehicle_id','add_on_id','check_in','check_out','total_amount','booking_status'];

    /**
     * Get the user associated with the booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    /**
     * Get the user associated with the booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rv()
    {
        return $this->hasOne(rvs::class, 'id', 'vehicle_id');
    }
}
