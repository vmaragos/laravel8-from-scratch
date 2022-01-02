<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [''];

    protected $fillable = [
        'title', 'slug', 'excerpt', 'body', 'category_id'
    ];

    protected $with = ['category', 'author'];

    // public function getRouteKeyName() // change the default column that will be used for routing in web.php. Default is 'id'.
    // {
    //     return 'slug';
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
