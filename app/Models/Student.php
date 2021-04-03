<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Student extends Model
{
    use HasFactory;

  	protected $primaryKey = 'CIN';
  	public $incrementing = false;
    protected $fillable = [
        'CIN', 'Nom', 'Prenom', 'DateN', 'Sexe', 'Etablissement', 'Email', 'NumTel'
    ];

    //RELATION AVEC LA TABLE POSTULER :

    public function Postuler()
	{
    return $this->belongsToMany('App\Models\Postuler');
	}
	
}

