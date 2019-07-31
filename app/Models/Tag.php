<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 *
 * @package App\Models
 */
class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * @return mixed
     */
    public function getRouteKey()
    {
        return $this->slug;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
