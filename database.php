<?php 

require_once 'koneksi.php';

function validateName(&$errors, $field_List, $field_name) {
	$pattern = "/^[ a-zA-Z'-]+$/";
	if (!isset($field_List[$field_name]) || empty($field_List[$field_name])) {
		$errors[$field_name] = '*Tidak Boleh Kosong';
	} elseif (!preg_match($pattern, $field_List[$field_name])) {
		$errors[$field_name] = 'Masukkan nama dengan benar';
	}
}

function validateEmail(&$errors, $field_List, $field_name) {
	if(!isset($field_List[$field_name]) ||  empty(trim($field_List[$field_name]))) {
		$errors[$field_name] = '*Tidak Boleh Kosong';
	} elseif (!filter_var($field_List[$field_name], FILTER_VALIDATE_EMAIL)) {
		$errors[$field_name] = 'format email invalid';
	}
}

function validateUsername(&$errors, $field_List, $field_name) {
	$pattern = "/^[a-zA-Z0-9]{3,}$/";
	if (!isset($field_List[$field_name]) || empty($field_List[$field_name])) {
		$errors[$field_name] = '*Tidak Boleh Kosong';
	} elseif (!preg_match($pattern, $field_List[$field_name])) {
		$errors[$field_name] = 'username tidak valid (min.3)';
	}
}

function validatePassword(&$errors, $field_List, $field_name) {
	$pattern = "/^[a-zA-Z0-9]{8,}$/";
	if (!isset($field_List[$field_name]) || empty($field_List[$field_name])) {
		$errors[$field_name] = '*Tidak Boleh Kosong';
	} elseif (!preg_match($pattern, $field_List[$field_name])) {
		$errors[$field_name] = 'min.8 karakter, hanya boleh huruf dan angka';
	}
}

function validateRePassword(&$errors, $field_List, $field_name, $field_check) {
	if (!isset($field_List[$field_name]) || empty($field_List[$field_name])) {
		$errors[$field_name] = '*Tidak Boleh Kosong';
	} elseif ($field_List[$field_name] != $field_List[$field_check]) {
		$errors[$field_name] = '*Tidak sesuai dengan Password';
	}

}

function validateTahun(&$errors, $field_List, $field_name) {
	$pattern = date('Y') - 20;
	if (!isset($field_List[$field_name]) || empty($field_List[$field_name])) {
		$errors[$field_name] = '*Tidak Boleh Kosong';
	} elseif ($field_List[$field_name] >= $pattern) {
		$errors[$field_name] = '*Anda belum 20 tahun';
	}
}

function cekDuplikasi(&$errors, $db, $table, $kolom, $data, $keyError, $pesan) {
	if (isset($errors[$keyError])){
		return;
	}

	$stmnt = $db->prepare("SELECT $kolom FROM $table WHERE $kolom = ?");
	$stmnt->execute([
		$data
	]);

	if ($stmnt->rowCount() > 0) {
		$errors[$keyError] = $pesan;
	} 
}

/**
 * Fungsi Login Multi-User (Admin & Siswa)
 */
function cekLogin(&$errors, $db, $email, $passwordInput) {
    $stmt = $db->prepare("SELECT * FROM ADMIN WHERE EMAIL_ADMIN = ?");
    $stmt->execute([$email]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin) {
        if (password_verify($passwordInput, $admin['PASS_ADMIN'])) {
            $admin['ROLE'] = 'admin'; 
            return $admin; 
        }
    }


    $stmt = $db->prepare("SELECT * FROM PROFIL_SISWA WHERE EMAIL_SISWA = ?");
    $stmt->execute([$email]);
    $siswa = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($siswa) {
        if (password_verify($passwordInput, $siswa['PASS_SISWA'])) {
            $siswa['ROLE'] = 'siswa';
            return $siswa; 
        }
    }

    $errors['login'] = "Email atau Password salah!";
    return false;
}