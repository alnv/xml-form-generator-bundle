<?php

namespace Alnv\XmlFormGeneratorBundle\Classes;


class XmlBuilder {


    protected $arrData = [];


    public function __construct( $arrData ) {

        $this->arrData = $arrData;
    }


    public function createXml() {

        $strBody = '';
        $strName = \StringUtil::generateAlias( $this->arrData['formId'] );

        unset( $this->arrData['formId'] );
        unset( $this->arrData['Zimmer'] );
        unset( $this->arrData['Quadratmeter'] );
        unset( $this->arrData['Kontaktaufnahme'] );
        unset( $this->arrData['Eigentumswohnung'] );

        if ( is_array( $this->arrData ) && !empty( $this->arrData ) ) {

            foreach ( $this->arrData as $strFieldname => $strValue ) {

                $strBody .= '<' . strtolower( $strFieldname ) . '>' . $strValue . '</' . strtolower( $strFieldname ) . '>';
            }
        }

        $strXml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<openimmo_feedback>
    <version>1.2.5</version> 
    <objekt>
        <interessent>$strBody</interessent> 
    </objekt>
</openimmo_feedback>
XML;

        $objFile = new \File( 'files/xmls/'. $strName .'.xml' );
        $objFile->write( $strXml );
        $objFile->close();
    }
}