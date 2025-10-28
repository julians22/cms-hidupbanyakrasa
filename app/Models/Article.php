<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Article extends Model
{
    use HasSlug, HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';


	 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article';


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function scopeArticle($query)
    {
        return $query->where('category', 'article');
    }

    public function scopeTvc($query)
    {
        return $query->where('category', 'tvc');
    }

    public function scopeIsActive($query)
    {
        return $query->where('publish', 'Yes');
    }

    public function scopeIsHoroscope($query)
    {
        return $query->where('category', 'horoscope');
    }

    public function scopeIsGaleries($query) {
        return $query->where('category', 'gallery');
    }

    public function scopeOfCategory($query)
    {
        // Allowed Category: 'article','recepies','competitions','tvc','horoscope','gallery';

        $params = request()->query('category') ?? null;

        if (!empty($params)) {

            if (in_array($params, ['article', 'recepies', 'competitions', 'tvc', 'horoscope', 'gallery'])) {
                return $query->where('category', $params);
            } else {
                return $query;
            }
        }

        return $query->where('category', 'article');
    }
}
