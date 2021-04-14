<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Gridder</title>
    <?php require_once "dependencias.php"; ?>
    <?php 
        require_once "contenido.php";
        $datos = contenido();
    ?>
</head>

<body style="background-color: #343a40; color:white;">
    <div class="container">
        <h1>Presentacion de imagenes tipo Google</h1>
        <h2>Bestias Mitologicas</h2>
        <!--
             <ul class="gridder">

            <li class="gridder-list" data-griddercontent="#gridder-content-0">
                <img src="img/manticora.jpg">

            </li>

        </ul>

        <div id="gridder-content-0" class="gridder-content">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/manticora.jpg" class="img-responsive">
                </div>
                <div class="col-sm-6">
                    <h2>Manticora</h2>
                    <p>La mant�cora es una legendaria criatura persa similar a la esfinge egipcia. Tiene el cuerpo de un
                        le�n, una cabeza humana con tres filas de dientes afilados y a veces alas de murci�lago. Otros
                        aspectos de la criatura var�an de una historia a otra.</p>
                </div>
            </div>
        </div>
        -->

        <ul class="gridder">
            <?php
                for ($i=0; $i < count($datos) ; $i++):
                    $d = explode ("||", $datos[$i]);


                
            ?>
            <li class="gridder-list" data-griddercontent="<?php echo '#gridder-content-'. $i ?>">
                    <img src="<?php echo $d[0] ?>"> 
            </li>


            <?php
                endfor;
            
            ?>
        </ul>

        <?php
		for ($i=0; $i < count($datos); $i++):
		  	$d=explode("||", $datos[$i]);  
	?>
		<div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content" >
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo $d[0] ?>" class="img-responsive" />
				</div>
				<div class="col-sm-6">
					<h2><?php echo $d[1]; ?></h2>
					<p><?php echo $d[2]; ?></p>
				</div>
			</div>
		</div>
	<?php  
		endfor;
	?>
       
    </div>

</body>

</html>


<script type="text/javascript">

    $(document).ready(function(){
        $(".gridder").gridderExpander({
            scroll: true,
            scrollOffset: 60,
                scrollTo: "listitem", //puede ser panel o listitem
                animationSpeed: 100,
                animationEasing: "easeInOutExpo",
                showNav: true,
                nextText: "<i class=\"fa fa-arrow-right\"></i>",
                prevText: "<i class=\"fa fa-arrow-left\"></i>",
                closeText: "<i class=\"fa fa-times\"></i>",
                onStart: function(){
                    console.log("Gridder Inititialized");
                },
                onContent: function(){
                    console.log("Gridder Content Loaded");
                    $(".carousel").carousel();
                },
                onClosed: function(){
                    console.log("Gridder Closed");
                }

        });
    })


</script>