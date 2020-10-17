<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Currency extends Model
{
    public $table = 'currencies';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'code',
        'name',
        'enabled',
        'precision',
        'symbol',
        'symbol_first',
        'thousand_seperator',
        'decimal_mark',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
