@extends('layouts.layout')
@section('content')
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Login</h2>
  
                <form action="{{ route('login') }}" method="POST">
                  @csrf
                    @if (session('status'))
                        {{ session('status') }}
                    @endif
  
                  <div class="form-outline mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" value="{{ old('email') }}" />
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                    <div>
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cg">Password</label>
                  </div>
                  <div>
                      @error('password')
                          {{ $message }}
                      @enderror
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                  </div>
  
                 
  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  
@endsection