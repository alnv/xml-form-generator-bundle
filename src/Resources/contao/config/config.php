<?php

$GLOBALS['TL_HOOKS']['sendNotificationMessage'][] = [ 'Alnv\XmlFormGeneratorBundle\Classes\Notification', 'addXml' ];
$GLOBALS['TL_HOOKS']['processFormData'][] = [ 'Alnv\XmlFormGeneratorBundle\Classes\Form', 'delegate' ];