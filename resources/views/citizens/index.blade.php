@extends('layouts.app')
@section('content')
    <table class="table table-striped table-hover">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">address</th>
                    <th scope="col">gender</th>
                    <th scope="col">phone</th>
                    {{-- <th scope="col">ward</th>  --}}
                </tr>
            </thead>
            <tbody>
                <?php $sn = 1 ?>
                @foreach ($citizens as $citizen)
                    <tr>
                        <th scope="row"><?=  $sn++; ?></th>
                        <td><a href="{{ route('citizens.show', $citizen->id) }}"> {{ $citizen->full_name }} </a></td>
                        <td>{{ $citizen->address }}</td>
                        <td>{{ $citizen->gender }}</td>
                        <td>{{ $citizen->phone }}</td>
                        {{-- <td>{{$citizen->Ward->name}}</td> --}}
                    </tr>
                @endforeach


            </tbody>
        </table>
    </table>
@endsection
