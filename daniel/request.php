
<?php
    $api_url = 'https://jsonplaceholder.typicode.com/todos/';

    /* $curl = curl_init(); */
    /* curl_setopt($curl, CURLOPT_URL, $api_url); */
    /* curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); */
    /* curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); */

    /* $result = curl_exec($curl); */
    /* echo $result; */
    /* curl_close($curl); */

    $json_result = file_get_contents($api_url);
    $todos = json_decode($json_result, true);
    /* echo $todos[0]['userId']; */
    /* echo "\n"; */
    //var_dump($todos);
?>
