<?php 

return [ 

/*--------------------------------------
	|	Module name APPOINTMENT
	-------------------------------------------------------------------*/
		// Module Title 
		'TITLE_APPOINTMENT_TEXT' => 'Termine',
		'TITLE_SEARCH_TEXT' => 'Suchen', 
		'TITLE_SEARCH_WEB_TEXT' => 'Buchen',  
		'TITLE_GENERAL_CHECK_LIST' => 'Allgemein Checkliste', 
		'TITLE_PERFORMANCE_CHECK_LIST' => 'Leistung Checkliste', 
		'TITLE_DOCUMENT' => 'Unterlagen', 
		'TITLE_PATIENT_STREET_NO' 		=> 'Hausnummer',

		// ERROR MESSAGES		
		'RESP_SUCCESS' 	=> 'success',
		'RESP_ERROR' 	=> 'error',
		'ERR_SOMETHING_WRONG' 	=> "Es ist ein Problem aufgetreten. Bitte wenden sie sich an die Ordination.",
		'ERR_APPOINTMENT_PATIENT_REQUIRED' 	=> "Patientin-Feld ist erforderlich.",
		'ERR_APPOINTMENT_DOCTOR_REQUIRED' 	=> "Arzt-Feld ist erforderlich.",
		'ERR_APPOINTMENT_TYPE_REQUIRED' 	=> "Termin-Feld ist erforderlich.",
		'ERR_APPOINTMENT_DATE_REQUIRED' 	=> "Datum-Feld ist erforderlich.",
		'ERR_APPOINTMENT_TIME_FRAME_REQUIRED' 	=> "Zeit-Feld ist erforderlich.",
		'ERR_COUNTRY_CODE_REQUIRED' 	=> "Ländercodefeld erforderlich ist.",
 		'ERR_COUNTRY_CODE_WRONG' 	=> "Ungültige Länder-Vorwahl eingegeben.",
 		'TITLE_PATIENT_COUNTRY_CODE' 	=> 'Ländercode',

		// Titles
		'TITLE_APPOINTMENT_START_DATE' 	=> 'Startdatum', 
		'TITLE_APPOINTMENT_END_DATE' 	=> 'Enddatum',
		'TITLE_APPOINTMENT_PATIENT' 	=> 'Patientin',
		'TITLE_APPOINTMENT_DOCTOR'  	=> 'Arzt', 
		'TITLE_APPOINTMENT_TYPE' 		=> 'Termintyp',
		'TITLE_ROSTER_SELECT_APPOINTMENT_TYPE' => 'Termin-Typ wählen',
		'TITLE_ROSTER_WEEKDAY'	 		=> 'Wochentag', 
		'TITLE_APPOINTMENT_DATE' 		=> 'Datum',
		'TITLE_APPOINTMENT_NOTE'		=> 'Notiz',
		'TITLE_APPOINTMENT_STATUS'		=> 'Status',
		'TITLE_APPOINTMENT_STATUS_ACTIVE' 	=> 'Aktiv',
		'TITLE_NOTIFICATION_TEXT'	=> 'Benachrichtigung', 

		//Placeholder Title
		'TITLE_SELECT_PATIENT' => 'Patientin wählen',
		'TITLE_SELECT_DOCTOR'  => 'Arzt wählen',
		'TITLE_SELECT_TYPE'    => 'Termintyp wählen',
		'TITLE_APPOINTMENT_TIME_FRAME'	=> 'Zeitrahmen', 
		'TITLE_ROSTER_STARTDATE'	 	=> 'Datum von', 
		'TITLE_ROSTER_ENDDATE'	 		=> 'Datum bis', 
		'TITLE_ROSTER_TIME_FROM'	 	=> 'Zeit von',
		'TITLE_ROSTER_TIME_TO'	 		=> 'Zeit bis',
		'TITLE_ROSTER_TIME_FRAME'	 	=> 'Zeitrahmen ',

		'ERR_WEEKDAY_REQUIRED' 		=> "Wochentag-Feld ist erforderlich.", 

		// Response error
		'FAIL_APPOINTMENT_CREATE' => "Server-Fehler beim Erstellen des Termins.",
		'FAIL_APPOINTMENT_UPDATE' => "Server-Fehler beim Aktualisieren des Dienstplans.",
		'FAIL_APPOINTMENT_DELETE' => "Server-Fehler beim Löschen des Dienstplans.",
		'FAIL_APPOINTMENT_TIME_FRAME' => "Server-Fehler beim laden der Arzt-Dienstplans.",

		// Response messages 
		'APPOINTMENT_CREATED' => "Termin erfolgreich angelegt.",  
		'APPOINTMENT_UPDATED' => "Termin erfolgreich aktualisiert.",		
		'APPOINTMENT_DELETED' => "Termin erfolgreich gelöscht.",	

		/*'TITLE_FIRST_NAME'	 	=> 'First Name',
		'TITLE_LAST_NAME'  	 	=> 'Last Name',
		'TITLE_EMAIL_ADDRESS' 	=> 'Email Address',
		'TITLE_MOBILE_NO' 		=> 'Mobile Number',
		'TITLE_OTP' 		=> 'OTP',
		'TITLE_SEND_OTP' 		=> 'Send Otp', 

		'ERR_FIRSTNAME_REQUIRED' 	=> 'First Name field is required.',
		'ERR_LASTNAME_REQUIRED' 		=> "Last Name field is required.",
		'ERR_EMAIL_ADDRESS_REQUIRED' 	=> "Email Address field is required.",
		'ERR_MOBILE_NO_REQUIRED' 		=> "Mobile Number field is required.",  
		'ERR_OTP_REQUIRED' 		=> "Otp field is required.", 
		'TITLE_SALUTATION_TEXT' 	=> 'Salutation',
		'TITLE_PATIENT_ROAD' 		=> 'Road',
		'TITLE_PATIENT_POSTAL_CODE' => 'Postal Code',
		'TITLE_PATIENT_PLACE' 		=> 'Place',
		'TITLE_TITLE_TEXT' 			=> 'Title',
  */   
		'TITLE_FIRST_NAME' 		=> 'Vorname',
	 	'TITLE_LAST_NAME' 		=> 'Nachname',
	 	'TITLE_EMAIL_ADDRESS' 	=> 'E-Mail',
	 	'TITLE_MOBILE_NO' 		=> 'Handynummer',
		'TITLE_OTP' 			=> 'SMS Code',
		'TITLE_SEND_OTP' 		=> 'SMS Code anfordern',
		'TITLE_PATIENT_BIRTH_DATE'		=> 'Geburtsdatum',

		'ERR_FIRSTNAME_REQUIRED' 		=> 'Der Vorname ist erforderlich.',   
		'ERR_LASTNAME_REQUIRED' 		=> 'NachnameFeld ist erforderlich.',      
		'ERR_BIRTH_DATE_REQUIRED' 		=> "Geburtsdatum-Feld ist erforderlich.",
		'ERR_EMAIL_ADDRESS_REQUIRED' 	=> "E-Mail-Adresse-Feld ist erforderlich.",
		'ERR_MOBILE_NO_REQUIRED' 		=> "HandynummerFeld ist erforderlich.",      
		'ERR_OTP_REQUIRED' 				=> "Das Opp-Feld ist erforderlich.", 
		'ERR_WRONG_OTP' 				=> "Falsches Handy oder otp eingegeben",       

	// Register
		'TITLE_SALUTATION_TEXT' 	=> 'Salutation',
		'TITLE_ANREDE_TEXT' 		=> 'Anrede',
		'TITLE_PATIENT_ROAD' 		=> 'Straße',
		'TITLE_PATIENT_POSTAL_CODE' => 'Postleitzahl',
		'TITLE_PATIENT_PLACE' 		=> 'Ort',
		'TITLE_TITLE_TEXT' 			=> 'Titel',

		'ERR_PATIENT_SALUTATION_REQUIRED'=> "Anredefeld ist erforderlich.",
		'ERR_PATIENT_TITLE_REQUIRED'	=> "Titelfeld ist erforderlich.",
		//'ERR_FIRST_NAME_REQUIRED' 		=> "First Name field is required.",
		'ERR_PATIENT_FAMILY_NAME_REQUIRED'=> "Family Name field is required.",
		//'ERR_PATIENT_EMAIL_ADDRESS' 	=> "Email Address field is required.",
		'ERR_ROAD_REQUIRED' 			=> "Straßen-Feld ist erforderlich.",
		'ERR_PLACE_REQUIRED' 			=> "Orts-Feld ist erforderlich.",
		'ERR_PATIENT_POSTAL_CODE_REQUIRED'		=> "Das Feld für die Postleitzahl ist erforderlich.",
		'FAIL_PATIENT_CREATE_BOOK'		=> "Es ist ein Fehler aufgetreten. PaJentendaten konnten nicht angelegt werden.",

		'January' => "January",
		'February' => "February",
		'March' => "March",
		'April' => "April",
		'May' => "May",
		'June' => "June",
		'July' => "July",
		'August' => "August",
		'September' => "September",
		'October' => "October",
		'November' => "November",
		'December' => "December",
		'Document' => "Document",
		'Document_submit' => "Submit",
		'BOOK' => "Leistung buchen",
		'CONTINUE' => "Weiter ohne Buchung",
		"SERVICES" => "Empfohlene Untersuchungen"
]; 