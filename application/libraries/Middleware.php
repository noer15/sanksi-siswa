<?php

class Middleware {
    
    function isLogin()
    {
        $CI = & get_instance();
        $CI->load->library('session'); 
        if(!$CI->session->userdata('logged_in')){
            redirect('auth');
        }else{
            return true;
        }
    }
    

    // controller
    function Admin()
    {
        $CI = & get_instance();
        $CI->load->library('session');
        if($CI->session->userdata('role') == 1){
            return true;
        }else{
            return redirect(base_url());
        }
    }


    // view
    function isAdmin()
    {
        $CI = & get_instance();
        $CI->load->library('session');
        if($CI->session->userdata('role') == 1){
            return true;
        }else{
            return false;
        }
    }

    function isGuru()
    {
        $CI = & get_instance();
        $CI->load->library('session');
        if($CI->session->userdata('role') == 2){
            return true;
        }else{
            return false;
        }
    }
    
   
}