<?php 

return [

	/*--------------------------------------
	|	Module name Auth & Basic message
	-------------------------------------------------------------------*/
		
		// Response messages
		'SUCCESS_MSG' 	 => 'Erfolgreich',

		'UNSUCCESS_MSG'  => 'Nicht erfolgreich',
		'PATIENT_SOCIAL_SECURITY_NUMBER_REQ' => 'Das Feld Sozialversicherungsnummer ist erforderlich.',
		'AUTH_USER_VALIDATED_SUCCESS' => 'Der Benutzername wurde überprüft und ein Einmal-Kennwort verschickt.',
		'AUTH_USER_RESEND_OTP_SUCCESS'=> 'Das Einmal-Kennwort wurde erfolgreich versendet.',
		'AUTH_PATINE_POSTAL_CODE_WRONG'=> 'Nächster Standort Nicht gefunden.',
		'AUTH_VERIFY_USER_SUCCESS' 	  => 'Login erfolgreich. Bitte die Stammdsaten überprüfen.',
		'PASSWORD_UPDATED_SUCCESSFULLY'  => 'Passwort erfolgreich aktualisiert.',
		'PASSWORD_CHANGE_SUCCESSFULLY'  => 'Das Passwort wurde erfolgreich geändert.',
        'OLD_PASSWORD_IS_NOT_MATCH'  => 'Altes Passwort stimmt nicht überein.',
		'AUTH_REGISTER_USER_SUCCESS'  => 'Danke für Ihre Registrierung. Bitte überporüfen Sie Ihre Stammdaten.',
		'AUTH_ORDINATION_DATA_SUCCESS'  => 'Die Ordinationsdaten wurden erfolgreich gesendet.',
		'AUTH_ORDINATION_LOGIN_SUCCESS'  => 'Ordination-Login erfolgreich.',
		'AUTH_ORDINATION_DATA_NOT_EXIST'  => 'Die Ordinationsdaten existierten nicht.',
		'AUTH_ALLREADY_REGISTERD_SUCCESS' => 'Benutzer schon registriert.',
		'AUTH_LOGOUT'				  => 'Sie wurden erfolgreich abgemeldet.',
		'AUTH_FAIL_LOGOUT'			  => 'Abmelden nicht erfolgreich.',

	    'RECORDS_NOT_FOUND' 		  => 'Der Eintrag konnte nicht gefunden werden.',	    
	    'MSG_INVALID_REQUEST' 		  => 'Ungültige Anfrage.',
	    'MSG_DIRECT_SCRIPT_ACCESS' 	  => 'Kein direkter Zugriff erlaubt.',
	    'IS_UPDATED_FLAG_SEND_SUCCESSFULLY'      => 'Ist das aktualisierte Flag erfolgreich gesendet.',

		// Response error
		'AUTH_FIRSTNAME_REQ' 	=> 'Das Feld "Vorname" ist erforderlich..',
		'AUTH_FAMILYNAME_REQ' 	=> 'Das Feld "Nachname" ist erforderlich.',
		'AUTH_MOBILENO_REQ' 	=> 'Das Feld "Handynummer" ist erforderlich.',
		'AUTH_BIRTH_DATE_REQ'   => 'Das eingereichte Geburtsdatum ist erforderlich.',
		'AUTH_POSTAL_CODE_REQ'   => 'Postleitzahlfeld ist erforderlich.',
		'AUTH_UNIQUE_MOBILE_USER' => 'Diese Handynummer ist schon vergeben.',
	    'AUTH_FORMAT_MOBILE_USER' => 'Die Handynummer darf nur aus Ziffern bestehen.',

	    'AUTH_PASSWORD_REQ'       => 'Passwortfeld ist erforderlich.',
		'AUTH_PASSWORD_MIN_REQ'   => 'Passwort mindestens 8 Stellen.',
		'AUTH_PASSWORD_MAX_REQ'   => 'Passwort maximal 20 Stellen.',
		'AUTH_PASSWORD_REGEX_REQ' => 'Das Passwort enthält mindestens ein Großbuchstaben, ein Kleinbuchstaben, einen Zahlenwert und ein Sonderzeichen (! @ # $% ^ & *).',
	    
	    'AUTH_FORMAT_AGE_USER' => 'Das Alter darf nur aus Ziffern bestelen.',
		'AUTH_EMAIL_REQ' 		=> 'Das Feld "Email" ist erforderlich.',
		'AUTH_UNIQUE_EMAIL_USER' => 'Diese Email-Adresse ist schon vergeben.',
	    'AUTH_FORMAT_EMAIL_USER' => 'Das Format der Email-Adresse ist ungültig.',
		'AUTH_AGE_REQ' 			=> 'Das Feld "Alter" ist erforderlich.',
		'AUTH_INVALID_USER' 	=> 'Leider konnten wir die Handynummer nicht Ihrem Namen im System zuordnen. Bitte überprüfen Sie die Daten und kontaktieren Sie die Ordination, wenn nötig.',
		'AUTH_ORDINATION_POSTAL_CODE' 	=> 'Bitte aktualisieren Sie Ihre Postleitzahl.',
		'AUTH_INVALID_PATIENT' 	=> 'Fehlerhafte Patientendaten.',
	    'AUTH_INACTIVE_USER' 	=> 'Dieser Benutzer ist inaktiv.',
	    'AUTH_SOCIAL_SECURITY_NUMBER'=> 'Die Sozialversicherungsnummer stimmt nicht überein.',
	    'AUTH_USER_PAAWORD_WORNG' 	=> 'Passwort ist falsch.',
	    'AUTH_USER_PAAWORD_REQUEIED'=> 'Passwort ist erforderlich.',
	    'AUTH_NOT_FOUND_USER'   => 'Benutzer existiert nicht - bitte überprüfen.',
	    'ERR_SOMETHING_WRONG' 	=> "Es ist ein Systemfehler aufgetreten. Bitte kontaktieren Sie die Ordination.",
		'AUTH_INVALID_OTP' 	  => 'Falscher Anmelde-Code.',
		'AUTH_FAILED_OTP' 	  => 'Fehler beim Senden des Anmelde-Codes.',
		'AUTH_PATIENT_ID_REQ' => 'Die PatientInnen-ID ist erforderlich.',
		'AUTH_OTP_REQ' 		  => 'Das Einmal-Kennwort ist erforderlich.',
		'PATIENT_STREET_NO_REQ' => 'Straße kein Feld erforderlich.',
		'AUTH_SYSTEM_FAIL' 	  => 'Es konnte kein Token erzeugt werden. Bitte kontaktieren Sie die Ordination.',
	    'AUTH_OTP_EXPIRED' 	  => 'Das Einmal-Kennwort ist abgelaufen.', 
	   

	/*--------------------------------------
	|	Module name MenstruationCycle
	-------------------------------------------------------------------*/

		// Response messages
	    'ERR_INVALID_DATA' 	 => 'Ungültige Daten.',
	    'DATA_INSERTED' 	 => 'Die Daten wurden erfolgreich eingefügt.', 
	    'ERR_NOT_MATCH' 	 => 'Keine Übereinstimmung.',
	    'DATA_MATCH_SUCCESS' => 'Der Eintrag wurde gefunden.',
	    'ERR_DATA_NOT_MATCH' => 'Eintrag stimmt nicht überein.',
	    'DATE_NOT_FOUND' 	 => 'Not found.',

	/*--------------------------------------
	|	Module name Emaergency Request
	-------------------------------------------------------------------*/ 

		// Response error
		'ERR_PATIENT_ID_REQ'	=> 'Das Feld "PatientInnen-ID" ist erforderlich.',
		'ERR_CURRENT_COMPLAINT_REQ'			=> 'Das Feld "Aktuelle Beschwerden" ist erforderlich.',
		'ERR_PREVIOUS_TREATMENT_REQ'	=> 'Das Feld "Letzte Behandlung" ist erforderlich.',

		// Response messages
		'SUCCESS_REQUEST_SEND'	=> 'Notfall-Nachricht wurde versendet.', 


	/*--------------------------------------
	|	Module name Examinations
	-------------------------------------------------------------------*/

		// Response error
		'AUTH_PATIENT_AGE_REQ' => 'Das Feld "Alter" ist erforderlich.',
		'AUTH_PATIENT_GENERAL_TYPE' => 'Das Typfeld ist erforderlich.',
		'ERR_NOT_FOUND'  => 'Kein Eintrag gefunden.',
		'DATA_NOT_FOUND' => 'Nicht gefunden.', 
		'ERR_EXAMS_NOT_SELECTED' => 'Prüfungen sind nicht ausgewählt.', 

		// Response messages
		'DATA_FOUND_SUCCESS' => 'Der Eintrag wurde gefunden.',


	/*--------------------------------------
	|	Module name Patients
	-------------------------------------------------------------------*/

		// Response error
		'INVALID_PATIENT_ID'  	 => 'Falsche PatientInnen-ID.',
		'PATIENT_FIRST_NAME_REQ' => 'Das Feld "Vorname" ist erforderlich.',
		'PATIENT_FAMILY_NAME_REQ'  => 'Das Feld "Familienname" ist erforderlich.',
		'PATIENT_EMAIL_REQ' 	 => 'Email Feld ist erforderlich.',
		'PATIENT_EMAIL_UNIQUE'	 =>	'Die Email-Adresse muss eindeutig sein.',
		'PATIENT_MOBILE_NO_REQ'  => 'Das Feld "Handynummer" ist erforderlich.',
		'PATIENT_MOBILE_NO_UNIQUE'=>'Diese Handynummer ist schon vergeben.',
		'PATIENT_BIRTH_DATE_REQ' => 'Das Feld "Geburtsdatum" ist erforderlich.',
		'PATIENT_AGE_REQ' => 'Age field is required',
		'PATIENT_LOGIN_TYPE_FIELD_REQUIRED' => 'Login Typ Feld ist erforderlich.',
		'PATIENT_UPDATE_FAIL'    => 'Die PatienInnen-Daten konnten nicht geändert werden.',

		// Response messages
		'PATIENT_UPDATE_SUCCESS' => 'PatientInnen-Daten erfolgreich geändert.',
		'PATIENT_GET_SUCCESS' 	=> 'Stammdaten erfolgreich geladen.',
		'PATIENT_GET_FAIL' 		=> 'Stammdaten konnten nicht geladen werden.',

	/*--------------------------------------
	|	Module name Profile Templates 
	-------------------------------------------------------------------*/

		//'ERR_SOMETHING_WRONG' 		 => 'Something went wrong on the server.',
		'ERR_PROFILE_NOT_FOUND' => 'No Profile Template available for this age.', 
		'PROFILE_DATA_FOUND_SUCCESS' => 'Data found successfully',


	/*--------------------------------------
	|	Module name Diagnostic Findings
	-------------------------------------------------------------------*/

		// Response error
		'ERR_FINDINGS_PATIENT_ID_REQ' => 'Patienten-ID Feld ist erforderlich.',
		'ERR_FINDINGD_TYPE_REQ'		  => 'Das Feld "Befund-Typ" ist erforderlich.',
		'ERR_DOCUMENT_NAME_REQ'		  => 'Das Feld "Name" ist erforderlich.',
		'ERR_FINDING_FILE_REQ'		  => 'Das Feld "Datei" ist erforderlich.',
		'ERR_FINDING_DATE_REQ'		  => 'Das Feld "Datum" ist erforderlich.',
		'ERR_FINDING_COMMENT_REQ'	  => 'Das Feld "Kommentar" ist erforderlich.',
		'ERR_FINDING_STATUS_REQ'	  => 'Das Feld "Status" ist erforderlich.',
		'ERR_START_DATE_REQ'		=> 'Das Feld "Startdatum" ist erforderlich.',
		'ERR_END_DATE_REQ'			=> 'Das Feld "Enddatum" ist erforderlich.',
		'ERR_DIAGNOSTIC_FILE'		=> 'Befund nicht gefunden.',

		'FINDING_TYPE_ID_REQ'		=> 'Das Feld "Befundtyp" ist erforderlich.',
		'ERR_FINDING_ID_REQ'		=> 'Das Feld "Befund-ID" ist erforderlich.',
		'ERR_DOCUMENT_ID_REQ'		=> 'Dokumenten-ID Feld ist erforderlich.',


	/*--------------------------------------
	|	Module name Waiting Number
	-------------------------------------------------------------------*/		
		'ERR_LAT_REQ' 			=> 'Das Feld "Geografische Breite" ist erforderlich.',
		'ERR_LON_REQ' 			=> 'Das Feld "Geografische Länge" ist erforderlich.',
		'APPOINTMENT_NOT_FOUND' => 'Bitte kontaktieren Sie die Ordination.',
		'DISTANCE_INCORRECT'    => 'PatientIn ist mehr als 20km von der Ordination entfernt.',

	/*--------------------------------------
	|	Module name Menstruation Cycle(Settings)
	-------------------------------------------------------------------*/

		// Response error 
		'ERR_LATEST_DATE_REQ' => 'Das Feld "letztes Datum" ist erforderlich.',
		'ERR_LATEST_LENGTH_REQ'		 => 'Das Feld "letzte Länge" ist erforderlich.',

	/*--------------------------------------
	|	Module name Appointment Delay Report
	-------------------------------------------------------------------*/

		// Response error 
		'ERR_DELAY_REPORT_PATIENT_ID_REQ' => 'Patienten-ID Feld ist erforderlich.',
		'ERR_APPOINTMENT_REQ'		  	  => 'Das Feld "Termin-ID" ist erforderlich.',
		'AUTH_DOC_Id_REQ'		  	  => 'Das Feld "Dokument-ID" ist erforderlich.',
		'ERR_DELAY_TIME_REQ'		  	  => 'Das Feld "Zeit" ist erforderlich.',
		'ERR_MESSAGE_REQ'		  		  => 'Das Feld "Individuelle Nachricht" ist erforderlich.',
		'APPOINTMENT_TYPE_ID_REQ'	=> 'Das Feld "Termin-Typ" ist erforderlich.',
		'APPOINTMENT_START_DATE_REQ'=> 'Das Feld "Termin Beginnzeit" ist erforderlich.',
		'APPOINTMENT_END_DATE_REQ'	=> 'Das Feld "Termin Ende" ist erforderlich.',

		//Login with email address.
		'AUTH_FOUND_SUCCESS' 	=> 'Datenvergleich erfolgreich.',
		'ERR_AUTH_NOT_FOUND' 	=> 'Leider konnten unter dieser Email-Adresse keine Patientendaten gefunden werden.',

	/*--------------------------------------
	|	Module name Appointment
	-------------------------------------------------------------------*/

		// Response error 
		'ERR_APP_PATIENT_ID_REQ' 	=> 'Patienten-ID Feld ist erforderlich.',
		'ERR_APP_DOCTOR_ID_REQ'		=> 'Das Feld "Doktor" ist erforderlich.',
		'ERR_APP_TYPE_ID_REQ'		=> 'Das Feld "Termin-Typ" ist erforderlich.',
		'ERR_APP_DATE_REQ'			=> 'Das Feld "Datum des Termins" ist erforderlich.',
		'ERR_APP_DATE_FORMAT_REQ'	=> 'Das Datum des Termins muss das Datum Jahr-Monat-Tag haben.',
		'ERR_APP_VALID_DATE_REQ'	=> 'Der Termin darf nicht in der Vergangenheit liegen.',
		'ERR_APP_TIMEFRAME_REQ'		=> 'Das Feld "Zeitraum" ist erforderlich.',
		'ERR_APP_ID_REQ'			=> 'Das Feld "Termin-ID" ist erforderlich.', 


		'APPOINTMENT_BOOKED_SUCCESS' => 'Der Termin wurde erfolgreich gebucht.',
		'APPOINTMENT_UPDATED_SUCCESS' => 'Der Termin wurde erfolgreich aktualisiert.',
		'APPOINTMENT_CANCEL_SUCCESS' => 'Der Termin wurde erfolgreich abgesagt.',
		'API_APPOINTMENT_SLOT_ALREADY_EXIST' => "Terminslot ist bereits gebucht.",	
		// Sign Pdf related translations
		'TITLE_PATIENT_NAME' => 'Patientenname',
		'TITLE_PATIENT_DATE_OF_BIRTH' => 'Geburtsdatum des Patienten',	

];