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
            Klacht ingediend
        </h1>
        
        <p>
            <strong>
                Naam van behandelaar
            </strong>
        </p>

        <span class="request">
            {{ $request->member }}
        </span>

        <p>
            <strong>
                Klacht bericht
            </strong>
        </p>
    
        <span class="request">
                {{ $request->message }}
        </span>

        <p>
            <strong>
                Je Naam
            </strong>
        </p>

        <span class="request">
            {{ $request->name }}
        </span>
        
        <p>
            <strong>
                Je E-mail
            </strong>
        </p>
        <span class="request">
            {{ $request->email }} 
        </span>
        
        <p>
            <strong>
                Je telefoonnummer
            </strong>
        </p>
        <span class="request">
            {{ $request->telephone_number }} 
        </span>
        
    </div>
</body>
</html>