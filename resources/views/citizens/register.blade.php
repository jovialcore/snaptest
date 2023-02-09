@extends('layouts.app')

@section('content')
    <div class="row mx-auto">
        <div class="col">


            @if (session('msg'))
                <div class="alert alert-danger">{{ session('msg') }}</div>
            @elseif(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif


            @if ($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif

            <form method="POST" action="{{ route('citizens.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Full name</label>
                    <input type="text" name="full_name" class="form-control" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Select Gender</label>
                    <select name="gender" class="form-select" aria-label="Default select example">
                        <option selected>Gender</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address</label>
                    <input type="address" name="address" class="form-control" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone </label>
                    <input type="tel" name="phone" class="form-control" aria-describedby="emailHelp">

                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Enter Ward</label>
                    <select name="ward_id" class="form-select" aria-label="Default select example">
                        <option selected>Enter Ward </option>
                        <option value="1">Ward one </option>
                        <option value="2">Ward two</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
