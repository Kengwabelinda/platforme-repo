<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Role</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h2>ROLE PAGE </h2>
        <div class="float-right mr-5">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add New
                Role
            </button>
        </div>
    </div>

   <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <td>id</td>
                    <td>role_name</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($role as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->role_name }}</td>
                    <td><a href="javascript:void('0')" class="btn btn-warning editBtn">Edit</a></td>
                    <td>
                    <form action="role/{{ $item->id }}" method="POST">
                        @csrf
                        @method('Delete')
          <input type="submit" class="btn btn-danger" value='Delete'>

                    </form>
</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ROLE</h4>
                </div>

                <div class="modal-body">
<form action="role" method="POST" id='form'>
    @csrf
    <div class="form-group">
        <label for="">roleName</label>
        <input type="text" id='role_name' name="role_name" class="form-control">
    </div>
    <div class="form-group">

        <input type="submit" id='submit' name="submit" class="btn btn-success">
</form>

            </div>

        </div>
    </div>
<script>
$('.editBtn').click(function(e)){
    role_name = e.target.parentElement.previousElementsibling.innerText;
    id = e.target.parentElement.sibling.previousElement.sibling.innerText;
console.log(role_name + id)
$('#role_name').val(role_name);
$('#form').attr('action','role/'+id);

    $('mymodal').modal('show');

}
</script>

</body>

</html>
