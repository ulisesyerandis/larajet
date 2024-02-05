@extends('layouts.baseTemplate');

@section('container')
<h2>Register</h2>

{{-- <form action="/worker" method="POST">
    @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
          </div> --}}
        {{-- <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div> --}}
        {{-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        {{-- <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
        <a href="/worker" class="btn btn-secondary" tabindex="5"> Cancel</a>
</form> --}}
<form action="/worker" method="POST">
    @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
          </div>
        {{-- <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div> --}}
        {{-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
        <a href="/worker" class="btn btn-secondary" tabindex="5"> Cancel</a>
</form>
    
@endsection