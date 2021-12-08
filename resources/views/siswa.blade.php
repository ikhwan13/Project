<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
</head>

<body style="background-color: gray;">

    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("listsiswa")
                </section>
            </div>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("listsiswa")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="{{url('/image/home.jfif')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Create Student Data</h5>
                        <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Student Id</label>
                                <input name="noinduk" type="text" class="form-control" placeholder="Insert Student Id">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input name="foto" type="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Full Name</label>
                                <input name="namapanjang" type="text" class="form-control" placeholder="Insert Full Name">
                            </div>


                            <div class="form-group">
                                <label>Short Name</label>
                                <input name="nama" type="text" class="form-control" placeholder="Insert Short Name">
                            </div>

                            <div class="form-group">
                                <label>Age</label>
                                <input name="umur" type="text" class="form-control" placeholder="Insert Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="minat" type="text" class="form-control" placeholder="Insert Speciality">
                            </div>
                            <button type="submit" class="btn btn-info" value="Save">Submit</button>
                            <button type="reset" class="btn btn-warning" value="Reset">Reset</button>

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("listsiswa")
            </section>
            <section class="col"></section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("listsiswa")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="{{url('/image/tambah.jfif')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Student List</h5>
                        <form action="{{ url('/update/'.$siswa->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Student Id</label>
                                <input value="{{ $siswa->noinduk }}" name="noinduk" type="text" class="form-control" placeholder=" No Induk ">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input name="foto" type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input value="{{ $siswa->namapanjang }}" name="namapanjang" type="text" class="form-control" placeholder=" Nama Panjang">
                            </div>
                            <div class="form-group">
                                <label>Short Name</label>
                                <input value="{{ $siswa->nama }}" name="nama" type="text" class="form-control" placeholder=" Nama Panggilan ">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{ $siswa->umur }}" name="umur" type="text" class="form-control" placeholder=" Umur ">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="{{ $siswa->minat }}" name="minat" type="text" class="form-control" placeholder=" Minat ">
                            </div>
                            <button type="submit" class="btn btn-info" value="Save">Submit</button>
                            <button type="reset" class="btn btn-warning" value="Reset">Reset</button>

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
    @endif

    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>