<?php
require_once './app/views/history.view.php';

class historyController
{
    private $view;

    public function __construct()
    {
        $this->view = new historyView();
    }

    public function history()
    {
        $this->view->history();
    }
}
