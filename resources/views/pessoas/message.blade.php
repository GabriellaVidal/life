<script>
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            sweetAlert('Oops...', '{{ $error }}', 'error')
        @endforeach
    @endif
    @if (session('flash_error'))
        sweetAlert('Oops...', '{!! session('flash_error') !!}', 'error')
    @endif
    @if (session('flash_success'))
        sweetAlert('Sucesso!', '{{ session('flash_success') }}', 'success')
        @php 
            session()->forget('flash_success') 
        @endphp
    @endif
</script>