<?php

namespace App\Models;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;

class VechileGallery extends Model
{
    protected $fillable=[
        'photos','vehicles_id'
    ];
}
