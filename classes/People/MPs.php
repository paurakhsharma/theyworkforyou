<?php
/**
 * MPs Class
 *
 * @package TheyWorkForYou
 */

namespace MySociety\TheyWorkForYou\People;

class MPs extends \MySociety\TheyWorkForYou\People {

    public $type = 'mps';
    public $rep_name = 'MP';
    public $rep_plural = 'MPs';
    public $house = 1;
    public $cons_type = 'WMC';

    protected function getRegionalReps($user) {
        return null;
    }

    protected function getCSVHeaders() {
        return array('Person ID', 'First name', 'Last name', 'Party', 'Constituency', 'URI');
    }

    protected function getCSVRow($details) {
        return array(
            $details['person_id'],
            $details['given_name'],
            $details['family_name'],
            $details['party'],
            $details['constituency'],
            'https://www.theyworkforyou.com/mp/' . $details['url']
        );
    }
}
