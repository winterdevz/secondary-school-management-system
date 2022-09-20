

   <!-- ========== Left Sidebar Start ========== -->
   <div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title">Menu</li>

            <li>
                <a href="{{ url('home') }}" class="waves-effect">
                    <i class="ri-dashboard-line"></i><span
                        class="badge rounded-pill bg-success float-end">3</span>
                    <span>Dashboard</span>
                </a>
            </li>
                
            @can('view classes')
                <li>
                    @php
                        if (session()->has('browse_session_id')) {
                            $classCount = \App\Models\SchoolClass::where('session_id', session('browse_session_id'))->count();
                        } else {
                            $latest_session = \App\Models\SchoolSession::latest()->first();
                            if ($latest_session) {
                                $classCount = \App\Models\SchoolClass::where('session_id', $latest_session->id)->count();
                            } else {
                                $classCount = 0;
                            }
                        }
                    @endphp
                    <a class="waves-effect" href="{{ url('classes') }}">  <i class="ri-calendar-2-line"></i>Classes<span
                           >{{ $classCount }}</span></a>
                </li>
            @endcan
            @if (Auth::user()->role != 'student')
                <li>
                    <a type="button" href="#student-submenu" data-bs-toggle="collapse"
                        class="d-flex waves-effect {{ request()->is('students*') ? 'active' : '' }}"><i
                            class="bi bi-person-lines-fill"></i> <span
                            >Students</span>
                        <i class="ms-auto d-inline d-sm-none d-md-none d-xl-inline bi bi-chevron-down"></i>
                    </a>
                    <ul class="sub-menu {{ request()->is('students*') ? 'show' : 'hide' }}  "
                        id="student-submenu">
                        <li
                            {{ request()->routeIs('student.list.show') ? 'style="font-weight:bold;"' : '' }}><a
                                class="waves-effect" href="{{ route('student.list.show') }}"><i
                                    class="bi bi-person-video2 me-2"></i> View Students</a></li>
                        @if (!session()->has('browse_session_id') && Auth::user()->role == 'admin')
                            <li
                                {{ request()->routeIs('student.create.show') ? 'style="font-weight:bold;"' : '' }}><a
                                    class="waves-effect" href="{{ route('student.create.show') }}"><i
                                        class="bi bi-person-plus me-2"></i> Add Student</a></li>
                        @endif
                    </ul>
                </li>
                @if (Auth::user()->role != 'teacher')

                    <li>
                        <a type="button" href="#teacher-submenu" data-bs-toggle="collapse"
                            class="d-flex waves-effect {{ request()->is('teachers*') ? 'active' : '' }}"><i
                                class="bi bi-person-lines-fill"></i> <span >Teachers</span>
                            <i class="ms-auto d-inline d-sm-none d-md-none d-xl-inline bi bi-chevron-down"></i>
                        </a>
                       
                        <ul class="sub-menu {{ request()->is('teachers*') ? 'show' : 'hide' }}"
                            id="teacher-submenu">
                            <li class="waves-effect w-100"
                                {{ request()->routeIs('teacher.list.show') ? 'style="font-weight:bold;"' : '' }}><a
                                    class="waves-effect" href="{{ route('teacher.list.show') }}"><i
                                        class="bi bi-person-video2 me-2"></i> View Teachers</a></li>
                            @if (!session()->has('browse_session_id') && Auth::user()->role == 'admin')
                                <li class="waves-effect w-100"
                                    {{ request()->routeIs('teacher.create.show') ? 'style="font-weight:bold;"' : '' }}>
                                    <a class="nav-link" href="{{ route('teacher.create.show') }}"><i
                                            class="bi bi-person-plus me-2"></i> Add Teacher</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
            @endif
            @if (Auth::user()->role == 'teacher')
                <li>
                    <a class="waves-effect {{ request()->is('courses/teacher*') || request()->is('courses/assignments*') ? 'active' : '' }}"
                        href="{{ route('course.teacher.list.show', ['teacher_id' => Auth::user()->id]) }}"><i
                            class="bi bi-journal-medical"></i> <span
                             >My Subjects</span></a>
                </li>
                <li>
                    <a class="waves-effect {{ request()->is('report*') ? 'active' : '' }}"
                        href="{{ route('report.create') }}"><i class="bi bi-file-post"></i> <span
                             >Report</span></a>
                </li>
            @endif

            @if (Auth::user()->role == 'student')
                <li>
                    <a class="waves-effect {{ request()->routeIs('student.attendance.show') ? 'active' : '' }}"
                        href="{{ route('student.attendance.show', ['id' => Auth::user()->id]) }}"><i
                            class="bi bi-calendar2-week"></i> <span
                             >Attendance</span></a>
                </li>
                <li>
                    <a class="waves-effect {{ request()->routeIs('student.profile.show') ? 'active' : '' }}"
                        href="{{ url('students/view/profile/' . Auth::user()->id) }}"><i
                            class="bi bi-calendar2-week"></i> <span
                             >Profile</span></a>
                </li>
                <li>
                    <a class="waves-effect {{ request()->routeIs('student.view.report') ? 'active' : '' }}"
                        href="{{ url('students/report-view/' . Auth::user()->id) }}"><i
                            class="bi bi-calendar2-week"></i> <span
                            >Report</span></a>
                </li>



                <li>
                    <a class="waves-effect {{ request()->routeIs('course.student.list.show') ? 'active' : '' }}"
                        href="{{ route('course.student.list.show', ['student_id' => Auth::user()->id]) }}"><i
                            class="bi bi-journal-medical"></i> <span
                             >Subjects</span></a>
                </li>
                {{-- <li>
                        <a class="waves-effect" href="#"><i class="bi bi-file-post"></i> <span  >Assignments</span></a>
                    </li><li>
                        <a class="waves-effect" href="#"><i class="bi bi-cloud-sun"></i> <span  >Marks</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="waves-effect" href="#"><i class="bi bi-journal-text"></i> <span>Syllabus</span></a>
                    </li> --}}
                <li>
                    @php
                        if (session()->has('browse_session_id')) {
                            $class_info = \App\Models\Promotion::where('session_id', session('browse_session_id'))
                                ->where('student_id', Auth::user()->id)
                                ->first();
                        } else {
                            $latest_session = \App\Models\SchoolSession::latest()->first();
                            if ($latest_session) {
                                $class_info = \App\Models\Promotion::where('session_id', $latest_session->id)
                                    ->where('student_id', Auth::user()->id)
                                    ->first();
                            } else {
                                $class_info = [];
                            }
                        }
                    @endphp
                    <a class="waves-effect"
                        href="{{ route('section.routine.show', [
                            'class_id' => $class_info->class_id,
                            'section_id' => $class_info->section_id,
                        ]) }}"><i
                            class="bi bi-calendar4-range"></i> <span
                            >Routine</span></a>
                </li>
            @endif
            @if (Auth::user()->role != 'student')
                <li  >
                    <a type="button" href="#exam-grade-submenu" data-bs-toggle="collapse"
                        class="d-flex waves-effect {{ request()->is('exams*') ? 'active' : '' }}"><i
                            class="bi bi-file-text"></i> <span
                            class="ms-2 d-inline d-sm-none d-md-none d-xl-inline">Exams / Grades</span>
                        <i class="ms-auto d-inline d-sm-none d-md-none d-xl-inline bi bi-chevron-down"></i>
                    </a>
                    <ul class="sub-menu  {{ request()->is('exams*') ? 'show' : 'hide' }} " aria-expanded="false">
                   
                        <li
                            {{ request()->routeIs('exam.list.show') ? 'style="font-weight:bold;"' : '' }}><a
                                class="waves-effect" href="{{ route('exam.list.show') }}"><i
                                    class="bi bi-file-text me-2"></i> View Exams</a></li>
                        @if (Auth::user()->role == 'admin' || Auth::user()->role == 'teacher')
                            <li
                                {{ request()->routeIs('exam.create.show') ? 'style="font-weight:bold;"' : '' }}><a
                                    class="waves-effect" href="{{ route('exam.create.show') }}"><i
                                        class="bi bi-file-plus me-2"></i> Create Exams</a></li>
                        @endif
                        @if (Auth::user()->role == 'admin')
                            <li
                                {{ request()->routeIs('exam.grade.system.create') ? 'style="font-weight:bold;"' : '' }}>
                                <a class="waves-effect" href="{{ route('exam.grade.system.create') }}"><i
                                        class="bi bi-file-plus me-2"></i> Add Grade Systems</a>
                            </li>
                        @endif
                        <li
                            {{ request()->routeIs('exam.grade.system.index') ? 'style="font-weight:bold;"' : '' }}><a
                                class="waves-effect" href="{{ route('exam.grade.system.index') }}"><i
                                    class="bi bi-file-ruled me-2"></i> View Grade Systems</a></li>
                    </ul>
                </li>


                {{-- <li>
                        <a type="button" href="#" class="d-flex waves-effect {{ request()->is('marks*')? 'active' : '' }} dropdown-toggle caret-off" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-cloud-sun"></i> <span class="ms-2 d-inline d-sm-none d-md-none d-xl-inline">Marks / Results</span>
                            <i class="ms-auto d-inline d-sm-none d-md-none d-xl-inline bi bi-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{url('marks/view')}}">View Marks</a></li>
                            <li><a class="dropdown-item" href="{{url('marks/results')}}">View Results</a></li>
                        </ul>
                    </li> --}}
            @endif
            @if (Auth::user()->role == 'admin')
                <li>
                    <a class="waves-effect {{ request()->is('notice*') ? 'active' : '' }}"
                        href="{{ route('notice.create') }}"><i class="bi bi-megaphone"></i> <span
                            >Notice</span></a>
                </li>
                <li>
                    <a class="waves-effect {{ request()->is('calendar-event*') ? 'active' : '' }}"
                        href="{{ route('events.show') }}"><i class="bi bi-calendar-event"></i> <span
                            >Event</span></a>
                </li>
                <li>
                    <a class="waves-effect {{ request()->is('syllabus*') ? 'active' : '' }}"
                        href="{{ route('class.syllabus.create') }}"><i class="bi bi-journal-text"></i> <span
                            >Syllabus</span></a>
                </li>
                <li>
                    <a class="waves-effect {{ request()->is('routine*') ? 'active' : '' }}"
                        href="{{ route('section.routine.create') }}"><i class="bi bi-calendar4-range"></i> <span
                            >Routine</span></a>
                </li>
            @endif
            @if (Auth::user()->role == 'admin')
                <li>
                    <a class="waves-effect {{ request()->is('academics*') ? 'active' : '' }}"
                        href="{{ url('academics/settings') }}"><i class="bi bi-tools"></i> <span
                           >Academic</span></a>
                </li>
            @endif
            @if (!session()->has('browse_session_id') && Auth::user()->role == 'admin')
                <li>
                    <a class="waves-effect {{ request()->is('promotions*') ? 'active' : '' }}"
                        href="{{ url('promotions/index') }}"><i class="bi bi-sort-numeric-up-alt"></i> <span
                             >Promotion</span></a>
                </li>
            @endif
            <li>
                <a class="waves-effect disabled" href="#" aria-disabled="true"><i
                        class="bi bi-currency-exchange"></i> <span
                       >Payment</span></a>
            </li>
            @if (Auth::user()->role == 'admin')
                <li>
                    <a class="waves-effect disabled" href="#" ><i
                            class="bi bi-person-lines-fill"></i> <span
                           >Staff</span></a>
                </li>
                <li>
                    <a class="disabled" href="#" aria-disabled="true" class="waves-effect"><i class="bi bi-journals"></i>
                        <span class="">Library</span></a>
                </li>
            @endif
            <!-- <li>
                <a href="calendar.html" class=" waves-effect">
                    <i class="ri-calendar-2-line"></i>
                    <span>Calendar</span>
                </a>
            </li>

            <li>
                <a href="apps-chat.html" class=" waves-effect">
                    <i class="ri-chat-1-line"></i>
                    <span>Chat</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-store-2-line"></i>
                    <span>Ecommerce</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="ecommerce-products.html">Products</a></li>
                    <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                    <li><a href="ecommerce-orders.html">Orders</a></li>
                    <li><a href="ecommerce-customers.html">Customers</a></li>
                    <li><a href="ecommerce-cart.html">Cart</a></li>
                    <li><a href="ecommerce-checkout.html">Checkout</a></li>
                    <li><a href="ecommerce-shops.html">Shops</a></li>
                    <li><a href="ecommerce-add-product.html">Add Product</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Email</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="email-inbox.html">Inbox</a></li>
                    <li><a href="email-read.html">Read Email</a></li>
                </ul>
            </li>

            <li>
                <a href="apps-kanban-board.html" class=" waves-effect">
                    <i class="ri-artboard-2-line"></i>
                    <span>Kanban Board</span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-layout-3-line"></i>
                    <span>Layouts</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a target="_self" href="layouts-light-sidebar.html">Light Sidebar</a></li>
                            <li><a target="_self" href="layouts-compact-sidebar.html">Compact Sidebar</a>
                            </li>
                            <li><a target="_self" href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                            <li><a target="_self" href="layouts-boxed.html">Boxed Width</a></li>
                            <li><a target="_self" href="layouts-preloader.html">Preloader</a></li>
                            <li><a target="_self" href="layouts-colored-sidebar.html">Colored Sidebar</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a target="_self" href="layouts-horizontal.html">Horizontal</a></li>
                            <li><a target="_self" href="layouts-hori-topbar-light.html">Topbar light</a>
                            </li>
                            <li><a target="_self" href="layouts-hori-boxed-width.html">Boxed width</a></li>
                            <li><a target="_self" href="layouts-hori-preloader.html">Preloader</a></li>
                            <li><a target="_self" href="layouts-hori-colored-header.html">Colored Header</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="menu-title">Pages</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-account-circle-line"></i>
                    <span>Authentication</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a target="_self" href="auth-login.html">Login</a></li>
                    <li><a target="_self" href="auth-register.html">Register</a></li>
                    <li><a target="_self" href="auth-recoverpw.html">Recover Password</a></li>
                    <li><a target="_self" href="auth-lock-screen.html">Lock Screen</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Utility</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="pages-starter.html">Starter Page</a></li>
                    <li><a target="_self" href="pages-maintenance.html">Maintenance</a></li>
                    <li><a target="_self" href="pages-comingsoon.html">Coming Soon</a></li>
                    <li><a href="pages-timeline.html">Timeline</a></li>
                    <li><a href="pages-faqs.html">FAQs</a></li>
                    <li><a href="pages-pricing.html">Pricing</a></li>
                    <li><a target="_self" href="pages-404.html">Error 404</a></li>
                    <li><a target="_self" href="pages-500.html">Error 500</a></li>
                </ul>
            </li>

            <li class="menu-title">Components</li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-pencil-ruler-2-line"></i>
                    <span>UI Elements</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="ui-alerts.html">Alerts</a></li>
                    <li><a href="ui-buttons.html">Buttons</a></li>
                    <li><a href="ui-cards.html">Cards</a></li>
                    <li><a href="ui-carousel.html">Carousel</a></li>
                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                    <li><a href="ui-grid.html">Grid</a></li>
                    <li><a href="ui-images.html">Images</a></li>
                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                    <li><a href="ui-modals.html">Modals</a></li>
                    <li><a href="ui-rangeslider.html">Range Slider</a></li>
                    <li><a href="ui-roundslider.html">Round Slider</a></li>
                    <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                    <li><a href="ui-sweet-alert.html">Sweetalert 2</a></li>
                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-video.html">Video</a></li>
                    <li><a href="ui-general.html">General</a></li>
                    <li><a href="ui-rating.html">Rating</a></li>
                    <li><a href="ui-notifications.html">Notifications</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="ri-eraser-fill"></i>
                    <span class="badge rounded-pill bg-danger float-end">6</span>
                    <span>Forms</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="form-elements.html">Elements</a></li>
                    <li><a href="form-validation.html">Validation</a></li>
                    <li><a href="form-advanced.html">Advanced Plugins</a></li>
                    <li><a href="form-editors.html">Editors</a></li>
                    <li><a href="form-uploads.html">File Upload</a></li>
                    <li><a href="form-xeditable.html">X-editable</a></li>
                    <li><a href="form-wizard.html">Wizard</a></li>
                    <li><a href="form-mask.html">Mask</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-table-2"></i>
                    <span>Tables</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html">Basic Tables</a></li>
                    <li><a href="tables-datatable.html">Data Tables</a></li>
                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                    <li><a href="tables-editable.html">Editable Table</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-bar-chart-line"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="charts-apex.html">Apex Charts</a></li>
                    <li><a href="charts-chartjs.html">Chartjs</a></li>
                    <li><a href="charts-flot.html">Flot</a></li>
                    <li><a href="charts-knob.html">Jquery Knob</a></li>
                    <li><a href="charts-sparkline.html">Sparkline</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-brush-line"></i>
                    <span>Icons</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="icons-remix.html">Remix Icons</a></li>
                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                    <li><a href="icons-fontawesome.html">Font awesome 5</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-map-pin-line"></i>
                    <span>Maps</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="maps-google.html">Google Maps</a></li>
                    <li><a href="maps-vector.html">Vector Maps</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-share-line"></i>
                    <span>Multi Level</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                        </ul>
                    </li>
                </ul>
            </li> -->

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->
