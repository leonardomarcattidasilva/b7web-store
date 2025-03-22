<?php

namespace App\Models;

use App\Models\AdvertisesModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoriesModel extends Model
{
    protected $table = 'categories';
    protected $fillable = ['category'];

    public function advertise(): HasMany
    {
        return $this->hasMany(AdvertisesModel::class);
    }
}
