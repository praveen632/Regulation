<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['service_id', 'user_id', 'state_id', 'name', 'mobile', 'email', 'amount', 'order_id', 'transaction_id', 'transaction_status', 'status'];

    public function documentCenter()
    {
    	return $this->belongsTo(DocumentCenter::class);
    }
}
