<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Review;
use App\Models\Books;
use App\Models\groups_members;
use App\Models\Post;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',

    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function books()
    {
        return $this->hasMany(Books::class,'user_books')->withPivot('shelf');
    }
    public function groups_members()
    {
        return $this->belongsToMany(groups_members::class, 'group_user');
    }
    public function posts()
    {
        return $this->hasMany(posts::class);
    }
    public function author()
    {
        return $this->belongsToMany(author::class);
    }
    



}
