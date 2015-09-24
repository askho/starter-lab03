<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function bingo() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get('5');
        $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->render();
    }

}

/* End of file Wise.php */
/* Location: application/controllers/Wise.php */