<?php
namespace Config;
use Kit\DotArr;

/**
 * Config.
 *
 * @author MrQin https://github.com/wazsmwazsm
 */
class Config
{
    /**
     * config.
     *
     * @var array
     */
    protected static $_config = [];

    /**
     * load config.
     *
     * @param  string  $file
     * @param  string  $conf
     * @return void
     */
    public static function load($file, $conf)
    {
        self::$_config[$file] = $conf;
    }

    /**
     * set config.
     *
     * @param  string  $file
     * @param  mixed  $value
     * @return void
     */
    public static function set($key, $value)
    {
        DotArr::dotSet(self::$_config, $key, $value);
    }

    /**
     * get config.
     *
     * @param  string  $key
     * @return mixed
     */
    public static function get($key, $default = NULL)
    {
        return DotArr::dotGet(self::$_config, $key, $default);
    }

    /**
     * get all config.
     *
     * @return array
     */
    public static function all()
    {
        return self::$_config;
    }
}
