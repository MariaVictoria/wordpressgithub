<?php
/*
* The `fix_serialized` function fixes serialized data which has been corrupted by an incorrect byte count length,
* especially in the case of a search & replace done on a dump of a wordpress database.
*/

$customizer_data = file_get_contents( trailingslashit( get_template_directory() ) . 'demos/interior/caeliora-interior-customizer.dat' );

// var_dump($customizer_data);

$corruptedSerialization = $customizer_data;
if (caeliora_is_serialized($corruptedSerialization)) {
  $fixed = fix_serialized($corruptedSerialization);
//   print_r($fixed);
}

$unserializedData = unserialize($fixed);
// var_export( $unserializedData );

print_r( serialize( $unserializedData ) );



// ===================================================

function fix_serialized($serialized) {
    $fixed = fix_inner_serialized($serialized);
    if (@unserialize($fixed)) {
        return $fixed;
    }
    return fix_serialized_parts($fixed);
}

function fix_inner_serialized($string) {
    return preg_replace_callback(
        '/s:([0-9]+):\"(a:[0-9]+:{.*?})\";/',
        function ($matches) {
            $serializedString = stripslashes($matches[2]);
            $fixed = fix_serialized_parts($serializedString);
            return "s:".strlen($fixed).':"'.$fixed.'";';
        },
        $string
    );
}

function fix_serialized_parts($string) {
    if (!preg_match('/^[aOs]:/', $string) ) {
        return $string;
    }
    $string = preg_replace("%\n%", "", $string);
    return preg_replace_callback(
        '/s:([0-9]+):\"(.*?)\";/',
        function ($matches) {
            if (preg_match('/a:[0-9]+:{/', $matches[2])) {
                return $matches[0];
            }
            return "s:".strlen($matches[2]).':"'.$matches[2].'";';
        },
        $string
    );
}

function caeliora_is_serialized($data) {
    if (!is_string($data)) {
        return false;
    }
    $data = trim($data);
    if ('N;' == $data) {
        return true;
    }
    if (!preg_match('/^([adObis]):/', $data, $badions)) {
        return false;
    }
    switch ($badions[1]) {
        case 'a' :
        case 'O' :
        case 's' :
            if (preg_match("/^{$badions[1]}:[0-9]+:.*[;}]\$/s", $data)) {
            return true;
            }
            break;
        case 'b' :
        case 'i' :
        case 'd' :
            if (preg_match("/^{$badions[1]}:[0-9.E-]+;\$/", $data)) {
            return true;
            }
            break;
    }
    return false;
}
