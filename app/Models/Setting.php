<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Setting extends Model
{
    use MultiTenantModelTrait;

    public $table = 'settings';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'company_name',
        'address',
        'tel',
        'email',
        'fax',
        'currency_id',
        'receipt_prefix',
        'number_digit',
        'next_number',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
