@include('Layout.header')


<style>
    
       
    .table th{
        margin: auto;
    font-weight: bold;
    color: red;
    }
    .btn{
        
        margin-left: 50%;
    }

</style>
    <div class="container">


        @if(session('status'))
        <script> alert("{{session('status')}}") </script>
        @elseif(session('delete'))
        <script> alert("{{session('delete')}}") </script>
        @endif
            

        <table class = "table">


            <tr>
                <th>Employee Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Profile Image</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            @foreach($Emp as $key)
                 <tr>
                        <td>{{$key->EmployeeName}}</td>
                        <td>{{$key->Email}}</td>
                        <td>{{$key->Age}}</td>
                        <td>{{$key->Contact}}</td>
                        <th><img src="{{$key->EmpImg}}"></th>
                        <td>{{$key->created_at}}</td>
                        <td>{{$key->updated_at}}</td>
                        <td><a href="{{route('employees.show',$key->id)}}" class = "btn btn-success">Detail</a> </td>
                        <td> <a href="{{route('employees.edit',$key->id)}}" class = "btn btn-primary">Edit</a> </td>
                        <td> 
                        <form action="{{route('employees.destroy',$key->id)}}" method = "post">
                            @csrf
                            @method('DELETE')
                            <button type = "submit" class = "btn btn-danger">Delete</button>
                        </form>
                        </td>
                </tr>
                
            @endforeach
           
        </table>
        
    </div>
    <a class="btn  mb-3" href="{{route('employees.create')}}" style="background-color: red; color:white;"> Add Employee</a>
@include('Layout.footer')