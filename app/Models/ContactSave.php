<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSave extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','email','phone','business_type','employees_count','business_name','query_type','message'];
}
