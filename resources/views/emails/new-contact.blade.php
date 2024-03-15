@extends('layouts.email-template')
@section('content')

    <h2>Ciao Andrea, hai ricevuto un nuovo messaggio</h2>
    <h4>Dati:</h4>
    <ul>
        <li>
            Nome: {{ $contact->firstname }}
        </li>
        <li>
            Cognome: {{ $contact->lastname }}
        </li>
        <li>
            Email: {{ $contact->email }}
        </li>
        <li>
            Messaggio:{!!nl2br($contact->message)!!}
        </li>
    </ul>
    
@endsection
