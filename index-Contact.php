<?php

//require_once 'models/Contact.php';

require_once 'autoloader.php';

//load_model('Contact');

$contact = new Contact('john.doe@example.com');

echo $contact->getEmail();