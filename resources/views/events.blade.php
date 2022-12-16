<x-layouts.layout>

    <div class="col-md-8 offset-md-2">
        <livewire:events >
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @push('scripts')
        <script>
            window.addEventListener('show-alert', event => {
                Swal.fire({
                    icon: event.detail.icon,
                    title: event.detail.title,
                    html: event.detail.text,
                    confirmButtonText: 'Cerrar',
                })
            })
        </script>
    @endpush

</x-layouts.layout>
