@extends('layouts.baseTemplate');

@section('css')

<link href="//cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@endsection


@section('container')
<a href="worker/create" class="btn btn-primary mb-2"> Create</a>
{{-- <a href="worker/edit" class="btn btn-primary"> index</a> --}}

<table id="table-worker" class="table table-dark table-striped mt-4 
        shadow-lg table-bordered table table-striped table-sm 
         " style="width:100% ">
    <thead class="bg-primary text-white ">
        <tr>
            <th scope="col" class="text-center align-middle">ID</th>
            <th scope="col" class="text-center align-middle">Name</th>
            <th scope="col" class="text-center align-middle">Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($worker as $worker)
            <tr>
                <td class="text-center align-middle">{{ $worker->id }}</td>
                <td class="text-center align-middle">{{ $worker->name }}</td>
                <td class="text-center align-middle w-auto"">
                    <form action="{{ route('worker.destroy',$worker->id) }}" method="post">
                    <a href="/worker/{{ $worker->id }}/edit" class="btn btn-primary"> Edit</a>
                        @csrf
                        @method ('DELETE')
                    <button type="submit" class="btn btn-danger"> Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

    @section('js')

    {{-- this <script> are to reference the js file in dataTable page for give the funtionality of serach, apgination... --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    {{-- this <script> is to initialize the dataTables --}}
    <script>
        $(document).ready(function()
        {
            $('#table-worker').DataTable
            ({
                "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "ALL"]]
            });
        });
    </script>

    @endsection
@endsection