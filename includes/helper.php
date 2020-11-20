<?php
require_once './includes/functions.php';
const FILEPATH  = './includes/persons.txt';

if(isset($_POST['sendForm']))
{
    if(!empty($_POST['fname'])
    && !empty($_POST['lname'])
    && !empty($_POST['url'])
    && !empty($_POST['email'])) {
        $fullName = htmlspecialchars($_POST['fname'] . ' ' . $_POST['lname']);
        $website = htmlspecialchars($_POST['url']);
        $eMail = htmlspecialchars($_POST['email']);

        $check = [',', '<', '>'];
        if (validateInput($fullName, $check)
            && validateInput($website, $check)
            && validateInput($eMail, $check))
        {

            switch ($_POST['salutation'])
            {
                case 'male':
                    $salutation = 'Herr';
                    break;
                case 'female':
                    $salutation = 'Frau';
                    break;
                default:
                    $salutation = '-';
                    break;
            }

            $data = $salutation . ',' . $fullName . ',' . $website . ',' . $eMail;

            $file = fopen(FILEPATH, 'a+');

            fwrite($file, $data . PHP_EOL);

            fclose($file);
        }
        else
        {
            $error = 'Ihre Eingaben dürfen keine der folgenden Sonderzeichen beinhalten:<br>';
            foreach ($check as $checkValue)
            {
                $error .= ' '. $checkValue . ' ';
            }
        }
    }
    else
    {
        $error = 'Alle Felder müssen ausgefüllt sein!';
    }
}

$content = [];
$keys = ['salutation','name','website','email'];

$file = fopen(FILEPATH, 'r');

while($line = fgets($file))
{
    $content[] = array_combine($keys, explode(',', $line));
}

fclose($file);

usort($content, 'sortByName');

if (isset($_POST['deleteForm']) && isset($_POST['delete']))
{
    $checkboxes = $_POST['delete'];

    $data = '';

    foreach ($checkboxes as $idx)
    {
        unset($content[$idx]);
    }

    foreach ($content as $line)
    {
        $data.= implode(',', $line);
    }

    $file = fopen(FILEPATH,'w');
    fwrite($file, $data);
    fclose($file);
}