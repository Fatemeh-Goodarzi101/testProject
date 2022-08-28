<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Message;

class Port extends Model
{
    use HasFactory;

    protected $fillable = ['url','api_key','status'];

    public function message()
    {
        return $this->belongsToMany(Message::class);
    }
}
