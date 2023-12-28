<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;
    protected $table = 'purchases';
    protected $primaryKey = 'id';
    protected $fillable = [
        'number',
        'date',
        'created_at',
        'updated_at',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
