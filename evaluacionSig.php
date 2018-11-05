<?php

    if(isset($_POST['terminar']))
    {
        $r1 = $_POST['P1'];
        $r2 = $_POST['P2'];
        $r3 = $_POST['P3'];
        $r4 = $_POST['P4'];
        $r5 = $_POST['P5'];
        

        $resultado = $r1+$r2+$r3+$r4+$r5;

        if($r1 == 0){
            echo "<style>
                  h3 {color:red;}
                  h4 {color:green;}
                  h2 {align:center;}
                  </style>
                  <h3>Pregunta 1 incorrecta</h3>";
            echo "<h4>Correcta = B)</h4></br></br>";}

        if($r2 == 0){
            echo "<h3>Pregunta 2 incorrecta</h3>";
            echo "<h4>Correcta = A)</h4></br></br>";}

        if($r3 == 0){
            echo "<h3>Pregunta 3 incorrecta</h3>";
            echo "<h4>Correcta = B)</h4></br></br>";}

        if($r4 == 0){
            echo "<h3>Pregunta 4 incorrecta</h3>";
            echo "<h4>Correcta = D)</h4></br></br>";}

        if($r5 == 0){
            echo "<h3>Pregunta 5 incorrecta</h3>";
            echo "<h4>Correcta = C)</h4></br></br>";}    

        echo "<h2>Aciertos =".$resultado."/5</h2>";
        
        
    }
    ?>