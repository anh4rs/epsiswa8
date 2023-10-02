<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Kelas;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';

    public $nama;

    // public $updateStateId = 0;
    public $deleteId = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.kelas.index', [
            'kelases' => Kelas::latest()->paginate(10),
            // 'kelases' => Kelas::where('name', 'like', '%' . $this->search . '%')->paginate(3),
            'subtitle' => 'Daftar Kelas'
        ]);
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        // User::find($this->deleteId)->delete();
        // $data = Kelas::where('slug', $slug)->first();
        $data = Kelas::find($this->deleteId);
        if (!empty($data)) {
            $data->delete();
            $this->dispatchBrowserEvent('close-modal');
            session()->flash('msg',  __('Data kelas sukses di hapus!'));
            session()->flash('alert', 'success');
        } else {
            $this->dispatchBrowserEvent('close-modal');
            session()->flash('msg',  __('Data kelas tidak ditemukan'));
            session()->flash('alert', 'danger');
        }
    }

    // public function updateForm($kelasId)
    // {
    //     // $post = Kelas::find($kelasId);
    //     // $this->nama = $post->name;
    //     $this->updateStateId = $kelasId;
    //     return view('livewire.kelas.edit', [
    //         'data' => Kelas::find($kelasId),
    //         // 'kelases' => Kelas::where('name', 'like', '%' . $this->search . '%')->paginate(3),
    //         'subtitle' => 'Edit Data  Kelas'
    //     ]);
    // }
}
