<div style="padding: 40px;text-align: right">
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
      @if (auth::guest())
      <li class="nav-item active">
        <a class="btn btn-primary" href="{{route('register')}}">ثبت نام</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-primary" href="{{route('login')}}">ورود</a>
      </li>
      @endif
      @auth
      <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">خروج</button>
      </form>
      @endauth
    </ul>
  </nav>


</div>
<hr>