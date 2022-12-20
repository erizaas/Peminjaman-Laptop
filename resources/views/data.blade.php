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
    <nav class="navbar navbar-expand-lg bg-light m-5 rounded-5">
    <div class="container-fluid">
        <a class="nav-link text-primary" href="/create">Create Data</a>
            <a class="nav-link text-primary" href="/logout">Logout</a>
        </div>
    </div>
    </nav>
    
<div class="container">
    @if (Session::get('addData'))
    <div class="alert alert-success m-3 text-center">
           {{ Session::get('addData') }}
    </div>
    @endif
    <table class="table striped table-light text-center justify-content-center rounded-3" style="">
        <tr>
            <td>NIS</td>
                <td>NAME</td>
                <td>RAYON</td>
                <td>PURPOSES</td>
                <td>KET</td>
                <td>DATE</td>
                <td>RETURN DATE</td>
                <td>TEACHER</td>
                <td>ACTION</td>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($peminjamanlepi as $PeminjamanLepi)
        <tr>
            {{-- tiap di looping, $no bakal ditambah 1 --}}
            <td>{{ $PeminjamanLepi['nis'] }}</td>
            <td>{{ $PeminjamanLepi['name'] }}</td>
            <td>{{ $PeminjamanLepi['rayon'] }}</td>
            <td>{{ $PeminjamanLepi['purpose'] }}</td>
            <td>{{ $PeminjamanLepi['ket'] }}</td>
            <td>{{ \Carbon\Carbon::parse($PeminjamanLepi['date'])->format('j F, Y') }}</td>
            <td>{{$PeminjamanLepi->return_date == null ? "Belum Dikembalikan":\Carbon\Carbon::parse($PeminjamanLepi->return_date)->format('j F, Y')}}</td>
            <td>{{ $PeminjamanLepi['teacher_name'] }}</td>
            <td class="d-flex m-3" style="border: none !important">
                <div class="return">
                @if ($PeminjamanLepi['return_date'] == NULL )
                <form action="/kembali/{{ $PeminjamanLepi['id'] }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn- btn-success fa-solid fa-arrow-right-to-bracket"></button>
                </form>
                </div>
                @endif
                <div class="delete">
                <form action="/delete/{{$PeminjamanLepi['id']}}" method="POST"> 
                    @csrf 
                    @method("DELETE")
                <button type="submit" class="btn btn- btn-danger fa-solid fa-trash"></button>
            </form>
            </div>
            </td>
        </tr>
</div>
    @endforeach

</table>
@endsection
