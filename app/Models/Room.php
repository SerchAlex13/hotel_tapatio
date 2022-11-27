<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['type_id', 'numero', 'estado'];
    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}