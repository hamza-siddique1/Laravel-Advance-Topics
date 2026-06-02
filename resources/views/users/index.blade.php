<!DOCTYPE html>
<html>
<head>
    <title>Users (Paginated)</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 6px; text-align: left; }
        th { background: #eee; }
        .pagination { margin-top: 20px; }

        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 6px;
            text-align: left;
        }
        th {
            background: #eee;
        }

        .badge {
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
            color: #fff;
        }

        .badge-success {
            background-color: #28a745;
        }

        .badge-danger {
            background-color: #dc3545;
        }

        .pagination {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Users (100 per page)</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified</th>
            <th>Created</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>

                <td>{{ $user->email }}</td>

                <td>
                    @if ($user->email_verified_at)
                        <span class="badge badge-success">Verified</span>
                    @else
                        <span class="badge badge-danger">Not Verified</span>
                    @endif
                </td>

                <td>
                    {{ $user->created_at?->diffForHumans() }}
                </td>

                <td>
                    {{ $user->updated_at }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="pagination">
    {{ $users->links() }}
</div>

</body>
</html>
