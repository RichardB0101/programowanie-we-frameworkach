@extends('layouts.mainLayout')

@section('title', 'Testuja')

@section('content')
    <table class="table table-dark table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product name:</th>
            <th scope="col">Product description:</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>


        @foreach($profileItems as $profileItem)
            <tr>
                <td>{{$profileItem->id}}</td>
                <td>{{$profileItem->name}}</td>
                <td>{{$profileItem->description}}</td>
                <td>



                    <button class="btn btn-primary" type="submit">Edit</button>



                    <form action="{{ route('delProfile', $profileItem->id) }}" method="get">
                        @csrf
                        <input type="hidden" value="{{$profileItem->id}}">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    <div class="container">
        <form method="post" action="{{ route('submitProfile') }}">
            @csrf
            <input type="text" name="formName" placeholder="Enter name"><br>
            <textarea cols="30" rows="5" name="formDesc" placeholder="Enter description"></textarea><br>
            <button class="btn btn-primary" type="submit">Create user</button>
        </form>
        <form action="{{ route('delAllProfile') }}" method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Clear all</button>
        </form>
    </div>


@endsection
