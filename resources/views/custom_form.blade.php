<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="csrf-token" content="{ csrf_token }">
    <title>Document</title>
</head>
<body>
    
    <div class ="container mt-5">
       @if(session('success'))
       <div class ="alert alert-success">{{ session('success') }}</div>
      @endif

<form action ="{{ url('/form') }}" method="POST"> 
    @csrf

   <div class="mb-3">
    <label>Full Name</label>
    <input type="text" name="full_name" class="form-control" placeholder="Enter tthe Value">
    @error('full_name') <small class="text-danger">{{ $message }}</small> @enderror
</div>


<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter tthe Value">
    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
</div>


<div class="mb-3">
    <label>Mobile</label>
    <input type="text" name="mobile" class="form-control" placeholder="Enter tthe Value">
    @error('mobile') <small class="text-danger">{{ $message }}</small> @enderror
</div>


<div class="mb-3">
    <label>Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter tthe Value">
    @error('address') <small class="text-danger">{{ $message }}</small> @enderror
</div>


<div class="mb-3">
    <label>Gender</label>
    <select class="form-select" name="gender">
        <option value="">Select the Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">others</option>
</select>
    @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Date of  Birth</label>
    <input type="date" name="dob" class="form-control" placeholder="Enter tthe Value">
    @error('dob') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Course</label>
    <input type="text" name="course" class="form-control" placeholder="Enter tthe Value">
    @error('course') <small class="text-danger">{{ $message }}</small> @enderror
</div>


<div class="mb-3">
    <label>University</label>
    <input type="text" name="university" class="form-control" placeholder="Enter tthe Value">
    @error('university') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Passport Number</label>
    <input type="text" name="passport" class="form-control" placeholder="Enter tthe Value">
    @error('passport') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <label>Captcha</label>
    <span id="captcha-img">{!! captcha_img() !!}</span>
    <button type="button" id="reload" class="btn btn-small btn-outline-secondary">
        &#x21BB; 
    </button>
    <input type="text" name="captcha" class="form-control" placeholder="Enter the Value">
    @error('captcha') <small class="text-danger">{{ $message }}</small> @enderror
</div>


<button class="btn btn-primary">Submit</button>
</form>
</div>
</div>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">  </script>
<script>
    $('#reload').click(function(){
        $.ajax({
            type:"GET",
            url:'/reload-captcha',     //'/reload-captcha'  yaaad rakhna 
            success:function(data){
                $('#captcha-img').html(data.captcha)
            }
        });
    });
    </script>

</body>
</html>
