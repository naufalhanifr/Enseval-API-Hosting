<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cost extends Model
{
    use HasFactory;
    protected $table = "cost";
    protected $guarded = [];
    public $timestamps = false;

    public function penjemputan()
    {
        return $this->belongsToMany(penjemputan::class);
    }
}
