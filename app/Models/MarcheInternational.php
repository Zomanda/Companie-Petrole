<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcheInternational extends Model
{
    /*
    * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
    */
    use HasFactory;

    protected $primaryKey = array('nomCompagnie', 'noGisement');
    public $incrementing = false;

    protected $fillable = ['nomCompagnie', 'noGisement', 'prixBaril', 'quantite'];
    
    public $timestamps = false;

    public function marches() : belongsToMany
    {
        return $this->belongsToMany('App\Models\Gisement', $primaryKey)/*->withPivot('')*/;
    }
}