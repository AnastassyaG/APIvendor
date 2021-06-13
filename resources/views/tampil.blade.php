<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Create Data Vendor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
   <div class="container py-4">
       <div class="row">
           <div class="card w-100 shadow">
               <div class="card-body">
                   <div class="card-title text-center fw-bold">
                       Menampilkan Data-Data Vendor Terbaru
                   </div>
                   <hr>
                   <div class="text-end mb-3">
                       <a class="btn btn-sm btn-primary" href="{{route('vendor.api')}}">API Vendor</a>
                       <a class="btn btn-sm btn-dark" href="{{route('vendor.create')}}">Create Vendor</a>
                   </div>
                   <div class="table-responsive">
                       <table class="table">
                           <thead class="table-dark">
                               <th>No</th>
                               <th>Nama</th>
                               <th>Tipe Produk</th>
                               <th>Alamat</th>
                               <th>Action</th>
                               <th></th>
                           </thead>
                           <tbody>
                            @php
                                $no = 1
                            @endphp
                            @foreach ($tampils as $data)
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_vendor}}</td>
                                <td>{{$data->tipe_produk}}</td>
                                <td>{{$data->alamat}}</td>

                                <td>
                                    <a href="{{route('vendor.edit',$data->id)}}" class="btn btn-sm btn-secondary">Edit Vendor</a>
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