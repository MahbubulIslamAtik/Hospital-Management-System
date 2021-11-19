  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('assets/dist/img/hospital.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Hospital Management System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/Atik-vai.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            @if(session('sess_username'))
            {{ session('sess_username') }} | {{ session('role_name') }}
            @endif
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-windows"></i>
              <p>
                System
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('users') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p class="fw-bold">Create User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('users') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage User</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-tag"></i>
              <p>
                Role
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('roles') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('roles') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Role</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-restroom"></i>
              <p>
                Employee
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Employee</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Department
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Mangage Department</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-crosshairs"></i>
              <p>
                Position
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Position</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Mangage Position</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-concierge-bell"></i>
              <p>
                Attendence
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Attendence</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Mangage Attendence</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Doctor List
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('doctors') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Doctor's</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('doctors') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Doctor's</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-hospital-user"></i>
              <p>
                Patient Appointment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('appointments') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Appointment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('appointments') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Appointment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-medical"></i>
              <p>
                Patient Prescription
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('prescriptions') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Prescription</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('prescriptions') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Prescription</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-medical-alt"></i>
              <p>
                Prescription Details
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('prescriptiondetails') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Prescript Details</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('prescriptiondetails') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Prescript Details</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-procedures"></i>
              <p>
                Patient Admission
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('admissions') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Admission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('admissions') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Admission</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-eye"></i>
              <p>
                Admit Patient Visit
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('patientvisits') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Visit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('patientvisits') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Visit</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-vials"></i>
              <p>
                Test Patient
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('testpatients') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Test</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('testpatients') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Test</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-pills"></i>
              <p>
                Patient Medicine
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="medicines" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Medicine</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="medicines" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Medicine</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fas fa-bed"></i>
              <p>
                Bed Details
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('beds') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Bed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('beds') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Bed</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-vial"></i>
              <p>
                Test
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('tests') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Test</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('tests') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Test</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-vial"></i>
              <p>
                Test
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('tests') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Create Test</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('tests') }}" class="nav-link">
                  <i style="color: #FFFFFF" class="far fa-hand-point-right nav-icon"></i>
                  <p>Manage Test</p>
                </a>
              </li>
            </ul>
          </li> --}}
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>