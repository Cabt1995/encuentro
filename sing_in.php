<!doctype html>
<html lang="en">
  <head>
    <title>Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/SingIn.css">
    <link rel="stylesheet" type="text/css" href="calendario/tcal.css">
    <script type="text/javascript" src="calendario/tcal.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Graduate|Manuale|Pacifico" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <style type="text/css">
      p.parrafo{
        color:white;
      }
    </style>
  </head>
  <body>
    
    <section class="encabezado">
      <center>
        <h1>2° Encuentro de Ingeniería Industrial</h1>
        <p>Accede a Funciones Únicas para usuarios Registrados</p>

      </center>
    </section>
    
    <section class="datos">
       
       <center>
         
         <form action="">
            
            <p><h3>Datos personales</h3></p>

            <ul>
              <li>
                <label for="Nombre">
                  <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Nombre:">
                </label>
              </li>
              <li>
                <label for="Apellidos">
                  <input type="text" name="Apellidos" id="Apellidos" class="form-control" placeholder="Apellidos:">
                </label>                
              </li>
              <li>
                <ul>
                  <li>
                    <label for="Edad" class="mitad">
                      <input type="text" name="Edad" class="form-control tcal" placeholder="mm/dd/aaaa">
                    </label>
                  </li>
                  <li>
                    <label for="Genero" class="mitad">
                      <select name="Genero" id="Genero" class="form-control">
                        <option> -- Seleccione Genero --</option>
                        <option> Hombre </option>
                        <option> Mujer </option>
                      </select>
                    </label>
                  </li>
                  <li>
                    <label for="Pais" class="mitad">
                      <select name="Pais" id="Pais" class="form-control">
                        <option> --Selecciona un País-- </option>
                        <option> </option>
                      </select>
                    </label>
                  </li>
                </ul>
              </li>
              <li>
                <label for="Direccion">
                  <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Direccion">
                </label>
              </li>
              <li>
                <ul>
                  <li>
                    <label for="Estado" class="mitad">
                      <select name="Estado" id="Estado" class="form-control" >
                        <option> --Seleccione su Estado--</option>
                      </select>
                    </label>
                  </li>
                  <li>
                    <label for="Municipio" class="mitad">
                      <select name="Municipio" id="Municipio" class="form-control">
                        <option> --Seleccione su Município-- </option>
                      </select>
                    </label>
                  </li>
                  <li>
                    <label for="Codigo" class="mitad">
                      <input type="text" name="Codigo" id="Codigo" class="form-control" placeholder="Código Postal">
                    </label>
                  </li>
                </ul>
              </li>
            </ul>  
           
           <p><br><h3>Datos Académicos</h3></p>

           <ul>
             <li>
               <label for="Escuela">
                 <select name="Escuela" id="Escuela" class="form-control">
                   <option> --Selecciona tu Escuela--</option>
                 </select>
               </label>
             </li>
             <li>
               <label for="Carrera">
                 <select name="Carrera" id="Carrera" class="form-control">
                   <option> --Selecciona tu Carrera--</option>
                 </select>
               </label>
             </li>
             <li>
               <label for="Puesto">
                 <select name="Puesto" id="Puesto" class="form-control">
                   <option> --Selecciona tu Ocupación-- </option>
                   <option> Alumno </option>
                   <option> Estudiante </option>
                 </select>
               </label>
             </li>
             <li>
               <label for="message-text" class="describe">
                 <p>Describe brevemente que esperas de este encuentro: </p>
                 <textarea class="form-control" id="message-text"></textarea>
               </label>
             </li>
           </ul>

          <p><h3>DATOS DE REGISTRO</h3></p>
            <ul>
              <li>
                <label for="exampleFormControlFile1"><h6>Foto de Perfil</h6></label>
                    <input type="file" class="form-control-file " id="exampleFormControlFile1">
              </li>
              <li>
                <label for="Correo">
                  <input type="text" name="Correo" class="form-control" id="Correo" placeholder="Correo Electrónico">
                </label>
              </li>
              <li>
                <label for="CCorreo">
                  <input type="text" name="CCorreo" class="form-control" id="CCorreo" placeholder="Confirmar Correo Elctrónico">
                </label>
              </li>
              <li>
                <label for="Contra">
                  <input type="password" name="Contra" class="form-control" id="Contra" placeholder="Contraseña: ">
                </label>
              </li>
              <li>
                <label for="CContra">
                  <input type="password" name="CContra" class="form-control" id="CContra" placeholder="Confirmar Contraseña: ">
                </label>
              </li>
            </ul>
             <p>
              <label for="Enviar">
                <button class="btn btn-primary btn-lg" type="submit" id="Enviar">Enviar Datos</button>
              </label>
            </p>  
         </form>
       </center>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>