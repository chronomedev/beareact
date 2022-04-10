<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        @if (Auth::user()->role == 'admin')
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('admin.index') }}">
                <img src="{{ asset('img') }}/main-logo.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.index') }}">
                                <i class="fas fa-home text-dark"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <i class="ni ni-circle-08 text-dark"></i>
                                <span class="nav-link-text">User</span>
                            </a>
                        </li>
                    </ul>
                    {{-- <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-manage" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-manage">
                                <i class="ni ni-circle-08 text-dark"></i>
                                <span class="nav-link-text">Manage</span>
                            </a>
                            <div class="collapse" id="navbar-manage">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}" class="nav-link">User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul> --}}
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog-page.index') }}">
                                <i class="fas fa-newspaper text-dark"></i>
                                <span class="nav-link-text">Blog</span>
                            </a>
                        </li>
                    </ul>
                    {{-- <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-setting" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-setting">
                                <i class="ni ni-circle-08 text-dark"></i>
                                <span class="nav-link-text">Setting</span>
                            </a>
                            <div class="collapse" id="navbar-setting">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('setting.logo') }}" class="nav-link">Logo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('setting.about-us') }}" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('setting.footer') }}" class="nav-link">Footer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('setting.contact-us') }}" class="nav-link">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-home-setting" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-home-setting">
                                <i class="ni ni-circle-08 text-dark"></i>
                                <span class="nav-link-text">Home Setting</span>
                            </a>
                            <div class="collapse" id="navbar-home-setting">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('slider.index') }}" class="nav-link">Slider</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('principal.index') }}" class="nav-link">Principal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('client-logo.index') }}" class="nav-link">Client Logo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('testimonial.index') }}" class="nav-link">Testimonial</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-manage" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-manage">
                                <i class="ni ni-circle-08 text-dark"></i>
                                <span class="nav-link-text">Manage</span>
                            </a>
                            <div class="collapse" id="navbar-manage">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}" class="nav-link">User</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-products" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-products">
                                <i class="ni ni-app text-dark"></i>
                                <span class="nav-link-text">Product</span>
                            </a>
                            <div class="collapse" id="navbar-products">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('product.index') }}" class="nav-link">Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('product-brand.index') }}" class="nav-link">Brand</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('product-category.index') }}" class="nav-link">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('product-type.index') }}" class="nav-link">Type</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('product-variable.index') }}" class="nav-link">Variable</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('product-family.index') }}" class="nav-link">Family</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-become-reseller" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-become-reseller">
                                <i class="fas fa-shopping-cart text-dark"></i>
                                <span class="nav-link-text">Become Reseller</span>
                            </a>
                            <div class="collapse" id="navbar-become-reseller">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('become-reseller.index-backend') }}" class="nav-link">List
                                            Data Reseller</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('success-story-page.index') }}">
                                <i class="fas fa-check text-dark"></i>
                                <span class="nav-link-text">Success Story</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-resource-tools" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-resource-tools">
                                <i class="fas fa-shopping-cart text-dark"></i>
                                <span class="nav-link-text">Resource and Tools</span>
                            </a>
                            <div class="collapse" id="navbar-resource-tools">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('resource-tools-front.index-front') }}" class="nav-link">Public</a>
                                        <a href="{{ route('resource-tools-back.index-back') }}" class="nav-link">Client</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                     <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('solutions-page.index') }}">
                                <i class="fas fa-newspaper text-dark"></i>
                                <span class="nav-link-text">Solutions</span>    
                            </a>
                        </li>
                    </ul> --}}
                    <!-- Divider -->
                    <hr class="my-3">
                </div>
            </div>
            
            <!-- Brand -->
            <!-- Sidenav toggler -->
        {{-- @elseif (Auth::user()->role == 'user')
        
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('client.index') }}">
                <img src="{{ asset('img') }}/logo-wirakom-2.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('client.index') }}">
                                <i class="fas fa-home text-dark"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-project" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-project">
                                <i class="fas fa-project-diagram text-dark"></i>
                                <span class="nav-link-text">Project</span>
                            </a>
                            <div class="collapse" id="navbar-project">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('project.index') }}" class="nav-link">My Project</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('project.add') }}" class="nav-link">Add Project</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('resource-tools-client.index-client') }}">
                                <i class="fas fa-tools text-dark"></i>
                                <span class="nav-link-text">Resource and Tools</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-products" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="navbar-products">
                                <i class="ni ni-circle-08 text-dark"></i>
                                <span class="nav-link-text">Product</span>
                            </a>
                            <div class="collapse" id="navbar-products">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('product.index') }}" class="nav-link">Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('product-category.index') }}" class="nav-link">Category</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('product-variable.index') }}" class="nav-link">Variable</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('news-page.index') }}">
                                <i class="ni ni-shop text-dark"></i>
                                <span class="nav-link-text">News</span>
                            </a>
                        </li>
                    </ul>
                    
                    <hr class="my-3">
                </div>
            </div> --}}

        @endif
    </div>
</nav>
