<html>
    <style>
        .orden{
            margin: 0px 125px 95px auto;
            display: flex;
        }
        .info{
    margin: 35px 125px 95px auto;
    width: 100%;
    font-size:xx-large;
  width: 35%;
  padding: 12px 20px; 
  border-radius: 15px;
  box-sizing: border-box;
        }
        
        .eleccion{
            width: 200%;
        }
        .imagen{
            width: 350px;
            height: 350px;
            margin: 35px auto 95px 100px;
        }

        body{
            background-image: linear-gradient(rgb(0, 60, 255), rgb(0, 140, 255)); 
        }

        .button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
  font-size: 16px;
  width: 25%;
  
}

.button5:hover {
  background-color: #555555;
  color: white;
}
    </style>
    
<body>
    <div class = "Orden">
    <div class = "imagen">
        <img style = "width: 100%; height: 100%;" src="Sinfondo.png" alt="Italian Trulli">
    </div>

    <form method="POST" action="usuariosCreYreg.php">

        <div class = "info">
        <label for="fname">Usuario</label><br>
        <input class="uno" name="usuario" placeholder="Nombre" type="text">

        <label for="lname">Contraseña</label><br>
        <input class="uno" name="contra" placeholder="Contraseña" type="text">

        <label for="lname">Nivel del Usuario</label><br>

        <div class = "eleccion">
            <select name="nivel" id="nivelus" >
            <option value=""></option>
            <option value="Nivel 1">Nivel 1</option>
            <option value="Nivel 2">Nivel 2</option>
            <option value="Nivel 3">Nivel 3</option>
            </select>
            <br><br>
            <br>
        </div>
        <button type="submit" class="button button5" value="Registrar" name="registrar"> Registrar </button>
        <button class="button button5">Cancelar</button>    
    </form>
        


</div>
</div>

</body>
</html>

