<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card mt-3 mb-3">
            <div class="card-header text-center">
                <h4>Import Data</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('users.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-dark">Import</button>
                </form>

                <table class="table tavle-bordered mt-3">
                    <tr>
                        <th colspan="3">
                            List of Data
                            <a href="{{ route('users.export') }}" class="btn btn-danger float-end">Export</a>
                        </th>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>
