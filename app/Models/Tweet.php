<?php

namespace App\Models;

use App\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    use Likeable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
