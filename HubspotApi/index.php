<?php
include('vendor/autoload.php');
//use HubSpot\Factory;
//use HubSpot\Client\Crm\Contacts\ApiException;
//
//
//try {
//    $apiResponse = $client->crm()->contacts()->basicApi()->getPage(10, false);
//    var_dump($apiResponse);
//} catch (ApiException $e) {
//    echo "Exception when calling basic_api->get_page: ", $e->getMessage();
//}
?>
<?php
use HubSpot\Factory;
use HubSpot\Client\Crm\Contacts\ApiException;
use HubSpot\Client\Crm\Contacts\Model\Filter;
use HubSpot\Client\Crm\Contacts\Model\FilterGroup;
use HubSpot\Client\Crm\Contacts\Model\PublicObjectSearchRequest;

$client = Factory::createWithAccessToken('xxxx-xxxxx-xxxxx-xxxx');

$filter1 = new Filter([
//    'high_value' => 'string',
    'property_name' => 'confirmed_events_2024',
//    'values' => ['string'],
    'value' => 'Lenovo - PHI EDU (27 Feb)',
    'operator' => 'EQ'
]);
$filterGroup1 = new FilterGroup([
    'filters' => [$filter1]
]);
$publicObjectSearchRequest = new PublicObjectSearchRequest([
//    'query' => 'string',
    'limit' => 100,
//    'after' => 'string',
//    'sorts' => ['string'],
    'properties' => ['firstname','lastname','phone','email','delegate','jobtitle','company','address','city','country','zip','mobilephone','confirmed_events_2024'],
    'filter_groups' => [$filterGroup1],
]);
try {
    $response = $client->crm()->contacts()->searchApi()->doSearch($publicObjectSearchRequest);
//    var_dump($response);
//	echo $response;
    $data = json_decode($response, true);

// Access total
$total = $data['total'];
//echo "Total: $total\n";

// Access results
$results = $data['results'];
	
foreach ($results as $index => $result) {
    // Access individual result properties
    $id = $result['id'];
	$firstname =$result['properties']['firstname'];
	$lastname =$result['properties']['lastname'];
	$email =$result['properties']['email'];
	$phone =$result['properties']['phone'];
	$email =$result['properties']['email'];
	$delegate =$result['properties']['delegate'];
	$jobtitle =$result['properties']['jobtitle'];
    $company = $result['properties']['company'];
	$address = $result['properties']['address'];
	$city = $result['properties']['city'];
	$country = $result['properties']['country'];
	$zip = $result['properties']['zip'];
	$mobilephone = $result['properties']['mobilephone'];
	$confirmed_events_2024 = $result['properties']['confirmed_events_2024'];

}

// Access paging
//$nextPageAfter = $data['paging']['next']['after'];
//echo "Next page after: $nextPageAfter\n";

} catch (ApiException $e) {
    // Handle API exception
    echo "Exception when calling search_api->do_search: ", $e->getMessage();
}

