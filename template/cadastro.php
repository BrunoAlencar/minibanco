<link href="../../css/bootstrap.min.css" rel="stylesheet">

<?php
include 'header.php';


?>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title" align="center">Cadastro</h3>
        </div>
        <div class="panel-body" align="center">
            <form action="cadastro.php" method="post" name="form">
                id: <input type="text" name="id" value=" "/> <br/>
                nome: <input type="text" name="name"  value=" "/><br/>
                email:<input type="text" name="email" value=" "/><br/>
                senha:<input type="text" name="password" value=" "/><br/>
                <input type="submit" value="Submit Form"/>

            </form>
        </div>
    </div>
</div>
<?php
include 'footer.php';
include '../conection/conProcedure.php';
?>


<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>