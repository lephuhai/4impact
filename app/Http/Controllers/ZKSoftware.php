<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ZKSoftware\TADFactory;

class ZKSoftware extends Controller
{

	public static $options = [
		'ip' => '192.168.100.201',   // '169.254.0.1' by default (totally useless!!!).
//      'internal_id' => 100,    // 1 by default.
//      'com_key' => 123,        // 0 by default.
//      'description' => 'TAD1', // 'N/A' by default.
//      'soap_port' => 8080,     // 80 by default,
//      'udp_port' => 20000,     // 4370 by default.
//      'encoding' => 'utf-8'    // iso8859-1 by default.
	];

	public function restart() {

		$tad_factory = new TADFactory(ZKSoftware::$options);
		$tad = $tad_factory->get_instance();

		$response = $tad->restart();

		return response([
			'status' => $response
		]);
	}

	public function users() {

		$tad_factory = new TADFactory(ZKSoftware::$options);
		$tad = $tad_factory->get_instance();

		$dt = $tad->execute_command_via_tad_soap('get_user_info')->to_array();

		return response($dt);
	}

	// Lấy thông tin 1 người dùng theo mã PIN
	public function user($PIN) {

		$tad_factory = new TADFactory(ZKSoftware::$options);
		$tad = $tad_factory->get_instance();

		// Getting info from a specific user.
		$user_info = $tad->get_user_info(['pin'=>$PIN])->to_array();

		return response($user_info);
	}

	public function finger_templates () {

		$tad_factory = new TADFactory(ZKSoftware::$options);
		$tad = $tad_factory->get_instance();

		$templates = $tad->execute_command_via_tad_soap('get_user_template');

		return response([
			'total' => $templates->count(),
			'data' => $templates->to_array()
		]);
	}

	public function finger_template(Request $request, $PIN) {

		$tad_factory = new TADFactory(ZKSoftware::$options);
		$tad = $tad_factory->get_instance();

		if ($request->isMethod('put')) {

			$template1_vx10 = 'TPdTUzIxAAAFtLkECAUHCc7QAAAdtWkBAAAAhVk8ibQaAIMPRwDZAP271QAdALsODQAatJEO1gAoAGwOqbQoABIP3gCEAJK7mgBCAIcPcgBCtI8PmQBMAMsPQ7RSAPQPigCWAHq7OABcAGEPvwBitHMO0ABqAOUPYbRxAPUOkQC3ABy75AB2AJwPoAB9tGcOCAF7APUODbWIALENlABOAI+6fwCTABsPhACdtN4P1ACYAPQPDrWbACYNcQBYAEi6nwClADkPyAGvtCUOGQCtAP4OmbSyALIP7QB4ADK7HwDAALsO7QDMtD0PrADJAP4PErTaALwP7QAmAL+7fwDuALwOhwD6tC8PjAABAaIPpbQDAUcPaQDDAa66dgAJAdMO1gALtTEPRQAUAXcOlrQVAVcPiADlAWm6zwApAVUPBgAptcYPeQA1AUQOHLQ8AScPIwCFAR27cwBAAeUOFwBCtV4OowBIAR4OQrRQAZQPoQCUAWy6uwBRAWQN2wBetTIPOwBeAcsPC8Uz/zd1ywYWm47D/RdAL/4lLdcMXGeAkPNxGMgXZzDLjKKEnfNn3WO+QXtZCgH7vAtrNKd8PIvhkKuA8CCvA7OQ8XAk+li7CGwzbDv9RH4k7uj3dYYKl+uLzSZ8hi4DpZI8qicoeH7qbTpuEXIEQz9NkYCODBOVlDQIjAqMaXJ0ciznzNBZkn7ly6eCzKaUJpZ6/8oQkLAUdBr4GTQv6idyjIj5s94h3AATwMvtfYFyAPdfkMz0e4oqNhVPfve/5YN9gREDIYOgNvMA7Yv2Bkr3oDaQA4eAioZam1I37FYR6yIQSH1fMsYAHSFNEUiWuFWU8pbe3dhz8NfxNCihbnkbSghCsFaBiYXCCpKFjFjc8QUS9RSo77gvoZNm+ILzdXfj3AdmWJ/ZFxsvYaeX9Bf49PN054u6dWd2eg9QVP/buM+Y7Ha1ek8XSD2DfmZj4JLcBrZcrIqd/g0H0B9UkwsMUX3539/6p5/8WWcdlQnlSAS2vyMxBQCCxwltsAFOB3Q9EMVJHUPBMEX/QTrAAIyugnsNAC8bNcA7S/9RNAQA2uUrxksEAK8nD/8F/g+0piiMhMDBvwoFGiwae/7AwOgDBKA6ScMVACf78MV0McH//TjABP5E4wsAmD6JwTrEfdkMALRDk8FEi3t0CgCXRIbBRIt2swGdSgzAKwUKBQ9LF8D+wS2JBwUhTYmAeAwAQ1CFdMPB/8XCbgcRBShREMAuwMClPUOhAY5UDP87gURCSVpQDQCGVkV3xHfAjMDEAwDzXmF1DgB2ZnrEOo/Fdn10FAB+Z8Y0NZtX/z5KDAAXbCV0/1M9/sIWxZR0uCb/NsD/wAU++nb8+oIDAIy3g8GwAWF2cJcQxZNzo//A/ivB/zpGVqUBe3kA+zH9VDPoBQBjfGmN0QCXM5LEwsSOw0HBxCXAx8cOAJBJicdwwsLCxMLBOsOJpAGYjyIzwYTA++gfAwCCkQw5CwXOknHEn8HCBW0QtNOUq8GDwk3BxHWTkHgDAIFSF/iyAdiaKzDB2gA6KEiAwHXCjAPGwXf8w8HBwsIHw9RwdsAMANOc8VtdScMyCABuoYrCx3bAVAUAF6OJlAa0o6c0wAkARKwsnv7/JgUAfGs9x4oHAJ63NDU6DwW/uT3Aw/9gBsN0LQsA7sE0/zjD+/LCDQAexEA6wsfTwn3CEgCwCTf6g0f8wfpg/aMLBZLMQ8J7xMI7rwO0Ks06dMAQxarIiVXB/sH7wDn/+p0EAAnXPcKcBAW26jQ7BhBGxifEFAYQnAVJwj7/+EkQEKIFQ/8F+/tL/P7//v3/Ov3HSAQQAQs6w7IHFbsQPcWAwATVkhLnMQQQUCQJnAUVsC0r/lcGEAgsSU/A/cMEEML1VyyxEeg2Rv8iwBDbj07AHQQQHYUpjLARF0ExlQPVJkauwwMQnFFpOAA=';

			$template1_data = [
				'pin' => 25,
				'finger_id' => 0, // First fingerprint has 0 as index.
				'size' => 1460,    // Be careful, this is not string length of $template1_vx10 var.
				'valid' => 1,
				'template' => $template1_vx10
			];

			$response = $tad->execute_command_via_tad_soap('set_user_template', $template1_data);



			return response([
				'status' => $response
			]);
		}

		$template = $tad->execute_command_via_tad_soap('get_user_template', ['PIN' => $PIN])->to_array();

		return response($template);
	}

