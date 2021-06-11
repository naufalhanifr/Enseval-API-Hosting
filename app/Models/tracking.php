<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracking extends Model
{
    use HasFactory;
    protected $table = "tracking";
    protected $guarded = [];
    public $timestamps = false;

    public function delivery()
    {
        return $this->belongsToMany(delivery::class);
    }
}
