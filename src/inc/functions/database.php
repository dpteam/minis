<?php

	require_once __DIR__ . '/../vendor/Medoo.php';

	require_once __DIR__ . '/../config/config.php';

	function getDatabase()
	{
		try
		{
			return new Medoo\Medoo([
				'server'        => DB_SERVER,
				'username'      => DB_USERNAME,
				'password'      => DB_PASSWORD,
				'database_name' => DB_DATABASE_NAME,
				'database_type' => DB_DATABASE_TYPE,
				'charset'       => DB_CHARSET,
				'port'          => DB_PORT
			]);
		}
		catch (Exception $e)
		{
			echo LC_ERROR_DBEXCEPTION,  $e->getMessage(), "\n";
			die('');
		}
	}
