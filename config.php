<?php 
function XML2Array(SimpleXMLElement $parent)
{
    $array = array();

    foreach ($parent as $name => $element) {
        ($node = & $array[$name])
            && (1 === count($node) ? $node = array($node) : 1)
            && $node = & $node[];

        $node = $element->count() ? XML2Array($element) : trim($element);
    }

    return $array;
}
$xmlData=file_get_contents("C:\\xampp\\htdocs\\background_scripts\\configuration.xml");
//$json = json_encode($xmlData);
//$array = json_decode($json,TRUE);

$master_config=simplexml_load_string($xmlData) or die("Error~:~Cannot create object");
$master_config=XML2Array($master_config);
//echo "<pre>";
//var_dump($master_config);
//echo "<pre>";

?>