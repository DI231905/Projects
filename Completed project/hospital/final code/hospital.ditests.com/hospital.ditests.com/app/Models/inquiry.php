<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inquiry extends Model
{
    use HasFactory;

     protected $table = 'inquiry';
    protected $fillable = [
       'fname','lname', 'email','mobileno','description'
    ];
}
