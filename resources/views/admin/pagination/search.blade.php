<ul class="pagination">
    <!-- Previous Button -->
    <li class="page-item previous {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url(1) }}" class="page-link"><i class="previous"></i></a>
    </li>

    <!-- Page Numbers -->
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $paginator->url($i) }}" class="page-link">{{ $i }}</a>
        </li>
    @endfor

    <!-- Next Button -->
    <li class="page-item next {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $paginator->url($paginator->currentPage() + 1) }}" class="page-link"><i class="next"></i></a>
    </li>
</ul>
