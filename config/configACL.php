<?php
/**
 * Author: Jakir Hosen Khan
 *         Shahana Yasmin Chowdhury
 * E-mail: jkr.h.khan@gmail.com
 *         shahana.yc@gmail.com
 * Date: 9/26/2018
 * Time: 11:05 AM
 */


//Employee Information related pages
define("EMP_ADDRESS_VIEW", 1);
define("EMP_ADDRESS_ADD_EDIT", 2);
define("EMP_AWARD_VIEW", 3);
define("EMP_AWARD_EDIT", 4);
define("EMP_CHILDREN_VIEW", 5);
define("EMP_CHILDREN_EDIT", 6);
define("EMP_DISCIPLINARY_VIEW", 7);
define("EMP_DISCIPLINARY_EDIT", 8);
define("EMP_EDICATION_VIEW", 9);
define("EMP_EDUCATION_EDIT", 10);
define("EMP_GENERAL_VIEW", 11);
define("EMP_GENERAL_EDIT", 12);
define("EMP_AREA_INTEREST_VIEW", 13);
define("EMP_AREA_INTEREST_EDIT", 14);
define("EMP_LANGUAGE_VIEW", 15);
define("EMP_LANGUAGE_EDIT", 16);
define("EMP_OTHER_SERVICE_VIEW", 17);
define("EMP_OTHER_SERVICE_EDIT", 18);
define("EMP_POSTING_VIEW", 19);
define("EMP_POSTING_EDIT", 20);
define("EMP_PROMOTION_VIEW", 21);
define("EMP_PROMOTION_EDIT", 22);
define("EMP_PUBLICATION_VIEW", 23);
define("EMP_PUBLICATION_EDIT", 24);
define("EMP_ADDITIONAL_QUALIFICATION_VIEW", 25);
define("EMP_ADDITIONAL_QUALIFICATION_EDIT", 26);
define("EMP_SPOUSE_VIEW", 27);
define("EMP_SPOUSE_EDIT", 28);
define("EMP_TRAINING_VIEW", 29);
define("EMP_TRAINING_EDIT", 30);
define("EMP_TRAVEL_VIEW", 31);
define("EMP_TRAVEL_EDIT", 32);


//Admin panel related pages
define("ADMIN_OFFICE_LIST_VIEW", 101);
define("ADMIN_OFFICE_LIST_EDIT", 102);
define("ADMIN_BRANCH_LIST_VIEW", 103);
define("ADMIN_BRANCH_LIST_EDIT", 104);
define("ADMIN_POST_LIST_VIEW", 105);
define("ADMIN_POST_LIST_EDIT", 106);
define("ADMIN_EMP_LIST_VIEW", 107);
define("ADMIN_EMP_LIST_ACTION", 108);


//Recruitement related pages
define("EMP_RECRUITMENT_ENTRY", 150);
define("EMP_RECRUITMENT_APPROVE", 151);
define("EMP_RECRUITMENT_EDIT", 152);
define("EMP_RECRUITMENT_REPORT", 153);
define("EMP_RECRUITMENT_LIST", 154);


//Recruitement related pages
define("VEHICLE_REQUISITION_LIST_VIEW", 200);
define("VEHICLE_REQUISITION_LIST_ADD", 201);
define("VEHICLE_REQUISITION_DETAIL_VIEW", 202);
define("VEHICLE_LIST_VIEW", 203);
define("VEHICLE_REQUI_ASSIGN", 204);


//Library Management related pages
define("BOOK_LIST_VIEW", 250);

