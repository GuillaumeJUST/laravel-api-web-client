<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 *  @OA\Schema(
 *   schema="Server",
 *   type="object",
 *   allOf={
 *       @OA\Schema(
 *           required={"code"},
 *           @OA\Property(property="url"),
 *           @OA\Property(property="name"),
 *           @OA\Property(
 *              property="status",
 *              type="string",
 *              enum={"Up", "Warning", "Down", "New"},
 *              default="New"
 *          )
 *       )
 *   }
 * )
 *
 * Class Server
 * @package App
 *
 * @method static Server create(array $array)
 * @method static truncate()
 * @method static paginate($get)
 * @method static take(int $int)
 */
class Server extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = ['url', 'name', 'status'];

    public const STATUS_UP = 'Up';
    public const STATUS_WARNING = 'Warning';
    public const STATUS_DOWN = 'Down';
    public const STATUS_NEW = 'New';

    public const STATUS = [self::STATUS_UP, self::STATUS_WARNING, self::STATUS_DOWN, self::STATUS_NEW];

    /**
     * Get the user's first name.
     *
     * @return string
     */
    public function getColorAttribute(): string
    {
        switch ($this->status) {
            case self::STATUS_UP:
                return 'success';
            case self::STATUS_WARNING:
                return 'warning';
            case self::STATUS_DOWN:
                return 'danger';
            case self::STATUS_NEW:
                return 'primary';
        }
    }
}
