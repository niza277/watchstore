<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table= 'payment_methods';

    protected $fillable = [
        'Type','publication_status'
    ];





}
