<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="jumbotron"><h1>Todo List App</h1></div>
        <form action="/todo" method="post">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="keterangan"
                 placeholder="Input keterangan todo">
                 <div class="input-group-append">
                     <input type="submit" value="Tambah Todo" class="btn btn-primary">
                 </div>
            </div>
        </form>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td width="10%">No.</td>
                     <td>Keterangan</td>
                    <td colspan=2 class="w-25">Action</td>
                </tr>
            </thead>
            <tbody>
             @foreach ($todoList as $item)


                 <tr @if ($item->status=="selesai")
                    class="bg-success text-white"

                 @endif>
                    <td>{{ $loop->iteration }} </td>
                    <td>{{ $item->keterangan }}</td>
                    <td>
                        <a href="/todo/update/ {{ $item-> id }}"
                            class="btn btn-block btn-warning @if ($item->status=="selesai")
                                disabled
                            @endif">Selesai</a>
                    </td>
                    <td>
                        <a href="/todo/delete/ {{ $item-> id }}" class="btn btn-block btn-danger">Hapus</a>
                    </td>
              </tr>
              @endforeach






            </tbody>





        </table>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>
