<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    use HasFactory;
    protected $table = "delivery";
    protected $guarded = [];
    public $timestamps = false;

    public function driver()
    {
        return $this->belongsToMany(driver::class);
    }

    public function product()
    {
        return $this->belongsToMany(product::class);
    }

    public function vehicle()
    {
        return $this->belongsToMany(vehicle::class);
    }
}
