@extends('users.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">create new users</div>
        <div class="card-body">

            <form action="{{ url('user') }}" method="post">
                {!! csrf_field() !!}
                <label for="firstName">firstName</label></br>
                <input type="text" name="firstName" id="firstName" required class="form-control"
                    placeholder="enter firstname"></br>

                <label for="lastName">lastName</label></br>
                <input type="text" name="lastName" id="lastName" required class="form-control"
                    placeholder="enter lastname"></br>


                 <label for="password">password</label></br>
                <input type="password" name="password" id="password" required class="form-control"
                    placeholder="Enter password">
                @error('password')
                    <span class=" fs-6 text-danger">{{ $message }}</span>
                @enderror
                </br>
                <label for="password_confirmation">Confirm password</label>
                </br>
                <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control"
                    placeholder="enter password">
                @error('password_confirmation')
                    <span class="fs-6 text-danger">{{ $message }}</span>
                @enderror


                </br>
                <label for ="gender">Gender</label>
                <select name="Gender" id="gender" required class="form-control">
                    <option value="" selected disabled>enter gender</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>

                </br>
        <label for="role_id">role_id</label>
         <input type="text" name="role_id" id="role_id" required class="form-control">


                </br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>



    </div>

@stop
