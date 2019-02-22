<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
        body{
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            background: #dfe6e9;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 26px;
        }
        .container{
            background: #fff;
            width: 96%;
            max-width: 650px;
            margin: 0 auto;
            padding: 30px;
        }
        h1{
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 3px;
            padding-bottom: 30px;
            border-bottom: 1px solid lightgrey;
        }
        h2{
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 3px;
            padding-bottom: 30px;
            border-bottom: 1px solid lightgrey;
        }
        .request{
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>
            Aanbeveling aanmelding
        </h1>
        
        <p>
            <strong>
                Naam
            </strong>
        </p>

        <span class="request">
            {{ $request->name }}
        </span>

        <p>
            <strong>
                E-mail
            </strong>
        </p>

        <span class="request">
            {{ $request->email }}
        </span>
        
        <p>
            <strong>
                Bericht
            </strong>
        </p>

        <span class="request">
            {{ $request->message }}
        </span>
        
        <strong>
                <span class="request">
                    {{ $request->name }} beveelt:
                </span>
        </strong>
        
        <h2>
                Onze toekomstige zzp/ondernemer gegevens
        </h2>

        <p>
            <strong>
                Naam
            </strong>
        </p>

        <span class="request">
            {{ $request->namereference }}
        </span>
        
        <p>
            <strong>
                E-mail
            </strong>
        </p>
        <span class="request">
            {{ $request->emailreference }} 
        </span>
        
        <p>
            <strong>
                Beroep
            </strong>
        </p>
        <span class="request">
            {{ $request->profession }} 
        </span>
        
    </div>
</body>
</html>