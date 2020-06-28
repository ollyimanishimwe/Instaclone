<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage(){

        $imagePath = ($this->image) ?  $this->image : 'profile/o1HlE2HsphMJXeVNFtRNkotIs6GY23sBbtVbyhrR.jpeg';
        
        return '/storage/' . $imagePath; 
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