	public function get_att_logs() {

		$tad_factory = new TADFactory(ZKSoftware::$options);
		$tad = $tad_factory->get_instance();

		$logs = $tad->execute_command_via_tad_soap('get_att_log');

		return response([
			'total' => $logs->count(),
			'data' => $logs->to_array()
		]);
	}

	public function get_att_log($PIN) {

		$tad_factory = new TADFactory(ZKSoftware::$options);
		$tad = $tad_factory->get_instance();

		$logs = $tad->execute_command_via_tad_soap('get_att_log', ['pin' => $PIN]);

		if ($logs->is_empty_response()) {

			return response('The employee does not have logs recorded');
		}

		return response([
			'total' => $logs->count(),
			'data' => $logs->to_array()
		]);
	}

	public function get_fingerprint_algorithm() {

		$tad_factory = new TADFactory(ZKSoftware::$options);
		$tad = $tad_factory->get_instance();

		$algorithm = $tad->get_fingerprint_algorithm()->to_array();

		return response($algorithm);
	}

	public function get_free_size() {

		$tad_factory = new TADFactory(ZKSoftware::$options);
		$tad = $tad_factory->get_instance();

		$memories = $tad->get_free_sizes()->to_array();

		return response($memories);
	}

	public function set_date(Request $request, $date, $time) {

		$tad_factory = new TADFactory([
			'ip' => $request->header('DEVICE_IP')
		]);
		$tad = $tad_factory->get_instance();

		/**
		 * Example:
		 * $response = $tad->execute_command_via_zklib('set_date', ['date' => '2018-02-13', 'time' => '11:54:15']);
		 */
		$response = $tad->execute_command_via_zklib('set_date', ['date' => $date, 'time' => $time]);
		$tad->restart();

		return response([
			'status' => $response
		]);
	}

	public function get_date(Request $request) {

		$tad_factory = new TADFactory([
			'ip' => $request->header('DEVICE_IP')
		]);
		$tad = $tad_factory->get_instance();

		$response = $tad->get_date()->to_array();

		return response([
			'data' => $response
		]);
	}

    public function fight() {

        $tad_factory = new TADFactory(ZKSoftware::$options);
        $tad = $tad_factory->get_instance();

//        $logs = $tad->execute_command_via_tad_soap('get_att_log', ['pin' => 206]);
//        $logs = $logs->filter_by_date(['start'=>'2018-02-01', 'end'=>'2018-02-02'])->to_array();

//
        $dt = $tad->get_fingerprint_algorithm()->to_array();

//        $dt = $tad->get_date(); // it work!!

//        $response = $tad->execute_command_via_zklib('test_voice');

//        $logs = $tad->get_att_log(['pin' => 206]);
//        $logs = $logs->filter_by_date(['start'=>'2018-02-01', 'end'=>'2018-02-02'])->to_array();
//
//        $userAttendance = collect($logs['Row'])->groupBy('PIN');
//        $sorted = $userAttendance->sortBy('DateTime');

//        $startDay = $sorted->first();
//        $endDay = $sorted->last();
//
//        $s = $tad->execute_command_via_zklib('set_date', ['date'=>'2017-12-29', 'time'=>'07:05:00']);
//        $s2 = $tad->execute_command_via_zklib('set_date', ['date'=>'2017-12-29', 'time'=>'10:23:00']);

//        $response = $tad->execute_command_via_tad_soap('set_date', ['time'=>'07:17:15']);


	    /**
	     * $commands_list = TAD::commands_available();
	     */
//	    $response = $tad->get_free_sizes();

        return response($dt);

    }

    public function attendance() {

        return view('zksoftware.attendance');
    }
}
