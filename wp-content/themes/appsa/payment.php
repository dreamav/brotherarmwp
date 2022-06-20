<?

function fs_get_wp_config_path()
{
    $base = dirname(__FILE__);
    $path = false;

    if (@file_exists(dirname(dirname($base))."/wp-config.php"))
    {
        $path = dirname(dirname($base))."/";
    }
    else
    if (@file_exists(dirname(dirname(dirname($base)))."/wp-config.php"))
    {
        $path = dirname(dirname(dirname($base)))."/";
    }
    else
    $path = false;

    if ($path != false)
    {
        $path = str_replace("\\", "/", $path);
    }
    return $path;
}

$home_path = fs_get_wp_config_path();

require_once $home_path.'vendor/autoload.php';

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_k932ZVQczxhNcym6Wf70nuYh");

$charge = \Stripe\Charge::create([
    'amount' => $_POST['sum'],
    'currency' => 'usd',
    'source' => $_POST['token'],
]);

$data['success'] = "Payment charged!";

header('Content-Type: text/html; charset=utf-8');
echo json_encode(array('data' => $data), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);