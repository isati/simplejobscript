<?php

$smarty->assign('current_category', 'password');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($_POST['new_password'])) {
		$smarty->assign('error', 'The password is empty. Please type in your new password.');
	} elseif ($_POST['new_password'] != $_POST['verify_password']) {
		$smarty->assign('error', 'The new password and verification password do not match.');
	} else {
        $_POST['new_password'] = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
		$result = $db->query('
			UPDATE
				'.DB_PREFIX.'admin
			SET
				password = "' . $_POST['new_password'] . '"
			WHERE
				id = 1
		');


		$smarty->assign('success', 'Your password has been changed!');
	}
}
