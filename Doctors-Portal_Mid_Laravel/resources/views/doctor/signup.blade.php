<!DOCTYPE html>
<html>
<head>
  <style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.signup-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.signup-page .form .signup{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 15px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 12px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
<link rel="stylesheet" href="style.css">
<title> Doctor SignUp</title>
</head>
<body>
  <body>
    <div class="signup-page">
      <div class="form">
        <div class="signup">
          <div class="signup-header">
            <h3>Registration</h3>
            <p>Please fillup form to create an account.</p>
          </div>
        </div>
        <form action="/signup" method="post" class="signup-form">
        @csrf
        @if(session()->has('success'))
        {{session('success')}}<br>
        @endif
        <span  style="color:red;">{{session('msg')}}
        @foreach($errors->all() as $err)
          {{$err}} <br>
        @endforeach

        </span> <br/><br/><br/>
        
          <input type="text" name="username" placeholder="username"/>
          <input type="email" name="email"  placeholder="email"/>
          <input type="password" name="password"  placeholder="password"/>
          <input type="text" name="title"  placeholder="title"/> 
          <input type="text" name="chamber"  placeholder="chamber"/> 
          <input type="text" name="department"  placeholder="department"/> 
          <input type="text" name="address"  placeholder="address"/> 
          <input type="text" name="city"  placeholder="city"/>
          <input type="text" name="country"  placeholder="country"/>
          <button type="submit"  name= "submit">Sign up</button>
        </form>
      </div>
    </div>
</body>
</body>
</html>
  