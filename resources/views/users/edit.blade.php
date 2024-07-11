@extends('users.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Edit user</div>
        <div class="card-body">

            <form action="{{ url('user/' .$users->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
                <label>firstName</label></br>
                <input type="text" name="firstName" id="firstName" value="{{$users->firstName}}" class="form-control" placeholder="enter firstname"></br>
                <label>lastName</label></br>
                <input type="text" name="lastName" id="lastName" value="{{$users->lastName}}" class="form-control" placeholder="enter lastname"></br>


                 <label for="password">password</label></br>
                    <input type="password" name="password" id="password" required class="form-control" placeholder="enter password">
                    @error('password')
                  <span class=" fs-6 text-danger">{{ $message }}</span>
                  @enderror
                </br>
                    <label for="password_confirmation"> confirm password</label>
                  </br>
                    <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control" placeholder="enter password">
                   @error('password_confirmation')
                    <span class="fs-6 text-danger">{{ $message }}</span>
                    @enderror
                    <label for ="gender">Gender</label>
                    <select name="gender" id="gender" value="{{$users->Gender}}" class="form-control">
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
                <label for="role_id">role_id</label>
                <input type="text" name="role_id" id="role_id" required class="form-control">

              </br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>




    </div>

 @stop
