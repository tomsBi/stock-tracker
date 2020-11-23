<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static count()
 * @method static first()
 * @method static create(array $array)
 */
class History extends Model
{
    protected $table = 'product_history';
}
