<h2>vendor daashboard</h2>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <a href="{{route('logout')}}"  onclick="event.preventDefault();
     this.closest('form').submit();">Logout</a>

</form>