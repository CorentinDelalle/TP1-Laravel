@php $locale = session()->get('locale'); @endphp
<nav class="navbar navbar-inverse bg-dark mb-4">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand text-white" href="{{ route('liste.index')}}">Collège de Maisonneuve</a>
    </div>
    @guest
    <div>
      <a href="{{ route('liste.create')}}" class="btn btn-primary">@lang('lang.add_student')</a>
      <a href="{{ route('user.create')}}" class="btn btn-primary">@lang('lang.sign_up')</a>
      <a href="{{ route('login')}}" class="btn btn-primary">@lang('lang.sign_in')</a>
    </div>
    @else
    <div>
      <span class="text-white p-2">@lang('lang.hello') {{ Auth::user()->getEtudiant->nom }}</span>
      <a href="{{ route('dashboard')}}" class="btn btn-primary">@lang('lang.dashboard')</a>
      <a href="{{ route('forum.index')}}" class="btn btn-primary">Forum</a>
      <a href="{{ route('logout')}}" class="btn btn-danger">@lang('lang.logout')</a>
    </div>
    @endguest
    <div class="flag-icons">
      <a class="nav-link @if($locale=='eng') bg-secondary @endif" href="{{route('lang', 'eng')}}"><i class="flag flag-united-states"></i></a>
      <a class="nav-link {{ $locale =='fr' ? 'bg-secondary' : '' }}" href="{{route('lang', 'fr')}}"><i class="flag flag-france"></i></a>
    </div>
  </div>
</nav>