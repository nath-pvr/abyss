<?php

namespace Config;

abstract class Config
{
    private const USER = "root";
    private const PASSWORD = "";
    private const DATABASE = "abyss";
    private const BASEURL = "http://localhost/abyss";
    private const BASEPATH = "/abyss";

    public static function getDatabase()
    {
        return self::DATABASE;
    }

    public static function getPassword()
    {
        return self::PASSWORD;
    }

    public static function getUser()
    {
        return self::USER;
    }

    public static function getBaseUrl()
    {
        return self::BASEURL;
    }

    public static function getBasePath()
    {
        return self::BASEPATH;
    }
}
