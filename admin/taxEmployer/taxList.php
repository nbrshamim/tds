<?php
/**
 * Author: Jakir Hosen Khan.
 * E-mail: jkr.h.khan@gmail.com
 * Date: 10/22/2018
 * Time: 3:15 PM
 */
require_once ("dao/taxEmployerDataRead.php");
?>
<!--<div class="row">
    <div class="col-lg-12 container-header-top">
        <h4 class="bg-success container-header">
            <?php echo FP_INFORMATION_TITLE; ?>
            <?php if($_SESSION['privilege'] && $_SESSION['privilege']==SUPER_ADMIN_PRIVILEGE):?>
            <a  href="../admin/admin.php?page=import" class="pull-right">
                <i class="fa fa-upload fa-button"></i>
            </a>
            <?php endif; ?>
        </h4>
</div>
</div>-->
<!--<div class="row">
    <form class="form-inline" role="form" method="get">
        <input type="hidden" name="page" value="iList">
        <div class="col-lg-12">
            <div class="form-group">
                <label for="filter">Name</label>
                <input class="form-control" type="text" name="name" id="sName" value="<?php echo (isset($sName))?$sName:""; ?>">
            </div>
            <div class="form-group">
                <label for="filter">Passport No</label>
                <input class="form-control" type="text" name="passport_no" id="passport" value="<?php echo (isset($sPassport))?$sPassport:""; ?>">
            </div>
            <div class="form-group">
                <label for="filter">Arrival From</label>
                <input class="form-control" type="text" name="arrival_date_from" id="arrivalDateFrom" value="<?php echo (isset($arrivalDateFrom))?$arrivalDateFrom:""; ?>">
            </div>
            <div class="form-group">
                <label for="filter">To</label>
                <input class="form-control" type="text" name="arrival_date_to" id="arrivalDateTo" value="<?php echo (isset($arrivalDateTo))?$arrivalDateTo:""; ?>">
            </div>
        </div>
        <div class="col-lg-12">&nbsp;</div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="filter">Visa Type</label>
                <select class="form-control search_fld" name="visa_type" id="visaType" placeholder="Visa Type">
                    <option value="">Visa Type</option>
                    <?php foreach ($visaType as $key=>$value): ?>
                        <option value="<?php echo $key ?>" <?php echo ($sVisaType==$key)?"Selected":"" ?> >
                            <?php echo $value; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="filter">Country</label>
                <select class="form-control search_fld" name="country" id="country" placeholder="Country">
                    <option value="">Country</option>
                    <?php if(!empty($countries)):?>
                    <?php foreach ($countries as $key=>$country): ?>
                        <option value="<?php echo $key ?>" <?php echo ($sCountry==$key)?"Selected":"" ?> >
                            <?php echo $country; ?>
                        </option>
                    <?php endforeach;endif; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary"><span class="fa fa-search" aria-hidden="true"></span></button>
        </div>
    </form>
</div>-->
<div class="row">&nbsp;</div>
<div class="row">
    <div class="col-lg-24">
        <table class="table table-bordered table-responsive">
            <thead class="">
            <tr class="tr-th-bg">
                <th>#</th>
                <th>Name</th>
                <th>Nationality </th>
                <th>NID </th>
                <th>Designation </th>
                <th>TIN </th>
                <th>Salary </th>
                <th>Allowence </th>
                <th>House Rent </th>
                <th>Convence</th>
                <th>Entertainmen </th>
                <th>Medical </th>
                <th>Other </th>
                <th>Provident Fund </th>
                <th>Benifit </th>
                <th>Liable Tax </th>
                <th>Eligible Tax </th>
                <th>Tax Credit </th>
                <th>Tax Payble </th>
                <th>Tax Deduct </th>
                <th>Tax Govt </th>
                <th>Remark </th>
<!--                <th>Action</th>-->
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($taxEmplrInfo)): 
                //pr($taxEmplrInfo);
                ?>
                <?php foreach ($taxEmplrInfo as $key=>$value): ?>
                    <tr >
                        <td><?php echo ($key+1); ?></td>                        
                        <td><?php echo (isset($value['name']))?$value['name']:"--" ?></td>
                        <td><?php echo (isset($value['nationality' ]))?$value['nationality' ]:"--" ?></td>
                        <td><?php echo (isset($value['nid']))?$value['nid']:"--" ?></td>
                        <td><?php echo (isset($value['designation']))?$value['designation']:"--" ?></td>
                        <td><?php echo (isset($value['tin']))?$value['tin']:"--" ?></td>
                        <td><?php echo (isset($value['g_salary']))?$value['g_salary']:"--" ?></td>
                        <td><?php echo (isset($value['h_allowence']))?$value['h_allowence']:"--" ?></td>
                        <td><?php echo (isset($value['i_houserent']))?$value['i_houserent']:"--" ?></td>
                        <td><?php echo (isset($value['j_convenc']))?$value['j_convenc']:"--" ?></td>
                        <td><?php echo (isset($value['k_entertn']))?$value['k_entertn']:"--" ?></td>
                        <td><?php echo (isset($value['l_medical']))?$value['l_medical']:"--" ?></td>
                        <td><?php echo (isset($value['m_other']))?$value['m_other']:"--" ?></td>
                        <td><?php echo (isset($value['n_pf']))?$value['n_pf']:"--" ?></td>
                        <td><?php echo (isset($value['o_benefit']))?$value['o_benefit']:"--" ?></td>
                        <td><?php echo (isset($value['p_liebletax']))?$value['p_liebletax']:"--" ?></td>
                        <td><?php echo (isset($value['q_eligibletax']))?$value['q_eligibletax']:"--" ?></td>
                        <td><?php echo (isset($value['r_taxcredit']))?$value['r_taxcredit']:"--" ?></td>
                        <td><?php echo (isset($value['s_taxpayble']))?$value['s_taxpayble']:"--" ?></td>
                        <td><?php echo (isset($value['t_taxdeduct']))?$value['t_taxdeduct']:"--" ?></td>
                        <td><?php echo (isset($value['u_taxgovt']))?$value['u_taxgovt']:"--" ?></td>
                        <td><?php echo (isset($value['v_remark']))?$value['v_remark']:"--" ?></td>
                        
<!--                        <td></td>-->
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No Data found.</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
