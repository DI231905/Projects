<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inquiry extends Model
{
    use HasFactory;

     protected $table = 'enquires';
    protected $fillable = [
       'name', 'email','mobileno','date','from','to','affiliation','type','description'
    ];
}
