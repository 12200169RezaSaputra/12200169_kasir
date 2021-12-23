<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
$username = [
	'name' => 'username',
	'id' => 'username',
	'value' => null,
	'class' => 'form-control',
	'autocomplete' => 'off'
];

$email = [
	'name' => 'email',
	'id' => 'email',
	'class' => 'form-control'
];
$password = [
	'name' => 'password',
	'id' => 'password',
	'class' => 'form-control'
];

$repeatPassword = [
	'name' => 'repeat_password',
	'id' => 'repeat_password',
	'class' => 'form-control'
];

?>
<h1>Register</h1>


<?= form_open('auth/register') ?>
<div class="form-group">
    <?= form_label("Username", "username") ?>
    <?= form_input($username) ?>
</div>
<div class="form-group">
    <?= form_label("Password", "password") ?>
    <?= form_password($password) ?>
</div>
<div class="form-group">
    <?= form_label("Ulangi Password", "repeat_password") ?>
    <?= form_password($repeatPassword) ?>
</div>

<div class="text-end mt-3">
    <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?= form_close() ?>
<?= $this->endSection() ?>