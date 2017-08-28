<?php
/*
According to specific of organization process of SOAP class in PHP5, we must wrap up complex objects in SoapVar class. Otherwise objects would not be encoded properly and could not be loaded on remote SOAP handler.

Function "getAsSoap" call for encoding object for transmission. After encoding it can be properly transmitted.
*/
abstract class SOAPable {
    public function getAsSOAP() {
        foreach($this as $key=>&$value) {
            $this->prepareSOAPrecursive($this->$key);
        }
        return $this;
    }

    private function prepareSOAPrecursive(&$element) {
        if(is_array($element)) {
            foreach($element as $key=>&$val) {
                $this->prepareSOAPrecursive($val);
            }
            $element=new SoapVar($element,SOAP_ENC_ARRAY);
        }elseif(is_object($element)) {
            if($element instanceof SOAPable) {
                $element->getAsSOAP();
            }
            $element=new SoapVar($element,SOAP_ENC_OBJECT);
        }
    }
}

// ------------------------------------------
//  ABSTRACT EXAMPLE
// ------------------------------------------

class PersonList extends SOAPable {
  protected $ArrayOfPerson; // variable MUST be protected or public!
}

class Person extends SOAPable {
   //any data
} 

$client=new SoapClient("test.wsdl", array( 'soap_version'=>SOAP_1_2, 'trace'=>1, 'classmap' => array('Person' => "Person", 'PersonList' => "PersonList")  ));

$PersonList=new PersonList;

// some actions

$PersonList->getAsSOAP();

$client->someMethod($PersonList);

?>