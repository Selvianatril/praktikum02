<?php
    function grade($nilai){
        if($nilai<=100&&$nilai>=85){
            return 'A';
        }else if($nilai<=84&&$nilai>=70){
            return 'B';
        }else if($nilai<=69&&$nilai>=56){
            return 'C';
        }else if($nilai<=55&&$nilai>=36){
            return 'D';
        }else if($nilai<=35&&$nilai>=0){
            return 'E';
        }else{
            return 'I';
        }
    }

    function predikat($grade){
        switch($grade){
            case 'A':
                return "Sangat Memuaskan";
                break;
            case 'B':
                return "Memuaskan";
                break;
            case 'C':
                return "Cukup";
                break;
            case 'D':
                return "Kurang";
                break;
            case 'E':
                return "Sangat Kurang";
                break;
            case 'I':
                return "Tidak Ada";
                break;
        }
    }

    function kelulusan($_nilai) {
        if ($_nilai > 55 ){
            return 'LULUS';
        }else {
            return 'TIDAK LULUS';
        }
    }