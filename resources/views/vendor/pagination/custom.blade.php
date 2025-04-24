@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Botón Anterior --}}
        @if ($paginator->onFirstPage())
            <span class="page disabled">&laquo; Anterior</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="page">&laquo; Anterior</a>
        @endif

        {{-- Números de página --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="page disabled">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page active">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="page">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Botón Siguiente --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="page">Siguiente &raquo;</a>
        @else
            <span class="page disabled">Siguiente &raquo;</span>
        @endif
    </div>
@endif
