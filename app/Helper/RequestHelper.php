<?php

namespace DTApi\Helper; 

/**
 * Request helper class
 * Class RequestHelper
 * @package DTApi\Helper
 */
class RequestHelper {

    public function __construct()
    {
        
    }

    /**
     * Distance feed request.
     * @param $data array
     * @return array
     */
    public function distanceFeedRequest($data) {
        $distance = "";  $time = ""; $jobid = ""; $by_admin = 'no';
        $session = ""; $flagged = 'no'; $manually_handled = 'no'; $admincomment = "";

        if (isset($data['distance']) && $data['distance'] != "") {
            $distance = $data['distance'];
        }
        
        if (isset($data['time']) && $data['time'] != "") {
            $time = $data['time'];
        }

        if (isset($data['jobid']) && $data['jobid'] != "") {
            $jobid = $data['jobid'];
        }

        if (isset($data['session_time']) && $data['session_time'] != "") {
            $session = $data['session_time'];
        }

        if ($data['flagged'] == 'true') {
            if($data['admincomment'] == '') return "Please, add comment";
            $flagged = 'yes';
        }
        
        if ($data['manually_handled'] == 'true') {
            $manually_handled = 'yes';
        }

        if ($data['by_admin'] == 'true') {
            $by_admin = 'yes';
        }

        if (isset($data['admincomment']) && $data['admincomment'] != "") {
            $admincomment = $data['admincomment'];
        }

        return [ "distance" => $distance,  "time" => $time, "jobid" => $jobid, "by_admin" => $by_admin,
        "session_time" => $session, "flagged" => $flagged, "manually_handled" => $manually_handled, "admin_comments" => $admincomment];
    }
}