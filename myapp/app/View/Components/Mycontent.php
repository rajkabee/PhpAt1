<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Mycontent extends Component
{
    
    public $subject;
    public function __construct()
    {
        //$this->subject = $subject;
        
    }

   
    public function render()
    {
        return view('components.mycontent');
    }
}
