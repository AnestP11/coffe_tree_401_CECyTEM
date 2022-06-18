<?php
$conex=mysqli_connect("localhost","root","","coffe_tree")or die("no se conecto");
    if(isset($_POST['register'])){
    if(
           strlen($_POST['Nombre'])>=1 &&
           strlen($_POST['A_pat'])>=1 &&
           strlen($_POST['A_mat'])>= 1 &&
           strlen($_POST['cont'])>=1 &&
           strlen($_POST['E_mail'])>=1 &&
           strlen($_POST['telefono'])>=1){
            
         $nombre=trim($_POST['Nombre']);
         $paterno=trim($_POST['A_pat']);
         $materno=trim($_POST['A_mat']);
         $contrasena=trim($_POST['cont']);
         $email=trim($_POST['E_mail']);
         $telefono=trim($_POST['telefono']);
         $consulta="INSERT INTO usuario(Matricula,Nombre,A_pat,A_mat,Contrasena,Correo,telefono)VALUES(default,'$nombre','$paterno','$materno','$contrasena','$email','$telefono')";
        $resultado=mysqli_query($conex,$consulta);
        if($resultado){
        ?>
        <h3 class="ok">¡Correcto!</h3>
<?php
            echo"<script language-Javascript>location.href=\"home.html\";</script>";
        ?>
        <?php
        }else{
        ?>
        <h3 class="bad">¡todo mal!</h3>
        <?php
        }
        }else{
        ?>
        <h3 class="bad">¡Completa campos!</h3>
        <?php
        }
   }
?>
