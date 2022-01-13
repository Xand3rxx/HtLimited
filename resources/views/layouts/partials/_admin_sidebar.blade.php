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

                    <li class="{{ Route::currentRouteNamed('admin.form_bank_of_industry_loan', 'admin.show_form_bank_of_industry_loan') ? 'active selected' : '' }}">
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-enlarge"></i>
                            </span>
                            <span class="nav-title">Forms</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.form_bank_of_industry_loan', 'admin.show_form_bank_of_industry_loan') ? 'current-page' : '' }}" href="{{ route('admin.form_bank_of_industry_loan') }}">BOI</a>
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

                    {{-- <li class="{{ Route::currentRouteNamed('') ? 'active selected' : '' }}">
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-files-empty"></i>
                            </span>
                            <span class="nav-title">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="{{ Route::currentRouteNamed('') ? 'current-page' : '' }}" href="#">Add New</a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteNamed('') ? 'current-page' : '' }}" href="#">All Pages</a>
                            </li>
                        </ul>
                    </li> --}}

                    <li class="{{ Route::currentRouteNamed('admin.settings.index', 'admin.profile.index', 'admin.smtp-settings.index') ? 'active selected' : '' }}">
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

                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.smtp-settings.index') ? 'current-page' : '' }}" href="{{ route('admin.smtp-settings.index') }}">SMTP Settings</a>
                            </li>
                        </ul>
                    </li>

                    <li class="{{ Route::currentRouteNamed('admin.training_start_your_business', 'admin.training_improve_your_business', 'admin.training_business_continuity_plan') ? 'active selected' : '' }}">
                        <a href="#" class="has-arrow" aria-expanded="false">
                            <span class="has-icon">
                                <i class="icon-clipboard"></i>
                            </span>
                            <span class="nav-title">Training</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.training_start_your_business') ? 'current-page' : '' }}" href="{{ route('admin.training_start_your_business') }}">Start Your Business</a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.training_improve_your_business') ? 'current-page' : '' }}" href="{{ route('admin.training_improve_your_business') }}">Improve Your Business</a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteNamed('admin.training_business_continuity_plan') ? 'current-page' : '' }}" href="{{ route('admin.training_business_continuity_plan') }}">Business Continuity Plan</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END: side-nav-content -->
            </nav>
            <!-- END: .side-nav -->
        </div>
    </div>
    <!-- END: .side-content -->
</aside>
<!-- END: .app-side -->
