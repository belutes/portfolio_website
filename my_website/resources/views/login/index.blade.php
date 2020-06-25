{{-- @extends('layout.master')

@section('content')
    <div class="row mt-3 text-center">
      @if (count($errors->all()))
        <section class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </section>
        @endif
        <div class="col mb-3">
            <h1>Login Form</h1>
            <p>{{ $users[0]['id'] }}</p>
            <div class="card" class="login-card">
                <div class="card-body text-center">
                  <h5 class="card-title">Sign In</h5>
                  <form method="POST" action="{{ route( 'post_login') }}">
                    @if (count($errors->all()))
                    @foreach ($errors->all() as $error)
                      <p>{{ $error }}</p>
                    @endforeach
                    @endif
                    <input type="hidden" name="hiddenIsLoggedInInput" value="1">
                    <input type="text" placeholder="User Name" name="userSignInNameInput">
                    <input type="hidden" name="hiddenId" value="{{ $users[0]['id'] }}">
                    <input type="text" placeholder="Password" name="passwordSignInInput">
                    <button type="submit">Login</button>
                    <a href="{{ route('sign_up') }}">Sign Up</a>
                    {{ csrf_field() }}
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection --}}