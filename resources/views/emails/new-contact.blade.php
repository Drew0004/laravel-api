<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Montserrat';
            }
        </style>
    </head>

    <body>
        <main>
            <h2>Ciao Andrea, hai ricevuto un nuovo messaggio</h2>
            <h3>Dati:</h3>
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
                    Messaggio:{{ $contact->message }}
                </li>
            </ul>
        </main>
    </body>
</html>