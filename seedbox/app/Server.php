<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static truncate()
 * @method static create(array $array)
 */
class Server extends Model
{
    public const STATUS_UP = 'Up';
    public const STATUS_WARNING = 'Warning';
    public const STATUS_DOWN = 'Down';

    public const STATUS = [self::STATUS_UP, self::STATUS_WARNING, self::STATUS_DOWN];
}
