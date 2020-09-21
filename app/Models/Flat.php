<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function attributes() {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }

    public function relationships() {
        return $this->belongsTo(Relationship::class, 'relationship_id');
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_flat');
    }
}
