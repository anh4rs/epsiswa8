<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $styles = null;
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title ??= "E-Pelanggaran";
    }

    public function render()
    {
        return view('layout.app');
    }
}
