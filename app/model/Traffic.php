<?php
declare(strict_types=1);

namespace app\model;

use think\Model;

/**
 * @mixin \think\Model
 */
class Traffic extends Model
{
    protected $pk = 'id';
    protected $table = 'azure_server_traffic';
}
