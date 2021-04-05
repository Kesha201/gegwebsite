<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemDetails extends Model
{
    protected $fillable = ['item_id', 'filename'];
    protected $table = 'posts';

    public function item(){
        return $this->belongsTo('App\Models\Item');
    }
    public $timestamps = false;
}
