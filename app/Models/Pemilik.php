<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
    use HasFactory;
    protected $table = "pemiliks";
 
    public function aset()
    {
    	return $this->belongsTo(aset::class);
    }
}
