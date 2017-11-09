<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">CodeCell</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="/">Home</a></li>
      @if(! \Illuminate\Support\Facades\Session::has('token'))
        <li style="float: right;"><a href="/login/google">Login</a></li>
      @else
        <div class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            {{\Illuminate\Support\Facades\Session::get('name')}}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/profile">Profile</a></li>
            @if(\Illuminate\Support\Facades\Session::get('role')=='admin')
              <li><a href="/admin_control">Admin Control</a></li>
            @endif
            <li role="separator" class="divider"></li>
            <li class="dropdown-header"></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </li>
        </div>
      @endif
      <li><a href="/notices">Notices</a></li>
      <li><a href="/about">About Us</a></li>
      <li><a href="/contact">Contact Us</a></li>

    </ul>
  </div>
  <script src="{{asset("js/app.js")}}"></script>
</nav>
