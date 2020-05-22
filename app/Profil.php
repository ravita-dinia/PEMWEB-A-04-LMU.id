<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
     protected $table = "Profils";
     protected $fillable = ['nama_saya', 'TTL','Alamat', 'Email', 'nomor_rekening', 'avatar'];
}
