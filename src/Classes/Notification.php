<?php

namespace Alnv\XmlFormGeneratorBundle\Classes;


class Notification {


    public function addXml( $objMessage, &$arrTokens, $strLanguage, $objGatewayModel ) {

        $strName = \StringUtil::generateAlias( $arrTokens['form_formId'] );
        $arrTokens['form_xml'] = 'files/xmls/' . $strName . '.xml';

        unset( $arrTokens['form_formId'] );

        return true;
    }
}