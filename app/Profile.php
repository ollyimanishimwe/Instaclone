<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage(){

        $imagePath = ($this->image) ?  $this->image : 'profile/b2BjnUPpqr7extjJoZCl2ihkYENsMTUd0j9sMHco.jpeg';
        
        return '/storage/' . $imagePath; 
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
