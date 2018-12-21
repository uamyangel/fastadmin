<?php

namespace app\admin\model\tags;

use think\Model;
use traits\model\SoftDelete;

class Category extends Model
{
    use SoftDelete;

    // 表名
    protected $name = 'tags_category';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'datetime';
    protected $dateFormat = 'Y-m-d H:i:s';

    // 定义时间戳字段名
    protected $createTime = 'created_at';
    protected $updateTime = 'updated_at';
    protected $deleteTime = 'deleted_at';

    // 追加属性
    protected $append = [

    ];
    

    







}
