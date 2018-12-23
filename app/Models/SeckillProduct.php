<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class SeckillProduct extends Model
{
    protected $fillable = ['start_at','end_at'];

    protected $dates = ['start_at','end_at'];

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getIsBeforeStartAttribute()
    {
        return Carbon::now()->lt($this->start_at);
    }

    public function getIsAfterStartAttribute()
    {
        return Carbon::now()->gt($this->start_at);
    }
}
