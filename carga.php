<!DOCTYPE html>
<html>
<head>
  <title>sdf</title>
</head>
<body>
<style type="text/css">
.cargaCircular * {
    box-sizing: border-box;
}
.cargaCircular {
    height: 200px;
    position: relative;
    width: 200px;
}

.cargaCircular .dona {
    background: #f2f2f2;
    border-radius: 50%;
    clip: rect(0px, 200px, 200px, 100px);
    height: 100%;
    position: absolute;
    width: 100%;
}

.cargaCircular .relleno {
    border-radius: 50%;
    clip: rect(0px, 100px, 200px, 0px);
    height: 100%;
    position: absolute;
    width: 100%;
}

.sombra {
    background-color: #fff;
    border-radius: 50%;
    box-shadow: 0 4px 7px rgba(0, 0, 0, 0.3);
    border: 5px solid #000;
    height: 100%;
    position: absolute;
    width: 100%;
}

#porcionInicial {
    transform: rotate(0deg);
}

#porcionInicial .relleno {
    background-color: #f4762b;
    transform: rotate(180deg);
}

#porcionFinal {
    transform:rotate(-180deg);
}

#porcionFinal .relleno {
    background-color: #f4762b;
}

.circulo-interno{
  width: 120px;
  height: 120px;
  background: #fff;
  border-radius: 50%;
  position: absolute;
  z-index: 100;
  left: 40px;
  top: 40px;
  text-align: center;
  padding-top: 30px;
  font-size: 40px;
}


</style>


<?php
$porcentajeTotal = $_GET['PORCENTAJE'] * 3.6;

if( $porcentajeTotal >= 180 )
{
  $porcentajeInicial = 180;
  $porcentajeFinal = $porcentajeTotal - 180;
} else {
  $porcentajeInicial = $porcentajeTotal;
  $porcentajeFinal = 0;
}

?>


<div class="cargaCircular">
    <div class="circulo-interno"><?php echo $_GET['PORCENTAJE']; ?> %</div>
    <div class="sombra"></div>

    <div id="porcionInicial" class="dona">
      <div class="relleno" style="transform: rotate(<?php echo $porcentajeInicial; ?>deg);" ></div>
    </div>
    <div id="porcionFinal" class="dona">
      <div class="relleno" style="transform: rotate(<?php echo $porcentajeFinal; ?>deg);" ></div>
    </div>
</div>


</body>
</html>