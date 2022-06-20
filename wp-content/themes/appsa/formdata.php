<?
preg_match("/(.*?)wp-content.*/ui", __FILE__, $matches)."---\n";
if(!defined ("ABSPATH")) define("ABSPATH",$matches[1]);
require_once ABSPATH."wp-config.php";

define('DR',rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/');
include dirname(__FILE__)."/lib/phpmailer/PHPMailerAutoload.php";

function valid_phone($phone){
    if(preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/", $phone)) {
        return true;
    }else{
        return false;
    }
}
function en_valid_phone($phone){
    if(preg_match("/^((1|\+1)[\- ]?)?\(?\d{3}\)?[\- ]?[\d\- ]{7,10}$/", $phone)) {
        return true;
    }else{
        return false;
    }
}

if(get_bloginfo( 'language' )!="en-US"){
	if( isset($_POST['phone']['val']) && !valid_phone($_POST['phone']['val']) ){
		die("неверный Телефон");
	}
} else {
	if( isset($_POST['phone']['val']) && !en_valid_phone($_POST['phone']['val']) ){
		die("Incorrect phone");
	}
}

$siteurl = site_url();
preg_match("/^(.*?)\/\/(.*?)\/(.*)$/ui",$siteurl,$siteurl_matches);

### базовые настройки мейлера
$mail = new PHPMailer;

$mail->CharSet  = 'UTF-8';
$mail->isSMTP();                             	// Set mailer to use SMTP
$mail->Host     = 'smtp.timeweb.ru';         	// Specify main and backup SMTP servers
$mail->Port     = 2525;                      	// TCP port to connect to
$mail->SMTPAuth = true;                      	// Enable SMTP authentication

$mail->Username = "noreply@streetadventure.ru";
$mail->Password = "T2iCkm2q";

// создать новую почту на sa.com
$mail->setFrom('noreply@streetadventure.ru', 'Синий сайт: '.$siteurl_matches[3]);	// от кого в заголовке письма
$mail->isHTML(true);                         	// Set email format to HTML



switch ( $_POST['formtype']['val'] ) {
	case '1':
		$mail->Subject = 'Письмо с ru: из формы в верхнем меню';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
		$data["ya_params"]["source_name"] = "Форма в верхнем меню";
		$data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '2':
		$mail->Subject = 'Письмо с ru: задать вопрос возле FAQ';
		$data["ya_goal"] = "FormQuestionSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма задать вопрос возле FAQ";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormQuestionSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '3':
		$mail->Subject = 'Письмо с ru: подписка из футера';
		### ПРОВЕРКА POST
	    $f = @fopen("lib/podpiska.txt", "a+") or die("error");
        fputs($f, 'Подписчик: ' . $_POST["email"]["val"] . "\n");
	    fclose($f);
	    ### END ПРОВЕРКА POST
		$data["ya_goal"] = "FormSubscribeSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма подписка из футера";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormSubscribeSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '4':
		$mail->Subject = 'Письмо с ru: запрос на корпоратив сверху';
		$data["ya_goal"] = "FormCompanySent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма запрос на корпоратив сверху";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormCompanySent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '5':
		$mail->Subject = 'Письмо с ru: форма внизу стр корпоратив';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма внизу стр корпоратив";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";		
		break;
	case '6':
		$mail->Subject = 'Письмо с ru: корпоративные программы';
		$programm = $_POST['questName']['val'];
		$data["ya_goal"] = "FormCompanySent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма корпоративные программы ".$programm;
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormCompanySent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '7':
		$mail->Subject = 'Письмо с ru: корпоративные программы - уникальная';
		$data["ya_goal"] = "FormCompanySent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма корпоративные программы - уникальная";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormCompanySent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '8':
		$mail->Subject = 'Письмо с ru: рассчитать стоимость мероприятия';
		$people_quantity = $_POST['people-quantity']['val'];
		$age_quantity = $_POST['age-quantity']['val'];
		$place = $_POST['place']['val'];
		$formatmer = $_POST['formatmer']['val'];
		$data["ya_goal"] = "FormCompanySent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма рассчитать стоимость мероприятия";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormCompanySent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '9':
		$mail->Subject = 'Письмо с ru: школьные программы';
		$programm = $_POST['questName']['val'];
		$data["ya_goal"] = "FormStudentSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма школьные программы ".$programm;
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormStudentSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '10':
		$mail->Subject = 'Письмо с ru: школьные тарифы';
		$tarif = $_POST['shk_tarif']['val'];
		$data["ya_goal"] = "FormStudentSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма школьные тарифы ".$tarif;
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormStudentSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '11':
		$mail->Subject = 'Письмо с ru: узнать детали квеста без ведущего (школьные)';
		$data["ya_goal"] = "FormStudentSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма узнать детали квеста без ведущего (школьные)";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormStudentSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '12':
		$mail->Subject = 'Письмо с ru: задать вопрос возле FAQ (стр школьные)';
		$data["ya_goal"] = "FormQuestionSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма задать вопрос возле FAQ (стр школьные)";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormQuestionSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '13':
		$mail->Subject = 'Письмо с ru: форма внизу стр школьные';
		$data["ya_goal"] = "FormStudentSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма внизу стр школьные";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormStudentSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '14':
		$mail->Subject = 'Письмо с ru: форма внизу стр возможности';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма внизу стр возможности";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '15':
		$mail->Subject = 'Письмо с ru: что-то особенное стр возможности';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма что-то особенное стр возможности";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '16':
		$mail->Subject = 'Письмо с ru: узнать подробности стр pr-решения';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма узнать подробности стр pr-решения";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '17':
		$mail->Subject = 'Письмо с ru: форма внизу стр pr-решения';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма внизу стр pr-решения";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '18':
		$mail->Subject = 'Письмо с ru: форма внизу стр площадкам';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма внизу стр площадкам";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '19':
		$mail->Subject = 'Письмо с ru: что-то особенное стр о нас';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма что-то особенное стр о нас";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '20':
		$mail->Subject = 'Письмо с ru: Хотите к нам? стр о нас';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма Хотите к нам? стр о нас";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '21':
		$mail->Subject = 'Письмо с ru: форма внизу стр о нас';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма внизу стр о нас";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '22':
		$mail->Subject = 'Письмо с ru: форма стр контакты';
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма стр контакты";
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '23':
		$mail->Subject = 'Письмо с ru: квест с ведущим на мероприятие стр квеста';
		$quest_name = $_POST['quest_name']['val'];
		$data["ya_goal"] = "FormMasterSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма квест с ведущим на мероприятие стр квеста ".$quest_name;
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormMasterSent";
		$data["ga_goal_fsent"] = "FormSent";
		break;
	case '24':
		$mail->Subject = 'Письмо с ru: Есть вопрос стр квеста';
		$quest_name = $_POST['quest_name']['val'];
		$data["ya_goal"] = "FormContactUsSent";
		$data["ya_goal_fsent"] = "FormSent";
        $data["ya_params"]["source_name"] = "Форма Есть вопрос стр квеста ".$quest_name;
        $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
		$data["ga_goal"] = "FormContactUsSent";
		$data["ga_goal_fsent"] = "FormSent";		
		break;

	default:
		# code...
		break;
}


if ($_POST['formtype']['val']=="25" || $_POST['formtype']['val']=="26") {

	$formtype = $_POST['formtype']['val'];

	include dirname(__FILE__)."/lib/payment/config.php";
	extract($configs);

	$user_name = $_POST['name']['val'];
	$user_email = $_POST['email']['val'];
	$user_phone = $_POST['phone']['val'];
	
	$quest_name = $_POST['quest_name']['val'];
	if ( isset($quest_name) || $quest_name!='' ) {
		$mail->Body .= "<br><br>Со страницы квеста: ".$quest_name;
	}

	$quest_object = get_page_by_title($quest_name,OBJECT,'quests');

    $sum = get_post_meta($quest_object->ID, 'price', true);
//    $sum            = $_POST['price']['val'];
	// $sum            = 1;
	$customerNumber = time();
	$paymentType    = "";

	$rbksaquery = http_build_query(array(
		'shopId'         => $shopId,
		'scid'           => $scId,
		'sum'            => $sum,
		'customerNumber' => $customerNumber,
		'cps_phone'      => $user_phone,
		'paymentType'    => $paymentType,
		'lang'           => 'ru',
		'Shp_formtype'      => $formtype,
		'Shp_mail'       => $user_email,
		'Shp_name'       => $user_name,
		'Shp_phone'      => $user_phone,
		'Shp_questName'      => $quest_name
	));
	// $action         = "https://demomoney.yandex.ru/eshop.xml";
	$action           = "https://money.yandex.ru/eshop.xml";
	$URL_REDIRECT     = "$action?$rbksaquery";
	$data["redirect"] = $URL_REDIRECT;

	$data["ya_goal"] = "FormSertificateSent";
	$data["ya_goal_fsent"] = "FormSent";

	if (isset($_POST['metrika_goal']) && !empty($_POST['metrika_goal']['val'])){
        $data["metrika_goal"] = $_POST['metrika_goal']['val'];
    }

    $data["ya_params"]["quest_name"] = $quest_name;
    $data["ya_params"]["page_name"] = $_SERVER["HTTP_REFERER"];
	$data["ga_goal"] = "FormSertificateSent";
	$data["ga_goal_fsent"] = "FormSent";

	$data['user_email'] = $user_email;
	$data['stripe_sum'] = $sum.'00';
    $data["stripe_payment"] = get_bloginfo('template_url')."/payment.php";
    $data["quest_name"] = $quest_name;
    $data["form_type"] = $formtype;
    $data["stripe_logo_sa"] = get_bloginfo('template_url')."/images/stripe_logo.png";

if ($formtype == 25) {
	$mail->Subject = 'Письмо с ru: Купить подарочную карту ('.$sum.') стр квеста';
    $data["ya_params"]["source_name"] = "Форма Купить подарочную карту стр квеста ".$quest_name;

$mail->Body    = <<<MEVINSIDE
<table>
	<tbody>
		<tr>
			<td style="text-align:left; padding:3px 7px;"><strong>Имя</strong></td>
			<td style="text-align:left; padding:3px 7px;"><strong>Email</strong></td>
			<td style="text-align:left; padding:3px 7px;"><strong>Телефон</strong></td>
			<td style="text-align:left; padding:3px 7px;"><strong>Сообщение</strong></td>
		</tr>
		<tr>
			<td style="text-align:left; padding:3px 7px;">{$_POST["name"]["val"]}</td>
			<td style="text-align:left; padding:3px 7px;">{$_POST["email"]["val"]}</td>
			<td style="text-align:left; padding:3px 7px;">{$_POST["phone"]["val"]}</td>
			<td style="text-align:left; padding:3px 7px;">{$_POST["message"]["val"]}</td>
		</tr>
	</tbody>
</table>
MEVINSIDE;
}elseif ($formtype == 26) {
	$mail->Subject = 'Письмо с ru: Купить квест ('.$sum.') стр квеста';
    $data["ya_params"]["source_name"] = "Форма Купить квест стр квеста ".$quest_name;

$mail->Body    = <<<MEVINSIDE
<table>
	<tbody>
		<tr>
			<td style="text-align:left; padding:3px 7px;"><strong>Имя</strong></td>
			<td style="text-align:left; padding:3px 7px;"><strong>Email</strong></td>
			<td style="text-align:left; padding:3px 7px;"><strong>Телефон</strong></td>
			<td style="text-align:left; padding:3px 7px;"><strong>Сообщение</strong></td>
		</tr>
		<tr>
			<td style="text-align:left; padding:3px 7px;">{$_POST["name"]["val"]}</td>
			<td style="text-align:left; padding:3px 7px;">{$_POST["email"]["val"]}</td>
			<td style="text-align:left; padding:3px 7px;">{$_POST["phone"]["val"]}</td>
			<td style="text-align:left; padding:3px 7px;">{$_POST["message"]["val"]}</td>
		</tr>
	</tbody>
</table>
MEVINSIDE;
}






} else {

$mail->Body    = <<<MEVINSIDE
<table>
	<tbody>
		<tr>
			<td style="text-align:left; padding:3px 7px;"><strong>Имя</strong></td>
			<td style="text-align:left; padding:3px 7px;"><strong>Email</strong></td>
			<td style="text-align:left; padding:3px 7px;"><strong>Телефон</strong></td>
			<td style="text-align:left; padding:3px 7px;"><strong>Сообщение</strong></td>
		</tr>
		<tr>
			<td style="text-align:left; padding:3px 7px;">{$_POST["name"]["val"]}</td>
			<td style="text-align:left; padding:3px 7px;">{$_POST["email"]["val"]}</td>
			<td style="text-align:left; padding:3px 7px;">{$_POST["phone"]["val"]}</td>
			<td style="text-align:left; padding:3px 7px;">{$_POST["message"]["val"]}</td>
		</tr>
	</tbody>
</table>
MEVINSIDE;

	if ( isset($programm) || $programm!='' ) {
		$mail->Body .= "<br><br>Выбранная программа: ".$programm;
	}
	if ( isset($people_quantity) || $people_quantity!='' ) {
		$mail->Body .= "<br><br>КОЛ-ВО ЧЕЛОВЕК: ".$people_quantity;
	}
	if ( isset($age_quantity) || $age_quantity!='' ) {
		$mail->Body .= "<br>СРЕДНИЙ ВОЗРАСТ: ".$age_quantity;
	}
	if ( isset($place) || $place!='' ) {
		$mail->Body .= "<br>МЕСТОПОЛОЖЕНИЕ: ".$place;
	}
	if ( isset($formatmer) || $formatmer!='' ) {
		$mail->Body .= "<br>ФОРМАТ МЕРОПРИЯТИЯ: ".$formatmer;
	}

	if ( isset($tarif) || $tarif!='' ) {
		$mail->Body .= "<br><br>Выбранный тариф: ".$tarif;
	}

	if ( isset($quest_name) || $quest_name!='' ) {
		$mail->Body .= "<br><br>Со страницы квеста: ".$quest_name;
	}
}

if(!$saapp_db) $saapp_db = new wpdb('streetadv_saapp', 'zaBVVCNmzqAsCBGH', 'streetadv_saapp', 'localhost');
$saapp_db->query($q=$saapp_db->prepare( 
		"INSERT INTO sa_form_emails (email, name, form_id, form_name)
		VALUES (%s,%s, %d, %s)", 
		$_POST["email"]["val"],
		$_POST["name"]["val"],
		$_POST['formtype']['val'],
		$mail->Subject
	));


// $mail->addAddress('reloved@gmail.com');     // Add a recipient
$mail->addAddress('streetadventuremsk@gmail.com');     // Add a recipient
// $mail->AddCC('nikitabogdanov@gmail.com', 'Никита');
// $mail->AddCC('streetadventuremsk@gmail.com', 'SA');
### !!!!!!!!!!!!!!!!!!!!!!!! РАСКОММЕНТИРОВАТЬ !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if(!$mail->send()) {
    $data["error"] = 'Message could not be sent.';
    $data["error"] .= 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $data["error"] = 'Message has been sent';
}
### !!!!!!!!!!!!!!!!!!!!!!!! РАСКОММЕНТИРОВАТЬ !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
if(get_bloginfo( 'language' )!="en-US"){
    $data['form_button_text'] = 'Отправлено!';
}else{
    $data['form_button_text'] = 'Sent!';
}


header('Content-Type: text/html; charset=utf-8');
echo json_encode(array('data' => $data), JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);


?>