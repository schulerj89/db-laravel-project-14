<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MLB extends Model
{
    use HasFactory;

    protected $table = 'mlb';

    protected $primaryKey = 'player_id';

    public $timestamps = true;

    protected $dateFormat = 'Y-m-d H:i:s';
}
