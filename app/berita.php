<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    PUBLIC $fillable=['id_user','img','judul','berita','categoris_id'];
}
