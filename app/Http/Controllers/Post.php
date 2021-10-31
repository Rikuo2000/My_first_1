<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Controller
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'body',
    ];
        
    public function getPaginate()
    {
        return $this->orderBy('update_at', 'DESC')->paginate(5);
    }
}
