
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Halaman Register</title>
</head>

@extends('layout')

@section('content')
    <body>
        <div class="kotak_register">
		<p class="tulisan_register"><strong>Sign Up</strong></p>
		@error('password')
		<div class="alert alert-danger">{{ $message }}</div>
		@enderror
			<form action="/register" method="POST">
			@csrf
			<div>
				<label>Name</label>
				<input  id="form_login"type="text" name="name" class="rounded-3" placeholder="Enter name" required>
			</div>
            <div>
				<label>Email</label>
				<input id="form_login" type="text" name="email" class="rounded-3" placeholder="Enter email" required>
			</div>
            <div>
				<label>Username</label>
				<input id="form_login" type="text" name="username" class="rounded-3" placeholder="Enter username" required>
			</div>
			<div>
				<label>Password</label>
				<input id="form_login" type="password" name="password" class="rounded-3" placeholder="Enter password" required>
			</div>
 
			<div class="text-center">
				<input type="submit" class="tombol_login rounded-3 mb-3" value="REGISTER NOW">
				{{-- <i type="button" class="fa-regular fa-left-long" onclick="location.href='/#'"></i> --}}
				<a href="/login" style="text-decoration: none;" class="text-center">Back Login</a>
			</div>
		</form>

		{{ session('berhasil') }}
		
	</div> 
@endsection