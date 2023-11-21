<!-- resources/views/order/print.blade.php -->
<html>
<head>
    <title>Order Print</title>
    <script>
        window.onload = function() {
        window.print()
        }
    </script>
</head>
<body>
    <h1>Order Details</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderItems as $orderItem)
                <tr>
                    <td>{{ $orderItem->product->name }}</td>
                    <td>{{ $orderItem->quantity }}</td>
                    <td>{{ $orderItem->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
