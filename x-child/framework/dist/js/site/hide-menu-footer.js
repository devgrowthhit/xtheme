// The UTM Campaign code to hide menu and footer
var utmName = 'utm_campaign';

function getUrlVars() {
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
    }
    return vars;
}

function testQuery(item) {
  if(item === utmName) {
    // Hide Main Menu and Footer
    var check_nav_footer = setInterval(function() {
      if($('nav.mainMenu').length && $('footer.footer').length) {
        $('nav.mainMenu').addClass('utm-url');
        $('footer.footer').addClass('utm-url');
        clearInterval(check_nav_footer);
      }
    }, 100);
  }
}

// Initializers
var urlQueryTitles = getUrlVars();
urlQueryTitles.forEach(testQuery);