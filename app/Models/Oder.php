<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paymentamount'
    ];

    public function books() {
        return $this->hasMany(books::class);
    }

    public function oder_books() {
        return $this->hasMany(OderBook::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
