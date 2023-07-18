<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoices_details extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function invoices_details()
    {
        return $this->belongsTo(invoices_details::class);
    }
}
