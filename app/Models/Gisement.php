<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Gisement extends Model
{
    /*
    * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
    */
    use HasFactory;

    protected $primaryKey = 'noGisement';

    protected $fillable = ['pays','capaciteEstimee','capaciteConfirmee','composition','image'];

    public $timestamps = false;

    public function gisements() : belongsToMany
    {
        return $this->belongsToMany('App\Models\MarcheInternational');
    }
}
