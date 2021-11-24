{{-- {{ dd(config('site-settings.site_logo'))}} --}}
<!-- BEGIN .app-heading -->
<header class="app-header">
	<div class="container-fluid">
		<div class="row gutters">
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
				<a class="mini-nav-btn" href="#" id="onoffcanvas-nav"> <i class="icon-menu5"></i>
				</a>
				<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true"> <i class="icon-chevron-thin-left"></i>
				</a>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-4">
				<a href="{{ route('admin.index') }}" class="logo">
					<img src="{{ config('site-settings.site_logo') }}" alt="HT Limited logo" />
				</a>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
				<ul class="header-actions">
					<a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
                        {{-- <i class="icon-person_outline"></i> --}}
						<span class="count-label red"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
					</div>
					</li>
					<li class="dropdown">
						<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
							<img class="avatar" src="{{ (!empty($profile['avatar'])) ? asset('img/profile-avatars/'.$profile['avatar']) : asset('img/blank.png') }}" alt="User Thumb" /> <span class="user-name">
                                {{ !empty($profile['name']) ? Str::title($profile['name']) : 'Unavailable' }}
							<i class="icon-chevron-small-down"></i>
						</a>
						<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
							<ul class="user-settings-list">
								<li>
									<a href="{{ route('admin.profile.index') }}">
										<div class="icon"> <i class="icon-account_circle"></i>
										</div>
										<p>Profile</p>
									</a>
								</li>
								<li>
									<a href="{{ route('admin.settings.index') }}">
										<div class="icon red"> <i class="icon-cog3"></i>
										</div>
										<p>Settings</p>
									</a>
								</li>
							</ul>
							<div class="logout-btn">
                                <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
							</div>
						</div>
					</li>
					</>
			</div>
		</div>
	</div>
</header>
<!-- END: .app-heading -->
