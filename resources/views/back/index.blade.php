<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/back/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/back/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="/back/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/back/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/back/assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="/public/chosen/style.css">
    <link rel="stylesheet" href="/public/chosen/prism.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/back/assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/back/assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="/back/assets/images/favicon.ico" />

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
>
<script>

tinymce.init({
  selector: 'textarea#basic-example',
  height: 500,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});




</script>

  </head>
  <body>
    <div class="container-scroller" dir="rtl">

       @include('back.navbar')
 
      <div class="container-fluid page-body-wrapper">

        @include('back.sidebar')


         @yield('content')

      </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/back/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="/back/assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="/public/chosen/jquery.min.js"></script>
    @yield('js')
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="/back/assets/js/shared/off-canvas.js"></script>
    <script src="/back/assets/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/back/assets/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    <script src="/back/assets/shared/jquery.cookie.js" type="text/javascript"></script>
    <script src="/public/chosen/jquery.min.js"></script>
    




  </body>
</html>