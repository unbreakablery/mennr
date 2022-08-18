<!DOCTYPE html>
<html>

<head>
  <title>{{ env('APP_NAME') }}</title>
</head>

<body>
  <p>Hi Mennr Support,</p>
  <p><strong>{{ $first_name }} {{ $last_name }}</strong> required "Get A Free Demo".</p>

  <p>Here is his detail info:</p>
  <p>First Name: {{ $first_name }}</p>
  <p>Last Name: {{ $last_name }}</p>
  <p>Email: {{ $email }}</p>
  <p>Phone: {{ $phone }}</p>
  <p>Business Name: {{ $business_name }}</p>
  <p>Business Type: {{ $business_type }}</p>
  <p>Number of Employees: {{ $employees }}</p>

  <p>Thank you</p>
  <p>Mennr.com</p>
</body>

</html>