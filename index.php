<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  <script src="js/index.js"></script>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="bgimg-1">
  <div class="caption">
    <span class="border">SMART 360</span>
  </div>
</div>


<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;color: #f7f7f7;">¿Quiénes Somos?</h3>
  <p>Somos un grupo de estudiantes avanzados de la carrera de Ingeniería Informatica trabajando juntos, amantes de nuestro trabajo y plasmamos esa pasión en cada desarrollo. </p>
  <p>Para nosotros, cada proyecto es un desafío y un compromiso. Nos interesa contribuir en los proyectos y sentirnos partes de los mismos. Es por esa razón, que la transparencia y la honestidad son los 
  principios fundamentales de nuestras relaciones comerciales.
  
  </p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">NUESTROS SERVICIOS</span>
  </div>
</div>

<div class="container-fluid" style="position:relative;">
  <div class="row" id="contServicios">
    <div class="col-md-1"></div>
    <div class="col-md-5" id="izqServicios">
      <h3> Mejoramos Experiencias </h3>
      <img src="img/build.png"  id="sistemasImg">
      <p>Actualizamos sistemas y nos enfocamos en crear ambientes de trabajo amigables y seguros.</p>
    </div>
    <div class="col-md-5" id="derServicios">
      <h3> Generamos Arte Informático</h3>
      <img src="img/desarrollo_web.png"  id="desarrolloImg">
      <p>Nos enfocamos en construir aplicaciones escalables en la nube.</p>
    </div>
    <div class="col-md-12" id="tituloServicios" >
    <p>Brindamos servicio personalizado, desarrollando la solución que mejor satisfaga las necesidades de cada proyecto.
  Ofrecemos servicios completos de Diseño de sitios Web, actualizacion y mantenimiento de sistemas informaticos y 
  desarrollo de sistemas. Nos caracterizamos por la creación de aplicaciones y sitios web auto administrables con sistemas de gestión veloces, intuitivos y fáciles de utilizar.</p>
    </div>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">NUESTRO EQUIPO</span>
  </div>
</div>

<div class="container-fluid" style="position:relative;">
  <div class="row" id="contEquipo">
    <div class="col-md-1"></div>
    <div class="col-md-5" id="izqEquipo">
    <a href="http://elrincondesandro.esy.es/cvWeb/DatosPersonales.html" target="_blank" title="Click para ver el Curriculum Personal">Sandro Dezerio</a>
      <p>DESARROLLADOR WEB</p>
      <img src="img/sandro.png"  id="sandroAnimado">
      <p> Su experiencia en desarrollo web lo hace invencible. Sandro tiene interés especial por compartir su conocimiento a través de blogs, artículos y redes sociales. En su tiempo libre, disfruta ver series de televisión, y hacer cursos online.</p>
    </div>
    <div class="col-md-5" id="derEquipo">
      <a href="http://pabloratibel.sytes.net" target="_blank" title="Click para ver el Curriculum Personal" >Pablo Ratibel</a>
      <p>PROGRAMADOR NERD</p>
      <img src="img/pablo.png"  id="pabloAnimado" >
      <p> Pablo es un entuciasta y trabaja de muchas cosas, dicta clases en secundaria, mantiene sistemas y disfruta dando cursos de programacion para olimpiadas. En su tiempo libre, adora hacer viajes cortos con amigos, hace poco descubrió el snowboard y le encanto.</p>
    </div>
  </div>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">CONTACTANOS</span>
  </div>
</div>

<div class="container-fluid" style="position:relative;">
  <div class="row" id="contContaco">
    <div class="col-md-12" >
    <p>Podés contactartactarnos por mail o encontrarnos en las redes sociales</p>
    <a href="mailto:contacto@smart360.com.ar"><img src="img/icono-email.png"  id="imgMail" ></a>
    <a href="mailto:contacto@smart360.com.ar">contacto@smart360.com.ar</a>
    
    <p>Para otras consultas, completá el siguiente formulario para comunicarte con nosotros y acercarnos tus mensajes.</p>
    </div>
  </div>
  
</div>

<div id="cont" style="color:#ddd;background-color:transparent;text-align:center;padding:50px 80px;text-align: justify;">  
    <div  class="container-fluid">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          
          <form action="" method="post" id="formulario">
            <div class="form-group">
              <label for="nombre">Nombre: </label>
              <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre completo..." class="form-control"/>
              <div id="nombreInfo" class="error"></div>
            </div>
            <div class="form-group">
              <label for="asunto">Asunto: </label>
              <input type="text" name="asunto" id="asunto" placeholder="Ingrese el asunto..." class="form-control"/>
              <div id="asuntoInfo" class="error"></div>            
            </div>
            <div class="form-group">
              <label for="email">Mail: </label>
              <input type="text" name="email" id="email" placeholder="Ingrese su email..." class="form-control"/>
              <div id="emailInfo" class="error"></div>            
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje: </label>
              <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="form-control"></textarea>
              <div id="mensajeInfo" class="error"></div>            
            </div>          
          </form>
          <button type="submit" class="btn btn-success" id="enviar" onclick="checkAndSend()">Enviar Mail</button>
        </div>
      </div> 
    </div>
  </div>
<!--</div>-->

</body>
</html>

