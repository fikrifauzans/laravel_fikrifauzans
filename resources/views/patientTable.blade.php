<div class="container">

    <a href="{{ url('patient/create') }}" class="btn btn-success my-3 btn-create">+ create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">email</th>
                <th scope="col">hospital</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($patients as $patient)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->address }}</td>
                    <td>{{ $patient->phone }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->hospital->name }}</td>
                    <td>
                        <small><button onclick="del({{ $patient->id }})"
                                class="btn btn-danger p-1">delete</button></small>
                        <small><a class="btn btn-warning mt-1 p-1 text-white"
                                href="{{ url('patient/update/' . $patient->id) }}">update</a></small>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="row justify-content-center">{{ $patients->links() }}</div>
</div>