<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead >
            <tr>
                <th>Id</th>
                <th>Customer Code</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Customer Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer  as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->customer_code }}</td>
                    <td>{{ $item->customer_name }}</td>
                    <td>{{ $item->customer_address }}</td>
                    <td>{{ $item->customer_phone}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>