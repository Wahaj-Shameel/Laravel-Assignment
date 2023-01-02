@include('Layout.header')
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color: red;">Employee Profile Page</h2>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Profile Photo:</strong>
                
                <img src="{{$Emp->EmpImg}}" height="200px" width="200px">
                <!-- <img src="{{ URL('images/img_avatar.png')}}"> -->
                <!-- <img src="{{asset('assets/images/'.$Emp->EmpImg)}}" height = "200px" width = "300px">
                    <img src="$url = asset('images/.$Emp->EmpImg');"> -->


            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Employee Name:</strong>
                {{$Emp->EmployeeName}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Email:</strong>
                {{$Emp->Email}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Age:</strong>
                {{$Emp->Age}}
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Contact:</strong>
                {{$Emp->Contact}}
            </div>
        </div>

        
        <a href="#" class="btn" style="background-color: red; color:white;">See Profile</a> <br>
        <a class="btn  ml-5" href="{{route('employees.index')}}" role="button" style="background-color: black; color:white;">Back To List</a>
    </div>
</div>






@include('Layout.footer')