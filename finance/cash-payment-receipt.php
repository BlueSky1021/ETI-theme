<?php 
require  __DIR__.'/../classes/app/lib/dompdf/autoload.inc.php';
require __DIR__ .'/../classes/vendor/autoload.php';
include_once "config.php";
/*
Template name: Cash Payment Receipt
*/
use Dompdf\Dompdf;
use Dompdf\Options;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function convertNumberToWord($num = false)
{
    $num = str_replace(array(',', ' '), '' , trim($num));
    if(! $num) {
        return false;
    }
    $num = (int) $num;
    $words = array();
    $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
        'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
    );
    $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
    $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
        'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
        'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
    );
    $num_length = strlen($num);
    $levels = (int) (($num_length + 2) / 3);
    $max_length = $levels * 3;
    $num = substr('00' . $num, -$max_length);
    $num_levels = str_split($num, 3);
    for ($i = 0; $i < count($num_levels); $i++) {
        $levels--;
        $hundreds = (int) ($num_levels[$i] / 100);
        $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
        $tens = (int) ($num_levels[$i] % 100);
        $singles = '';
        if ( $tens < 20 ) {
            $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
        } else {
            $tens = (int)($tens / 10);
            $tens = ' ' . $list2[$tens] . ' ';
            $singles = (int) ($num_levels[$i] % 10);
            $singles = ' ' . $list1[$singles] . ' ';
        }
        $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
    } //end for loop
    $commas = count($words);
    if ($commas > 1) {
        $commas = $commas - 1;
    }
    return implode(' ', $words);
}


