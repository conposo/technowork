<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateClients extends Controller
{
    public $taxonomy = 'client_cat';
    use Partials\Terms;

    protected $acf = true;

}
