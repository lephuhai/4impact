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

        $logs = $tad->execute_command_via_tad_soap('get_att_log', ['pin' => 206]);

        return response($logs, 200);

    }

    public function attendance() {

        return view('zksoftware.attendance');
    }
}
