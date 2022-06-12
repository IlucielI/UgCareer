@error($name)
    <div class="d-block {{ $error_class ?? 'invalid-feedback' }}">{{ $message }}</div>
@enderror
