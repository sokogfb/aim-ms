<?php

$success_member_store = $this->session->userdata('success_member_store');
$failure_member_store = $this->session->userdata('failure_member_store');

$success_member_update = $this->session->userdata('success_member_update');
$failure_member_update = $this->session->userdata('failure_member_update');

$success_member_delete = $this->session->userdata('success_member_delete');
$failure_member_delete = $this->session->userdata('failure_member_delete');

if (isset($success_member_store) && ($success_member_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The member has been added successfully
    </div>
    ";
} else if (isset($failure_member_store) && $failure_member_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The member could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_member_update) && ($success_member_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The member has been updated succesffully
    </div>
    ";
} else if (isset($failure_member_update) && $failure_member_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The member could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_member_delete) && ($success_member_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The member has been deleted succesffully
    </div>
    ";
} else if (isset($failure_member_delete) && $failure_member_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The member could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} 
// clear session
$array = array('success_member_store', 'failure_member_store',
                'success_member_update', 'failure_member_update',
                'success_member_delete', 'failure_member_delete');

$this->session->unset_userdata($array);
