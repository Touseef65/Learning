<h1>Inner page for users</h1>
<!-- inner.blade.php -->
<!-- inner.blade.php -->
@foreach ($data as $item)
    @if(is_array($item) && array_key_exists('email', $item))
        <h1>{{ htmlspecialchars($item['email']) }}</h1>
    @endif
@endforeach
