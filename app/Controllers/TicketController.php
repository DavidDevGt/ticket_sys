<?php
require_once 'Controller.php';
require_once '../Models/Ticket.php';

class TicketController extends Controller
{
    public function __construct()
    {
        parent::__construct(new Ticket());
    }
}