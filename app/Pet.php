<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $guarded = [];
    public $fillable = ['Name','Slug','Description','SpeciesSort','Species','Age','Sex','Neutered','Status','CertifiedPedigree','Thumbnails'];

    protected static $link = 'https://res.cloudinary.com/dwarrion/image/upload/' ;

    public function getArrayThumbnails450x450Attribute(){
        if ($this->Thumbnails == null || strlen($this->Thumbnails) == 0) {
            return array('https://res.cloudinary.com/vernom/image/upload/v1596461891/perfume_project/noimages_aaqvrt.png');
        }
        $list_photos = array();
        $single_thumb = explode(',', $this->Thumbnails);
        foreach ($single_thumb as $single) {
            if (strlen($single) > 0) {
                array_push($list_photos, self::$link . $single);
            }
        }
        return $list_photos;
    }
}
