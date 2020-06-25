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
            <div class="card" class="login-card">
                <div class="card-body text-center">
                  <h5 class="card-title">Create Account</h5>
                  <form method="POST" action="{{ route('post_sign_up') }}" class="">
                      <div class="form-group">
                          <label for="firstNameInput">First Name: </label>
                          <input type="text" id="firstNameInput" name="firstNameInput"/>
                      </div>
                      <div class="form-group">
                        <label for="lastNameInput">Last Name: </label>
                        <input type="text" id="lastNameInput" name="lastNameInput"/>
                      </div>
                      <div class="form-group">
                        <label for="userNameInput">User Name: </label>
                        <input type="text" id="userNameInput" name="userNameInput"/>
                      </div> 
                      <div class="form-group">
                        <label for="emailInput">Email Address: </label>
                        <input type="text" id="emailInput" name="emailInput"/>
                      </div>
                      <div class="form-group">
                        <label for="passwordInput">Enter Password: </label>
                        <input type="password" id="passwordInput" name="passwordInput"/>
                      </div>
                      <input type="hidden" name="hiddenIsAdminInput" value="0"/>
                      <input type="hidden" name="hiddenIsLoggedInInput" value="0"/>
                  <a href="{{ route('index') }}" class="btn btn-danger btn-sm">Cancel</a>
                  <input type="submit" class="btn btn-primary btn-sm" value="Submit"/>
                  {{ csrf_field() }}
                </form>
                </div>
              </div>
        </div>
    </div>
@endsection --}}