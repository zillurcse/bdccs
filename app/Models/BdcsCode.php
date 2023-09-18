<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BdcsCode extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'issue_date',
        'expire_date',
        'seller_name',
        'seller_address',
        'seller_phone',
        'seller_email',
        'seller_nid',
        'seller_trade_license',
        'seller_tin',
        'seller_passport',
        'seller_photo',
        'business_type',
        'business_name',
        'business_address',
        'business_phone',
        'business_email',
        'nid_file',
        'trade_license_file',
        'created_by',
        'updated_by',
        'status',
        'is_approved',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class,'created_by','id');
    }
}
