<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/18/2018
 * Time: 1:01 PM
 */

require_once ("dao/userDataRead.php");
?>
<div class="row">
    <div class="col-lg-12 container-header-top">
        <h4 class="bg-success container-header">
            <?php echo ($ln=='en')?USER_LIST_TITLE_EN:USER_LIST_TITLE_BN; ?>
            <a  href="user.php?page=uForm" class="pull-right">
                <i class="fa fa-plus fa-button"></i>
            </a>
        </h4>
    </div>
</div>
<div class="row">
</div>
<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-responsive">
            <thead class="">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>office</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Intercom</th>
                <th>Address</th>
                <th>User Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($users)): ?>
                <?php foreach ($users as $key=>$user): ?>
                    <tr>
                        <td><?php echo ($key+1); ?></td>
                        <td><?php echo (isset($user['name']))?strtoupper($user['name']):"--" ?></td>
                        <td><?php echo (isset($user['office']))?strtoupper($user['office']):"--" ?></td>
                        <td><?php echo (isset($user['phone']))?strtoupper($user['phone']):"--" ?></td>
                        <td><?php echo (isset($user['email']))?strtoupper($user['email']):"--" ?></td>
                        <td><?php echo (isset($user['intercom']))?strtoupper($user['intercom']):"--" ?></td>
                        <td><?php echo (isset($user['address']))?strtoupper($user['address']):"--" ?></td>
                        <td><?php echo (isset($user['username']))?strtoupper($user['username']):"--" ?></td>
                        <td>
                            <a href="user.php?page=uForm&id=<?php echo $user['id']?>"><i class="fa fa-edit"></i> </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No Data found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>