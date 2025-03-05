<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Items extends Model
{
    protected $table = 'items';

    protected $primaryKey = 'item_id';

    protected $fillable = ['item_name', 'stock', 'price'];

    public function customers(): BelongsToMany
    {
        return $this->belongsToMany(Customers::class, 'transactions', 'item_id', 'customer_id')->as('transac')->withPivot('quantity', 'total')->withTimestamps();
    }
}
