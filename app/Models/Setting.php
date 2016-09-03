<?php

namespace Fixhub\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Setting model of the site.
 */
class Setting extends Model
{
    /**
     * The attributes that should be casted to native types.
     *
     * @var string[]
     */
    protected $casts = [
        'name'  => 'string',
        'value' => 'string',
    ];

    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'value'];

    /**
     * List of attributes that have default values.
     *
     * @var string[]
     */
    protected $attributes = ['value' => ''];
}
