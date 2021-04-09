<?php



function IH_makeUrl ($value)
{
	return app()->getLocale()."/".$value;
}


function IH_response($code, $message, $data=[]) {

	$response = [
		"status" => ($code < 400 ? true : false),
		"message" => $message,
	];

	if (!empty($data)) $response["data"] = $data;

	return response()->json($response, $code);

}


