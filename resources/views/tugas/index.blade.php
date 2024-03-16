@extends('layouts.layouts')

@push('css')
    <style>
        body{
            background-color: #E3FCBF;
        }

        .card:hover {
            cursor: pointer;
            background-color: #B8F1B0;
        }

        .done{
            background-color: #00FFAB;
        }
    </style>
@endpush

@section('content')
    <div class="input-group my-3">
        <input type="text" class="form-control" id="key" placeholder="Search Task" aria-label="search Task"
            aria-describedby="button-addon2">
        <button class="btn btn-success" type="button" id="button-addon2 button-add" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Add</button>
    </div>

    @includeIf('tugas.modal')
    <div class="list" id="container-list">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Tidur</h6>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success btn-sm"><i class="bi bi-check-lg"></i></button>
                            <button type="button" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore fugit ducimus doloribus.
            </div>
        </div>
    </div>
@endsection
