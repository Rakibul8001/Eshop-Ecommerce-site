<nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-info">
        <img src="{{asset('images/face.jpg')}}" alt="">
        <p class="name">Richard V.Welsh</p>
        <p class="designation">Manager</p>
        <span class="online"></span>
    </div>
    <ul class="nav">
        {{--<li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.product.create') }}">
                <img src="{{asset('images/icons/1.png')}}" alt="">
                <span class="menu-title">Create Product</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('category.index')}}">
                <img src="{{asset('images/icons/2.png')}}" alt="">
                <span class="menu-title">Manage Categories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category.create') }}">
                <img src="{{asset('images/icons/005-forms.png')}}" alt="">
                <span class="menu-title">Create Categories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/ui-elements/buttons.html">
                <img src="{{asset('images/icons/4.png')}}" alt="">
                <span class="menu-title">Buttons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/index.html">
                <img src="{{asset('images/icons/5.png')}}" alt="">
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/index.html">
                <img src="{{asset('images/icons/6.png')}}" alt="">
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/index.html">
                <img src="{{asset('images/icons/7.png')}}" alt="">
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/ui-elements/typography.html">
                <img src="{{asset('images/icons/8.png')}}" alt="">
                <span class="menu-title">Typography</span>
            </a>
        </li>--}}
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{asset('images/icons/4.png')}}" alt="">
                <span class="menu-title">Manage Products<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.index') }}">
                            <img src="{{asset('images/icons/6.png')}}" alt="">
                            <span class="menu-title">Show Products</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.product.create') }}">
                            <img src="{{asset('images/icons/1.png')}}" alt="">
                            <span class="menu-title">Create Products</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{asset('images/icons/4.png')}}" alt="">
                <span class="menu-title">Manage Categories<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="category-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category.index')}}">
                            <img src="{{asset('images/icons/2.png')}}" alt="">
                            <span class="menu-title">All Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category.create') }}">
                            <img src="{{asset('images/icons/005-forms.png')}}" alt="">
                            <span class="menu-title">Create Category</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{asset('images/icons/4.png')}}" alt="">
                <span class="menu-title">Manage Brands<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="brand-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('brand.index')}}">
                            <img src="{{asset('images/icons/7.png')}}" alt="">
                            <span class="menu-title">Show Brands</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('brand.create') }}">
                            <img src="{{asset('images/icons/8.png')}}" alt="">
                            <span class="menu-title">Create Brand</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#division-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{asset('images/icons/5.png')}}" alt="">
                <span class="menu-title">Manage Division<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="division-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('division.index')}}">
                            <img src="{{asset('images/icons/7.png')}}" alt="">
                            <span class="menu-title">Show Division</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('division.create') }}">
                            <img src="{{asset('images/icons/8.png')}}" alt="">
                            <span class="menu-title">Create Division</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#district-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{asset('images/icons/6.png')}}" alt="">
                <span class="menu-title">Manage District<i class="fa fa-sort-down"></i></span>
            </a>
            <div class="collapse" id="district-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('district.index')}}">
                            <img src="{{asset('images/icons/005-forms.png')}}" alt="">
                            <span class="menu-title">Show District</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('district.create') }}">
                            <img src="{{asset('images/icons/1.png')}}" alt="">
                            <span class="menu-title">Create District</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <img src="{{asset('images/icons/10.png')}}" alt="">
                <span class="menu-title">Settings</span>
            </a>
        </li>
    </ul>
</nav>
