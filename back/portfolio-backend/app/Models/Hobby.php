<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        'name',
        'description',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    public $timestamps = false;

}
