@if (isset($paginator) && $paginator->lastPage() > 1)
<nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">
    <ul class="pagination">
        <li class="page-item first {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}" >
            <a class="page-link" href="{{ $paginator->url(1) }}">
                <i class="ti ti-chevrons-left ti-xs"></i>
            </a>
        </li>

        @if ($paginator->currentPage() != 1)
        <li class="page-item prev">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}">
                <i class="ti ti-chevron-left ti-xs"></i>
            </a>
        </li>
        @endif

        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
        @endfor

        @if ($paginator->currentPage() != $paginator->lastPage())
        <li class="page-item next">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">
                <i class="ti ti-chevron-right ti-xs"></i>
            </a>
        </li>
        @endif

        <li class="page-item last {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}" >
            <a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">
                <i class="ti ti-chevrons-right ti-xs"></i>
            </a>
        </li>
    </ul>
</nav>
@endif
