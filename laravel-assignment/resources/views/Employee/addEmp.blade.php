@include('Layout.header')

<style>
  .container{
    margin: auto;
    font-weight: bold;
    color: red;
    
    
  }
  .container h3{
    text-align: center;
    font-weight: bolder;
  }
  form {
    align-items: center;
    margin-left: 40%;
    text-align: center;
    
  }
  .form-group{
    padding-bottom: 20px;
  }
  .form-control{
    border: 1px solid red;
  }
  .img{
    border: none;
  }

</style>

<div class="container"> <br>
  <h3>Employee Registration Form</h3> <br>



<form action="{{route('employees.store')}}" method = "post" enctype="multipart/form-data">

    @csrf
    <div class = "row">
    
      <div class = "col-sm-12 col-lg-6">

        <div class="form-group">
          <label for="name">Employee Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
          <span class = 'text-danger'>
              @error('name')
                {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="email">Employee Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
            <span class = 'text-danger'>
                @error('email')
                {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="pwd">Age:</label>
          <input type="number" class="form-control" id="age" placeholder="Enter Your Age" name="age">
            <span class = 'text-danger'>
                @error('price')
                {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="pwd">Contact Number:</label>
          <input type="text" class="form-control" id="edu" placeholder="Enter Your Contact Number" name="contact">
            <span class = 'text-danger'>
                 @error('desc')
                {{$message}}
              @enderror
          </span>
        </div>

        

        <div class="form-group">
          <label for="my-input">Profile Photo</label>
          <input id="my-input" class="form-control img" type="file" name="img">
        </div>

<br><br>
        

        <button type="submit" class="btn" name = "ins" style="background-color: red; color:white;">Submit</button>

    <a class="btn" href="{{route('employees.index')}}" style="background-color: black; color:white;"> View All</a>

  
      </div>
    </div>


  </form>
</div>





@include('Layout.footer')