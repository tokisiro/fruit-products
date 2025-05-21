<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/sanitize.css">
    <link rel="stylesheet" href="/css/pages.css">
</head>
<body>
@if ($paginator->hasPages())
    <ul class="Pagination">
        <!-- 前ページへのリンク -->
        @if ($paginator->onFirstPage())
            <li class="Pagination-Item disabled">
                <span class="Pagination-Item-Link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                    </svg>
                </span>
            </li>
        @else
            <li class="Pagination-Item">
                <a class="Pagination-Item-Link" href="{{ $paginator->previousPageUrl() }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                    </svg>
                </a>
            </li>
        @endif

        <!-- ページ番号部分 -->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="Pagination-Item disabled"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="Pagination-Item">
                            <a class="Pagination-Item-Link isActive" href="{{ $url }}">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @else
                        <li class="Pagination-Item">
                            <a class="Pagination-Item-Link" href="{{ $url }}">
                                <span>{{ $page }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!-- 次ページへのリンク -->
        @if ($paginator->hasMorePages())
            <li class="Pagination-Item">
                <a class="Pagination-Item-Link" href="{{ $paginator->nextPageUrl() }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                </a>
            </li>
        @else
            <li class="Pagination-Item disabled">
                <span class="Pagination-Item-Link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                    </svg>
                </span>
            </li>
        @endif
    </ul>
@endif
</body>
</html>