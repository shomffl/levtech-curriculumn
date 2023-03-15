<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
    ];
    
    public function getPaginateByLimit(int $limit_count = 2)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
