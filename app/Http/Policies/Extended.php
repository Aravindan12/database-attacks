<?php

namespace App\Http\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class Extended extends Basic
{
    public function configure()
    {
        parent::configure();
        
        $this->addDirective(Directive::SCRIPT, 'www.google.com https://unpkg.com/');
        $this->addDirective(Directive::STYLE, 'https://fonts.googleapis.com/');
        $this->addDirective(Directive::DEFAULT, 'https://fonts.gstatic.com/ https://maps.google.com https://www.google.com');
        // $this->addDirective(Directive::FRAME,'https://maps.google.com https://www.google.com');
    }
}