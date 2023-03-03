@if ($paginator->hasPages())
    @if ($paginator->onFirstPage())
        <img class="btn" src="{{ asset('assets/images/backwardarrow.svg') }}" />
    @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev"><img class="btn"
                src="{{ asset('assets/images/backwardarrow.svg') }}" /></a>
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next"><img class="btn"
                src="{{ asset('assets/images/forwardarrow.svg') }}" style="padding-left:0px" /></a>
    @else
        <img class="btn" src="{{ asset('assets/images/forwardarrow.svg') }}" style="padding-left:0px" />
    @endif
@endif
