<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey = 'employee_name';
    public $timestamps = false;
    protected $fillable = [
        'category',
        'employee_name',
        'contact_1',
        'contact_2',
        'emp_email',
        'emp_DOB',
        'Emp_adress',
        'active_City',
        'monthly_customer_target',
        'monthly_books_sale_target',
        'monthly_sale_target',
        'emp_password'
    ];
}
