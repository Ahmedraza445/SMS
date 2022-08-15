<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Managemnent System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"
  </head>
  <body>


    @include("navbar")

    <div class="row header-container justify-content-center">
      <div class="header">
        <h1>Student Management System</h1>
      </div>
    </div>



    @if($layout == 'index')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5">

          </section>
        </div>
      </div>

    @elseif($layout == 'create')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5">


          <div class="card mb-3">
            <img src="https://d33wubrfki0l68.cloudfront.net/3ac241f9fee2e294ee3a5594c2d8b3bf80551379/f5ae6/images/blog/makers_hu5afb5e99e7dda64a600e168d07337c38_68572_960x640_fill_q90_lanczos_center.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Enter information of new student</h5>
              <form action="{{ url('/store/') }}" method="POST">
              @csrf
              <div class="form-group">
                <label>CNE</label>
                <input name="cne" type="text" class="form-control" placeholder="Enter cne">
              </div>

              <div class="form-group">
                <label>First name</label>
                <input name="firstName" type="text" class="form-control" placeholder="Enter the first name">
              </div>

              <div class="form-group">
                <label>Last name</label>
                <input name="lastName" type="text" class="form-control" placeholder="Enter the last name">
              </div>

              <div class="form-group">
                <label>Age</label>
                <input name="age" type="text" class="form-control" placeholder="Enter the age">
              </div>
              
              <div class="form-group">
                <label>Speciality</label>
                <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
              </div>

              <!-- <input type="submit" class="btn btn-info value="Save">
              <input type="reset" class="btn btn-info value="Reset"> -->
              <input type="submit" class="btn btn-info" value="Save">
              <input type="reset" class="btn btn-info" value="Reset">
            </form>    
            </div>
          </div>

              
            
          </section>
        </div>
      </div>

    @elseif($layout == 'show')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5">

          </section>
        </div>
      </div>

    @elseif($layout == 'edit')
      <div class="container-fluid mt-4">
        <div class="row">
          <section class="col-md-7">
            @include("studentslist")
          </section>
          <section class="col-md-5">

          <div class="card mb-3">
            <img src="https://d33wubrfki0l68.cloudfront.net/3ac241f9fee2e294ee3a5594c2d8b3bf80551379/f5ae6/images/blog/makers_hu5afb5e99e7dda64a600e168d07337c38_68572_960x640_fill_q90_lanczos_center.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Update information of student</h5>

              <form action="{{ url('/update/'.$student[0]['id']) }}" method="POST">
              @csrf
              <div class="form-group">
                <label>CNE</label>
                <input value="{{ $student[0]['cne']}}" name="cne" type="text" class="form-control" placeholder="Enter cne">
              </div>

              <div class="form-group">
                <label>First name</label>
                <input value="{{ $student[0]['firstName']}}" name="firstName" type="text" class="form-control" placeholder="Enter the first name">
              </div>

              <div class="form-group">
                <label>Last name</label>
                <input value="{{ $student[0]['lastName']}}" name="lastName" type="text" class="form-control" placeholder="Enter the last name">
              </div>

              <div class="form-group">
                <label>Age</label>
                <input value="{{ $student[0]['age']}}" name="age" type="text" class="form-control" placeholder="Enter the age">
              </div>
              
              <div class="form-group">
                <label>Speciality</label>
                <input value="{{ $student[0]['speciality']}}" name="speciality" type="text" class="form-control" placeholder="Enter speciality">
              </div>

              <!-- <input type="submit" class="btn btn-info value="Save">
              <input type="reset" class="btn btn-info value="Reset"> -->
              <input type="submit" class="btn btn-info" value="Update">
              <input type="reset" class="btn btn-info" value="Reset">
            </form>

            </div>
          </div>

          
          </section>
        </div>
      </div>
    @endif

    <footer></footer>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>