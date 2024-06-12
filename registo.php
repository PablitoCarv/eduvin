
<?php include('ligacao.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
 
    background-color: black;
}

.register-container {
  margin: 3em auto;
  display: flex;
  align-items: center;
  justify-content: center;
}

.form {
  background-color: white;
  border-radius: 40px;
  box-sizing: border-box;
  
  padding: 40px;
  width: 320px;
}

.title {
  color: Black;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: Black;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: black;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: white;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: white;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: white;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: white;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}

.submit {
  background-color: white;
  border-radius: 12px;
  border: 1px solid black;
  box-sizing: border-box;
  color: black;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}

</style>
<body>
  <?php include('cabecalho.php');?>
    <div class="register-container">
      <div class="form">
        <div class="title">Olá</div>
        <div class="subtitle">Vamos criar a sua conta!</div>
        <div class="input-container ic1">
          <input id="firstname" class="input" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="firstname" class="placeholder">Primeiro nome</label>
        </div>
        <div class="input-container ic2">
          <input id="lastname" class="input" type="text" placeholder=" " />
          <div class="cut"></div>
          <label for="lastname" class="placeholder">Último nome</label>
        </div>
        <div class="input-container ic2">
          <input id="email" class="input" type="text" placeholder=" " />
          <div class="cut cut-short"></div>
          <label for="email" class="placeholder">Email</>
        </div>
        <div class="input-container ic2">
          <input id="password" class="input" type="text" placeholder=" " />
          <div class="cut cut-short"></div>
          <label for="password" class="placeholder">Password</>
        </div>
        <button type="text" class="submit">Registar</button>
      </div>
    </div>
    <?php include('footer.php');?>
</body>
</html>
