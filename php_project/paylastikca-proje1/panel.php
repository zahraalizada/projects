<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>


<table id="customers">
    <tr>
        <th>Ad Soyad</th>
        <th>Telefon</th>
        <th>Email</th>
        <th>Konu</th>
        <th>Mesaj</th>
    </tr>
    <tr>
        <td>Selim Arhan</td>
        <td>05414567890</td>
        <td>test@gmail.com</td>
        <td>Test</td>
        <td>Great!</td>
    </tr>
</table>

</body>
</html>