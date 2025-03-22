<?php

namespace App\Models;

use App\Models\CategoriesModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdvertisesModel extends Model
{
    protected $table = 'advertises';
    protected $fillable = ['title', 'slug', 'user_id', 'price', 'negotiate', 'descritpion', 'contact', 'views', 'state_id', 'category_id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoriesModel::class);
    }
}
