<?php

namespace Alumni;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Table name
    protected $table = 'profiles';
    // Primary key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamps = true;
}
