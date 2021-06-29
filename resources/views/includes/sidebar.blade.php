<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="{{asset('/')}}">
          <span class="align-middle">OneDrive</span>
        </a>
			<ul class="sidebar-nav">
			<li class="sidebar-item {{request()->is('/')?'active':''}}">
				<a class="sidebar-link" href="{{asset('/')}}">
             		<i class="align-middle text-white" data-feather="sliders"></i> <span class="align-middle text-white">Dashboard</span>
            	</a>
			</li>
			<li class="sidebar-item {{request()->is('profile')?'active':''}}">
				<a class="sidebar-link" href="{{asset('/profile')}}">
             		<i class="align-middle " data-feather="users"></i> <span class="align-middle text-white">Profile</span>
          		 </a>
			</li>
			<li class="sidebar-item {{request()->is('myfile')?'active':''}}">
				<a class="sidebar-link" href="{{asset('/myfile')}}">
             		<i class="align-middle" data-feather="folder"></i> <span class="align-middle text-white">Myfile</span>
          		 </a>
			</li>
			<li class="sidebar-item {{request()->is('recent')?'active':''}}">
				<a class="sidebar-link" href="{{asset('/recent')}}">
             		<i class="align-middle" data-feather="refresh-cw"></i> <span class="align-middle text-white">Recent</span>
          		 </a>
			</li>
			<li class="sidebar-item {{request()->is('photos')?'active':''}}">
				<a class="sidebar-link" href="{{asset('/photos')}}">
             		<i class="align-middle" data-feather="aperture"></i> <span class="align-middle text-white">Photos</span>
          		 </a>
			</li>
			<li class="sidebar-item {{request()->is('recycle')?'active':''}}">
				<a class="sidebar-link" href="{{asset('/recycle')}}">
             		<i class="align-middle" data-feather="trash-2"></i> <span class="align-middle text-white">Recycle bin</span>
          		 </a>
			</li>
			<li class="sidebar-item {{request()->is('setting')?'active':''}}">
				<a class="sidebar-link" href="{{asset('/setting')}}">
             		<i class="align-middle" data-feather="settings"></i> <span class="align-middle text-white">Settings</span>
            	</a>
			</li>
			</ul>
		</div>
	</nav>
