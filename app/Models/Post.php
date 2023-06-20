<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Filter/search posts
    public function scopeFilter($query, array $filters)
    {
        //TODO: Filter by size
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%'.request('tag').'%');
        }
        
        if($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->orWhere('city', 'like', '%' . request('search') . '%')
                ->orWhere('country', 'like', '%' . request('search') . '%');
        }
        
    }

    //Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //Relationship to comment section
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
