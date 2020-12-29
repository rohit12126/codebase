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

<h3 class="c-sidebar-brand" ><a href="{{ route('admin.dashboard') }}" style="color:white;">Custom Closets</a></h3>
<ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item" title="Admin Dashboard">
        <a class="c-sidebar-nav-link @if(request()->segment(2) == 'dashboard') c-active @endif" href="{{ route('admin.dashboard') }}" >
            <i class="cil-speedometer c-sidebar-nav-icon"></i>
            Dashboard 
        </a>
    </li>
    <li class="c-sidebar-nav-item" title="Find All Categories Here">
        <a class="c-sidebar-nav-link @if(
            request()->segment(2) == 'category'
            || request()->segment(2) == 'edit_category'
        ) c-active @endif" href="{{ route('admin.category') }}">
        <i class="cil-grid c-sidebar-nav-icon"></i>
        Product Category
        </a>
    </li>
    {{-- <li class="c-sidebar-nav-item " title="Find All Hardware Here">
        <a class="c-sidebar-nav-link @if(
            request()->segment(2) == 'hardware-list'
            ||request()->segment(2) == 'hardware'
            || request()->segment(2) == 'edit_hardware'
        ) c-active @endif" href="{{ route('admin.hardware.list') }}">
        <i class="cil-sitemap c-sidebar-nav-icon"></i>
            Hardware
        </a>
    </li>
    
    <li class="c-sidebar-nav-item " title="Find All Product Here">
        <a class="c-sidebar-nav-link @if(
            request()->segment(2) == 'product-list'
            ||request()->segment(2) == 'product'
            || request()->segment(2) == 'edit_product'
        ) c-active @endif" href="{{ route('admin.product.list') }}">
        <i class="cil-sitemap c-sidebar-nav-icon"></i>
            Product
        </a>
    </li> --}}

    <li class="c-sidebar-nav-item " title="Find All items Here">
        <a class="c-sidebar-nav-link @if(
            request()->segment(2) == 'item-list'
            ||request()->segment(2) == 'item'
            || request()->segment(2) == 'edit_item'
            || request()->segment(2) == 'product'
        ) c-active @endif" href="{{ route('admin.item.list') }}">
        <i class="cil-sitemap c-sidebar-nav-icon"></i>
            Products
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Find All Users Here">
        <a class="c-sidebar-nav-link @if(request()->segment(2) == 'user' ||request()->segment(2) ==  'edit_user') c-active @endif" href="{{ route('admin.user') }}">
            <i class="cil-user c-sidebar-nav-icon"></i>
            Users
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Find All Orders Here">
        <a class="c-sidebar-nav-link @if(request()->segment(2) == 'order' || request()->segment(2) == 'order_details') c-active @endif" href="{{ route('admin.order') }}">
            <i class="cil-cart c-sidebar-nav-icon"></i>
            Orders
        </a>
    </li>

    <li class="c-sidebar-nav-item" title="Find All Orders Here">
        <a class="c-sidebar-nav-link @if(
            request()->segment(2) == 'blog-list'
            || request()->segment(2) == 'blog'
            || request()->segment(2) == 'blog-category'
            || request()->segment(2) == 'edit_blog'
            || request()->segment(2) == 'blog_edit_category'
        ) c-active @endif" href="{{ route('admin.blog.list') }}">
        <i class="cil-sitemap c-sidebar-nav-icon"></i>
            Blogs
        </a>
    </li>
    {{-- Uncomment below code for CMS and Review Modules --}}
   {{--  <li class="c-sidebar-nav-item" title="Find All CMS Pages Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.page.list') }}">
            <i class="cil-grid c-sidebar-nav-icon"></i>
            CMS
        </a>
    </li>
    --}}
    <li class="c-sidebar-nav-dropdown" title="Product Reviews">
        <a class="c-sidebar-nav-link" href="{{ route('admin.aprooved') }}">
            <i class="cil-list c-sidebar-nav-icon"></i>
            Product Reviews
        </a>
    </li>
    {{-- <li class="c-sidebar-nav-item" title="Find All FAQ Here">
        <a class="c-sidebar-nav-link @if(
            request()->segment(2) == 'faq-list'
            || request()->segment(2) == 'faq'
            || request()->segment(2) == 'edit_faq'
            || request()->segment(2) == 'faq-category'
            || request()->segment(2) == 'faq_edit_category'
            ) c-active @endif" href="{{ route('admin.faq.list') }}">
            <i class="cil-grid c-sidebar-nav-icon"></i>
            FAQ
        </a>
    </li> --}}
    <li class="c-sidebar-nav-item"title="Check All Enquries Here">
        <a class="c-sidebar-nav-link @if(request()->segment(2) == 'enquiries') c-active @endif" href="{{ route('admin.enquiries') }}">
            <i class="cil-address-book c-sidebar-nav-icon"></i>
            Enquiries
        </a>
    </li>
    {{-- <li class="c-sidebar-nav-item"title="Secure Account Today, Change Password">
        <a class="c-sidebar-nav-link @if(request()->segment(2) == 'change-password') c-active @endif" href="{{ route('admin.change.password') }}">
            <i class="cil-lock-unlocked c-sidebar-nav-icon"></i>
            Change Password
        </a>
    </li> --}}

    <li class="c-sidebar-nav-item" title="Before Closing Window, LogOut By Clicking Here">
        <a class="c-sidebar-nav-link" href="{{ route('admin.logout') }}">
            <i class="cil-account-logout c-sidebar-nav-icon"></i>
            Logout
        </a>
    </li>
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
