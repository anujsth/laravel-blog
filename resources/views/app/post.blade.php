@extends('layouts.layout')
@section('content')
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Post</h2>
  
                <form action="{{ route('post') }}" method="POST">
                 @csrf

                  <div class="form-outline mb-4">
                    <input type="text" id="title" name="title" class="form-control form-control-lg" value="{{ old('title') }}" />
                    <label class="form-label" for="form3Example3cg">Title</label>
                    <div class="div1">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
  
                  <div class="form-outline mb-4">
                    <textarea type="text" id="body" name="body" class="form-control form-control-lg" rows="5" cols="6">
                    </textarea>
                    <label class="form-label" for="body" >Your post</label>
                  </div>
                  <div class="div1">
                      @error('body')
                        {{ $message }}
                      @enderror
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Post</button>
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