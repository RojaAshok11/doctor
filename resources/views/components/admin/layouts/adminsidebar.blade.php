<aside class="text-white shadow-lg rounded" id="sidebar-wrapper">
    <div class="sidebar-brand">
        <div class="d-flex mt-3 mt-md-0" style="height: 48px;">
            <span class="fs-6 ms-2 fw-bold fst-italic text-white">
                <i class="bi bi-clipboard-minus-fill" style="font-size: 2rem; color: white;"></i>
            </span>

            {{-- <img src="/logo/eltech_logo.png" class="mt-1" width="150" height="60"> --}}

            <span class="fs-4 mt-2 ms-3 fw-bold text-white ">
                {{-- {{ config('app.name', '8Queens') }} --}}
                {{ App::make('companysetting') ? App::make('companysetting')->companyfullname : 'POS' }}
            </span>
        </div>
    </div>
    <ul class="sidebar-nav mt-4">

        <li>
            <a href="{{ route('admindashboard') }}" id="admindashboard_sidenav"
                class="nav-link text-white border-0 fw-bold p-1" style="font-size: 1.0rem!important;">
                <i class="bi bi-house-door-fill ms-2 me-4 fs-6 "></i>Dashboard
            </a>
        </li>


        <li>
            <a href="{{ route('admincontactus') }}" id="admincontactus_sidenav"
                class="nav-link text-white border-0 fw-bold p-1" style="font-size: 1.0rem!important;">
                <i class="bi bi-person-rolodex  ms-2 me-4 fs-6"></i>Doctors
            </a>
        </li>

        {{-- <li>
            <a href="{{ route('adminreports') }}" id="adminreports_sidenav"
                class="nav-link text-white border-0 fw-bold p-1" style="font-size: 1.0rem!important;">
                <i class="bi bi-journal ms-2 me-4 fs-6 "></i>Appoinment Time
            </a>
        </li> --}}


        <li>
            <a href="{{ route('adminenquiryform') }}" id="adminenquiryform_sidenav"
                class="nav-link text-white border-0 fw-bold p-1" style="font-size: 1.0rem!important;">
                <i class="bi bi-ui-checks ms-2 me-4 fs-6"></i>Patients Details
            </a>
        </li>



       {{--  <li>
            <a href="{{ route('adminsettings') }}" id="adminsettings_sidenav"
                class="nav-link text-white border-0 fw-bold p-1" style="font-size: 1.0rem!important;">
                <i class="bi bi-gear-fill ms-2 me-4 fs-6 "></i>Settings
            </a>
        </li> --}}


        <li>
            <a href="{{ route('adminlogout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();"
                id="logout" class="nav-link text-white border-0 text-danger fw-bold p-1"
                style="font-size: 1.0rem!important;">
                <i class="bi bi-power ms-2 me-4 fs-5"></i>Logout
            </a>
        </li>
        <form id="logout-form-sidebar" action="{{ route('adminlogout') }}" method="GET" style="display: none;">
            @csrf
        </form>
    </ul>
</aside>
