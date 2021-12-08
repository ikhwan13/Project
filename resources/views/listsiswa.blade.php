<div class="card mb-3">
    <img src="{{url('/image/tambah.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Student List</h5>
        <p class="card-text">Manage student speciality list</p>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Student Id</th>
                    <th class="col">Image</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Short Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Options</th>

                </tr>
            </thead>
            <tbody>
                @foreach($siswas as $siswa)
                <tr>
                    <td>{{ $siswa->noinduk }}</td>
                    <td><img src="{{ url('/image/'.$siswa->foto.'') }}" alt="bukti" width="200px"></td>
                    <td>{{ $siswa->namapanjang }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->umur }}</td>
                    <td>{{ $siswa->minat }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$siswa->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                        <a href="{{ url('/destroy/'.$siswa->id) }}" class="btn btn-sm btn-warning">Delete</a>

                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>