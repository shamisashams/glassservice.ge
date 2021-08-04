<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        "page_id",
        'title',
        'description',
        "meta_title",
        "meta_description"
    ];
}
