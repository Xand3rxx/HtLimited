<!-- BEGIN .app-side -->
<aside class="app-side fixed" id="app-side">
    <!-- BEGIN .side-content -->
    <div class="side-content ">
        <!-- BEGIN .user-profile -->
        <div class="user-profile">
			<img class="profile-thumb" src="{{ (!empty($profile['avatar'])) ? asset('img/profile-avatars/'.$profile['avatar']) : asset('img/blank.png') }}" alt="User Thumb" />

            <h6 class="profile-name">{{ !empty($profile['name']) ? Str::title($profile['name']) : 'Unavailable' }}</h6>
            <br>
            <a class="text-info" href="#">{{ $profile['email'] }}</a>
            <br>
            <small class="text-muted">(Super Administrator)</small>
        </div>
        <!-- END .user-profile -->
        <div class="sidebarNavScroll">
            <!-- BEGIN .side-nav -->
            <nav class="side-nav">
                <!-- BEGIN: side-nav-content -->
                <small class="ml-2 mt-2 mb-2 text-muted">Menu</small>
                <ul class="unifyMenu" id="unifyMenu">
                    <li class="{{ Route::currentRouteNamed('admin.index') ? 'active selected' : '' }}">
                        <a href="{{ route('admin.index') }}">
                            <span class="has-icon">
                                <i class="icon-laptop_windows"></i>
                            </span>
                            <span class="nav-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="{{ Route::currentRouteNamed('admin.posts.index', 'admin.posts.create', 'admin.posts.edit', 'admin.posts.show', 'admin.categories.index', 'admin.tags.index') ? 'active selected' : '' }}">
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-file-text2"></i>
                            </span>
                            <span class="nav-title">Blog Posts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.posts.index', 'admin.posts.edit', 'admin.posts.show') ? 'current-page' : '' }}" href="{{ route('admin.posts.index') }}">All Posts</a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.posts.create') ? 'current-page' : '' }}" href="{{ route('admin.posts.create') }}">Add New</a>
                            </li>

                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.categories.index') ? 'current-page' : '' }}" href="{{ route('admin.categories.index') }}">Categories</a>
                            </li>

                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.tags.index') ? 'current-page' : '' }}" href="{{ route('admin.tags.index') }}">Tags</a>
                            </li>

                        </ul>
                    </li>

                    <li class="{{ Route::currentRouteNamed('admin.menu.index') ? 'active selected' : '' }}">
                        <a href="{{ route('admin.menu.index') }}">
                            <span class="has-icon">
                                <i class="icon-tree"></i>
                            </span>
                            <span class="nav-title">Menu</span>
                        </a>
                    </li>

                    <li class="{{ Route::currentRouteNamed('admin.settings.index', 'admin.profile.index') ? 'active selected' : '' }}">
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-files-empty"></i>
                            </span>
                            <span class="nav-title">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.settings.index') ? 'current-page' : '' }}" href="{{ route('admin.settings.index') }}">Add New</a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.profile.index') ? 'current-page' : '' }}" href="{{ route('admin.profile.index') }}">All Pages</a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Route::currentRouteNamed('admin.settings.index', 'admin.profile.index') ? 'active selected' : '' }}">
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-cog3"></i>
                            </span>
                            <span class="nav-title">Settings</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.settings.index') ? 'current-page' : '' }}" href="{{ route('admin.settings.index') }}">General</a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.profile.index') ? 'current-page' : '' }}" href="{{ route('admin.profile.index') }}">Profile</a>
                            </li>
                        </ul>
                    </li>


                    {{-- <li class="{{ Route::currentRouteNamed('admin.users.customer.index', 'admin.users.customer.show') ? 'active selected' : '' }}">
                        <a href="{{ route('admin.users.customer.index') }}">
                            <span class="has-icon">
                                <i class="icon-users"></i>
                            </span>
                            <span class="nav-title">Customers</span>
                        </a>
                    </li>

                    <li class="{{ Route::currentRouteNamed('admin.orders.index', 'admin.orders.show') ? 'active selected' : '' }}">
                        <a href="{{ route('admin.orders.index') }}">
                            <span class="has-icon">
                                <i class="icon-cart"></i>
                            </span>
                            <span class="nav-title">Orders</span>
                        </a>
                    </li>

                    <li class="{{ Route::currentRouteNamed('admin.payments.index', 'admin.payments.show') ? 'active selected' : '' }}">
                        <a href="{{ route('admin.payments.index') }}">
                            <span class="has-icon">
                                <i class="icon-coin-pound"></i>
                            </span>
                            <span class="nav-title">Payments</span>
                        </a>
                    </li>

                    <li class="{{ Route::currentRouteNamed('admin.comments.index', 'admin.comments.show') ? 'active selected' : '' }}">
                        <a href="{{ route('admin.comments.index') }}">
                            <span class="has-icon">
                                <i class="icon-chat_bubble_outline"></i>
                            </span>
                            <span class="nav-title">Reviews & Ratings</span>
                        </a>
                    </li>

                    <div role="separator" class="dropdown-divider"></div>
                    <small class="ml-2 mt-2 mb-2 text-muted">Categories & Products</small>
                    <li class="{{ Route::currentRouteNamed('admin.categories.index') ? 'active selected' : '' }}">
                        <a href="{{ route('admin.categories.index') }}">
                            <span class="has-icon">
                                <i class="icon-layers"></i>
                            </span>
                            <span class="nav-title">Categories</span>
                        </a>
                    </li>

                    <li class="{{ Route::currentRouteNamed('admin.products.index', 'admin.products.create', 'admin.products.edit', 'admin.products.show') ? 'active selected' : '' }}">
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-gift"></i>
                            </span>
                            <span class="nav-title">Products</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.products.create') ? 'current-page' : '' }}" href="{{ route('admin.products.create') }}">Create</a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.products.index', 'admin.products.edit', 'admin.products.show') ? 'current-page' : '' }}" href="{{ route('admin.products.index') }}">List</a>
                            </li>
                        </ul>
                    </li>
                    <div role="separator" class="dropdown-divider"></div>
                    <small class="ml-2 mt-2 mb-2 text-muted">Settings</small>
                    <li class="{{ Route::currentRouteNamed('admin.profile.index') ? 'active selected' : '' }}">
                        <a href="{{ route('admin.profile.index') }}">
                            <span class="has-icon">
                                <i class="icon-profile"></i>
                            </span>
                            <span class="nav-title">Profile</span>
                        </a>
                    </li>


                    <!-- START: side-nav-content for Super Admin only -->
                    @if(auth()->user()->role->role->slug == 'super-admin')
                    <div role="separator" class="dropdown-divider"></div>
                    <small class="ml-2 mt-2 mb-2 text-muted">Super Administrator Settings</small>
                    <li class="{{ Route::currentRouteNamed('admin.users.administrator.index', 'admin.users.administrator.create', 'admin.users.administrator.create', 'admin.users.administrator.edit') ? 'active selected' : '' }}">
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-users"></i>
                            </span>
                            <span class="nav-title">Administrators</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.users.administrator.create') ? 'current-page' : '' }}" href='{{ route('admin.users.administrator.create') }}'>Create</a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.users.administrator.index', 'admin.users.administrator.edit') ? 'current-page' : '' }}" href='{{ route('admin.users.administrator.index') }}'>List</a>
                            </li>
                        </ul>
                    </li>
                    <!-- END: side-nav-content for Super Admin only -->
                    @endif
                    --}}
                </ul>
                <!-- END: side-nav-content -->
            </nav>
            <!-- END: .side-nav -->
        </div>
    </div>
    <!-- END: .side-content -->
</aside>
<!-- END: .app-side -->
