@foreach ($sidebars as $name => $url)
    <li class="nav-item">
        <a href="{{ $url }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                {{ $name }}
            </p>
        </a>
    </li>
@endforeach
