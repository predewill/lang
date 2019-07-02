<?php

namespace App\Models\Reader;

use Illuminate\Database\Eloquent\Model;

class TextPage extends Model
{
    public $timestamps = false;
    protected $table = 'text_pages';

    public function text()
    {
        return $this->belongsTo(Text::class);
    }
}
