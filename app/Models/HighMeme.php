<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HighMeme extends Model
{
    protected $fillable = [
        'title', 'description', 'image_url', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
