<?php

require_once  'vendors/PHPMailer/PHPMailerAutoload.php';

/**
 * MailWrapper creates a simple interface to handle the ability to send automatic emails.
 *
 * @version 1.0
 * @author Guilherme Ramos gramos1995@gmail.com
 */
class MailWrapper {

	private $_mail; # Instance of PHPMail

	/**
	 * __construct
	 */
	public function __construct() {
		# Create instance
		$this->_mail = new PHPMailer;

		# Set config
		$this->_mail->isSMTP();
		$this->_mail->Host = "smtp.gmail.com";
		$this->_mail->SMTPAuth = true;
		$this->_mail->Username = "mailparacenas100@gmail.com";
		$this->_mail->Password = "mailparacenas";
		$this->_mail->SMTPSecure = 'tls';
		$this->_mail->Port = 587;
	}

	/**
	 * newEmail() creates a new email do be sent automatically.
	 *
	 * @param  array  $contacts   Contacts array (Ex: array('Guilherme' = 'email@email.com'))
	 * @param  string $subject    Subject of the Email
	 * @param  string $body       HTML Message
	 * @param  string $altBody    Plain HTML version for old browsers
	 * @param  string $attachment Path to the file to be attached
	 */
	public function newEmail(array $contacts, $subject, $body, $altBody ,$attachment = '') {
		# General information about the email
		$this->_mail->From = "no-reply@bookauto.pt";
		$this->_mail->FromName = "BookAuto";
		$this->_mail->CharSet = 'UTF-8';

		# Add contacts to BCC list
		foreach($contacts as $name => $email) {
			$this->_mail->addBCC($email, $name);
		}

		# If there is an attachment we add it
		if ($attachment != '') {
			$this->_mail->addAttachment($attachment);
		}

		# Email itself
		$this->_mail->isHTML(true);
		$this->_mail->Subject = $subject;
		$this->_mail->Body    = $body;
		$this->_mail->AltBody = $altBody;
	}

	/**
	 * send() sends the email created by newEmail.
	 *
	 * @return boolean Successful / ErrorInfo
	 */
	public function send() {
		# In case it has been sent successfully return true
		if($this->_mail->send()) {
		    return true;
		} else {
			return $this->_mail->ErrorInfo;
		}
	}
}
