<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Addons extends Model
{
    /** @use HasFactory<\Database\Factories\AddonsFactory> */
    use HasFactory;

    protected $fillable = ["menu_id", "name", "price", "status"];

    public function menu(): HasMany
    {
        return $this->hasMany(Menu::class);
    }
}