static $empInfoOpList = array(
    EMP_ADDRESS_VIEW=> "Employee Address View",
    EMP_ADDRESS_ADD_EDIT=> "Employee Address Edit/Add",
    EMP_AWARD_VIEW=> "Employee Award View",
    EMP_AWARD_EDIT=> "Employee Award Edit/Add",
    EMP_CHILDREN_VIEW=> "Employee Children View",
    EMP_CHILDREN_EDIT=> "Employee Children Edit/Add",
    EMP_DISCIPLINARY_VIEW=> "Employee Disciplinary View",
    EMP_DISCIPLINARY_EDIT=> "Employee Disciplinary Edit/Add",
    EMP_EDICATION_VIEW=> "Employee Education View",
    EMP_EDUCATION_EDIT=> "Employee Education Edit/Add",
    EMP_GENERAL_VIEW=> "Employee General View",
    EMP_GENERAL_EDIT=> "Employee General Edit/Add",
    EMP_AREA_INTEREST_VIEW=> "Employee AreaOfInterest View",
    EMP_AREA_INTEREST_EDIT=> "Employee AreaOfInterest Edit/Add",
    EMP_LANGUAGE_VIEW=> "Employee Language View",
    EMP_LANGUAGE_EDIT=> "Employee Language Edit/Add",
    EMP_OTHER_SERVICE_VIEW=> "Employee OtherService View",
    EMP_OTHER_SERVICE_EDIT=> "Employee OtherService Edit/Add",
    EMP_POSTING_VIEW=> "Employee Posting View",
    EMP_POSTING_EDIT=> "Employee Posting Edit/Add",
    EMP_PROMOTION_VIEW=> "Employee Promotion View",
    EMP_PROMOTION_EDIT=> "Employee Promotion Edit/Add",
    EMP_PUBLICATION_VIEW=> "Employee Publication View",
    EMP_PUBLICATION_EDIT=> "Employee Publication Edit/Add",
    EMP_ADDITIONAL_QUALIFICATION_VIEW=> "Employee Additional Qualification View",
    EMP_ADDITIONAL_QUALIFICATION_EDIT=> "Employee Additional Qualification Edit/Add",
    EMP_SPOUSE_VIEW=> "Employee Spouse View",
    EMP_SPOUSE_EDIT=> "Employee Spouse Edit/Add",
    EMP_TRAINING_VIEW=> "Employee Training View",
    EMP_TRAINING_EDIT=> "Employee Training Edit/Add",
    EMP_TRAVEL_VIEW=> "Employee Travel View",
    EMP_TRAVEL_EDIT=> "Employee Travel Edit/Add",
);

static $adminOpList = array(
    ADMIN_OFFICE_LIST_VIEW=> "Office List View",
    ADMIN_OFFICE_LIST_EDIT=> "Office List Edit/Add",
    ADMIN_BRANCH_LIST_VIEW=> "Branch List View",
    ADMIN_BRANCH_LIST_EDIT=> "Branch List Edit/Add",
    ADMIN_POST_LIST_VIEW=> "Post List View",
    ADMIN_POST_LIST_EDIT=> "Post List Edit/Add",
    ADMIN_EMP_LIST_VIEW=> "Employee List View",
    ADMIN_EMP_LIST_ACTION=> "Employee List Action",
    );

static $recruitOpList = array(
    EMP_RECRUITMENT_LIST=>"FieldOffice",
    EMP_RECRUITMENT_ENTRY=>"Recruitment Marks Entry",
    EMP_RECRUITMENT_APPROVE=>"Recruitment Marks Approve",
    EMP_RECRUITMENT_EDIT=>"Recruitment Marks Edit",
    EMP_RECRUITMENT_REPORT=>"Recruitment Marks Report",
);


static $vehicleOpList = array(
VEHICLE_REQUISITION_LIST_VIEW=>"Requisition List of an Employee",
VEHICLE_REQUISITION_LIST_ADD=>"Requisition request Page",
VEHICLE_REQUISITION_DETAIL_VIEW=>"Requisition Detail Page",
VEHICLE_LIST_VIEW=>"Vehicle List",
VEHICLE_REQUI_ASSIGN=>"Requisition Assign Page",
);

static $libraryOpList = array(
BOOK_LIST_VIEW=>"Book List",
);
