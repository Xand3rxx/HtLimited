    <ul class="sub-menu">
        @foreach( $childs as $child )
            <li class="{{ (URL::full() == URL::to('/').$child['link']) ? 'active' : '' }}">
                <a href="{{ $child['link'] }}" title="">{{ $child['label'] }}</a>
                {{-- @if( $child['child'] )
                    @include('layouts.partials._menu-child', ['childs' => $child['child'] ])
                @endif --}}
            </li>
        @endforeach
    </ul>

{{-- <ul>
    @foreach($childs as $child)
        @if( $child['child'] )
            <li class="{{ (URL::full() == URL::to('/').$child['link']) ? 'active' : '' }}">
                <a href="{{ $child['link'] }}">{{ $child['label'] }}
                </a>
                @include('layouts.partials._menu-child',['childs' => $child['child']])
            </li>
        @else
            <li class="{{ (URL::full() == URL::to('/').$child['link']) ? 'active' : '' }}">
                <a href="{{ $child['link'] }}">{{ $child['label'] }}</a>
            </li>
        @endif
    @endforeach
</ul> --}}
<!-- /.sub-menu -->



