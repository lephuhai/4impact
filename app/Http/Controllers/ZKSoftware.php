<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZKSoftware\TADFactory;

class ZKSoftware extends Controller
{

    public function fight() {

        $options = [
            'ip' => '192.168.100.202',   // '169.254.0.1' by default (totally useless!!!).
//            'internal_id' => 100,    // 1 by default.
//            'com_key' => 123,        // 0 by default.
//            'description' => 'TAD1', // 'N/A' by default.
//            'soap_port' => 8080,     // 80 by default,
//            'udp_port' => 20000,     // 4370 by default.
//            'encoding' => 'utf-8'    // iso8859-1 by default.
        ];

        $tad_factory = new TADFactory($options);
        $tad = $tad_factory->get_instance();

//        $logs = $tad->execute_command_via_tad_soap('get_att_log', ['pin' => 206])->to_array();
//
//        $logs = $logs->filter_by_date(['start_date'=>'2017-12-20', 'end_date'=>'2017-12-20']);

//
//        $dt = $tad->execute_command_via_tad_soap('get_date')->to_array();

//        $dt = $tad->get_date(); // it work!!

//        $response = $tad->execute_command_via_zklib('test_voice');

        $logs = $tad->get_att_log(['pin' => 206]);
        $logs = $logs->filter_by_date(['start'=>'2017-12-22', 'end'=>'2017-12-22'])->to_array();
//
//        $userAttendance = collect($logs['Row'])->groupBy('PIN');
//        $sorted = $userAttendance->sortBy('DateTime');

//        $startDay = $sorted->first();
//        $endDay = $sorted->last();
//
//        $s = $tad->execute_command_via_zklib('set_date', ['date'=>'2017-12-22', 'time'=>'08:10:00']);

//        $response = $tad->execute_command_via_tad_soap('set_date', ['time'=>'08:17:15']);

        return response($logs, 200);

    }

    public function attendance() {

        return view('zksoftware.attendance');
    }
}
