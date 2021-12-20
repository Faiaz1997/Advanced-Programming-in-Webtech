<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\userinfos;
use App\Models\projects;

class donationdetails extends Model
{
    use HasFactory;
    public $timestamps   = false;
    public function donordetails(){
        return $this->belongsTo(userinfos::class,'donor_id');
    }
    public function donations(){
        return $this->belongsTo(projects::class,'project_id','p_id');
    }
}
