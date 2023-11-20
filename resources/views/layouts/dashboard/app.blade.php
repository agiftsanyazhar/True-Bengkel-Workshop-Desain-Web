<!doctype html>
<html lang="en" class="light-theme">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- Plugins --}}
    <link href="{{ asset('dashboard/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashboard/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

    {{-- CSS Files --}}
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/css/icons.css') }}" rel="stylesheet">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link href="{{ url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap') }}" rel="stylesheet">

    <title>{{ $title }} | True Bengkel</title>
  </head>
  <body>

    <div class="wrapper">
      @include('layouts.dashboard.sidebar')

      @include('layouts.dashboard.header')

      <div class="page-content-wrapper">
        <div class="page-content">

          {{-- Breadcrumbs --}}
          <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                </ol>
              </nav>
            </div>
          </div>

          @include('layouts.dashboard.alert')
          
          @yield('content')
        </div>
      </div>

      @include('layouts.dashboard.footer')

    </div>

    {{-- JS Files --}}
    <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="{{ url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js') }}"></script>

    {{-- Plugins --}}
    <script src="{{ asset('dashboard/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/index.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/table-datatable.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>

    {{-- Main JS --}}
    <script src="{{ asset('dashboard/js/main.js') }}"></script>

    <script>
      function deleteDialog(url, name = '') {
        if (name == '')
          name = 'ini';
          Swal.fire({
            title: 'Konfirmasi?',
            text: 'Apakah Anda yakin ingin menghapus ' + name + '?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f73757',
            confirmButtonText: 'Delete',
            cancelButtonColor: '#6c757d',
            cancelButtonText: 'Cancel'
        }).then((result) => {
          if (result.value !== undefined && result.value) {
            window.location.href = url;
          }
        })
      }
    </script>
  </body>
</html>