<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <!-- Button to Open the Modal -->
         <div class="d-flex justify-content-end">
             <button type="button" class="btn btn-primary mt-2" id="add_todo">Add Todo</button>
         </div>

        <table class="table table-bordered mt-2">
            <thead>
                <th>sr.no</th>
                <th>Name</th>
                <th>email</th>
                <th>Address</th>
                <th>Action</th>
            </thead>

            <tbody id="list_todo">
                @foreach($todos as $todo)
                <tr id="row_todo_{{$todo->id}}">
                    <td>{{$todo->id}}</td>
                    <td>{{$todo->name}}</td>
                    <td>{{$todo->email}}</td>
                    <td>{{$todo->address}}</td>
                    <td>
                        <button type="button" id="edit_todo" data-id="{{ $todo->id }}" class="btn btn-sm btn-info ml-1">Edit</button>
                        <button type="button" id="delete_todo" data-id="{{ $todo->id }}" class="btn btn-sm btn-danger ml-1">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- The Modal -->
        <div class="modal" id="modal_todo">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="" id="form_todo">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modal_title"></h4>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id">
                            <input type="text" name="name" id="name_todo" class="form-control" placeholder="Enter name">
                            <input type="text" name="email" id="email_todo" class="form-control mt-2" placeholder="Enter email">
                            <input type="text" name="address" id="address_todo" class="form-control mt-2" placeholder="Enter address">
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
                }
            })
        });


        $("#add_todo").on('click', function() {
            $("#form_todo").trigger('reset');
            $("#modal_title").html('Add Todo');
            $("#modal_todo").modal('show');
            $("#id").val("");
        });

        $("body").on('click', '#edit_todo', function() {
            let id = $(this).data('id');
            $.get('todos/' + id + '/edit', function(res) {
                $("#modal_title").html('Edit Todo');
                $("#id").val(res.id);
                $("#name_todo").val(res.name);
                $("#email_todo").val(res.email);
                $("#address_todo").val(res.address);
                $("#modal_todo").modal('show');
            });
        });
        

        // Delete Todo 
            $("body").on('click','#delete_todo',function(){
                let id = $(this).data('id');
                 if (!confirm('Are you sure you want to delete this todo?')) {
                    return; // Stop if user clicks "Cancel"
                }

                $.ajax({
                    type:'DELETE',
                    url: "todos/destroy/" + id
                }).done(function(res){
                    $("#row_todo_" + id).remove();
                });
            });


        //save data
        $("form").on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "todos/store",
                data: $("#form_todo").serialize(),
                type: "POST"
            }).done(function(res) {
                let row = '<tr id="row_todo_' + res.id + '">';
                row += '<td>' + res.id + '</td>';
                row += '<td>' + res.name + '</td>';
                row += '<td>' + res.email + '</td>';
                row += '<td>' + res.address + '</td>';
                row += '<td>' + '<button type="button" id="edit_todo" data-id="' + res.id + '" class="btn btn-info btn-sm ml-1">Edit</button>' + '<button type="button" id="delete_todo" data-id="' + res.id + '" class="btn btn-danger btn-sm ml-1">Delete</button>' + '</td>';

                if ($("#id").val()) {
                    $("#row_todo_" + res.id).replaceWith(row);
                } else {
                    $("#list_todo").prepend(row);
                }

                $("#form_todo").trigger('reset');
                $("#modal_todo").modal('hide');
            });
        });
    </script>
</body>

</html>