<div class="c-wrapper">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show"><span class="c-header-toggler-icon"></span></button><a class="c-header-brand d-sm-none" href="#">Custom Door and Mirror</a>
        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true"><span class="c-header-toggler-icon"></span></button>
        <?php
            //use App\MenuBuilder\FreelyPositionedMenus;
            //if(isset($appMenus['top menu'])){
            //    FreelyPositionedMenus::render( $appMenus['top menu'] , 'c-header-', 'd-md-down-none');
            //}
        ?>
        <ul class="c-header-nav ml-auto mr-4">
            {{-- <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link">
                    <svg class="c-icon">
                        <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-bell"></use>
                    </svg></a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link">
                    <svg class="c-icon">
                        <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-list-rich"></use>
                    </svg></a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link">
                    <svg class="c-icon">
                        <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-envelope-open"></use>
                    </svg></a></li> --}}
            <li class="c-header-nav-item dropdown">
                <a class="c-header-nav-link has-dropdown-custom" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar"><img class="c-avatar-img" src="{{ url('') }}/upload/3.png" alt="{{Auth::guard('admin')->user()->email}}"></div>
                    <span>&nbsp;{{ ucwords(Str::limit(Auth::guard('admin')->user()->name, 20 ))}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    {{-- <div class="dropdown-header bg-light py-2"><strong>Account</strong></div><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-bell"></use>
                        </svg> Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-envelope-open"></use>
                        </svg> Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-task"></use>
                        </svg> Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-comment-square"></use>
                        </svg> Comments<span class="badge badge-warning ml-auto">42</span></a>
                    <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div><a class="dropdown-item" href="{{route('profile')}}">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-user"></use>
                        </svg> Profile</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-settings"></use>
                        </svg> Settings</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-credit-card"></use>
                        </svg> Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-file"></use>
                        </svg> Projects<span class="badge badge-primary ml-auto">42</span></a> --}}
                        <a class="dropdown-item" href="{{ route('admin.profile') }}">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-user"></use>
                        </svg> Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('admin.setting') }}">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-settings"></use>
                        </svg> Settings
                    </a>
                    <a class="dropdown-item" href="{{ url('/') }}" target= "_blank">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-laptop"></use>
                        </svg> Go to Website
                    </a>
                    {{-- <div class="dropdown-divider"></div> --}}
                {{--<a class="dropdown-item" href="{{ route('admin.change.password') }}">
                    <svg class="c-icon mr-2">
                        <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-lock-locked"></use>
                    </svg> Change Password
                </a>--}}
                    
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="{{ url('') }}/icons/sprites/free.svg#cil-account-logout"></use>
                        </svg>
                        <form action="{{ route('admin.logout') }}" method="GET" class="mb-0"> @csrf <button type="submit" class="btn p-0">Logout</button></form>
                    </a>
                </div>
            </li>
        </ul>


    
