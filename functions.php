$attachments = array(WP_CONTENT_DIR .'/uploads/2019/08/your-pdf-fine-name.pdf');
$to          = therichposts@gmail.com;
$subject     = "PDF in wp_mail";
$message     = "Please check the attached PDF.";
$headers     = 'From: therichposts@gmail.com' . "\r\n";
wp_mail( $to, $subject, $message, $headers, $attachments);
