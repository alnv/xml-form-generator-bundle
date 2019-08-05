<?php

namespace Alnv\XmlFormGeneratorBundle\Classes;


class Form {


    public function delegate( &$arrPost, $arrForm, $arrFiles ) {

        if ( $arrForm['generateXml'] ) {

            $arrPost['formId'] = 'openimmo_xml_' . time();
            $objXml = new XmlBuilder( $arrPost );
            $objXml->createXml();
        }
    }
}