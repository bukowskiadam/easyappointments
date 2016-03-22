<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2016, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config {
    // ------------------------------------------------------------------------
    // General Settings
    // ------------------------------------------------------------------------
    const BASE_URL      = 'http://url-to-easyappointments-directory';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;
    const INDEX_PAGE    = 'index.php';

    // ------------------------------------------------------------------------
    // Database Settings
    // ------------------------------------------------------------------------
    const DB_HOST       = '';
    const DB_NAME       = '';
    const DB_USERNAME   = '';
    const DB_PASSWORD   = '';

    // ------------------------------------------------------------------------
    // Google Calendar Sync
    // ------------------------------------------------------------------------
    const GOOGLE_SYNC_FEATURE   = FALSE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = '';
    const GOOGLE_CLIENT_ID      = '';
    const GOOGLE_CLIENT_SECRET  = '';
    const GOOGLE_API_KEY        = '';

    // ------------------------------------------------------------------------
    // PHPMailer default settings
    // ------------------------------------------------------------------------
    // Example to use smtp server:
    //
    // return array('Mailer'     => 'smtp',
    //              'Host'       => 'smtp1.example.com;smtp2.example.com',
    //              'SMTPAuth'   => true,
    //              'Username'   => 'user@example.com',
    //              'Password'   => 'secret',
    //              'SMTPSecure' => 'tls',
    //              'Port'       => 587);
    //
    // For options please refer to PHPMailer documentation
    // ------------------------------------------------------------------------
    public static function PHPMailer() {
        return array();
    }
}
/* End of file config.php */
/* Location: ./config.php */
