<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pagina web php, ajax y jquery</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="principal">
  <div id="head">
    <div id="logo">
      <h1>cursoweb
      </h1>
      Tutorial pagina web con php,ajax y jquery
    </div>
    <div id="add468"><img src="img/add468.png" width="468" height="60" /></div>
  </div>
  <div id="menu">
    <div id="item_me">Inicio</div>
    <div id="item_me">Staff</div>
    <div id="item_me">Tops <img class="arrow" src="img/arrows-down.png" width="9" height="5" /></div>
    <div id="item_me">Crear post</div>
    <div id="item_op"><img src="img/out.png" width="16" height="16" /></div>
    <div id="item_op" style="margin-top:1px">Usuario</div>
    <div id="item_op"><img src="img/fav.png" width="16" height="16" /></div>
    <div id="item_op"><div id="notifica_msn">3</div><img  src="img/msn.png" width="16" height="16" /></div>
    <div id="item_op"><div id="notifica_msn">1</div><img src="img/notifica.png" width="16" height="16" /></div>
    
  </div>
  <div id="leftt">
    <div id="section_l">
      <div id="tittle_h"><a href="ver_post.php">Colocar aqu� el contenido</a></div>
      <div id="post_info"><span class="in_txt"><img class="h_img" src="img/date.png" width="14" height="14" />23 Dec, 2011</span>
      <span class="in_txt"><img class="h_img" src="img/category.png" width="14" height="14" /><a href="page/categoria.php">Categoria</a></span>
      <span class="in_txt"><img class="h_img" src="img/author.png" width="14" height="14" /><a href="user/usuario.php">Autor</a></span>
      <span class="in_txt"><img class="h_img" src="img/permalink.png" width="14" height="14" /><a href="ver_post.php">Enlace</a></span>
      </div>
    </div>
    <div id="section_l">
      <div id="tittle_h"><a href="ver_post.php">Colocar aqu� el contenido</a></div>
      <div id="post_info"><span class="in_txt"><img class="h_img" src="img/date.png" width="14" height="14" />23 Dec, 2011</span>
      <span class="in_txt"><img class="h_img" src="img/category.png" width="14" height="14" /><a href="page/categoria.php">Categoria</a></span>
      <span class="in_txt"><img class="h_img" src="img/author.png" width="14" height="14" /><a href="user/usuario.php">Autor</a></span>
      <span class="in_txt"><img class="h_img" src="img/permalink.png" width="14" height="14" /><a href="ver_post.php">Enlace</a></span>
      </div>
    </div>
    <div id="section_l">
      <div id="tittle_h"><a href="ver_post.php">Colocar aqu� el contenido</a></div>
      <div id="post_info"><span class="in_txt"><img class="h_img" src="img/date.png" width="14" height="14" />23 Dec, 2011</span>
      <span class="in_txt"><img class="h_img" src="img/category.png" width="14" height="14" /><a href="page/categoria.php">Categoria</a></span>
      <span class="in_txt"><img class="h_img" src="img/author.png" width="14" height="14" /><a href="user/usuario.php">Autor</a></span>
      <span class="in_txt"><img class="h_img" src="img/permalink.png" width="14" height="14" /><a href="ver_post.php">Enlace</a></span>
      </div>
    </div>
    <div id="section_l">
      <div id="tittle_h"><a href="ver_post.php">Colocar aqu� el contenido</a></div>
      <div id="post_info"><span class="in_txt"><img class="h_img" src="img/date.png" width="14" height="14" />23 Dec, 2011</span>
      <span class="in_txt"><img class="h_img" src="img/category.png" width="14" height="14" /><a href="page/categoria.php">Categoria</a></span>
      <span class="in_txt"><img class="h_img" src="img/author.png" width="14" height="14" /><a href="user/usuario.php">Autor</a></span>
      <span class="in_txt"><img class="h_img" src="img/permalink.png" width="14" height="14" /><a href="ver_post.php">Enlace</a></span>
      </div>
    </div>
  </div>
  <div id="rigthh">
    <div id="sectio_r">
      <label for="buscar"></label>
      <input type="text" name="buscar" id="buscar" placeholder="Buscar.." />
      <input type="submit" name="button" id="button" value="" class="btn_b" />
    </div>
    <div id="sectio_r">
      <div id="side_r">estadisticas</div>
    <span class="txt_side"><a href="user/online.php">203 usuarios en linea</a></span><br />
     <span class="txt_side"><a href="user/miembros.php">892 miembros registrados</a></span><br />
     <span class="txt_side">3002 posts creados</span><br />
     <span class="txt_side">200 comentarios en los posts</span></div>
    <div id="sectio_r">
      <div id="side_r">ultimos comentarios</div>
      <span class="txt_side"><a href="ver_post.php">Enlace a �ltimo comentario de...</a></span><br />
      <span class="txt_side"><a href="ver_post.php">Enlace a �ltimo comentario de...</a></span>
    </div>
    <div id="sectio_r" style="height: 60px">
      <div id="side_r">mejores tags</div>
    <a href="#"><div class="tags_t">Tags</div></a>
    <a href="#"><div class="tags_t">Tags2</div></a>
    <a href="#"><div class="tags_t">Tags3</div></a>
     </div>
  </div>
</div><div id="footer"><div id="txt_fo"><a href="#">Pagina1</a> <a href="#">Pagina2</a> <a href="#">Pagina3</a> <a href="#">Pagina4</a></div>
</div>
</body>
</html>