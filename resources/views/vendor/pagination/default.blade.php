@if ($paginator->hasPages())

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            
            <!-- <li  class="disabled"><a><i class="fa fa-angle-left"></i></a></li> -->
        @else
            <!-- <li><a class="p-3 d-inline-block" href="{{ $paginator->previousPageUrl() }}" rel="prev"></a></li> -->
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        
                        <li class="active p-3 d-inline-block"><a style="font-weight:900" href="{{ $url }}">{{ $page }}</a></li>
                    @else
                        <li class="p-3 d-inline-block"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <!-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"></a></li> -->
        @else
        <!-- <li  class="disabled"><a><i class="fa fa-angle-right"></i></a></li> -->
        @endif

@endif
