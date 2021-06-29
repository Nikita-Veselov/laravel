<?php

namespace App\Models;

use App\Enums\NewsStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';


    public function category()
    {
        return $this->belongsTo( Category::class, 'category_id', 'id');
    }
 
 
    public function getNewsById(int $id) 
    {
        return \DB::table($this->table)
            ->select('id', 'title', 'description', 'created_at')
            ->find($id);
    }
}
