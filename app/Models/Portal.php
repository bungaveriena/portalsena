<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Division;

class Portal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Division()
    {
        return $this->belongsTo(Division::class);
    }
}
