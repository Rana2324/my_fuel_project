<?php
/* Smarty version 3.1.46, created on 2023-11-19 17:14:40
  from '/home/shihab/Projects/my_fuel_project/fuel/app/views/student/test.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_655a42800df236_76137887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90e69fdea87b218080dbca086194e179b7115378' => 
    array (
      0 => '/home/shihab/Projects/my_fuel_project/fuel/app/views/student/test.tpl',
      1 => 1700414078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655a42800df236_76137887 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
            crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>

<body class="d-flex justify-content-center align-items-center" style="height:100vh">
<div class="d-flex flex-column w-50 p-5 border" style="gap: 20px">
    <form action="student/create" method="POST" class="row g-3">
        <div class="col-8">
            <input type="text" class="form-control" name="name" id="inputPassword2" placeholder="Name" required>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-success mb-3 w-100">Save</button>
        </div>
    </form>
    <form action="/" method="GET" class="row g-3">
        <div class="col-8">
            <input type="text" class="form-control" id="inputPassword2" name="search" placeholder="Search by name"
                   required value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
">
        </div>
        <div class="col-4">
            <button type="submit"
                    class="btn btn-info mb-3 <?php if ($_smarty_tpl->tpl_vars['query']->value) {?>w-50<?php } else { ?>w-100<?php }?>">Search
            </button>
            <?php if ((isset($_smarty_tpl->tpl_vars['query']->value))) {?>
                <a href="/" class="btn btn-danger mb-3 w-25">Reset</a>
            <?php }?>
        </div>

    </form>

    <div>
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Students']->value, 'Student');
$_smarty_tpl->tpl_vars['Student']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Student']->value) {
$_smarty_tpl->tpl_vars['Student']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['Student']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Student']->value->name;?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</div>
</body>

</html>
<?php }
}
