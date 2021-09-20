<?php
    namespace App\Http\Controllers;

    class SpaController extends Controller
    {
        public function index()
        {
            $view = view('vue');
            return $view;
        }
    }
?>