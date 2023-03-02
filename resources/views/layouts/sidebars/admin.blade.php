<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.dashboard') }}"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.user.index') }}"><i class="icon-people"></i><span class="hide-menu">Users</span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.staff.index') }}"><i class="icons-Talk-Man"></i><span class="hide-menu">Staff</span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.academic-year.index') }}"><i class="icon-calender"></i><span class="hide-menu">Academic Year</span></a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.report') }}"><i class="icons-Light-Bulb"></i><span class="hide-menu">Ideas Report</span></a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
