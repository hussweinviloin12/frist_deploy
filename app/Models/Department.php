<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
protected $table = 'departments';
    protected $fillable = ['name', 'gpa', 'study_type', 'branch', 'fees'];
    use HasFactory;
}
