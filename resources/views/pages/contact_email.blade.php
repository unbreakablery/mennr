<!DOCTYPE html>
<html>
<head>
  <style>
    h2{text-align: center;}
    h3{padding-left:20px; color:#000 ;}
    .body div{ margin-top:18px;font-size:14px;}
  </style>
</head>
<body>
  <div class="outer">
    <div class="inner">
      <div class ="body">
          <h2>Demo Request</h2>
          <div class="first_name">
            <h3 style="display: inline;">First Name : </h3><span>{{ $first_name }}</span>   
          </div>
          <div class="last_name">
            <h3 style="display: inline;">Last Name : </h3><span>{{ $last_name }}</span>   
          </div>
          <div class="email">
            <h3 style="display: inline;">Email Address : </h3><span>{{ $email_id }}</span>
          </div>
          <div class="phone_no">
            <h3 style="display: inline;">Phone No : </h3><span>{{ $phone_no }}</span>   
          </div>
          <div class="company_name">
            <h3 style="display: inline;">Company Name : </h3><span>{{ $company_name }}</span>   
          </div>
          
          <div class="no_of_location">
            <h3 style="display: inline;">No of Locations : </h3><span>{{ $no_of_location }}</span>
          </div>
          <div class="business_type">
            <h3 style="display: inline;">Business Type : </h3><span>{{ $business_type }}</span>
          </div>
          <div class="no_of_provider">
            <h3 style="display: inline;">No of Providers : </h3><span>{{ $no_of_provider }}</span>
          </div>
      </div>
    </div>
  </div>
</body>
</html>
