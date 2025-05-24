]<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    // Define the table name if it’s not the default 'admins'
    protected $table = 'admins';

    // Define the fillable fields
    protected $fillable = ['name', 'email', 'password'];
}
