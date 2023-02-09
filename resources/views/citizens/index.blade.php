@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-9">
            <form method="GET" action="{{ route('search') }}">
                <div class="input-group">
                    <input type="text" name="item" class="form-control" placeholder="Please Enter citizens name"
                        aria-label="Recipient's username with two button addons">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>

                </div>
            </form>
            <table class="table table-striped table-hover">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                           
                            <th scope="col">gender</th>
                            <th scope="col">phone</th>
                            {{-- <th scope="col">ward</th>  --}}
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sn = 1; ?>
                        @if ($citizens->count() > 0)
                            @foreach ($citizens as $citizen)
                                <tr>
                                    <th scope="row"><?= $sn++ ?></th>
                                    <td><a href="{{ route('citizens.show', $citizen->id) }}"> {{ $citizen->full_name }} </a>
                                    </td>
                             
                                    <td>{{ $citizen->gender }}</td>
                                    <td>{{ $citizen->phone }}</td>
                                    {{-- <td>{{$citizen->Ward->name}}</td> --}}
                                </tr>
                            @endforeach
                        @else
                        {{-- If nothing was found  --}}
                            <tr>
                                <td colspan="6">Nothing was found </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </table>
        </div>
    </div>
@endsection
