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
            $newNode = $dom->createElement('strong', $node->nodeValue);
            $node->parentNode->replaceChild($newNode, $node);
        }
        echo $dom->saveHTML();
    }
    

}

/* End of file DisplayOverride.php */
/* Location: application/hooks/DisplayOverride.php */