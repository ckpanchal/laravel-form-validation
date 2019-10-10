@extends('layout')

@section('content')
<div class="title">
  <h1>Add Customer</h1>
</div>
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<form action="{{ route('store_customer') }}" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Firstname:</label>
    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}">
  </div>
  <div class="form-group">
    <label for="title">Lastname:</label>
    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}">
  </div>
  <div class="form-group">
    <label for="title">Email:</label>
    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
  </div>
  <div class="form-group">
    <label for="title">Telephone:</label>
    <input type="text" class="form-control" id="telephone" name="telephone" value="{{ old('telephone') }}">
  </div>
  <div class="form-group">
    <label for="title">Birth Date:</label>
    <input type="text" class="form-control" id="birthdate" name="birthdate" value="{{ old('birthdate') }}">
  </div>
  @csrf
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection