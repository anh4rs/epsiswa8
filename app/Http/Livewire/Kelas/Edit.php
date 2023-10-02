<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Kelas;
use Livewire\Component;

class Edit extends Component
{
    public $nama;
    public $status;
    public $slug;
    public $data;
    public $empty = false;

    public function mount()
    {
        $this->data = Kelas::where('slug', $this->slug)->first();
        if (!empty($this->data)) {
            $this->nama = $this->data->name;
        } else {
            $this->empty = true;
            session()->flash('msg',  __('Data kelas tidak ditemukan'));
            session()->flash('alert', 'danger');
        }
    }

    public function render()
    {
        return view('livewire.kelas.edit', [
            'subtitle' => 'Form Edit Kelas'
        ]);
    }

    public function update()
    {
        $this->validate(
            ['nama' => 'required'],
            [
                'nama.required' => ':attribute wajib di isi.',
            ],
            ['nama' => 'Nama']
        );

        $kelas = $this->data;
        $kelas->name = $this->nama;
        try {
            $kelas->save();
            session()->flash('msg',  __('Kelas baru sukses di update !'));
            session()->flash('alert', 'success');
            redirect()->to('/kelas');
        } catch (\Throwable $e) {
            session()->flash('msg', $e);
            session()->flash('alert', 'danger');
            redirect()->to('/kelas');
        }
    }
}
