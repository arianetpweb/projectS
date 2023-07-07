@section('title')
Inscription
@endsection
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
   button{
       padding: 20px;
       margin: 10px;
       border-radius: 10px;
   }
   label{
       background-color: orange;
   }
</style>

</head>
<body background="remplir.jpg">

<center><h4><font color="orange">Veuillez vous inscrire!</font></h4></center>

    <form action="page2.php" methode="post">
    <div class="border-radius container">
    &nbsp;&nbsp;&nbsp;
    <div>
<label class="form-label" for="name">Nom</label>
<input class="form-control" type="text" name="name" required><br>
</div>
<div class="form-group">
    <label for="contact">Contact</label>
    <input class="form-control" type="text" name="contact" required><br>
</div>
<div class="form-group">
    <label for="adresse">Adresse</label>
    <input class="form-control" type="text" name="adresse" required><br>
</div>
<div class="form-group">
    <label  for="email" class="form-label">Email</label>
    <input  class="form-control" type="text" name="email" required><br>
</div>
<div class="form-group">
    <label class="form-label" for="password">Password</label>
    <input class="form-control" type="password" name="password"  required></div>
<div class="form-group">
    <label class="form-label" for="passwordConfirm">PasswordConfirm</label>
<input class="form-control" type="password" name="passwordConfirm"  required><br>
</div>
<div class="form-group">

    <button class="btn btn-primary" type="submit"> Envoyer</buttuon> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button class="btn btn-danger" type="reset">Effacer</button>
</div>
</div>
</form>

</body>
</html>
