<?php

namespace App\Controllers\Partials;

trait Terms
{
    
    public function terms()
    {
        return get_terms( array(
            'taxonomy' => $this->taxonomy,
            'hide_empty' => false,
        ));
    }
}