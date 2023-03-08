@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        {{ $errors->first('username') }}
    </div>
@endif
