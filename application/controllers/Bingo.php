<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function wisdom() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('6');
        $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->render();
    }

}

/* End of file Bingo.php */
/* Location: application/controllers/Bingo.php */