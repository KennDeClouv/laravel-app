@props(['active'=>false])
<li class="sidebar-item {{ $active ? 'active' : ''}}" id="Main Page">
    <a {{ $attributes }} class="sidebar-link">
        <i class="bi {{ $icon ? $icon : 'bi bi-question-circle' }}"></i>
        <span>{{ $slot }}</span>
    </a>
</li>