<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $table = 'clients';
    public $timestamps = false;
    protected $fillable = [
        'cname',
        'contact',
        'referred_by',
        'ticket',
        'paid_ticket',
        'paid_food',
        'discount',
        'payable_amount',
        'payment_method',
        'referrece_ID'
    ];
}
