<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Import the user class
use App\Models\User;

class BlogUser extends Model
{
    use HasFactory;

    public function User()
    {
        $this->belongsTo(User::class);
    }
}
