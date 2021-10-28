<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portal;

class Division extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Portal()
    {
        return $this->hasMany(Portal::class);
    }
}
