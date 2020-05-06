<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = 'zenrolle_suppliers';
    protected $fillable = ['name','phone','email','address','city','country'];
}
