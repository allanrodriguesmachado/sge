@props([
    'field' => null
])

@error($field)
<div class="alert alert-danger">
    <span class="text-amber-700">{{ $message }}</span>
</div>
@enderror
