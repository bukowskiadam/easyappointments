<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2018, Alex Tselegidis
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
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL      = 'http://url-to-easyappointments-directory';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST       = '';
    const DB_NAME       = '';
    const DB_USERNAME   = '';
    const DB_PASSWORD   = '';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = FALSE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = '';
    const GOOGLE_CLIENT_ID      = '';
    const GOOGLE_CLIENT_SECRET  = '';
    const GOOGLE_API_KEY        = '';

    // ------------------------------------------------------------------------
    // EMAIL SETTINGS
    // ------------------------------------------------------------------------

    const EMAIL_PROTOCOL      = 'mail'; // or 'smtp'
    const EMAIL_MAILTYPE      = 'html'; // or 'text'
    const EMAIL_SMTP_HOST     = '';
    const EMAIL_SMTP_USER     = '';
    const EMAIL_SMTP_PASS     = '';
    const EMAIL_SMTP_CRYPTO   = 'ssl'; // or 'tls'
    const EMAIL_SMTP_PORT     = 25;
    const EMAIL_SMTP_OPTIONS  = []; // additional options passed to $phpMailer->SMTPOptions
}

/* End of file config.php */
/* Location: ./config.php */
