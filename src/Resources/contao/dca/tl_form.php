<?php

$GLOBALS['TL_DCA']['tl_form']['palettes']['default'] = str_replace( 'sendViaEmail;', 'generateXml,sendViaEmail;', $GLOBALS['TL_DCA']['tl_form']['palettes']['default'] );

$GLOBALS['TL_DCA']['tl_form']['fields']['generateXml'] = [

    'label' => &$GLOBALS['TL_LANG']['tl_form']['generateXml'],
    'inputType' => 'checkbox',
    'eval' => [
        'tl_class' => 'clr'
    ],
    'exclude' => true,
    'sql' => "char(1) NOT NULL default ''"
];
