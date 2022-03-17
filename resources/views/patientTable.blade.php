<div class="container">
    <div class="row justify-content-between">
        <a href="{{ url('patient/create') }}" class="btn btn-success my-3 btn-create">+ create</a>
        <form class="form-inline">
            <div class="row">
                <div>
                    <button onclick="show()" class="btn btn-danger mr-3">x</button>
                </div>
            </div>

            <div>
                <select class="custom-select" id="selectHospital">
                    <option selected>Open this select menu</option>
                    @foreach ($hospitals as $hospital)
                        <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                    @endforeach
                </select>
            </div>

        </form>
    </div>

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
                    <td>{{ $patient->hospital()->get()[0]->name ?? '' }}</td>
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

    {{-- <div>{{ $patients->links() }}</div> --}}
</div>
