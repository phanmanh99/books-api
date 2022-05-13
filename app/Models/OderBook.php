<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'amount'
    ];

    public function oder() {
        $this->belongsTo(Oder::class);
    }
}
