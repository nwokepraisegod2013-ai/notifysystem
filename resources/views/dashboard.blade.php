<!DOCTYPE html>
<html>
<head>
    <title>Notification Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #007bff;
            color: white;
        }

        .status-sent {
            color: green;
            font-weight: bold;
        }

        .status-failed {
            color: red;
            font-weight: bold;
        }

        .status-pending {
            color: orange;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Notification Dashboard</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Type</th>
            <th>Recipient</th>
            <th>Message</th>
            <th>Status</th>
            <th>Date</th>
        </tr>

        @foreach ($notifications as $notification)
        <tr>
            <td>{{ $notification->id }}</td>
            <td>{{ $notification->type }}</td>
            <td>{{ $notification->recipient }}</td>
            <td>{{ $notification->message }}</td>
            <td class="status-{{ $notification->status }}">
                {{ $notification->status }}
            </td>
            <td>{{ $notification->created_at }}</td>
        </tr>
        @endforeach

    </table>
</div>

</body>
</html>