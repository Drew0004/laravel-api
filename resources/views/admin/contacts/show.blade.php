@extends('layouts.app')

@section('page-title', $contact->firstname.' '. $contact->lastname)

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Sei loggato!
                    </h1>
                    <br>
                    Pagina Show
                </div>
            </div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{ $contact->id }}</th>
                            <td>{{ $contact->firstname }}</td>
                            <td>{{ $contact->lastname }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


