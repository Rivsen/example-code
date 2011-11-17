<?php 

class StripTags
{
      function StripTags()
      {
          $this->Operators = array( 'striptags' );
      }
      function operatorList()
      {

          return $this->Operators;
      }
      function namedParameterPerOperator()
      {
          return true;
      }

      function namedParameterList()
      {
          return array('striptags' => array( 'text' => array('type' => 'string',
                                                             'required' => true,
                                                             'default' =>'')

                                     ));
      }

      function modify( &$tpl, &$operatorName, &$operatorParameters, &$rootNamespace, &$currentNamespace, &$operatorValue, &$namedParameters )
      {
          switch( $operatorName )
          {
                case 'striptags':
                {
                     $operatorValue = $this->strip_tags($namedParameters['text']);
                     break;
                }
          }
      }

      function strip_tags($text)
      {
           return  trim(strip_tags($text));
      }

}

?>
