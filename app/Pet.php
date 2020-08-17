<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $guarded = [];
    public $fillable = ['Name','Slug','Description','SpeciesSort','Species','Age','Sex','Neutered','Status','CertifiedPedigree'];
}
