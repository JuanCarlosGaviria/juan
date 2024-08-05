<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income_detail extends Model
{
    use HasFactory;
    public function income(){
        return $this->belongsTo(income::class,'income_id','id');
    }

    public function article(){
        return $this->belongsTo(article::class,'article_id','id');
    }
}
