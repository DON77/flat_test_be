<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    protected $hidden = [
      'id'
    ];

    public function address() {
        return $this->hasOne(Address::class);
    }
}
