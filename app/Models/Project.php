<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "description",
        "thumb",
        "type_id",
        "release_date",
        "link"
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
