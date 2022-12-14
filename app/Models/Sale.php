<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table = 'sales';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'pnumber',
        'vouchers',
        'cost',
        'discount',
        'total_amount'
    ];
}
