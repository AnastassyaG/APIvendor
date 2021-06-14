<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Create Data Pengeluaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container py-4">
        <div class="row">
            <div class="card w-100 shadow">
                <div class="card-body">
                    <div class="card-title text-center fw-bold">
                        DATA VENDOR
                    </div>
                    <hr>
                    <div class="text-end mb-3">
                        <a class="btn btn-sm btn-dark" href="{{route('vendor.api')}}">Vendor JSON</a>
                        <a class="btn btn-sm btn-success" href="{{route('vendor.create')}}">Create</a>
                    </div>
                    <div class="table-responsive" style="border-radius: 25px; box-shadow: -2px 3px 10px #babec2;">
                        <table class="table">
                            <thead class="table" style="background-color: #b4d7fa; color:white; text-align:center;">
                                <th scope="col">Id</th>
                                <th scope="col">Nama Vendor</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Kota</th>
                                <th scope="col">Negara</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Action</th>
                                <th></th>
                            </thead>
                            <tbody style="text-align:center;">
                                @php
                                $no = 1
                                @endphp
                                @foreach ($tampils as $data)
                                <td>{{$data->id}}</td>
                                <td>{{$data->vendor}}</td>
                                <td>{{$data->telepon}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->kota}}</td>
                                <td>{{$data->negara}}</td>
                                <td>{{$data->alamat}}</td>

                                <td>
                                    <a href="{{route('vendor.edit',$data->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('vendor.delete',$data->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>