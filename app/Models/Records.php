<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    use HasFactory;
    protected $table = 'medrecord';
    protected $primaryKey = 'id';
    protected $fillable = ['name','date','detail','dr_name','medication_generic_name','drug_name'];
}
