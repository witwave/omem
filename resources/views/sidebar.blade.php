<ul class="sidebar-menu">
    <li class="header">菜单</li>
    @if ($sidebar = Config::get('menu.data'))
        @foreach($sidebar as $item)
            @if(isset($item['children']))
                <li class="treeview {{ str_contains(Request::path(),$item['path']) ?'active':'' }}">
                    <a href="#"><i class='fa {{ $item['icon'] }}'></i>
                        <span>{{ $item['name'] }}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        @foreach($item['children'] as $item)
                            <li class="{{ Request::path()==$item['path']?'active':'' }}">
                                <a href="{{ url($item['path']) }}">
                                    {{ $item['name'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="{{ str_contains(Request::path(),$item['path'])?'active':'' }}">
                    <a href="{{ url($item['path']) }}">
                        <i class='fa {{ $item['icon'] }}'></i>
                        <span>{{ $item['name'] }}</span>
                    </a>
                </li>
            @endif
        @endforeach
    @endif
</ul>