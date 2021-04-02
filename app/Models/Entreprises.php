<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprises extends Model
{
    use HasFactory;
    protected $fillable=[
        'Company_Email',
        'Company_NumTel',
        'Company_Name',
        'logo'];
}
