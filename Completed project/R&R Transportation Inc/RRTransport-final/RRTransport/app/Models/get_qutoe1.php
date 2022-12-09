<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class get_qutoe1 extends Model
{
 use HasFactory;

     protected $table = 'get_queto1';
    protected $fillable = [
       'fromtype', 'name','mobileno','email', 'Trailer_type','Amount_of_Trailer','feet','from_zip', 'date', 'from_location','to_zip','to_location', 'shipping_unit', 'good_type','total_weight','Weight_unit','number_of_piece', 'lenght','width','height', 'approx_value','ship_decs','instructions','Freight', 'Commodities',
    ];

     protected $dates = [
        'created_at', 'updated_at',
    ];
}
