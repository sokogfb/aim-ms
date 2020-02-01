<?php

$success_buyer_activity_store = $this->session->userdata('success_buyer_activity_store');
$failure_buyer_activity_store = $this->session->userdata('failure_buyer_activity_store');

$success_buyer_activity_update = $this->session->userdata('success_buyer_activity_update');
$failure_buyer_activity_update = $this->session->userdata('failure_buyer_activity_update');

$success_buyer_activity_delete = $this->session->userdata('success_buyer_activity_delete');
$failure_buyer_activity_delete = $this->session->userdata('failure_buyer_activity_delete');

if (isset($success_buyer_activity_store) && ($success_buyer_activity_store == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The buyer activity record has been added successfully
    </div>
    ";
} else if (isset($failure_buyer_activity_store) && $failure_buyer_activity_store == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong>The buyer activity record could not be added, this may be a server issue
    </div>
    ";
} else if (isset($success_buyer_activity_update) && ($success_buyer_activity_update == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The buyer activity record has been updated succesffully
    </div>
    ";
} else if (isset($failure_buyer_activity_update) && $failure_buyer_activity_update == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The buyer activity record could not be updated, this may be a server issue
    </div>
    ";
} else if (isset($success_buyer_activity_delete) && ($success_buyer_activity_delete == true)) {
    echo "
    <div class='alert alert-success alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> The buyer activity record has been deleted succesffully
    </div>
    ";
} else if (isset($failure_buyer_activity_delete) && $failure_buyer_activity_delete == true) {
    echo "
    <div class='alert alert-danger alert-dismissible'>
        <a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Oops!</strong> The buyer activity record could not be deleted, this may be a Server issue, Please try again later
    </div>
    ";
} 
// clear session
$array = array('success_buyer_activity_store', 'failure_buyer_activity_store',
                'success_buyer_activity_update', 'failure_buyer_activity_update',
                'success_buyer_activity_delete', 'failure_buyer_activity_delete',
                );

$this->session->unset_userdata($array);
