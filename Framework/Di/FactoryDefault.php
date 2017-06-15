<?php
/**
 * Created by PhpStorm.
 * User: Jimersy Lee
 * Date: 2017/5/27
 * Time: 14:37
 */

namespace Framework\Di\FactoryDefault;
use Framework\Di;


/**
 * 相当于服务容器
 * Class Factory
 * @package Framework\Di
 */
class FactoryDefault extends Di
{
    /*
     * 设置共享服务
     * @param $name
     * @param $definition
     */
    public function setShared($name,$definition){
        $this->_sharedInstances[$name]=$definition;
    }


    /**
     * 获取服务实例
     * @param $name
     * @return mixed
     */
    public function get($name){
        return $this->_sharedInstances[$name];
    }



    public function __construct()
    {
    }
}