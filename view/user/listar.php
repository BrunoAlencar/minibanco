<link href="../../css/bootstrap.min.css" rel="stylesheet">

<?php
include '../../control/UserController.php';
include '../../template/header.php';
$userController = new UserController();
?>
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
        <!-- Default panel contents -->
        <div class="panel-heading">Users</div>
        <div class="panel-body">

            <button type="button" class="btn btn-primary btn-sm col-md-offset-11" aria-label="Left Align">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                <a href="http://www.globo.com" target="_blank" style="color: #ffffff; text-decoration: none"  >adicionar</a>
            </button><br><br>

            <table class="table table-striped table-hover">
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Password
                    </th>
                    <th>
                        Action
                    </th>

                </tr>
                <?php foreach ($userController->findAll() as $user) { ?>
                    <tr>
                        <td><?php echo $user->user_id; ?></td>
                        <td><?php echo $user->user_name; ?></td>
                        <td><?php echo $user->user_email; ?></td>
                        <td>
                            <?php echo $user->user_password; ?>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Action
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>


<?php
include '../../template/footer.php';

?>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>