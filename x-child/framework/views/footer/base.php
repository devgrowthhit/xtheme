<?php

// =============================================================================
// VIEWS/FOOTER/BASE.PHP
// -----------------------------------------------------------------------------
// Includes the wp_footer() hook and closes out the .x-site <div>, .x-root
// <div>, <body> and <html> tags.
// =============================================================================

?>

    <?php do_action( 'x_before_site_end' ); ?>

    <footer class="footer">
<div class="container p-0">
<div class="footer-grid">
<!-- START: lets chat section -->
<div class="lets-chat-container">
<div class="lets-chat">Let's chat</div>
<div class="email mt-4">
<a class="text-white" style="font-size: 18px;" href="mailto:info@mastercontrol.com">info@mastercontrol.com</a>
</div>
<div class="phone">
<span>Sales</span><a href="tel:+1-866-747-8767">+1-866-747-8767</a>
</div>
<a class="btn btn-white js-nav-link" data-lne="Footer" data-nlc="Footer | Contact Us" href="/contact/">Contact
Us</a>
</div>
<!-- END: lets chat section -->
<!-- START: Site Links -->
<div class="site-links">
<!-- Solutions -->
<div class="site-links-group">
<div class="site-links-group-title">Solutions
<div class="icon">
<em class="fa fa-bold fa-plus info-click"></em>
</div>
<!-- <hr class="footer-line"> -->
</div>
<div class="info-expand">
<ul class="site-links-group-list">
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Quality" href="/quality/">Quality</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Manufacturing" href="/manufacturing/">Manufacturing</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Clinical" href="/clinical/">Clinical</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Regulatory" href="/regulatory/">Regulatory</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Supplier" href="/supplier/">Supplier</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Product Development" href="/product-development/">Product Development</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Postmarket" href="/post-market/">PostMarket</a></li>
</ul>
</div>
<hr class="footer-line" />
</div>
<!-- Learning Center -->
<div class="site-links-group solutions-p">
<div class="site-links-group-title">Learning Center
<div class="icon">
<em class="fa fa-bold fa-plus info-click"></em>
</div>
<!-- <hr class="footer-line"> -->
</div>
<div class="info-expand" style="">
<ul class="site-links-group-list">
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Resource Center" href="/resource-center/">Resource Center</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | GxP Lifeline" href="/gxp-lifeline/">Blog - GxP Lifeline</a></li>
</ul>
</div>
<hr class="footer-line" />
</div>
<!-- About Us -->
<div class="site-links-group">
<div class="site-links-group-title">About Us
<div class="icon">
<em class="fa fa-bold fa-plus info-click"></em>
</div>
</div>
<div class="info-expand" style="">
<ul class="site-links-group-list">
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | About MasterControl" href="/company/">About MasterControl</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Upcoming Events" href="/events/">Upcoming Events</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Partner Program" href="/partners/">Partner Program</a></li>
    <li><a class="js-nav-link" data-lne="Footer" data-nlc="Footer | Careers" href="/careers/">Careers</a></li>
