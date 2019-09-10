<html>
<head>
<title>
Inloggningssida
</title>
</head>
<body>
<h1 style="font-family:Open 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;text-align="center";font-size:22pt;
color:#00FF00;>
Logga in 
</h1>
<form name="login">
Användarnamn <input type="text" name="anvadare"/>
Lösenord <input type="password" name="losen"/>
<input type="button" onclick="check(this.form)" value="Login"/>
<input type="reset" value="Cancel"/>
</form>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "myanvandare" && form.pswrd.value == "mylosen")
  {
    window.open('target.html')/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Användarnamn eller Lösenord är felaktig")/*displays error message*/
  }
}
</script>
</body>
</html>