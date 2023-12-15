<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.include.head')
    @stack('css')
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('admin.include.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('admin.include.menu_footer_buttons')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('admin.include.nav')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            @include('admin.include.footer')
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    @include('admin.include.script')
    @stack('js')
  </body>
</html>
