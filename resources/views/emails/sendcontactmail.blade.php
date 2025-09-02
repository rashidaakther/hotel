<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>REQUEST FOR CONTACT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .message {
            padding: 20px;
            background-color: #ffffff;
        }

        .message p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
        table td{ text-transform: capitalize;}
    </style>
</head>

<body>
    <div class="container">

        <div class="message">
           <div style="text-align: center">
            <img src="{{ asset('images/logo.png') }}" style="width: 68px;" />
            <h2 style="text-align: center">i-Suites Residence & Restaurent</h2>
           </div>
           
            <h3>REQUEST FOR CONTACT</h3>

            <table border="1" style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td>Name</td>
                    <td>{{ $body->name }} </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $body->email }} </td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>{{ $body->message }} </td>
                </tr>
               
            </table>

            <br>

            Thanks,<br>
            {{ $body->name }}
        </div>

    </div>
</body>

</html>
