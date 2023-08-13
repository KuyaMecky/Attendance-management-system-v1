<aside id="sidebar" class="sidebar js-sidebar">
  <div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="index.html">
      <span class="align-middle">AdminKit</span>
    </a>

    <ul class="sidebar-nav">
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
          <i class="align-middle" data-feather="sliders"></i>
          <span class="align-middle">{{ __('Dashboard') }}</span>
        </a>
      </li>
      <li class="sidebar-header">{{ __('Employee Management') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('employee.index') }}">
          <i class="align-middle" data-feather="square"></i>
          <span class="align-middle">{{ __('Manage Employees') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('department.index') }}">
          <i class="align-middle" data-feather="check-square"></i>
          <span class="align-middle">{{ __('Manage Departments') }}</span>
        </a>
      </li>
      <li class="sidebar-header">{{ __('Attendance') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('attendance.index') }}">
          <i class="align-middle" data-feather="check-square"></i>
          <span class="align-middle">{{ __('Daily Attendance') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('attendance.create') }}">
          <i class="align-middle" data-feather="check-square"></i>
          <span class="align-middle">{{ __('Attendance Reports') }}</span>
        </a>
      </li>
      <li class="sidebar-header">{{ __('Leave Management') }}</li>      
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('leave.index') }}">
          <i class="align-middle" data-feather="check-square"></i>
          <span class="align-middle">{{ __('Manage Leaves') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('leave.create') }}">
          <i class="align-middle" data-feather="check-square"></i>
          <span class="align-middle">{{ __('Registration') }}</span>
        </a>
      </li>
      <li class="sidebar-header">{{ __('Payroll System') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('payroll.index') }}">
          <i class="align-middle" data-feather="check-square"></i>
          <span class="align-middle">{{ __('Manage Payroll') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('payroll.create') }}l">
          <i class="align-middle" data-feather="check-square"></i>
          <span class="align-middle">{{ __('Generate Payroll') }}</span>
        </a>
      </li>
      <li class="sidebar-header">{{ __('User Management') }}</li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('user.index') }}">
          <i class="fas fa-user align-middle"></i>
          <span class="align-middle">{{ __('Manage Users') }}</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{ route('roles.index') }}">
          <i class="fas fa-user-shield align-middle"></i>
          <span class="align-middle">{{ __('User Settings') }}</span>
        </a>
      </li>
    </ul>
  </div>
</aside>