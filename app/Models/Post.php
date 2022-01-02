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

    // public function getRouteKeyName() // change the default column that will be used for routing in web.php. Default is 'id'.
    // {
    //     return 'slug';
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
