<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="contact">
    <div class="main-head-section">

        <h3>Контакты</h3>

        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12061.569627125878!2d87.118665830974!3d53.753780168795544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42d0c1e15f978f6d%3A0xeca0806912e35280!2z0J_QsNGA0Log0JPQsNCz0LDRgNC40L3QsA!5e0!3m2!1sru!2sru!4v1669131754828!5m2!1sru!2sru" width="100%" height="151px" frameborder="0" style="border:0"></iframe>
        </div>
    </div>

    <div class="contact_top">
        
        <div class="col-md-8 contact_left">
            <h4>Contact Form</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt dolor et tristique
                bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>
            <form>
                <div class="form_details">
                    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                    <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
                    <input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
                    <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                    <div class="clearfix"> </div>
                    <div class="sub-button">
                        <input type="submit" value="Send message">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-4 company-right">
            <div class="company_ad">
                <h3>Contact Info</h3>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit velit justo.</span>
                <address>
                    <p>email:<a href="#">info@display.com</a></p>
                    <p>phone: 1.306.222.4545</p>
                    <p>222 2nd Ave South</p>
                    <p>Saskabush, SK S7M 1T6</p>

                </address>
            </div>

        </div>
        <div class="clearfix"> </div>

    </div>
</div>





<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>