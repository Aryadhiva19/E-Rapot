<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
    <style>
        P {
        font-family:Arial, Helvetica, sans-serif;
        }
        body{
            text-align: center;
        }
        form{
            margin-bottom: 10px;
            line-height: 28px;         
        }
    </style>
<body>
    <h1><b>Login</b></h1>
    <p>E-Rapot 4E</p>
    <?php if($this->session->flashdata('message')): ?>
        <?php echo ($this->session->flashdata('message')); ?>
    <?php endif; ?>
    <form action="<?= base_url('Auth'); ?>" method="post">
        <div>
        <label>Username:</label>
        <input type="text" placeholder="Username" name="username" required/>
        <?= form_error('username', '<small class="text-danger pl-3">','</small>'); ?>
        </div>
        <div>
        <label>Password:</label>
        <input type="password" placeholder="password" name="password" required/>
        <?=  form_error('password', '<large class="text-danger pl-4">','</large>'); ?>
        </div>
        <input type="submit" value="Kirim" name="login">
    </form>
</body>
</html>