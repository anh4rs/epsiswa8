<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $sidebars = [
            'Kelas' => '/',
            'Siswa' => '/siswa',
            'Guru' => '/guru',
            'Mengajar' => '/mengajar',
        ];
        return view('layout.sidebar', compact('sidebars'));
    }
}
