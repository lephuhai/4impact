<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

/**
 * @property int $_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $id
 */
class Users extends Model
{

    protected $primaryKey = 'id';

    protected $connection = 'meta';
    protected $collection = 'users';
}
