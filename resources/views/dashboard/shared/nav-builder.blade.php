<?php
/*
    $data = $menuel['elements']
*/

if(!function_exists('renderDropdown')){
    function renderDropdown($data){
        if(array_key_exists('slug', $data) && $data['slug'] === 'dropdown'){
            echo '<li class="c-sidebar-nav-dropdown">';
            echo '<a class="c-sidebar-nav-dropdown-toggle" href="#">';
            if($data['hasIcon'] === true && $data['iconType'] === 'coreui'){
                echo '<i class="' . $data['icon'] . ' c-sidebar-nav-icon"></i>';    
            }
            echo $data['name'] . '</a>';
            echo '<ul class="c-sidebar-nav-dropdown-items">';
            renderDropdown( $data['elements'] );
            echo '</ul></li>';
        }else{
            for($i = 0; $i < count($data); $i++){
                if( $data[$i]['slug'] === 'link' ){
                    echo '<li class="c-sidebar-nav-item">';
                    echo '<a class="c-sidebar-nav-link" href="' . url('') . $data[$i]['href'] . '">';
                    echo '<span class="c-sidebar-nav-icon"></span>' . $data[$i]['name'] . '</a></li>';
                }elseif( $data[$i]['slug'] === 'dropdown' ){
                    renderDropdown( $data[$i] );
                }
            }
        }
    }
}
?>

<div class="c-sidebar-brand"><img class="c-sidebar-brand-full" src="{{ url('') }}/assets/brand/coreui-base-white.svg" width="118" height="46" alt="CoreUI Logo"><img class="c-sidebar-brand-minimized" src="assets/brand/coreui-signet-white.svg" width="118" height="46" alt="CoreUI Logo"></div>
<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('admin.dashboard') }}">
            <i class="cil-speedometer c-sidebar-nav-icon"></i>
            Dashboard
        </a>
    </li>

    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('admin.category') }}">
            <i class="cil-grid c-sidebar-nav-icon"></i>
            Category
        </a>
    </li>

    <li class="c-sidebar-nav-dropdown">
        <a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="cil-sitemap c-sidebar-nav-icon"></i>
            Product
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('admin.product.list') }}">
                    <i class="cil-list c-sidebar-nav-icon"></i>
                    List
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('admin.product') }}">
                    <i class="cil-playlist-add c-sidebar-nav-icon"></i>
                    Add
                </a>
            </li>
        </ul>
    </li>

    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('admin.user') }}">
            <i class="cil-user c-sidebar-nav-icon"></i>
            User
        </a>
    </li>

    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('admin.order') }}">
            <i class="cil-cart c-sidebar-nav-icon"></i>
            Orders
        </a>
    </li>

    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ route('admin.logout') }}">
            <i class="cil-account-logout c-sidebar-nav-icon"></i>
            Logout
        </a>
    </li>
    @if(isset($appMenus['sidebar menu']))
    @foreach($appMenus['sidebar menu'] as $menuel)
    @if($menuel['slug'] === 'link')
    <li class="c-sidebar-nav-item">
        <a class="c-sidebar-nav-link" href="{{ url('') . $menuel['href'] }}">
            @if($menuel['hasIcon'] === true)
            @if($menuel['iconType'] === 'coreui')
            <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
            @endif
            @endif
            {{ $menuel['name'] }}
        </a>
    </li>
    @elseif($menuel['slug'] === 'dropdown')
    <?php renderDropdown($menuel) ?>
    @elseif($menuel['slug'] === 'title')
    <li class="c-sidebar-nav-title">
        @if($menuel['hasIcon'] === true)
        @if($menuel['iconType'] === 'coreui')
        <i class="{{ $menuel['icon'] }} c-sidebar-nav-icon"></i>
        @endif
        @endif
        {{ $menuel['name'] }}
    </li>
    @endif
    @endforeach
    @endif
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
