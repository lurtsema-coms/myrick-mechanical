<style>
    .pagination_previous ,.pagination_next, .pagination_pages{
        display: inline-block;
    }
    
    .pagination_container{
        text-align: right;
        padding-top: 4px;
    }
    .pagination_container li{
        display: inline-block;
    }
    .prev_test{
        cursor: pointer;
        text-decoration: none;
        color:black;
        padding: 8px 16px;
    }
    .prev_test:hover{
        background-image:linear-gradient(to bottom, #585858 0%, #111 100%);
        color:white;
        
    }
    .prev_test_disabled{
        cursor:default;
        text-decoration: none;
        color:grey;
        padding: 8px 16px;
    }
    .active_paginate{
        background-color:rgba(0, 0, 0, 0);
        background-image:linear-gradient(rgba(230, 230, 230, 0.1) 0%, rgba(0, 0, 0, 0.1) 100%);
        padding: 8px 16px;
        text-decoration: none;
        border: 1px solid rgba(0,0,0,0.3);
        cursor: pointer;
    }
    .active_paginate:hover{
        background-image:linear-gradient(to bottom, #585858 0%, #111 100%);
        color:white;
    }
    .active_paginate_pages{
        text-decoration: none;
        color: black;
        padding: 8px 16px;
        text-decoration: none;
    }
    .active_paginate_pages:hover{
        background-image:linear-gradient(to bottom, #585858 0%, #111 100%);
        color:white;
    }
    </style>
    @if ($paginator->hasPages())
        <nav>
            <ul class="pagination">
                <div class="pagination_container">
                    {{-- Previous Page Link --}}
                    <div class="pagination_previous">
                        @if ($paginator->onFirstPage())
                            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                <span class="prev_test_disabled" aria-hidden="true">Previous</span>
                            </li>
                        @else
                            <li>
                                <a class="prev_test" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Previous</a>
                            </li>
                        @endif
                    </div>
                    {{-- Pagination Elements --}}
                    <div class="pagination_pages">
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <li class="disabled" aria-disabled="true" style=><span>{{ $element }}</span></li>
                            @endif
                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="active_paginate" aria-current="page"><span>{{ $page }}</span></li>
                                    @else
                                        <li><a class="active_paginate_pages" href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                    <div class="pagination_next">
                        {{-- Next Page Link --}}
                        @if ($paginator->hasMorePages())
                            <li>
                                <a class="prev_test" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                            </li>
                        @else
                            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                <span class="prev_test_disabled" aria-hidden="true">Next</span>
                            </li>
                        @endif
                    </div>
                </div>
            </ul>
        </nav>
    @endif
    