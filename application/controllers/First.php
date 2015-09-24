<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->render();
    }
    function zzz() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(1);
        $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->render();
    }
    function gimmie($which) {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($which);
        $this->data['what'] = $source['what'];
        $this->data['who'] = $source['who'];
        $this->data['mug'] = $source['mug'];
        $this->render();
    }

}
