<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F212802164059451" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F212802164059451" title="oEmbed Form">
<meta property="og:title" content="New Customer Registration Form" >
<meta property="og:url" content="https://form.jotform.com/212802164059451" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg">
<link rel="canonical" href="https://form.jotform.com/212802164059451" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>New Customer Registration Form</title>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5eb3b4ae85bd2e1e2966db96"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.29459" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.29459" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
      display: block;
      float: none;
      text-align: left;
      width: 100%;
    
      }
    /* Injected CSS Code */
</style>

<script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.29459" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

   JotForm.setConditions([{"action":[{"field":"9","visibility":"Show","id":"action_0_1579704830003"}],"id":"1579704830003","index":"0","link":"Any","priority":"0","terms":[{"field":"8","operator":"equals","value":"Other (Please specify...)"}],"type":"field"}]);
	JotForm.init(function(){
	/*INIT-START*/
      setTimeout(function() {
          $('input_17').hint('ex: 23');
       }, 20);
      setTimeout(function() {
          $('input_19').hint('ex: 23');
       }, 20);
if (window.JotForm && JotForm.accessible) $('input_35').setAttribute('tabindex',0);
      JotForm.alterTexts({"couponApply":"Apply","couponBlank":"Please enter a coupon.","couponChange":"","couponEnter":"Enter coupon","couponExpired":"Coupon is expired. Please try another one.","couponInvalid":"Coupon is invalid.","couponValid":"Coupon is valid.","shippingShipping":"Shipping","taxTax":"Tax","totalSubtotal":"Subtotal","totalTotal":"Total"}, true);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"calculator","qid":"15","text":"Calculator","type":"control_head"},null,{"description":"","name":"firstNumber","qid":"17","subLabel":"","text":"First number","type":"control_number"},null,{"description":"","name":"secondNumber","qid":"19","subLabel":"","text":"Second number","type":"control_number"},null,null,null,null,null,null,null,null,{"description":"","name":"chooseOperator","qid":"28","subLabel":"","text":"Choose operator","type":"control_dropdown"},null,null,null,null,{"name":"submit","qid":"33","text":"Submit","type":"control_button"},null,{"description":"","name":"answer","qid":"35","subLabel":"","text":"Answer","type":"control_textbox"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"calculator","qid":"15","text":"Calculator","type":"control_head"},null,{"description":"","name":"firstNumber","qid":"17","subLabel":"","text":"First number","type":"control_number"},null,{"description":"","name":"secondNumber","qid":"19","subLabel":"","text":"Second number","type":"control_number"},null,null,null,null,null,null,null,null,{"description":"","name":"chooseOperator","qid":"28","subLabel":"","text":"Choose operator","type":"control_dropdown"},null,null,null,null,{"name":"submit","qid":"33","text":"Submit","type":"control_button"},null,{"description":"","name":"answer","qid":"35","subLabel":"","text":"Answer","type":"control_textbox"}]);}, 20); 
</script>
</head>
<body>

<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['q28_chooseOperator'];
$n1 = $_REQUEST['q17_firstNumber'];
$n2 = $_REQUEST['q19_secondNumber'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
if($operator=="√" )
{
$res= sqrt($n1);
}
if($operator=="%" )
{
$res= $n1 % $n2;
}
}
?>

<form class="jotform-form">
  <input type="hidden" name="formID" value="212802164059451" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_15" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_15" class="form-header" data-component="header">
              Calculator
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_number" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17">
          First number
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_17" class="form-input-wide jf-required" data-layout="half">
          <input type="number" id="input_17" name="q17_firstNumber" data-type="input-number" class=" form-number-input form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_17" required="" step="any" />
        </div>
      </li>
      <li class="form-line" data-type="control_dropdown" id="id_28">
        <label class="form-label form-label-top form-label-auto" id="label_28" for="input_28"> Choose operator </label>
        <div id="cid_28" class="form-input-wide" data-layout="half">
          <select class="form-dropdown" id="input_28" name="q28_chooseOperator" style="width:310px" data-component="dropdown">
            <option value=""> Please Select </option>
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
            <option value="%"> % </option>
            <option value="√"> √ </option>
          </select>
        </div>
      </li>
      <li class="form-line" data-type="control_number" id="id_19">
        <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19"> Second number </label>
        <div id="cid_19" class="form-input-wide" data-layout="half">
          <input type="number" id="input_19" name="q19_secondNumber" data-type="input-number" class=" form-number-input form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" placeholder="ex: 23" data-component="number" aria-labelledby="label_19" step="any" />
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_33">
        <div id="cid_33" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_33" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="calculate" value="Calculate" />
      </li>
      <tr>
        <td style="background-color:turquoise;color:black">Output = </td>
        <td style="color:darkblue"><?php echo $res;?></td>
        </tr>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Powered by Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="212802164059451" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='212802164059451'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "212802164059451-212802164059451";
}
  </script>
  <div class="formFooter-heightMask">
  </div>
  <div class="formFooter f6 branding21">
    <div class="formFooter-wrapper formFooter-leftSide">
      <a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=212802164059451&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo2021/jotform-logo-white.svg" alt="Jotform Logo" style="height: 44px;"></a>
    </div>
    <div class="formFooter-wrapper formFooter-rightSide">
      <span class="formFooter-text">
        Now create your own Jotform - It's free!
      </span>
      <a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=212802164059451&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own Jotform</a>
    </div>
  </div>
</form></body>
</html>
<script type="text/javascript">JotForm.ownerView=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.29459"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.29459"></script>
