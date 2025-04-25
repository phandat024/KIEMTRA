<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = ['order_list', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
