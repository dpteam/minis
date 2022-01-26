<?php

	require_once __DIR__ . '/../config/config.php';
	require_once __DIR__ . '/../config/users.php';

	function validateRegistrationForm()
	{
		$errorMessages = [];

		if (trim(getFieldValue('email')) === '')
		{
			$errorMessages[] = LC_MSG_EMAIL_MISSING;
		}
		if (emailExists(getFieldValue('email')))
		{
			$errorMessages[] = LC_MSG_EMAIL_TAKEN;
		}
		if (trim(getFieldValue('first-name')) === '')
		{
			$errorMessages[] = LC_MSG_FIRST_NAME_MISSING;
		}
		else if (!preg_match('/^' . VALID_USERNAME_REGEX . '$/', getFieldValue('first-name')))
		{
			$errorMessages[] = LC_MSG_INVALID_FIRST_NAME;
		}
		if (trim(getFieldValue('last-name')) === '')
		{
			$errorMessages[] = LC_MSG_LAST_NAME_MISSING;
		}
		else if (!preg_match('/^' . VALID_USERNAME_REGEX . '$/', getFieldValue('last-name')))
		{
			$errorMessages[] = LC_MSG_INVALID_LAST_NAME;
		}
		if (strlen(getFieldValue('password')) < MIN_PASSWORD_LENGTH)
		{
			$errorMessages[] = LC_MSG_PASSWORD_TOO_SHORT;
		}

		return $errorMessages;
	}


	function emailExists($email)
	{
		global $database;

		$numEmails = $database->count('users', [
			'email' => $email
		]);

		return (is_int($numEmails) && $numEmails > 0);
	}


	function startRegistration($email, $firstName, $lastName, $passwordHash)
	{
		global $database;

		$database->insert('users', [
			'id'                 => null,
			'first_name'         => htmlspecialchars($firstName),
			'last_name'          => htmlspecialchars($lastName),
			'password'           => $passwordHash,
			'email'              => strtolower(htmlspecialchars($email)),
			'bio'                => '',
			'registration_time'  => time(),
			'last_activity_time' => 0,
		]);
	}
	
	