<?php

namespace App\View\Components;


use Illuminate\View\Component;
use Illuminate\View\View;
class PageTitle extends Component
{
   
    public $title;
    public $page;
    
    public function __construct($title, $page)
    {
        //
        $this->title = $title;
        $this->page = $page;
    }

   
    public function render(): View
    {
        return view('components.page-title');
    }
}
