<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function getAttributesAttribute() {
        $this["attributes"] = [
          'first_name' => $this->first_name,
          'last_name' => $this->last_name,
          'middle_name' => $this->middle_name
        ];
    }

    protected $hidden = [
        'first_name',
        'last_name',
        'middle_name',
    ];
}
