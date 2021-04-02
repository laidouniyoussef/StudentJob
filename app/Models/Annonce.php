<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable=[

        
        'title',
        'job_desc',
        'address',
        'skills',
        'nbr_profils_needed',
        'salaire',
        'job_nature',
        'duration',
        'category_id'
    ];


    public function category()
    {
        return $this->belongsTo(JobCategory::class);
    }


}
