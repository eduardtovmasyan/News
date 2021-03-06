<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'news', 'title', 'type_id', 'author',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'news_users', 'news_id', 'user_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'author', 'id');
    }
}
