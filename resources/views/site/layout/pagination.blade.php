<div class="f" id="pmore page_cate_8">
    <!-- phan trang -->
    <div id="page_cate_8">
        <div class="paging paginate-ajax-cate-child" data-id="8">
            <ul class="pagination" role="navigation">
                @if ($page > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ request()->fullUrlWithQuery(['page' => $page - 1]) }}"
                            rel="next" aria-label="Next »">&lsaquo;</a>
                    </li>
                @endif

                @php
                    $j = request()->input('page') ?? 1;
                    $start = $j < 5 ? 1 : ($j >= $page_number - 4 ? ($page_number - $j == 4 ? $j : ($page_number - $j == 3 ? $j - 1 : ($page_number - $j == 2 ? $j - 2 : ($page_number - $j == 1 ? $j - 3 : $j - 4)))) : $j);

                    $end = $j < $page_number ? ($j < 5 ? ($page_number < 5 ? $page_number : 5) : ($j < $page_number ? ($j >= $page_number - 4 ? $page_number : $j + 4) : $page_number)) : $page_number;
                @endphp
                @for ($i = $start; $i <= $end; $i++)
                    <li class="page-item {{ (empty($page) && $i == 1) || $page == $i ? 'active' : '' }}"
                        aria-current="page">
                        <a class="page-link"
                            href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">{{ $i }}</a>
                    </li>
                @endfor

                @if ($page < $page_number && $page_number > 1)
                    <li class="page-item">
                        <a class="page-link" href="{{ request()->fullUrlWithQuery(['page' => $page + 1]) }}"
                            rel="next" aria-label="Next »">&rsaquo;</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