</ul>
</div>
</div>
</div>
<!-- END: Site Links -->
<!-- START: Social Icons -->
<div class="social text-center">
<a href="https://www.facebook.com/mastercontrolinc/" target="_blank" class="js-nav-link" data-lne="Footer" data-nlc="Footer | facebook">
<svg class="facebook" width="17" height="18" viewbox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.886 16.4014C16.886 16.6501 16.8031 16.8712 16.6096 17.0647C16.4438 17.2582 16.1951 17.3411 15.9187 17.3411H11.6627V10.7912H13.846L14.1776 8.27625H11.6627V6.64569C11.6627 6.23114 11.7456 5.92713 11.8838 5.73368C12.0772 5.51258 12.4365 5.40204 12.9063 5.40204H14.2605V3.1082C13.7354 3.05292 13.0721 3.02529 12.2983 3.02529C11.331 3.02529 10.5296 3.30165 9.92155 3.88202C9.31355 4.46239 9.00954 5.29149 9.00954 6.36932V8.24861H6.82625V10.7635H9.00954V17.3411H0.967282C0.690916 17.3411 0.469823 17.2582 0.276366 17.0647C0.110547 16.8712 0 16.6501 0 16.4014L0 1.42236C0 1.14599 0.0829099 0.924901 0.276366 0.731445C0.442186 0.565625 0.690916 0.455078 0.967282 0.455078H15.9463C16.1951 0.455078 16.4162 0.537988 16.6096 0.731445C16.8031 0.897264 16.886 1.14599 16.886 1.42236V16.4014Z">
</path>
</svg>
</a>
<a href="https://twitter.com/MCMasterControl/" target="_blank" class="js-nav-link" data-lne="Footer" data-nlc="Footer | twitter">
<svg class="twitter" width="20" height="16" viewbox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.7127 4.43121C17.7127 6.22759 17.2705 7.99634 16.3861 9.65454C15.4741 11.4233 14.2028 12.8604 12.5723 13.9106C10.8035 15.099 8.73079 15.6793 6.43695 15.6793C4.22601 15.6793 2.20854 15.099 0.384521 13.9106C0.660888 13.9382 0.964891 13.9382 1.32417 13.9382C3.14819 13.9382 4.80638 13.3855 6.27113 12.2524C5.38675 12.2524 4.61293 12.0037 3.94965 11.4786C3.28637 10.9535 2.81655 10.3178 2.56782 9.54399C2.81655 9.57163 3.06528 9.57163 3.28637 9.57163C3.64565 9.57163 3.97728 9.54399 4.33656 9.46108C3.42455 9.26762 2.67836 8.7978 2.07036 8.07925C1.46235 7.3607 1.15835 6.5316 1.15835 5.59195V5.50904C1.71108 5.84068 2.29145 6.0065 2.92709 6.03414C2.402 5.64722 1.95981 5.1774 1.65581 4.59703C1.32417 4.01666 1.15835 3.38102 1.15835 2.6901C1.15835 1.99919 1.3518 1.33591 1.71108 0.700267C2.67836 1.94392 3.89437 2.9112 5.30384 3.62975C6.71331 4.3483 8.23333 4.76285 9.83625 4.84576C9.78098 4.54176 9.75334 4.23776 9.75334 3.93375C9.75334 3.24284 9.91916 2.57956 10.2784 1.94392C10.6377 1.33591 11.1075 0.83845 11.7155 0.50681C12.3512 0.202807 13.0145 0.0369873 13.7054 0.0369873C14.2858 0.0369873 14.8108 0.147534 15.3083 0.368627C15.8058 0.58972 16.2203 0.893723 16.6072 1.28064C17.5192 1.11482 18.3483 0.783176 19.1498 0.34099C18.8458 1.28064 18.2654 1.99919 17.4087 2.52428C18.1549 2.41374 18.9287 2.22028 19.6749 1.88864C19.1222 2.6901 18.4589 3.38102 17.6851 3.96139C17.6851 4.0443 17.7127 4.21012 17.7127 4.43121Z">
</path>
</svg>
</a>
<a href="https://www.linkedin.com/company/mastercontrol/" target="_blank" class="js-nav-link" data-lne="Footer" data-nlc="Footer | linkedin">
<svg class="linkedin" width="18" height="17" viewbox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.50962 3.45458C1.09507 3.06767 0.901611 2.59784 0.901611 2.04511C0.901611 1.49238 1.09507 1.02256 1.50962 0.608006C1.92417 0.193457 2.39399 0 2.94672 0C3.49946 0 3.96928 0.193457 4.38383 0.608006C4.79838 1.02256 4.99183 1.49238 4.99183 2.04511C4.99183 2.59784 4.79838 3.06767 4.38383 3.48222C3.96928 3.89677 3.49946 4.09022 2.94672 4.09022C2.39399 4.09022 1.89653 3.86913 1.50962 3.45458ZM1.17798 16.8584V5.61024H4.68783V16.8584H1.17798ZM14.2777 16.8584V11.3863C14.2777 10.4743 14.1948 9.83864 14.0567 9.42409C13.7803 8.73318 13.2276 8.40154 12.4261 8.40154C11.6246 8.40154 11.0443 8.70554 10.7403 9.31355C10.4915 9.75573 10.3533 10.419 10.3533 11.3034V16.8584H6.89876V5.61024H10.2428V7.15789H10.2704C10.5192 6.66043 10.9337 6.24588 11.4864 5.91424C12.0945 5.49969 12.7854 5.30624 13.5868 5.30624C15.2174 5.30624 16.3505 5.83133 17.0138 6.85389C17.5112 7.68299 17.76 8.95427 17.76 10.6954V16.8584H14.2777Z">
</path>
</svg>
</a>
</div>
<!-- END: Social Icons -->
<!-- START: Address -->
<div class="address text-center">
<svg width="53" height="27" viewbox="0 0 53 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.69012 0H0V8.69012H8.69012V0Z"></path>
<path d="M17.3801 0V8.69012H26.0702V17.3802V26.0704H34.7604V17.3802V8.69012L26.0702 0H17.3801Z"></path>
<path d="M43.4507 0H34.7606V8.69012H43.4507V17.3802V26.0704H52.0265V17.3802V8.69012L43.4507 0Z"></path>
<path d="M8.69019 17.3805V26.0707H17.3803V17.3805V8.69043H8.69019V17.3805Z"></path>
</svg>
<div class="content">6350 South 3000 East<br />
Salt Lake City, Utah 84121
<a href="https://goo.gl/maps/cyu7o5cmL5U2/" target="_blank">View map</a>
</div>
</div>
<!-- END: Address -->
<!-- START: Dividing Line -->
<div class="divider">
<hr class="footer-line" />
</div>
<!-- END: Dividing Line -->
<!-- START: Legal -->
<div class="legal">
<div class="legal-wrpr">
<a href="/privacy/" class="js-nav-link" data-lne="Footer" data-nlc="Footer | Privacy Policy">Privacy Policy</a>
<a href="/cookie/" class="js-nav-link" data-lne="Footer" data-nlc="Footer | Cookie Notice">Cookie Notice</a>
<a href="/intellectual-property/" class="js-nav-link" data-lne="Footer" data-nlc="Footer | Intellectual Property">Intellectual Property</a>
<a href="/docs/default-source/document-library/mc-modern-slavery-act-2015-statement-v2023-01-20.pdf" class="js-nav-link" data-lne="Footer" data-nlc="Footer | Modern Slavery Act Statement">Modern Slavery Act Statement</a>
</div>
</div>
<!-- END: Legal -->
<!-- START: Copyright -->
<div class="copyright">
&copy; <span class="copyrightYear"></span> MasterControl Solutions, Inc. All rights reserved.
</div>
<!-- END: Copyright -->
</div>
</div>
</footer>

    </div> <!-- END .x-site -->

    <?php do_action( 'x_after_site_end' ); ?>

  </div> <!-- END .x-root -->

<?php wp_footer(); ?>

</body>
</html>