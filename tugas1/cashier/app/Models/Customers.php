<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Customers extends Model
{
    protected $table = 'customers';

    protected $primaryKey = 'customer_id';

    protected $fillable = ['name', 'is_member'];

    public function items(): BelongsToMany
    {
        return $this->belongsToMany(Items::class, 'transactions', 'customer_id', 'item_id')->as('transac')->withPivot('quantity', 'total')->withTimestamps();
    }
}
