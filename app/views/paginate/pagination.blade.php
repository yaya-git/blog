
@if($paginator->getLastPage() > 1)
<ul class="pagination">
    <li class="{{ ($paginator->getCurrentPage() === 1)  ? 'disabled' : '' }}">
        <a href="{{ $paginator->getUrl(($paginator->getCurrentPage() > 1) ?  $paginator->getCurrentPage() - 1 : 1) }}">&laquo;</a>
    </li>
    
    <li>
        <a href="{{ $paginator->getUrl(1) }}" >limit 1</a>
    </li>
    
    <li>
        <a class="pagina" href="{{ $paginator->getUrl($paginator->getCurrentPage()) }}">
            {{ Form::text('txtPage', $paginator->getCurrentPage(), array('id' => 'txtPage')); }}
        </a>
    </li>
    
    <li>
        <a href="{{ $paginator->getUrl($paginator->getLastPage()) }}">Max {{$paginator->getLastPage()}}</a>
    </li>
    
    <li class="{{ ($paginator->getCurrentPage() === $paginator->getLastPage())  ? 'disabled' : '' }}">
        <a href="{{ $paginator->getUrl($paginator->getCurrentPage() + 1 ) }}">&raquo;</a>
    </li>
    
</ul>
@endif
