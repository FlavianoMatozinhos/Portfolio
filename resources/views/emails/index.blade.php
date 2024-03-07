<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Criativo</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        table {
            width: 100%;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }

        td {
            text-align: center;
        }

        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333333;
            text-align: center;
        }

        img {
            max-width: 100%;
            opacity: 0.8;
            margin-top: 20px;
        }

        p {
            color: #555555;
            text-align: center;
            margin-top: 20px;
        }

        b {
            color: hsl(187, 54%, 54%);;
        }
    </style>
</head>
<body>

    <table role="presentation">
        <tr>
            <td>
                <div class="container">
                    <h1>Novo Cliente a vista 👀</h1>

                    <div>
                        <img src="{{ asset('/img/cafe.png') }}" alt="Café">
                    </div>
                    
                    <p>{{ $nome }} quer entrar em contato para saber mais sobre a <b>Systems & Coffee</b></p>
                    <p>Segue os dados abaixo para voce entrar em contato</p>

                    <p><b>Nome:</b> {{ $nome }}</p>
                    <p><b>Telefone:</b> {{ $telefone }}</p>
                    <p><b>Email:</b> {{ $email }}</p>

                    
                    <p>Atenciosamente,<br>Systems & Coffee</p>
                </div>
            </td>
        </tr>
    </table>

</body>
</html>
