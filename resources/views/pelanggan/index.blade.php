<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pelanggan</title>
    </head>
    <body>
        <h1>Data Pelanggan</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $i => $v)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $v }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
