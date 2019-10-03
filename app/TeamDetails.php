<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamDetails extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ["tName","tCountry","tDomesticVictory","tLogos","tStatus","created_at","updated_at"];
}
