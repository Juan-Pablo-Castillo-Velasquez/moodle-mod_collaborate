<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Privacy Subsystem implementation for mod_collab.
 *
 * @package    mod_collab
 */

use \core_privacy\local\metadata\collection;

defined('MOODLE_INTERNAL') || die();

/**
 * Implementation of the privacy subsystem plugin provider for the Collaborate activity module.
 *
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\provider {

    use \core_privacy\local\legacy_polyfill;

    /**
     * Returns meta data about this system.
     *
     * @param   collection     $collection The initialised collection to add items to.
     * @return  collection     A listing of user data stored through this system.
     */
    public static function _get_metadata(collection $collection) {
        $collection->add_external_location_link('collaborate', [
            'userid' => 'privacy:metadata:collaborate:userid',
            'avatarurl' => 'privacy:metadata:collaborate:avatarurl',
            'fullname' => 'privacy:metadata:collaborate:fullname',
            'role' => 'privacy:metadata:collaborate:role'
        ], 'privacy:metadata:collaborate');

        return $collection;
    }
}