<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Student Management System</title>
  </head>
  <body>

@include('navbar')

<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Student Management System</h1>
    </div>
</div>

@if ($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                {{-- <section class="col-md-5"></section> --}}
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include('studentslist')
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://d33wubrfki0l68.cloudfront.net/3ac765230c26bbe332d565211794faef5bf7e015/c7d1d/images/blog/makers_hu5afb5e99e7dda64a600e168d07337c38_68572_960x0_resize_q90_lanczos.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Enter Information of the new student</h5>

                      <form action="{{ url('/store') }}" method="post">
                        @csrf
                            <div class="form-group">
                              <label>CNE</label>
                              <input name="cne" type="text" class="form-control"  placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label>Second Name</label>
                                <input name="secondName" type="text" class="form-control"  placeholder="Enter Second Name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Enter Age">
                            </div>
                            <div class="form-group">
                                <label>Specialty</label>
                                <input name="specialty" type="text" class="form-control"  placeholder="Enter Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

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
                @include('studentslist')
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid">
        <div class="row">
            <section class="col-md-7">
                @include('studentslist')
            </section>

            <section class="col-md-5">


            <div class="card mb-3">
                <img src="https://d33wubrfki0l68.cloudfront.net/3ac765230c26bbe332d565211794faef5bf7e015/c7d1d/images/blog/makers_hu5afb5e99e7dda64a600e168d07337c38_68572_960x0_resize_q90_lanczos.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Update Student Information</h5>

                  <form action="{{ url('/update/'.$student->id) }}" method="post">
                    @csrf
                        <div class="form-group">
                          <label>CNE</label>
                        <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label>Second Name</label>
                            <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control"  placeholder="Enter Second Name">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label>Specialty</label>
                            <input value="{{ $student->specialty }}" name="specialty" type="text" class="form-control"  placeholder="Enter Speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="reset" class="btn btn-warning" value="Reset">

                    </form>
                </div>
              </div>


            </section>
         </div>
    </div>

@endif
<footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