function pdf_create($html, $filename, $paper, $orientation, $stream=TRUE){
	$options = new Options();
	$options->set('isRemoteEnabled', true);
	$options->set('isPhpEnabled ', true);
	$options->set('isHtml5ParserEnabled ', true);
	$options->set('rootDir ', get_template_directory() . '/finance');
	$dompdf = new Dompdf($options);
	$dompdf->setBasePath(get_template_directory() . '/finance');
	$customPaper = array(0,0,600,262);
    $dompdf->set_paper($customPaper);
	// $dompdf -> set_paper ($paper, $orientation);
	$dompdf -> load_html ($html);
	$dompdf -> render();
	$dompdf -> stream ($filename.".pdf", array("Attachment" => false));
}
	if(isset($_GET['receipt'])){
			$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
			if (mysqli_connect_errno()){
				exit("Couldn't connect to the database: ".mysqli_connect_error());
			} else {
			//echo 'Connected';
			$sql = "SELECT
			          cash_pay.id,
			          cash_pay.trxn_code,
			          cash_pay.student_id,
			          cash_pay.firstname,
			          cash_pay.lastname,
			          cash_pay.email_ad,
			          cash_pay.remarks,
			          cash_pay.amount,
			          vrx_users.username
			        FROM
			          vrx_cash_payments cash_pay
			          INNER JOIN vrx_users ON (cash_pay.user_id = vrx_users.id)
			        WHERE cash_pay.status = 'Open' AND cash_pay.student_id ='".$_GET['receipt']."'";
			$result = $conn->query($sql);
			// $f = new \NumberFormatter("en", \NumberFormatter::SPELLOUT);
			$data = mysqli_fetch_assoc($result);
			if($result->num_rows == 0){
				return exit('Student Does Not Exist');
			}
			
			// $amount_words = ucwords($f->format($data['amount']));
			$amount_words = ucwords(convertNumberToWord($data['amount']));
			/*foreach ($result as $key => $value) {
				var_dump($value);
			}*/
		}
	$filename =  $data['firstname'].' '.$data['lastname'].'-'. $data['trxn_code'].'.pdf';
	// $html = 'Hello World';
	$html = file_get_contents(__DIR__.'/html_file.php');
	// echo $html;
		$content = str_replace('%id%', $data['trxn_code'], $html);
		$content = str_replace('%date%', date('d/m/Y'), $content);
		$content = str_replace('%name%', $data['firstname'].' '.$data['lastname'], $content);
		$content = str_replace('%amount%', $data['amount'], $content);
		$content = str_replace('%amount_words%', $amount_words, $content);
		$content = str_replace('%purpose%', 'Online Payment Receipt', $content);
		$content = str_replace('%received%', $data['username'], $content);
		// echo $content;
	pdf_create ($content, $filename, 'A4', 'portrait');
}else{
	if(isset($_GET['email'])){
		$html = file_get_contents(__DIR__.'/online_payments_receipt_email_template.html');
		$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
			if (mysqli_connect_errno()){
				exit("Couldn't connect to the database: ".mysqli_connect_error());
			} else {

			$sql = "SELECT 
						cp.* ,
						course.name,
						course.code
					FROM vrx_cash_payments AS cp
					INNER JOIN vrx_student_info AS student_info ON student_info.student_id = cp.student_id
					INNER JOIN vrx_persons AS person ON person.id = student_info.persons_id
					INNER JOIN vrx_party AS party ON party.id = person.party_id
					INNER JOIN vrx_deals AS deal ON deal.party_id = party.id
					INNER JOIN vrx_deal_details AS deal_detail ON deal_detail.deal_id = deal.id
					INNER JOIN vrx_courses AS course ON course.id = deal_detail.course_id
					WHERE cp.student_id = '".$value['email']."'";
			// $sql = "SELECT
			//           cash_pay.id,
			//           cash_pay.trxn_code,
			//           cash_pay.student_id,
			//           cash_pay.firstname,
			//           cash_pay.lastname,
			//           cash_pay.email_ad,
			//           cash_pay.remarks,
			//           cash_pay.amount,
			//           vrx_users.username
			//         FROM
			//           vrx_cash_payments cash_pay
			//           INNER JOIN vrx_users ON (cash_pay.user_id = vrx_users.id)
			//         WHERE cash_pay.student_id ='".$_GET['email']."'";
			$sql2 = "SELECT 
						cp.*,
						vrx_users.username,
						vrx_offer_letters.id AS offer_id,
						offer_detail.course_code AS name,
						offer_detail.course_start_date,
						offer_detail.course_end_date,
						offer_detail.offer_detail_id
					FROM vrx_cash_payments AS cp 
					INNER JOIN vrx_users ON (cp.user_id = vrx_users.id)
					INNER JOIN vrx_offer_letters ON (cp.student_id = vrx_offer_letters.student_id)
					INNER JOIN (
						SELECT 
						offer_detail.id AS offer_detail_id,
						offer_detail.offer_id,
						offer_detail.course_code,
						offer_detail.course_start_date, 
						offer_detail.course_end_date 
						FROM vrx_offer_letter_details AS offer_detail
						GROUP BY offer_id
					) AS offer_detail ON ( vrx_offer_letters.id = offer_detail.offer_id )
					WHERE cp.student_id = '".$value['email']."' ";       
			if(strpos($value['email'], 'ETI')){
				$result = $conn->query($sql2);
			}else{
				$result = $conn->query($sql);
			} 
			
			// $data = mysqli_fetch_assoc($result);
			echo '<pre>';
			if($result->num_rows == 0){
				return exit('Student Does Not Exist');
			}
			$name = '';
			$data = '';
			$email = '';
			foreach ($result as $key => $value) {
				$email = $value['email_ad'];
				$name = $value['firstname'].' '.$value['lastname'] ;
				$data .= '<tr>';
				$data.='<td>'.$value['trxn_code'].'</td>';
				$data.='<td>'. DateTime::createFromFormat('Y-m-d H:i:s', $value['created_at'])->format('d/m/Y').'</td>';
				$data.='<td>'.$value['firstname'].' '.$value['lastname'] .'</td>';
				$data.='<td>'.$value['name'].'</td>';
				// $data.='<td> '. isset($value['course_start_date']) ? $value['course_start_date'] : '---' .'</td>';
				if(isset($value['course_start_date'])){
					$data.='<td> '. DateTime::createFromFormat('Y-m-d', $value['course_start_date'])->format('d/m/Y') .'</td>';
					$data.='<td> '. DateTime::createFromFormat('Y-m-d', $value['course_end_date'])->format('d/m/Y') .'</td>';
				}else{
					$data.='<td> -- </td>';
					$data.='<td> -- </td>';
				}
				
				$data.='<td>'.$value['amount'].'</td>';
				if(strpos($value['trxn_code'], 'ETIC')){
					$data.='<td> Cash </td>';
				}else{
					$data.='<td> Cash </td>';
				}
				$data.= '</tr>';
			}
			echo '</pre><br>';
		}
		$content = str_replace('%name%',$name,$html);
		$content = str_replace('%content%',$data,$content);
		// echo $content;

		/*============================
		=            send            =
		============================*/
		try {
			  $mail = new PHPMailer(true);   
			  $mail->isSMTP();                                      // Set mailer to use SMTP
	          $mail->Host = 'server.pwd.ldd.mybluehost.me';  // Specify main and backup SMTP servers
	          $mail->SMTPAuth = true;                               // Enable SMTP authentication
	          $mail->Username = 'admission@eti.edu.au';                 // SMTP username
	          $mail->Password = 'Admission123!@#*';                           // SMTP password
	          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	          $mail->Port = 587;                                    // TCP port to connect to

	          //Recipients
	          $mail->setFrom('admission@eti.edu.au', 'Elite Training Institute');
	          $mail->addAddress('niwang101@gmail.com');
	          $mail->addCC('cardpayments@eti.edu.au');
	          $mail->isHTML(true);                                  // Set email format to HTML
	          $mail->Subject = 'Elite Training Institute - Payment History';
	          $mail->Body    = $content;

	          $mail->send();
	          echo 'Message has been sent';
		} catch (Exception $e) {
			 echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
		  
		
		/*=====  End of send  ======*/
		
	}else{
		var_dump($_GET);
		return exit('Something went wrong');
	}
}

?>