<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Kelas;

class student extends Model
{
    use HasFactory;
    protected $fillable=["name","lastname","age","average","kelas_id"];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
}
