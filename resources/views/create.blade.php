<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

@extends('layout')

@section('content')

<div class="container">
  <div class="card m-5 rounded-3">
    <nav class="navbar navbar-expand-lg bg-light m-5 rounded-4">
      <div class="container-fluid">
          <a class="nav-link text-primary" href="/data">View Data</a>
              <a class="nav-link text-primary" href="/logout">Logout</a>
      </div>
      </nav>
  <div class="title">
  <h3>Landing Laptop</h3>
  </div>
        
<form  action="{{route('data')}}" method="POST" class="m-4 text-center">
<!-- @if ($errors->any())
    <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <ul>{{ $error }}</>
            @endforeach
        </ul>
    </div>
@endif -->

@csrf
  <div class="label mt-3">
  <label for="formnama">Name</label>
<input class="form-control form-control-sm" type="text" name="name" >
</div>
<div class="form-group mt-3">
  <label for="formkeperluan">Purpose</label>
  <textarea class="form-control" type="text" name="purpose" rows="3"></textarea>
</div>
<div class="form-group1 mt-3">
  <label for="formket">Ket</label>
  <textarea class="form-control" type="text" name="ket" rows="3"></textarea>
</div>
  <div class="form-row row mt-4">
  <div class="form-group col-4">
    <label for="inputCity">Nis</label>
    <input type="integer" class="form-control" name="nis" placeholder="1210****">
  </div>
  <div class="form-group2 col-4">
    <label for="inputState">Rayon</label>
    <select id="inputState" class="form-control" name="rayon">
      <option hidden selected disabled>Chose</option>
      <option>Cis 1</option>
      <option>Cis 2</option>
      <option>Cis 3</option>
      <option>Cis 4</option>
      <option>Cis 5</option>
      <option>Cis 6</option>
      <option>Cic 1</option>
      <option>Cic 2</option>
      <option>Cic 3</option>
      <option>Cic 4</option>
      <option>Cic 5</option>
      <option>Cic 6</option>
      <option>Cib 1</option>
      <option>Cib 2</option>
      <option>Cib 3</option>
    </select>
  </div>
  <div class="input-with-post-icon datepicker col-4">
  <label for="date">Date</label>
<input placeholder="Select date" type="date" name="date" class="form-control">
  </div>

  <label for="formnameteacher" class="text-center ">Name Teacher</label>
<input class="form-control form-control-sm" type="text" name="teacher_name" placeholder="">
</div>
<div class="label1">
  <label class="form-check-label">
  <button type="submit" class="btn btn-primary btn-lg pe-5 ps-5">Enter</button> 
</div>  
</div>
</div>
</div>
</div>
</form>
</div>


@endsection