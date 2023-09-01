<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
   
    <title>Employee Form</title>
   </head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" onclick="changetitle(0)" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" onclick="changetitle(1)" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Hirer</a>
                            </li>
                        </ul>

                        
                        <div class="tab-content" id="myTabContent">
                            {{-- employee start --}}

                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                <form action="{{url('/employee')}}" method="post">
                                    @csrf
                                <h3 class="register-heading">Apply as a Employee</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="{{old('fname')}}" name="fname"/>
                                            <span class="text-danger">
                                                @error('fname')
                                                    {{$message}}                                                    
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="{{old('lname')}}" name="lname"/>
                                            <span class="text-danger">
                                                @error('lname')
                                                    {{$message}}                                                    
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" name="password"/>
                                            <span class="text-danger">
                                                @error('password')
                                                    {{$message}}                                                    
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="password_confirmation"/>
                                            <span class="text-danger">
                                                @error('password_confirmation')
                                                    {{$message}}                                                    
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="M" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="F">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="{{old('email')}}" name="email"/>
                                            <span class="text-danger">
                                                @error('email')
                                                    {{$message}}                                                    
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value=""/>
                                            <span class="text-danger">
                                                @error('phone')
                                                    {{$message}}                                                    
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="question">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="{{old('answer')}}" name="answer"/>
                                            <span class="text-danger">
                                                @error('answer')
                                                    {{$message}}                                                    
                                                @enderror
                                            </span>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </form>
                            </div>

                            {{-- end employee --}}

                            <!-- start -->
                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                <form action="{{url('/hirer')}}" method="post">
                                    @csrf

                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="{{old('fname')}}" name="fname"/>
                                           <span class="text-danger">
                                            @error('fname')
                                            {{$message}}                                                    
                                        @enderror
                                           </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="{{old('lname')}}" name="lname"/>
                                            <span class="text-danger">
                                                @error('lname')
                                            {{$message}}                                                    
                                        @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="{{old('email')}}" name="email"/>
                                           <span class="text-danger">
                                            @error('email')
                                            {{$message}}                                                    
                                        @enderror
                                           </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="{{old('phone')}}" name="phone"/>
                                           <span class="text-danger">
                                            
                                            @error('phone')
                                            {{$message}}                                                    
                                        @enderror
                                           </span>
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" name="password"/>
                                            <span class="text-danger">
                                            @error('password')
                                            {{$message}}                                                    
                                        @enderror
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" name="password_confirmation"/>
                                           <span class="text-danger">
                                            @error('password_confirmation')
                                            {{$message}}                                                    
                                        @enderror
                                           </span>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="question">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="{{old('answer')}}" name="answer"/>
                                          <span class="text-danger">
                                            @error('answer')
                                            {{$message}}                                                    
                                        @enderror
                                          </span>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <!-- end -->
                        </div>
                    </div>
                </div>

            </div>

            <script>
                function changetitle(x){

                    if(x==0){
                        document.title="Employee Form";
                    }
                    else{
                        document.title="Hirer Form";

                    }

                }
            </script>
            
</body>
</html>