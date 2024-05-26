<nav class="sidebar-navigation">
	<ul>
	<li class="{{ (request()->routeIs('home') || request()->is('/')) ? 'active' : '' }}">
			<a href="{{ route('home') }}">
				<i class="fa-solid fa-house-user"></i>
			<span class="tooltip">Home</span>
			</a>
		</li>
		<li class="{{ request()->routeIs('projects.index') ? 'active' : '' }}">
			<a href="{{ route('projects.index') }}">
			<i class="fa-solid fa-list-check"></i>
			<span class="tooltip">Project</span>
		</li>
		<li>
			<i class="fa-solid fa-coins"></i>
			<span class="tooltip">Finance And Budgetting</span>
		</li>
		<li>
			<i class="fa-solid fa-link"></i>
			<span class="tooltip">Supply Chain</span>
		</li>
		<li>
			<i class="fa-solid fa-industry"></i>
			<span class="tooltip">Manufacturing and Production</span>
		</li>
		
		<li>
			<i class="fa-solid fa-wand-magic-sparkles"></i>
			<span class="tooltip">System Engineering</span>
		</li>
		<li>
			<i class="fa-solid fa-people-arrows"></i>
			<span class="tooltip">Human Capital</span>
		</li>
		
		
	</ul>
</nav>