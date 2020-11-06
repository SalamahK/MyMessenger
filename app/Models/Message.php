<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function userFrom(){
        return $this->belongsTo('App\Models\User', 'user_id_from');
    }

    public function userTo(){
        return $this->belongsTo('App\Models\User', 'user_id_to');
    }

    public function scopenotDeleted($query) {
        return $query->where('deleted', false);
    }

    public function scopeDeleted($query) {
        return $query->where('deleted', true);
    }

    protected $table ="inputs";
}
