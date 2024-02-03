@extends('layouts.baseTemplate');

@section('container')
<a href="worker/create" class="btn btn-primary"> Create</a>
{{-- <a href="worker/edit" class="btn btn-primary"> index</a> --}}

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($worker as $worker)
                <tr>
                    <td>{{ $worker->id }}</td>
                    <td>{{ $worker->name }}</td>
                    <td>
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
@endsection