<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Port;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['message','sender','receptor','date','port_id'];

    public function port()
    {
        return $this->hasOne(Port::class);
    }
}
