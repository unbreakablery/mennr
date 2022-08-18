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
                <h3 style="display: inline;">Name : </h3><span>{{ $name }}</span>
            </div>
            <div class="email">
                <h3 style="display: inline;">Email : </h3><span>{{ $email}}</span>
            </div>
            <div class="message">
                <h3 style="display: inline;">Message : </h3><span>{{ $message }}</span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
