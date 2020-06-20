<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Silahkan Masuk</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('temp/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('temp/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{url('temp/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{url('temp/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{url('temp/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('temp/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->  
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{url('temp/css/shared/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{url('temp/images/favicon.png')}}">
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                <form action="/prosesRegistrasi" method="post">
                  @csrf
                  <div class="form-group">
                    <label class="label">Email</label>
                    <div class="input-group">
                      <input type="email" name="email" autofocus="" autocomplete="off" class="form-control" placeholder="Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" name="password" autofocus="" autocomplete="off" class="form-control" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="label">Konfirmasi Password</label>
                    <div class="input-group">
                      <input type="password" name="password_confirmed" autofocus="" autocomplete="off" class="form-control" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-check-circle-outline"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary submit-btn btn-block">Registrasi</button>
                  </div>
                   <a href="/login"> Sudah punya akun? Silahkan masuk! </a>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{url('temp/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{url('temp/vendors/js/vendor.bundle.addons.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{url('temp/js/shared/off-canvas.js')}}"></script>
    <script src="{{url('temp/js/shared/misc.js')}}"></script>
    <!-- endinject -->
  
</body></html>