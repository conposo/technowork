<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TemplateProjects extends Controller
{
    public $taxonomy = 'project_cat';
    use partials\terms;
    
    protected $acf = true;

}
