@extends('users.layout')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>USER</h2>
                        <div class="card-body">
                            <a href="{{ url('/user/create') }}" class="btn btn-success btn-sm" title="Add New User">

                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <br />
                            <br />
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>firstName</th>
                                            <th>lastName</th>
                                            <th>Gender</th>
                                            <th>password</th>
                                            <th>role_id</th>
                                            <th>status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($users as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->firstName }}</td>
                                                <td>{{ $item->lastName }}</td>
                                                <td>{{ $item->Gender }}</td>
                                                <td>{{ $item->password }}</td>
                                                <td>{{ $item->role_id }}</td>
                                                <td>{{ $item->status }}</td>

                                                <td>
                                                    <a href="{{ url('/user/' . $item->id ) }}" title="View user"><button
                                                            class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                                aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/user/' . $item->id . '/edit') }}" title="Edit user"><button
                                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                aria-hidden="true"></i> Edit</button></a>
                                                    <form method="POST" action="{{ url('/user' . '/' . $item->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete user"
                                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete
                                                        </button>
                                                    </form>

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
        </div>
    @endsection
