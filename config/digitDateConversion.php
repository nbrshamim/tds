<?php
/**
 * User: Shahana Yasmin Chowdhury
 * Date: 5/3/2018
 * Time: 2:35 PM
 */

class DigitDateConversion
{

    private $monthBn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
    private $monthEn = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
    private $monthShortEn = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
    private $digitIntEn = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 );
    private $digitIntBn = array( '০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯' );
    private $digitStrEn = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", ".");
    private $digitStrBn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০",".");
    private $timePeriodEn = array( 'am', 'pm' );
    private $timePeriodBn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );

    public function __construct() {}

    /**
     * get_date function get the date format to pass the string date to the translate() function
     *
     * @param string $dt_frmt
     * @return string
     */
    function get_date( $dt_frmt='', $str_date='' ) {
        if ( !$dt_frmt || empty($dt_frmt) ) {
            $dt_frmt = "d F, Y";
        }

        if( empty($str_date) )
            return $this->translate( date($dt_frmt) );
        else {
            $var_strtotime = strtotime($str_date);

            if( is_numeric($var_strtotime) )
                return $this->translate( date($dt_frmt, $var_strtotime) );
            else
                return "wrong date";
        }
    }

    function getDateString($str_date='',$lang) {
        if(!empty($str_date)){
            $givenDate = explode("-",$str_date);
            if($lang=='en'){
                $year   = $givenDate[0];
                $month  = $this->monthShortEn[intval($givenDate[1])-1];
                $day    = $givenDate[2];
            }else{
                $year   = $this->en2bnNumber($givenDate[0]);
                $month  = $this->monthBn[intval($givenDate[1])-1];
                $day    = $this->en2bnNumber($givenDate[2]);
            }
            return sprintf($month." ".$day.", ".$year);
        }
        return "-";
    }

    function en2bnNumber ($number){
        return str_replace($this->digitStrEn, $this->digitStrBn, $number);
    }

    /**
     * translate function used to translate the string date
     *
     * @param string $str
     * @return string
     */
    function translate( $str ) {
        if ( !$str ) {
            return;
        }
        //pr($str);
        $str = $this->translate_number( $str );
        $str = $this->translate_day( $str );
        //$str = $this->translate_am( $str );

        //pr($str); die;
        return $str;
    }
    /**
     * Translate numbers only
     *
     * @param string $str
     * @return string
     */
    function translate_number( $str ) {
        return str_replace( $this->digitIntEn, $this->digitIntBn, $str );
    }

    /**
     * Translate months only
     *
     * @param string $str
     * @return string
     */
    function translate_day( $str ) {
        return str_replace( $this->monthShortEn, $this->monthBn, $str );
    }

    /**
     * Translate AM and PM
     *
     * @param string $str
     * @return string
     */
    function translate_am( $str ) {
        return str_replace( $this->timePeriodEn, $this->timePeriodBn, $str );
    }
}