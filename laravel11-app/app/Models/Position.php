<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'position';

    protected $fillable = ['name','user_id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
