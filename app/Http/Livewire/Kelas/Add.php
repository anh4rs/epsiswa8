<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Kelas;
use Livewire\Component;

use Illuminate\Support\Str;

class Add extends Component
{
    public $nama;
    public $status;

    public function render()
    {
        return view('livewire.kelas.add', [
            'subtitle' => 'Form Tambah Kelas'
        ]);
    }

    public function save()
    {
        $this->validate(
            ['nama' => 'required'],
            [
                'nama.required' => ':attribute wajib di isi.',
            ],
            ['nama' => 'Nama kelas']
        );

        try {
            Kelas::create([
                'name' => $this->nama,
                'status' => '1',
                'slug' => Str::slug($this->nama . ' ' . Str::random(6), '-'),
            ]);
            $this->reset();
            session()->flash('msg',  __('Kelas baru sukses di tambahkan!'));
            session()->flash('alert', 'success');
            redirect()->to('/kelas');
        } catch (\Throwable $e) {
            session()->flash('msg', $e);
            session()->flash('alert', 'danger');
            redirect()->to('/kelas');
        }
    }
}
