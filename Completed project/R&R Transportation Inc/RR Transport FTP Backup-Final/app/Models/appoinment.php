<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appoinment extends Model
{
    use HasFactory;
      protected $table = 'appoinment';
    protected $fillable = [
       'name', 'email','mobileno','affiliation','type','date','from','to','description'
    ];
}
