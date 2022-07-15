<?php

class Config {

  public static function DB_HOST(){
    return Config::get_env("DB_HOST", "localhost");
  }
  public static function DB_USERNAME(){
    return Config::get_env("DB_USERNAME", "riot");
  }
  public static function DB_PASSWORD(){
    return Config::get_env("DB_PASSWORD", "riot");
  }
  public static function DB_SCHEME(){
    return Config::get_env("DB_SCHEME", "riot");
  }
  public static function DB_PORT(){
    return Config::get_env("DB_PORT", "3306");
  }
  public static function JWT_SECRET(){
    return Config::get_env("JWT_SECRET", "ezcb9s8UcF");
  }
  public static function CLIENT_ID(){
    return Config::get_env("CLIENT_ID", "a2759fc790b4c1eaa267");
  }
  public static function CLIENT_SECRET(){
    return Config::get_env("CLIENT_SECRET", "8a4580e0cedbdbac35e48a1373f0e42ef531f791");
  }

  public static function get_env($name, $default){
   return isset($_ENV[$name]) && trim($_ENV[$name]) != '' ? $_ENV[$name] : $default;
  }
  
}
