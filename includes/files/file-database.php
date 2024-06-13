<?php
// Include the global $wpdb object for database interactions
global $wpdb;

// Retrieve all data from the POST request
$all_data = $_POST;

// Process form data and assign default values if not set
$software       = isset( $all_data['software'] ) ? $all_data['software'] : null;
$software_value = isset( $software ) ? 1 : 0;

$website       = isset( $all_data['website'] ) ? $all_data['website'] : null;
$website_value = isset( $website ) ? 1 : 0;

$mobile_app       = isset( $all_data['mobileApp'] ) ? $all_data['mobileApp'] : null;
$mobile_app_value = isset( $mobile_app ) ? 1 : 0;

$customBudget  = isset( $all_data['customBudget'] ) ? $all_data['customBudget'] : null;
$select_budget = isset( $all_data['budget'] ) ? $all_data['budget'] : null;

// Concatenate the service types into a single string
$service = $software . ' ' . $website . ' ' . $mobile_app;

// Concatenate budget values into a single string
$fullBudget     = $customBudget . " " . $select_budget;
$trimFullBudget = trim( $fullBudget ); // Trim any leading or trailing spaces

$customDeadline  = isset( $all_data['customProjectDeadline'] ) ? $all_data['customProjectDeadline'] : null;
$select_deadline = isset( $all_data['deadline'] ) ? $all_data['deadline'] : null;

// Concatenate deadline values into a single string
$fullDeadline = $customDeadline . " " . $select_deadline;
$trimDeadline = trim( $fullDeadline ); // Trim any leading or trailing spaces

// Clean the budget and deadline values to remove unnecessary text
$cleanFullBudget   = str_replace( "Budget Planner", "", $trimFullBudget );
$cleanFullDeadline = str_replace( " Preferred Project Duration", "", $trimDeadline );

$requirement    = isset( $all_data['requirement'] ) ? $all_data['requirement'] : null;
$newRequirement = isset( $all_data['newRequirement'] ) ? $all_data['newRequirement'] : null;

// Combine new requirements with existing requirements into a single string
$customRequirement = $requirement;
if ( !empty( $newRequirement ) ) {
    foreach ( $newRequirement as $requirement ) {
        $customRequirement .= ', ' . $requirement;
    }
}
$fullRequirement = $customRequirement;

// Retrieve personal information from the form data
$first_name    = isset( $all_data['firstName'] ) ? $all_data['firstName'] : null;
$address       = isset( $all_data['address'] ) ? $all_data['address'] : null;
$email         = isset( $all_data['email'] ) ? $all_data['email'] : null;
$number        = isset( $all_data['number'] ) ? $all_data['number'] : null;
$watsAppNumber = isset( $all_data['watsAppNumber'] ) ? $all_data['watsAppNumber'] : null;

// Get the admin username dynamically
$admin_users    = get_users( array( 'role' => 'administrator' ) );
$admin_username = !empty( $admin_users ) ? $admin_users[0]->user_login : 'Admin';
$site_name      = get_option( 'home' );

// Prepare data for database insertion
$data = [
    'first_name'  => $first_name,
    'address'     => $address,
    'email'       => $email,
    'phone'       => $number,
    'whatsapp'    => $watsAppNumber,
    'mobile_app'  => $mobile_app_value,
    'website'     => $website_value,
    'software'    => $software_value,
    'requirement' => $fullRequirement,
    'budget'      => $cleanFullBudget,      // Use cleaned budget value
    'deadline'    => $cleanFullDeadline,    // Use cleaned deadline value
];

// Table name where data will be inserted
$table_name = $wpdb->prefix . 'imjol_requirement_forms';

// Check if first name is provided before inserting data
if ( !empty( $first_name ) ) {

    echo time(); // Output current time for debugging purposes
    print_r( $all_data ); // Print all form data for debugging purposes

    // Insert data into the database
    $wpdb->insert( $table_name, $data );

    // Prepare email content in HTML format
    $email_content = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>New Form Submission</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f4f4f4;
                }
                .container {
                    max-width: 600px;
                    margin: 20px auto;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 10px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }
                .logo {
                    text-align: center;
                    padding: 20px;
                    margin-bottom: 20px;
                }
                .logo img {
                    max-width: 150px;
                }
                table {
                    width: 100%;
                }
                table td {
                    padding: 10px;
                    border-bottom: 1px solid #ddd;
                }
                table td:first-child {
                    font-weight: bold;
                    width: 40%;
                }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='logo'>
                    <img src='https://imjol.com/wp-content/uploads/elementor/thumbs/imjol-qj21d8qvgjrvq1prjb7t67m5g68pymquymdi05dbeo.png' alt='Your Company Logo'>
                    <p>$first_name has submitted a form requesting custom development from $site_name</p>
                </div>
                <table>
                    <tr>
                        <td>Name:</td>
                        <td>$first_name</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>$email</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>$address</td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td>$number</td>
                    </tr>
                    <tr>
                        <td>What's app Number:</td>
                        <td>$watsAppNumber</td>
                    </tr>
                    <tr>
                        <td>Service:</td>
                        <td>$service</td>
                    </tr>
                    <tr>
                        <td>Requirement:</td>
                        <td>$fullRequirement</td>
                    </tr>
                    <tr>
                        <td>Budget:</td>
                        <td>$cleanFullBudget</td>
                    </tr>
                    <tr>
                        <td>Deadline:</td>
                        <td>$cleanFullDeadline</td>
                    </tr>
                </table>
            </div>
        </body>
        </html>
    ";

    // Set email headers
    $to      = get_option( 'admin_email' ) ?? '';
    $subject = 'New Form Submission from - ' . $first_name;
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= 'From: ' . $first_name;

    // Send the email
    $mailSuccess = mail( $to, $subject, $email_content, $headers );
    //$mailSuccess = \wp_mail( $to, $subject, $email_content, $headers );

    // Check if the email was sent successfully
    if ( $mailSuccess ) {
        echo 'Email sent successfully!';
    } else {
        echo 'Email not sent. Please try again.';
    }
}