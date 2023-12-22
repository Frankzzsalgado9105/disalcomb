<?php
include 'template/menu.php';
?>
<br><br><br><br>
<div class="container">
    <main id="main">
    <div class="card">
  <div class="card-header">
    <h2>Noticias</h2>
  </div>
  <div class="card-body">
   <div class="row">
    <div class="col-md-4">
    <div class="card shadow-sm p-3 mb-5 rounded">
  <div class="card-body">
    <h5 class="card-title"> <i class="fa-solid fa-plus"></i> Agregar Noticias</h5>
    <form id="noticiasForm">
            <div class="mb-3">
                <label class="form-label " for="marcaName">Codigo servicio:</label>
                <input class="form-control"  name="marcaCode" type="text" id="marcaCode" required>
            </div>
            <div class="mb-3">
                <label class="form-label " for="marcaName">Nombre del servicio:</label>
                <input class="form-control"  name="marcaName" type="text" id="marcaName" required>
            </div>
            <div class="mb-3">
                <label class="form-label " for="marcaName">Descripcion del servicio:</label>
                <textarea class="form-control" name="marcaDescription" id="marcaDescription" rows="3" required></textarea>

            </div>
            <button class="btn" style="background: #fbb030;" type="button" onclick="registrarnoticia()">Agregar Servicio</button>
        </form>
  </div>
</div>
    </div>
    <div class="col-md-8" id="noticestList">
        <h2>Todas las noticias</h2>
        <ul id="noticias"></ul>
    </div>
   </div>
  </div>
</div>

<?php
include 'template/footeradmin.php';
?>