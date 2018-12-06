<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matchday extends Model
{
    protected $fillable = ['team1_id', 'team2_id', 'startDate', 'endDate', 'matchScore', 'description', 'eventStatus'];
}
