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

<div class="c-sidebar-brand">Custom Closets</div>
<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item" title="Admin Dashboard">
        <a class="c-sidebar-nav-link" href="{{ route('admin.dashboard') }}" >
            <i class="cil-speedometer c-sidebar-nav-icon"></i>
            Dashboard
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Find All Categories Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.category') }}">
            <i class="cil-grid c-sidebar-nav-icon"></i>
            Category
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Find All Products Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.product.list') }}">
        <i class="cil-sitemap c-sidebar-nav-icon"></i>
            Product
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Find All Users Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.user') }}">
            <i class="cil-user c-sidebar-nav-icon"></i>
            User
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Find All Orders Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.order') }}">
            <i class="cil-cart c-sidebar-nav-icon"></i>
            Orders
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Find All Orders Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.blog.list') }}">
        <i class="cil-sitemap c-sidebar-nav-icon"></i>
            Blogs
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Find All CMS Pages Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.page.list') }}">
            <i class="cil-grid c-sidebar-nav-icon"></i>
            CMS
        </a>
    </li>
    <li class="c-sidebar-nav-dropdown" title="Product Reviews">
        <a class="c-sidebar-nav-link" href="{{ route('admin.aprooved') }}">
            <i class="cil-list c-sidebar-nav-icon"></i>
            Reviews
        </a>
    </li>
    <li class="c-sidebar-nav-item" title="Find All FAQ Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.faq.list') }}">
            <i class="cil-grid c-sidebar-nav-icon"></i>
            FAQ
        </a>
    </li>
    <li class="c-sidebar-nav-item"title="Check All Enquries Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.enquiries') }}">
            <i class="cil-address-book c-sidebar-nav-icon"></i>
            Enquiries
        </a>
    </li>
    <li class="c-sidebar-nav-item"title="Secure Account Today, Change Password">
        <a class="c-sidebar-nav-link" href="{{ route('admin.change.password') }}">
            <i class="cil-lock-unlocked c-sidebar-nav-icon"></i>
            Change Password
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Before Closing Window, LogOut By Clicking Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.logout') }}">
            <i class="cil-account-logout c-sidebar-nav-icon"></i>
            Logout
        </a>
    </li>
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
