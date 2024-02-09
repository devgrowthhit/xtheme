<?php 
require_once 'version-querystrings.php';

$docInputs = array(
  'legacyId' => get_field('legacy_id'),
  'buttonText' => get_field('button_text'),
  'lang' => get_field('language'),
  'form_heading' => get_field('form_heading')
);
$json = json_encode($docInputs);
echo "<script type='text/javascript'>var docInputs = $json;</script>";


$contactFormInputs = array(
  'contactCta' => get_field('contact_cta'),
  'lang' => get_field('language'),
);
$contactJson = json_encode($contactFormInputs);
echo "<script type='text/javascript'>var contactFormInputs = $contactJson;</script>";


$urlHost = "https://static.mastercontrol.com";
$formInitializerUrl = getStaticSiteUrl($urlHost, "/wp/assets/js/marketo/form-app-initializer.min.js");
?>

<script type='text/javascript'>
  <?php 
    echo "const formInitializerUrl = '$formInitializerUrl';";
  ?>
</script>

<script type="module">
  // Loads the PPC Resource Form
  // Looks for Form Id and will get Resource and Form if true
  var hasFormId = document.getElementById('eclipse-load');
  var id = docInputs.legacyId;

  if(hasFormId) {
    const initializeDocumentForm = (await import ( formInitializerUrl )).initializeDocumentForm;
    
    initializeDocumentForm({
      rootContainer: ".js-ppc-form-vue",
      formSettingsKey: "ppc",
      widget: {
        name: "wp PPC Blade",
        variation: "wp Resource Download",
        instanceId: "wp-unique-instance-id",
      },
      legacyId: docInputs.legacyId,
      customData: {
        ctaButtonText: docInputs.buttonText,
        formHeading: docInputs.form_heading
      },
      tracking: {
        usePageOfferId: false,
        offerId: docInputs.offerId
      },
      lang: docInputs.lang
    });
  }


  // Loads the Contact Form
  // Looks for Contact Id and Form if true
  var hasContactId = document.getElementById('contactFormWrapperInline');

  if(hasContactId) {
    const initializeContactForm = (await import ( formInitializerUrl )).initializeContactForm;

    const widgetData = {
    widget: {
      name: "Contact Form",
      variation: "",
      instanceId: ""
    },
    setup: {
      type: "ContactForm",
      form: {
        name: "Contact Form",
      },
      tracking: {
        usePageOfferId: false,
        offerId: "7013x000001yFU5AAM",
      }
    }
  };

    initializeContactForm({
      rootContainer: ".contactFormWrapperInline",
      formSettingsKey: "contact",
      widgetData: widgetData,
      isInModal: false,
      customData:{
        disableFormHeading: true,
        ctaButtonText: contactFormInputs.contactCta
      },
      lang: contactFormInputs.lang
    });
  }
</script>