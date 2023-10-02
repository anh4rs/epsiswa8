<x-app-layout title="Data Kelas">
    <livewire:kelas.index />
    @section('script')
        <script>
            window.addEventListener('close-modal', event => {
                $('#modalHapus').modal('hide');
            })
        </script>
    @endsection
</x-app-layout>
