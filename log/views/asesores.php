<?php
session_start();
require_once("../mysql/conexion.php"); 
$mail = $_SESSION["mail"];
$sql  = "SELECT * FROM clientes WHERE mail = '$mail'";
$qry  = mysqli_query($conexion,$sql);
$row  = mysqli_fetch_array($qry);
?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<div id="inputs">
    <h4>Sr.o Sra.</h4>
    <p class="category"><?php echo $row["name"]; ?></p>
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="form-group form-group-no-border">
                <input type="text" value="<?php echo $row["mail"]; ?>" placeholder="Regular" class="form-control" disabled/>
            </div>
        </div>
    </div>
</div>
<div class="section section-team text-center ">
    <div class="container">
        <h2 class="title">Quien puede atenderte</h2>
        <div class="team">
            <div class="row">
                <?php 
                $sql_a = "SELECT * FROM asesores";
                $qry_a = mysqli_query($conexion,$sql_a);
                while ($row_a = mysqli_fetch_array($qry_a)) {
                    ?>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="assets/img/<?php echo $row_a["imagen"]; ?>" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                            <h4 class="title"><?php echo $row_a["nombre"]; ?></h4>
                            <p class="category text-primary"><?php echo $row_a["especialidad"]; ?></p>
                            <p class="description"><?php echo $row_a["descripcion"]; ?>
                        </div>
                        <div id="hangout_div1" align="center">
                          <a id="pulsar1">
                            <g:hangout render="createhangout"
                            invites="[{ id : '<?php echo $row_a["mail"]; ?>', invite_type : 'EMAIL' }]">
                            </g:hangout>
                          </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>