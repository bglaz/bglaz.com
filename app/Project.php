<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('active', function (Builder $builder) {
            $builder->where('active', true);
        });
    }

}