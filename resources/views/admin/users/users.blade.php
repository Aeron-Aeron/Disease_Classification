@extends('dashboard.layouts.app')

@section('content')

<h1>Manage Users</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Users</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Role </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>

                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        @if ($user->role == 'admin')
                                            <form action="{{ route('admin.removeAdmin', $user->id) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Remove from admin</button>
                                            </form>
                                        @else
                                            <form action="{{ route('admin.makeAdmin', $user->id) }}" method="POST">
                                                @csrf
                                                <button class="btn btn-primary" type="submit">Make Admin</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection