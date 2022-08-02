<div>
@include('livewire.housing.create')


</div>
@push('scripts')
    <script type="text/javascript">
        window.livewire.on('housingStore', () => {
            $('#exampleModal').modal('hide');
        });
    </script>
@endpush