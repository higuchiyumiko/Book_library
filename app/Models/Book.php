<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'author',
        'comments',
        'image',
        'category_id',
    ];

    
    public function getByLimit(int $limit_count=10){
        return $this->orderBy('updated_at','DESC')->limit($lmit_count)->get();
    }
    public function getPaginateByLimit(int $limit_count=10){
        return $this::with('category')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
