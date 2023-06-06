<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $fillable = [
        'id',
        'cus_name',
        'cus_email',
        'cus_password',
        'cus_address',
        'cus_phone',
    ]; 
}
