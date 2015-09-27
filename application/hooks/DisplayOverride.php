<?php

/**
 * hooks/DisplayOverride.php
 *
 */
class DisplayOverride {


    function bold() {
        $this->CI =& get_instance();
        $content = "";
        $output = $this->CI->output->get_output();
        $dom = new DOMDocument();
        $dom->loadHTML($output);
        $finder = new DomXPath($dom);
        $classname="lead";
        $nodes = $finder->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $classname ')]");
        foreach($nodes as $node) {
            $words = explode(' ', $node->nodeValue);
            $temp = $dom->createElement("p");
            $temp->setAttribute("class", "lead");
            foreach($words as $word){
                if(ctype_upper($word{0})) { //First char is uppercase
                    $newNode = $dom->createElement('strong', $word . " ");
                    $temp->appendChild($newNode);
                } else {
                    $newNode = $dom->createTextNode($word . " ");
                    $temp->appendChild($newNode);
                }
            }
            $node->parentNode->replaceChild($temp, $node);
        }
        echo $dom->saveHTML();
    }
    

}

/* End of file DisplayOverride.php */
/* Location: application/hooks/DisplayOverride.php */