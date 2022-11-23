			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="{{ asset('backend/assets/images/placeholder.jpg') }} " class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
								<!-- Main -->
								<li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><a href="{{ url('admin/dashboard') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								{{-- Archives --}}
								<li class="navigation-header"><span>Archives</span> <i class="icon-menu" title="" data-original-title="Forms"></i></li>
								<li class="{{ Request::is('admin/ArchCourses') ? 'active' : '' }}"><a href="{{ url('admin/ArchCourses') }}"><i class=" icon-book"></i> <span>Course</span></a></li>

								<li class="{{ Request::is('admin/ArchCourseLesson') ? 'active' : '' }}"><a href="{{ url('admin/ArchCourseLesson') }}"><i class="icon-price-tags2"></i> <span>Lesson</span></a></li>
				
								<!-- /main -->


							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->