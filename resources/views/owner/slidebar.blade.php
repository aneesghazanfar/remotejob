<link href="{{ asset('/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/mediaqueries.css') }}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">            

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">

<!-- DataTables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>



<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<link href="https://nightly.datatables.net/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
<script src="https://nightly.datatables.net/js/jquery.dataTables.js"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">





<style>
  .paginate_button.current  {
  background-color: #ffc107 !important;
}
</style>


<script>
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>
<header>
        <div class="header-box-shadow d-flex justify-content-between py-3 px-4">
          <div class="d-flex align-items-center">
            <div onclick="toooglerMenu('menu')" class="menuToggler">
              <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
              </svg>
            </div>
            <div>
              <div class="header-heading">

            

              </div>
              <!-- <div>
                <p class="header-text text-muted">Lorem ipsum dolor sit amet Lorem ipsum </p>
              </div> -->
            </div>
          </div>
          <div class="noti-section d-flex align-items-center ">
            <div class="px-4 user-name">{{ Auth::user()->name }}</div>
            <!-- <div class="pe-2"><img src="{{ asset('/images/logo/Notification.png') }}" alt=""></div> -->
            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
            <div><img src="{{ asset('/images/logo/dark-mood.pn') }}" alt=""></div>
           
          </div>
        </div>
      </header>
  
  <div class="sidebar" id="sidebar">
      <div class="position-relative h-100">
        <div class="text-end closeMenu">
          <svg onclick="toooglerMenu('close')" xmlns="http://www.w3.org/2000/svg" width="28" height="28"
            fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path
              d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
          </svg>
        </div>
        <div><a href="#"><img src="{{ asset('/images/logo/image_1.png') }}" alt=""></a></div>
        <ul class="side-nav-item-ul p-0">
        @php
                $cr = Route::current()->uri();
                @endphp
          <li class="side-nav-item {{ $cr == '/home' ? 'active-sidebar-nav' : '' }}  "><a href="./home" class="d-flex align-items-center text-black ">
          <i class="fa fa-dashboard"></i>
              <span class="ps-3">Dashboard</span>
            </a>
          </li>
          <li class="side-nav-item {{ $cr == 'product' ? 'active-sidebar-nav' : '' }}"><a href="./user" class="d-flex align-items-center text-black ">
              <img src="{{ asset('/images/Lists/box.png') }}" alt="" srcset="">
              <span class="ps-3">Add User</span>
            </a>
          </li>          
          <li class="side-nav-item {{ $cr == 'product' ? 'active-sidebar-nav' : '' }}"><a href="./branch" class="d-flex align-items-center text-black ">
              <img src="{{ asset('/images/Lists/box.png') }}" alt="" srcset="">
              <span class="ps-3">Add Branch</span>
            </a>
          </li>
        </ul>

      </div>
    </div>