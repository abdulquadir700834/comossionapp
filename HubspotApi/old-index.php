<?php

// Authentication
$access_token = "xxxx-xxxxx-xxxxx-xxxx";
$headers = array(
    "Authorization: Bearer $access_token",
    "Content-Type: application/json"
);
$pageLimit = 200;
$totalPages = 50;
// Endpoint
$property_value = urlencode("HCL Tech -SIN PS (25 Jan)");
$url = "https://api.hubapi.com/contacts/v1/lists/all/contacts/all?property=firstname&property=lastname&property=phone&property=email&property=delegate&property=jobtitle&property=company&property=address&property=city&property=country&property=zip&property=mobilephone&property=confirmed_events_2024:HCL Tech -SIN PS (25 Jan)&vid-offset=601";

//$url = "https://api.hubapi.com/contacts/v1/lists/all/contacts/all?property=confirmed_events_2024&property=lastname&property=phone&property=email&property=delegate&property=jobtitle&property=company&property=address&property=opengovlive__2021&property=country&property=zip&property=mobilephone&count=20";

//$url = "https://api.hubapi.com/properties/v1/contacts/properties/named/confirmed_events_2024";
//$url = "https://api.hubapi.com/contacts/v1/search/query?property=5145013";

//$property_option_value = "HCL Software - SIN FSI (22 Feb)";
//$url = "https://api.hubapi.com/contacts/v1/contact/vid/22940551/profile";
//$url ="https://api.hubapi.com/contacts/v1/lists/all/contacts/all?properties=confirmed_events_2024:HCL Tech -SIN PS (25 Jan)";
//$url = "https://api.hubapi.com/crm/v3/properties/contacts";

// API URL with filter parameter


// Pagination loop
$next_page = true;
while ($next_page) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($status_code == 200) {
        $data = json_decode($response, true);
//        $contacts = $data["results"];
		echo json_encode($data);
        // Process contacts here

        // Check for next page
        if (isset($data["paging"]) && isset($data["paging"]["next"])) {
            $url = $data["paging"]["next"];
        } else {
            $next_page = false;
        }
    } else {
//        echo "Error: $status_code";
        $next_page = false;
    }
}

?>