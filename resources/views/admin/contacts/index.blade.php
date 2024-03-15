@extends('layouts.app')

@section('page-title', 'Tutti i contatti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Sei loggato!
                    </h1>
                    <br>
                    Pagina Index
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
                            <th scope="col">Created at</th>
                            <th scope="col" colspan="3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $contact->id }}</th>
                                <td>{{ $contact->firstname }}</td>
                                <td>{{ $contact->lastname }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.contacts.show', ['contact' => $contact->id]) }}" class="btn btn-xs btn-primary">
                                        Show
                                    </a>
                                </td>

                                <td>
                                    
                                    <button type="button" class="btn btn-danger" data-bs-toggle="offcanvas"
                                    data-bs-target="#deleteConfirmation{{ $contact->id , $contact->firstname }}">
                                    Elimina
                                    </button>

                                <div class="offcanvas offcanvas-end d" tabindex="-1"
                                    id="deleteConfirmation{{ $contact->id , $contact->firstname }}">
                                    <div class="offcanvas-header">
                                        <h5 class="offcanvas-title" id="deleteConfirmationLabel{{ $contact->id , $contact->firstname }}">
                                            Conferma eliminazione
                                        </h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <p>Vuoi davvero eliminare <h5 class=" d-inline-block ">{{ $contact->firstname }}</h5> ?</p>
                                        <form class="mt-5" id="deleteForm{{ $contact->id }}"
                                            action="{{ route('admin.contacts.destroy', ['contact' => $contact->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Conferma eliminazione</button>
                                        </form>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection