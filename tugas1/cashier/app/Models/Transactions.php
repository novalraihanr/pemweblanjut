<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $transaction_id
 * @property int $customer_id
 * @property int $item_id
 * @property string $transaction_date
 * @property float $change
 * @property float $total
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions whereChange($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions whereTransactionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Transactions whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Transactions extends Model
{
    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';
    protected  $fillable = ['customer_id', 'item_id', 'change', 'total'];
}
