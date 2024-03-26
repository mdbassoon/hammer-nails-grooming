=== GF Google Sheet Connector ===
Contributors: wpexperts.io
Tags: Gravity, Gravity Forms, Spread Sheet, Google Sheet, Google
Author: wpexperts.io
Author URI: https://wpexperts.io/
Version : 1.3.1
Requires at least: 4.7
Tested up to: 6.2.2
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl.html


== Description ==

Google SpreadSheet In Gravity Forms connector is a WordPress Add-on that helps you to send Gravity Forms data on Google Spreadsheet, once the user submits the form.

= Features =
* Send your Gravity Forms Data to Google Spreadsheet after submission of forms on your site by user.
* Each Gravity form has its own separate Google Spreadsheet.
* Once user submit forms, all data will be added in selected Sheet as a new row for each field. Also select fields in backend which you want to show on Spreadsheet.
* All data will be listed horizontally on a sheet.

= Requirements =
* Gravity forms.

== Changelog ==

= 1.0.1 =
Date: 19/07/2017
* initial release.

= 1.0.5 =
Date: 11/26/2018
* Added - Select any spreadsheet from drop-down
* Added - Assign custom column names or use form field names for columns of spreadsheet.
* Added - Enable/disable spreadsheet respective row should be updated on edit/update of gravityforms entries.
* Added - Export spreadsheet to csv on one click
* Added - Conditional logic for form data to be submitted to spreadsheet.

= 1.0.6 =
Date: 12/27/2018
* Fixed - Authentication issue.
* Fixed - settings saving issue.

= 1.0.7 =
Date: 25/02/2020
* Added - Freemius Integration
* Added - Settings for Google API Client ID and Client Secret

= 1.0.8 =
Date: 03/07/2020
* Added - Option to send Entry metadata to google sheets
* Fixed - 'Sync All Entries' Limited to 20 entries, increased limit to 1000 entries

= 1.0.9 =
Date: 13/11/2020
* Fixed - Multiple conditional logic for same field not working correctly
* Fixed - Meta Fields not syncing
* Fixed - Some bugs fixes

= 1.1 =
Date: 14/12/2020
* Added - Compatibility with GravityForms 2.5 BETA

= 1.2 =
Date: 09/09/2021
* Added - Compatibility with google spreadsheet v4 api
* Added - Expiry token check before hitting api request
* Added - Metafields section in admin side
* Added - CURL converted into wp_remote.
* Fixed - Datepicker export issue
* Fixed - Some bug fixes
* Fixed - Sync all entries issue
* Fixed - Sheet tab 2 issue
* Fixed - Entryid, Entrydate and pagination of entries

= 1.3 =
Date: 03/03/2022
* Code improvement

= 1.3.1 =
Date: 08/08/2023
* code optimization