<?php

namespace App\Models;

use App\Traits\MultiTenantModelTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;

class Receipt extends Model
{
    use MultiTenantModelTrait;

    public $table = 'receipts';

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'customer_name',
        'phone',
        'address',
        'email',
        'date',
        'payment_method',
        'reference',
        'description',
        'amount',
        'discount',
        'paid',
        'balance',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
