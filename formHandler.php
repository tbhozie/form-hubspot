<?php
    // Page parameters
    $formID = $_GET['formid'];
    $formGUID = get_field('form_guid', $formID);
    $pageURL = $_POST['page_url'];
    $pageTitle = $_POST['page_title'];
    $redirectURL = get_field('redirect_url', $formID);
	
	// Hubspot
	$hubspotutk      = $_COOKIE['hubspotutk']; //grab the cookie from the visitors browser.
    $ip_addr         = $_SERVER['REMOTE_ADDR']; //IP address too.
    $hs_context      = array(
        'hutk' => $hubspotutk,
        'ipAddress' => $ip_addr,
        'pageUrl' => $pageURL,
        'pageName' => $pageTitle,
        'redirectUrl' => $redirectURL
    );
    $hs_context_json = json_encode($hs_context);
    
    // Fields
    $values = $_POST;
    
	// Stop some spam
    $honey = $_POST['company_url'];
    if(!empty($honey)) {
        wp_die('No, thanks');
    }
	if(empty($pageURL)) {
        echo 'Invalid page submission, make sure you are using a browser with JavaScript enabled.';
        exit();
    }
    
	// Basic form validation server side - feel free to add more here, but I really only care about an e-mail address
    $email = $values['email'];
    if (empty($email)) {
        echo 'Email is required, please return to the form and input an e-mail address';
        exit();
    }
    
    // Need to populate these variable with values from the form.
    $results = '';
    foreach ($values as $key => $value) {
        $results .= $key.'='.urlencode($value).'&';
    }
    
    // Replace your portal ID here with your hubspot portal ID
	$portalID = 'REPLACE_PORTAL_ID';
    $endpoint = 'https://forms.hubspot.com/uploads/form/v2/'.$portalID.'/'.$formGUID;
    
    $ch = @curl_init();
    @curl_setopt($ch, CURLOPT_POST, true);
    @curl_setopt($ch, CURLOPT_POSTFIELDS, $results."hs_context=" . urlencode($hs_context_json));
    @curl_setopt($ch, CURLOPT_URL, $endpoint);
    @curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded'
    ));
    @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response    = @curl_exec($ch); //Log the response from HubSpot as needed.
    $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE); //Log the response status code
    @curl_close($ch);
    
    // Redirect after form submission
	header("Location: $redirectURL"); /* Redirect browser */
	exit();

?>