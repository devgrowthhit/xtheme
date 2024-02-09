<?php

// =============================================================================
// VIEWS/HEADER/BASE.PHP
// -----------------------------------------------------------------------------
// Declares the DOCTYPE for the site, includes the <head>, opens the <body>
// element as well as the .x-root <div> and .x-site <div>.
// =============================================================================

$x_root_atts = x_atts( apply_filters( 'x_root_atts', array( 'id' => 'x-root', 'class' => 'x-root' ) ) );
$x_site_atts = x_atts( apply_filters( 'x_site_atts', array( 'id' => 'x-site', 'class' => 'x-site site' ) ) );

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head><?php wp_head(); ?></head>
<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <?php do_action( 'x_after_body_begin' ); ?>

  <div <?php echo $x_root_atts; ?>>

    <?php do_action( 'x_before_site_begin' ); ?>

    <div <?php echo $x_site_atts; ?>>

    <?php do_action( 'x_after_site_begin' ); ?>
      
    <style>
    .sfPageWrapper .mainMenu .bar .navContent .left{position:relative}.sfPageWrapper .mainMenu .bar,.sfPageWrapper .mainMenu .bar .navContent{position:static!important}.mainMenu .bar{display:flex;height:50px;left:0;position:fixed;top:0}.mainMenu .bar .bar-bg{height:100%;left:0px;position:absolute;top:0px;width:100%}.mainMenu .bar .mcui-brand{align-items:center;display:flex;height:50px;left:20px;position:absolute;top:0;z-index:20}.mainMenu .bar .mcui-brand svg{fill:none!important;width:170px}.mainMenu .bar .mcui-brand svg .st1{fill:#3b94a3;opacity:0.7}.mainMenu .bar .mcui-brand svg .st0{fill:#3b94a3;opacity:1}.mainMenu .bar .navContent{display:flex;flex-direction:column}.mainMenu .bar .navContent .left{position:relative;top:50px;width:100%}.mainMenu .bar .navContent .left .mainLink{align-items:start;color:#164a62;display:flex;font-size:2.8rem;height:50px;padding:0px 20px;position:relative}.mainMenu .bar .navContent .left .navLinks{display:flex}.mainMenu .bar .navContent .left .navLinks .linkBucket .menu{height:0;opacity:0}.mainMenu .bar .navContent .left .navLinks .linkBucket.open .menu{height:calc(100% - 180px);opacity:1}.mainMenu .bar .navContent .right{align-items:center;display:flex;flex-direction:column;height:50px;right:0rem}.mainMenu .bar .navContent .right a{font-size:1.4rem;padding:0px 30px 0px 0px}.mainMenu .bar .navContent .right .lang{bottom:80px;left:30px;margin-right:30px;position:absolute;width:52px}.mainMenu .bar .navContent .right .lang .lang-button{height:38px;padding:10px}.mainMenu .bar .navContent .right .lang .lang-content{opacity:0;pointer-events:none;position:absolute;width:220px}.mainMenu .bar .navContent .search-link .field{opacity:0}.mainMenu .bar .nav-button{display:flex}.mainMenu .bar .mobile-phone{display:block}@media screen and (min-width:992px){.mainMenu .bar{height:70px}.mainMenu .bar .mcui-brand{height:70px;left:40px;top:-4px}.mainMenu .bar .navContent{flex-direction:row;left:0;top:0}.mainMenu .bar .navContent .left{height:70px;left:240px;position:absolute;top:0;width:100%}.mainMenu .bar .navContent .left .mainLink{align-items:center;font-size:1.6rem;height:70px;opacity:0.7}.mainMenu .bar .navContent .left .navLinks{align-items:flex-start;flex-direction:row}.mainMenu .bar .navContent .left .navLinks .linkBucket.open .menu{height:auto}.mainMenu .bar .navContent .right{flex-direction:row;height:70px;position:absolute}.mainMenu .bar .navContent .right a.btn-contact{align-items:center;display:flex;justify-content:center;padding:0px 40px}.mainMenu .bar .navContent .lang{bottom:0;left:0;position:relative}.mainMenu .bar .mobile-phone,.mainMenu .bar .nav-button{display:none}} .mainMenu { height: 0px!important; } .mainMenu .bar .bar-bg { pointer-events: none; } @media screen and (min-width: 992px) { .mainMenu .bar .navContent .left { pointer-events: all; } .mainMenu .bar .navContent .left .navLinks .linkBucket .menu .solutionSidebar { padding-left: 0px; padding-right: 0px;} .mainMenu .bar .navContent .left .navLinks .linkBucket .menu .solutionSidebar .buttons a {margin:10px 0 0 0 !important;} }
    </style>
<nav class="mainMenu">
  <div class="overlay js-overlay" id="menuOverlay"></div>
  <div class="bar">
      <div class="bar-bg"></div>
      <div class="mcui-brand">
          <a class="" href="/" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | Logo" tabindex="0" aria-label="MasterControl Homepage Link">
              <svg class="logo" viewbox="0 0 187 22.2" x="0px" y="0px">
                <path class="st0" d="M7.3,0H0v7.3h7.3V0z"></path>
                <path class="st0" d="M14.6,0v7.3h7.3v7.3v7.3h7.3v-7.3V7.3L21.9,0H14.6z"></path>
                <path class="st0" d="M36.5,0h-7.3v7.3h7.3v7.3v7.3h7.3v-7.3V7.3L36.5,0z"></path>
                <path class="st0" d="M7.3,14.6v7.3h7.3v-7.3V7.3H7.3V14.6z"></path>
                <g class="logo-text">
                  <path class="st0" d="M53.5,7.3h3.4l3.8,9.1l3.7-9.1h3.4v14.6H65v-9.8l-3.4,8h-2.2l-3.2-7.9h-0.1v9.6h-2.6V7.3z"></path>
                  <path class="st0" d="M69.8,19c0-2,1.9-3.2,3.8-3.2h2.8v-1c0-1.2-0.7-1.6-1.9-1.6c-1,0-1.9,0.4-1.9,1v0.4h-2.2v-0.3 c0-2.3,2.2-3.1,4.1-3.1c2.3,0,4.5,0.7,4.5,3.4v5.1c0,0.4,0,2,0.1,2.2h-2.5c0-0.1-0.1-0.7-0.1-1c-0.9,1-1.8,1.2-3.1,1.2 C71.3,22.1,69.8,20.9,69.8,19z M76.4,18v-0.4h-2.5c-1,0-1.8,0.4-1.8,1.3s0.7,1.3,1.9,1.3C76.1,20.2,76.4,19.1,76.4,18z"></path>
                  <path class="st0" d="M80.8,20.2l1.8-1.3c0.6,0.9,1.8,1.3,2.9,1.3c1,0,2-0.3,2-1.3c0-0.9-0.6-1-1.9-1.3l-1.3-0.3 c-1.8-0.3-2.9-1.2-2.9-2.8c0-2.2,1.9-3.5,4.1-3.5c1.9,0,3.2,0.4,4.1,1.8L87.8,14c-0.6-0.4-1.3-0.7-2.3-0.7s-1.8,0.4-1.8,1.2 s0.9,0.9,2,1l1.6,0.3c1.8,0.3,2.8,1.3,2.8,2.9c0,2.5-2.5,3.5-4.7,3.5C83.7,22.1,81.8,21.6,80.8,20.2z"></path>
                  <path class="st0" d="M92.3,19.4v-6h-1.5v-2h1.5V8.2H95v3.2h2.3v2H95v5.4c0,0.7,0.4,1,1,1s0.7,0,1.3-0.1v2.2C96.7,22,95.8,22,95.4,22 C93.6,22.1,92.3,21.3,92.3,19.4z"></path>
                  <path class="st0" d="M98.3,17.8v-2c0-2.9,2.2-4.5,4.8-4.5c2.3,0,4.5,1.3,4.5,4.1v2H101V18c0,1.3,1,2,2.5,2c0.9,0,1.8-0.6,2.3-1.3 l1.9,1.2c-0.9,1.6-2.5,2.3-4.4,2.3C100.7,22.2,98.3,20.7,98.3,17.8z M105.2,15.6v-0.3c0-1.5-1-2-2-2s-2.2,0.6-2.2,2.2v0.1H105.2z"></path>
                  <path class="st0" d="M109.9,11.4h2.5v1.8c0.6-1.2,2.2-1.9,3.4-1.9c0.3,0,0.6,0,0.9,0v2.3c-0.3,0-0.6,0-0.9,0c-1.9,0-3.4,1-3.4,3.1 V22h-2.5V11.4z"></path>
                  <path class="st1" d="M184.5,7.6h-0.4V7.3h1.2v0.3h-0.4v1.3h-0.3V7.6H184.5z"></path>
                  <path class="st1" d="M185.5,7.3h0.3l0.4,1l0.4-1h0.3v1.6h-0.3v-1l-0.3,0.9H186l-0.3-0.9v1h-0.3V7.3H185.5z"></path>
                  <path class="st1" d="M118,17.1v-4.7c0-3.5,2.6-5.4,5.8-5.4c2.8,0,5.6,1.6,5.6,4.8v0.4h-2.6v-0.1c0-1.9-1.6-2.6-2.9-2.6 c-1.5,0-3.1,0.7-3.1,2.8V17c0,1.8,1.5,2.8,3.2,2.8c1.3,0,2.9-0.7,2.9-2.6v-0.1h2.6v0.4c0,3.2-2.6,4.8-5.4,4.8 C120.8,22.2,118,20.3,118,17.1z"></path>
                  <path class="st1" d="M131.3,18v-2.3c0-2.8,2.5-4.4,4.7-4.4c2.5,0,4.8,1.8,4.8,4.4v2.2c0,2.8-2.5,4.4-4.7,4.4 C133.5,22.2,131.3,20.7,131.3,18z M138.4,18v-2.6c0-1.3-1-2-2.3-2c-1,0-2.2,0.6-2.2,2V18c0,1.3,1,2,2.3,2 C137.2,20,138.4,19.4,138.4,18z"></path>
                  <path class="st1" d="M142.6,11.4h2.5v1.3c0.7-1,1.8-1.5,2.9-1.5c2.3,0,3.7,1.5,3.7,3.9v6.7h-2.5v-6.1c0-1.6-0.7-2.5-1.9-2.5 c-1.3,0-2.2,0.9-2.2,2.6v5.8h-2.5V11.4z"></path>
                  <path class="st1" d="M154.7,19.4v-6h-1.5v-2h1.5V8.2h2.5v3.2h2.3v2h-2.3v5.4c0,0.7,0.4,1,1,1c0.4,0,0.7,0,1.3-0.1v2.2 c-0.6,0.1-1.5,0.1-1.9,0.1C156,22.1,154.7,21.3,154.7,19.4z"></path>
                  <path class="st1" d="M161,11.4h2.5v1.8c0.6-1.2,2.2-1.9,3.4-1.9c0.3,0,0.6,0,0.9,0v2.3c-0.3,0-0.6,0-0.9,0c-1.9,0-3.4,1-3.4,3.1V22 H161V11.4z"></path>
                  <path class="st1" d="M168.6,18v-2.3c0-2.8,2.5-4.4,4.7-4.4c2.5,0,4.8,1.8,4.8,4.4v2.2c0,2.8-2.5,4.4-4.7,4.4 C170.8,22.2,168.6,20.7,168.6,18z M175.6,18v-2.6c0-1.3-1-2-2.3-2c-1,0-2.2,0.6-2.2,2V18c0,1.3,1,2,2.3,2 C174.4,20,175.6,19.4,175.6,18z"></path>
                  <path class="st1" d="M179.8,19.1V7.3h2.5v11.8c0,0.4,0.3,0.9,0.9,0.9c0.4,0,0.7,0,1.2-0.1v1.9c-0.6,0.1-1.3,0.3-2,0.3 C180,22.1,179.8,20,179.8,19.1z"></path>
                </g>
              </svg>
            </a>
      </div>
      <div class="mobile-phone d-block d-lg-none">
          <a href="tel:+18667478767" tabindex="0" aria-label="Call Us"><i class="fal fa-phone"></i></a>
      </div>
      <button id="mobile-button" class="nav-button">
          <svg class="ham" x="0px" y="0px" viewBox="0 0 20 20" width="20px">
            <line class="hamLine" fill="none" stroke="#fff" x1="0" y1="2" x2="20" y2="2"></line>
            <line class="hamLine" fill="none" stroke="#fff" x1="0" y1="10" x2="20" y2="10"></line>
            <line class="hamLine" fill="none" stroke="#fff" x1="0" y1="10" x2="20" y2="10"></line>
            <line class="hamLine" fill="none" stroke="#fff" x1="0" y1="18" x2="20" y2="18"></line>
          </svg>
          <svg class="x" x="0px" y="0px" viewBox="0 0 7.7 7.7" width="10px">
            <path fill="#3D4F63" class="st0" d="M0.3,0.4c0.4-0.4,1-0.4,1.4,0L7.4,6c0.4,0.4,0.4,1,0,1.4c-0.4,0.4-1,0.4-1.4,0L0.3,1.8
              C-0.1,1.4-0.1,0.8,0.3,0.4z"></path>
            <path fill="#3D4F63" class="st0" d="M0.3,7.4c-0.4-0.4-0.4-1,0-1.4l5.7-5.7c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4L1.7,7.4
              C1.3,7.8,0.7,7.8,0.3,7.4z"></path>
          </svg>
      </button>
      <div class="navContent">
          <div class="left">
              <div class="navLinks">
                  <div class="linkBucket js-linkBucket" id="Solutions">
                      <div class="mainLink" tabindex="0">
                          <span>Solutions</span>
                          <svg x="0px" y="0px" viewBox="0 0 4 7" width="6px">
                            <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                          </svg>
                        </div>
                        <div class="menu">
                          <div class="row">
                            <div class="mobile-menu-return mainLink-return col-12">
                                <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                  <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                </svg>
                                Back
                            </div>
                            <div class="links-drawer col-md-3">
                                <p class="content-label">Our Solutions</p>
                                <div class="selected drawer-btn" data-drawer="quality" tabindex="0"><span class="link-body">Quality</span>
                                  <svg x="0px" y="0px" viewBox="0 0 4 7" width="10px">
                                    <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                                  </svg>
                                </div>
                                <div class="drawer-btn" data-drawer="manufacturing"><span class="link-body">Manufacturing</span>
                                  <svg x="0px" y="0px" viewBox="0 0 4 7" width="10px">
                                    <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                                  </svg>
                                </div>
                            </div>
                            <div class="col-md-6 middle-column">
                                <div class="drawer quality open" id="quality">
                                    <div class="mobile-menu-return col-12">
                                        <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                          <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                        </svg>
                                        Solutions
                                    </div>
                                    <div class="middle-content">
                                        <h4 class="kicker">QMS Features</h4>
                                            <div class="links-columns">
                                                <div class="col-md-6 col-sm-12">
                                                <a href="/quality/"><h5>QMS Overview</h5></a>
                                                <a href="/quality/document-control-software/"><h5>Document Control</h5></a>
                                                <a href="/quality/change-control-software/software-systems/"><h5>Change Control</h5></a>
                                                <a href="/quality/training-software/"><h5>Training Management</h5></a>
                                                <a href="/quality/audit-management/"><h5>Audit Management</h5></a>
                                                <a href="/quality/qms/"><h5>Quality Management</h5></a>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <a  href="/quality/capa-software/corrective-action-capa-software/"><h5>CAPA Software</h5></a>
                                                <a href="/quality/deviations/"><h5>Deviations Management</h5></a>
                                                <a href="/quality/nonconformance/management-software/"><h5>Nonconformance</h5></a>
                                                <a href="/quality/oos-software/"><h5>Out of Specification</h5></a>
                                                <a href="/quality/risk-software/"><h5>Risk Management</h5></a>
                                                <a href="/insights/"><h5>Data and Analytics</h5></a>
                                            </div>
                                        </div>
                                        <p class="kicker">Add-Ons</p>
                                        <div class="links-columns">
                                                <div class="col-md-6 col-sm-12">
                                                    <a href="/postmarket/">Postmarket</a>
                                                    <a href="/supplier/">Supplier</a>
                                                    <a href="/product-development/">Product Development</a>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <a href="/regulatory/">Regulatory</a>
                                                    <a href="/clinical/">Clinical</a>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="drawer manufacturing" id="manufacturing">
                                    <div class="mobile-menu-return col-12">
                                        <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                          <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                        </svg>
                                        Solutions
                                    </div>
                                    <div class="middle-content">
                                        <h4 class="kicker">MES Features</h4>
                                        <div class="links-columns">
                                            <div class="col-md-6 col-sm-12">
                                                <a href="/manufacturing/"><h5>MES Overview</h5></a>
                                                <a href="/manufacturing/batch-records/"><h5>Batch Records</h5></a>
                                                <a href="/manufacturing/edhr-software-systems/"><h5>Device History Records</h5></a>
                                                <a href="/manufacturing/calibration-maintenance/calibration-software/"><h5>Equipment Calibration</h5></a>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <a href="/manufacturing/recipe-management-system/"><h5>Recipe Management System</h5></a>
                                                <a href="/manufacturing/variant-management/"><h5>Variant Management</h5></a>
                                                <a href="/insights/"><h5>Data and Analytics</h5></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 solutionSidebar">
                                <div class="links">
                                <p class="content-label">Solutions by Industry</p>
                                <a href="/industries/pharma/">Pharmaceuticals</a>
                                <a href="/industries/medical-device/">Medical Device</a>
                                <a href="/industries/dietary-supplements/">Dietary Supplements</a>
                                <a href="/industries/blood/">Blood, Biologics and Tissue</a>
                                <a href="/industries/food-and-beverage/">Food & Beverage</a>
                                </div>
                                <div class="buttons">
                                    <a href="/pricing/">
                                        <p class="content-label">Pricing</p> 
                                        <p><span>Take a look at our flexible pricing plans</span> and request an estimate that works for your business.</p>
                                    </a>
                                    <a href="/services/">
                                        <p class="content-label">Services</p> 
                                        <p><span>See the services you need</span> to get you up and running faster and realize value sooner.</p>
                                    </a>
                                </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="linkBucket js-linkBucket" id="LearningCenter">
                      <div class="mainLink" tabindex="0">
                          <span>Learning Center</span>
                          <svg x="0px" y="0px" viewBox="0 0 4 7" width="6px">
                            <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                          </svg>
                        </div>
                        <div class="menu">
                          <div class="row">
                            <div class="mobile-menu-return mainLink-return col-12">
                              <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                              </svg>
                              Back
                            </div>
                            <div class="links-drawer col-md-3">
                                <p class="content-label">Our Knowledge Base</p>
                                <div class="selected drawer-btn" data-drawer="resources" tabindex="0"><span class="link-body">Resources</span>
                                  <svg x="0px" y="0px" viewBox="0 0 4 7" width="10px">
                                    <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                                  </svg>
                                </div>
                                <div class="drawer-btn" data-drawer="regulations" tabindex="0"><span class="link-body">Compliance</span>
                                  <svg x="0px" y="0px" viewBox="0 0 4 7" width="10px">
                                    <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                                  </svg>
                                </div>
                                <div class="drawer-btn" data-drawer="platform" tabindex="0"><span class="link-body">Integrations</span>
                                  <svg x="0px" y="0px" viewBox="0 0 4 7" width="10px">
                                    <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                                  </svg>
                                </div>
                                <div class="drawer-btn" data-drawer="templates" tabindex="0"><span class="link-body">Templates and Guidelines</span>
                                  <svg x="0px" y="0px" viewBox="0 0 4 7" width="10px">
                                    <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                                  </svg>
                                </div>
                            </div>
                            <div class="col-md-9 middle-column">
                                <div class="drawer resources open" id="resources">
                                    <div class="mobile-menu-return col-12">
                                        <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                          <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                        </svg>
                                        Learning Center
                                    </div>
                                    <div class="middle-content">
                                        <p class="kicker">Resources</p>
                                            <div class="links-columns ">
                                                <div class="col-md-6 col-sm-12 grid g-three">
                                                <a href="/resource-center/">Resource Center
                                                    <p>White Papers, Videos, Guides and more. Our industry expertise is yours.</p>
                                                </a>
                                                <a href="/library/roi-calculator/quality/">QMS ROI Calculator
                                                    <p>Answer a few questions and find out your QMS cost savings.</p>
                                                </a>
                                                <a href="/library/roi-calculator/manufacturing/">Manufacturing ROI Calculator
                                                    <p>Calculate your potential ROI for a modern MES solution.</p>
                                                </a>
                                                <a href="/gxp-lifeline/">Blog - GxP Lifeline
                                                    <p>Read our newest articles from our industry experts.</p>
                                                </a>
                                                <a href="/qualityawards/">Customer Awards
                                                    <p>Acknowledging MasterControl customers who have accomplished amazing things.</p>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="drawer regulations" id="regulations">
                                    <div class="mobile-menu-return col-12">
                                        <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                          <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                        </svg>
                                        Learning Center
                                    </div>
                                    <div class="middle-content three-col">
                                        <div class="col-sm-12">
                                        <p class="kicker">FDA Regulations</p>
                                            <div class="links-columns"> 
                                                <a href="/compliance/21-cfr-regulations/21-cfr-part-11/">21 CFR Part 11</a>
                                                <a href="/compliance/21-cfr-regulations/111/">21 CFR Part 111</a>
                                                <a href="/compliance/21-cfr-regulations/1271/">21 CFR Part 1270-1271</a>
                                                <a href="/compliance/21-cfr-regulations/210-211/">21 CFR Part 210-211</a>
                                                <a href="/compliance/21-cfr-regulations/606/">21 CFR Part 606</a>
                                                <a href="/compliance/21-cfr-regulations/21-cfr-part-820/">21 CFR Part 820</a>
                                            </div></div>
                                            <div class="col-sm-12">
                                                <p class="kicker">ISO Standards</p>
                                                    <div class="links-columns"> 
                                                        <a href="/compliance/iso9000/">ISO 9000</a>
                                                        <a href="/compliance/iso9001/">ISO 9001</a>
                                                        <a href="/compliance/iso13485/">ISO 13485</a>
                                                        <a href="/compliance/iso14000/">ISO 14000</a>
                                                        <a href="/compliance/iso14971/">ISO 14971</a>
                                                        <a href="/compliance/iso15189/">ISO 15189</a>
                                                        <a href="/compliance/iso17025/">ISO 17025</a>
                                                    </div></div>
                                          <div class="col-sm-12">
                                                <p class="kicker">Global Compliance</p>
                                                <div class="links-columns"> 
                                                <a href="/compliance/ts16949/">TS 16949</a>
                                                <a href="/compliance/clia/">CLIA</a>
                                                <a href="/compliance/canadian-standards/">Canadian Standards</a>
                                                <a href="/compliance/annex-11/">EU Annex 11</a>
                                                <a href="/compliance/eu-mdr/">EU Medical Device Regulation</a>
                                                <a href="/compliance/tga/">Therapeutic Goods Administration (TGA) Regulations</a>
                                            </div></div>
                                        </div>
                                        
                                    </div>
                                
                                <div class="drawer platform" id="platform">
                                    <div class="mobile-menu-return col-12">
                                        <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                          <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                        </svg>
                                        Learning Center
                                    </div>
                                    <div class="middle-content">
                                        <p class="kicker">MasterControl Integrations</p>
                                            <div class="links-columns ">
                                                <div class="col-sm-12 grid g-three">
                                                <a href="/manufacturing/erp-software-system/">ERP Software System
                                                    <p>Integrate with ERP software to completely digitize your production process.</p>
                                                </a>
                                                <a href="/manufacturing/mrp-software-system/">MRP Software System
                                                    <p>Integrate with MRP to improve accuracy, visibility and efficiency in manufacturing</p>
                                                </a>
                                                <a href="/manufacturing/mrpii/">Manufacturing Resource Planning
                                                    <p>Using a more robust MRP II system? We integrate with that too.</p>
                                                </a>
                                                <a href="/manufacturing/productions-operations-management/">Production Operations Management
                                                    <p>Quantity of products that are the right level of quality at the right time and the right cost.</p>
                                                </a>
                                                <a href="/clinical/information-system/">LIMS System
                                                    <p>Learn how MasterControl integrates your lab data with quality documentation.</p>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div class="drawer templates" id="templates">
                                    <div class="mobile-menu-return col-12">
                                        <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                          <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                        </svg>
                                        Learning Center
                                      </div>
                                    <div class="middle-content three-col">
                                        <div class="col-sm-12">
                                        <p class="kicker">Templates</p>
                                            <div class="links-columns"> 
                                                <a href="/quality/sop-standard-operating-procedure/template/">SOP Template</a>
                                                <a href="/quality/change-control-software/templates/">Change Control Template</a>
                                                <a href="/product-development/design-control-templates/">Design Control Template</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                                <p class="kicker">Guidelines</p>
                                                    <div class="links-columns"> 
                                                        <a href="/manufacturing/gmp/guidelines/">GMP Guidelines</a>
                                                        <a href="/quality/sop-standard-operating-procedure/guidelines/">SOP Guidelines</a>
                                                        <a href="/regulatory/ectd/ich-guidelines/">ICH Guidelines</a>
                                                        <a href="/regulatory/ectd/guidelines/">ECTD Guidelines</a>
                                                        <a href="/compliance/fda/cder-guidelines/">CDER Guidelines</a>
                                                    </div>
                                        </div>
                                        </div>
                                        
                                    </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="linkBucket js-linkBucket" id="AboutUs">
                      <div class="mainLink" tabindex="0">
                          <span>About Us</span>
                          <svg x="0px" y="0px" viewBox="0 0 4 7" width="6px">
                            <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                          </svg>
                        </div>
                        <div class="menu">
                          <div class="row">
                            <div class="mobile-menu-return mainLink-return col-12">
                              <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                              </svg>
                              Back
                            </div>
                            <div class="links-drawer col-md-3">
                                <p class="content-label">Who We Are</p>
                                <div class="selected drawer-btn" data-drawer="company" tabindex="0"><span class="link-body">Our Company</span>
                                  <svg x="0px" y="0px" viewBox="0 0 4 7" width="10px">
                                    <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                                  </svg>
                                </div>
                                <div class="drawer-btn" data-drawer="events" tabindex="0"><span class="link-body">Events</span>
                                  <svg x="0px" y="0px" viewBox="0 0 4 7" width="10px">
                                    <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                                  </svg>
                                </div>
                                <div class="drawer-btn" data-drawer="partner" tabindex="0"><span class="link-body">Become a Partner</span>
                                  <svg x="0px" y="0px" viewBox="0 0 4 7" width="10px">
                                    <path fill="#202C3A" class="st0" d="M4,3.9l-4,3l0-6L4,3.9z"></path>
                                  </svg>
                                </div>
                            </div>
                            <div class="col-md-9 middle-column">
                                <div class="drawer open company" id="company">
                                    <div class="mobile-menu-return col-12">
                                        <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                          <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                        </svg>
                                        About Us
                                      </div>
                                    <div class="col-md-9 middle-content">
                                        <a href="/company/" ><div class="featured-link"><p class="kicker">About MasterControl</p> <div class="cta-text">Learn More 
                                            <svg width="19" height="15" viewBox="0 0 19 15" fill="#3b94a3" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 8C0 7.44772 0.447715 7 1 7L17 7C17.5523 7 18 7.44772 18 8C18 8.55228 17.5523 9 17 9L1 9C0.447716 9 0 8.55228 0 8Z"></path>
                                            <path d="M10.7072 1.46492C11.0977 1.07439 11.7309 1.0744 12.1214 1.46492L17.7783 7.12177C18.1688 7.5123 18.1688 8.14546 17.7783 8.53599C17.3877 8.92651 16.7546 8.92651 16.3641 8.53599L10.7072 2.87913C10.3167 2.48861 10.3167 1.85544 10.7072 1.46492Z"></path>
                                            <path d="M10.7071 14.2774C10.3166 13.8869 10.3166 13.2537 10.7071 12.8632L16.364 7.20635C16.7545 6.81583 17.3877 6.81583 17.7782 7.20635C18.1687 7.59688 18.1687 8.23004 17.7782 8.62057L12.1213 14.2774C11.7308 14.6679 11.0976 14.6679 10.7071 14.2774Z"></path>
                                            </svg></div></div>
                                            <p class="featured-text">Everything we do is designed to help you develop, manufacture and commercialize products that help people live longer, healthier and more enjoyable lives.</p>
                                        </a>
                                        
                                            <div class="links-columns">
                                                <div class="col-md-6 col-sm-12 grid g-two">
                                                <a href="/company/values/">Our Core Values
                                                    <p class="add-info">At MasterControl, customer success is the core value on which we base our entire business operating philosophy.</p>
                                                </a>
                                                <a href="/company/team/">Executive Team
                                                    <p class="add-info">Our executives bring a wealth of knowledge to the cause!</p>
                                                </a>
                                                <a href="/news/">MasterControl In The News
                                                    <p class="add-info">MasterControl is making news and leading the way in solving business problems for all types of regulated manufacturers.</p>
                                                </a>
                                                <a href="/careers/">Careers
                                                    <p class="add-info">Choosing where to work is a difficult decision. Let us make it easy for you.</p>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-3 card-sidebar">
                                        
                                      <div class="link-cards">
                                        <div class="event-card">
                                          <div class="event-bg">
                                            <img src="https://mastercontrol.com/images/default-source/events/masterssummit2023/events-page-banner-530x375.png" alt="">
                                          </div>
                                          <div class="event-caption">
                                            <p class="event-title">Masters Conference 2024</p>
                                            <p class="event-info">
                                              14-16 May | Dublin, Ireland
                                            </p>
                                            <br>
                                            <!-- <p class="text-white"><strong>Save the Date</strong></p>  -->
                                            <a href="https://www.mastercontrol.com/events/conference/" target="_blank" rel="noopener" class="btn btn-white">Learn More</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="link-cards">
                                        <div class="event-card">
                                          <div class="event-bg">
                                            <img src="https://www.mastercontrol.com/images/default-source/events/banner_savethedate_530x375.png?" alt="">
                                          </div>
                                          <div class="event-caption">
                                            <p class="event-title">Masters Summit 2024</p>
                                            <p class="event-info">
                                            14-18 October | Salt Lake City, UT
                                            </p>
                                            <br>
                                            <p class="text-white"><strong>Save the Date</strong></p> 
                                            <!-- <a href="https://www.mastercontrol.com/events/summit/" target="_blank" rel="noopener" class="btn btn-white">Learn More</a> -->
                                          </div>
                                        </div>
                                      </div>

                                    </div>
                                </div>
                                
                                <div class="drawer events" id="events">
                                    <div class="mobile-menu-return col-12">
                                        <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                          <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                        </svg>
                                        About Us
                                      </div>
                                    <div class="col-md-9 middle-content">
                                        <a href="/events/" ><div class="featured-link"><p class="kicker">Upcoming Events</p> <div class="cta-text">Learn More 
                                            <svg width="19" height="15" viewBox="0 0 19 15" fill="#3b94a3" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 8C0 7.44772 0.447715 7 1 7L17 7C17.5523 7 18 7.44772 18 8C18 8.55228 17.5523 9 17 9L1 9C0.447716 9 0 8.55228 0 8Z"></path>
                                            <path d="M10.7072 1.46492C11.0977 1.07439 11.7309 1.0744 12.1214 1.46492L17.7783 7.12177C18.1688 7.5123 18.1688 8.14546 17.7783 8.53599C17.3877 8.92651 16.7546 8.92651 16.3641 8.53599L10.7072 2.87913C10.3167 2.48861 10.3167 1.85544 10.7072 1.46492Z"></path>
                                            <path d="M10.7071 14.2774C10.3166 13.8869 10.3166 13.2537 10.7071 12.8632L16.364 7.20635C16.7545 6.81583 17.3877 6.81583 17.7782 7.20635C18.1687 7.59688 18.1687 8.23004 17.7782 8.62057L12.1213 14.2774C11.7308 14.6679 11.0976 14.6679 10.7071 14.2774Z"></path>
                                            </svg></div></div>
                                            <p class="featured-text">Everything we do is designed to help you develop, manufacture and commercialize products that help people live longer, healthier and more enjoyable lives.</p>
                                        </a>
                                        
                                            <div class="links-columns">
                                                <div class="col-md-6 col-sm-12 grid g-two">
                                                <a href="/events/summit/">Masters Summit North America
                                                    <p class="add-info">Join us at our can’t-miss annual event for life sciences quality and manufacturing professionals.</p>
                                                </a>
                                                <a href="/events/conference/">Masters Conference Europe
                                                    <p class="add-info">Make plans to join us at our European can’t-miss event for life sciences quality and manufacturing professionals.</p>
                                                </a>
                                                <a href="/events/">Industry Events
                                                    <p class="add-info">Come find us at manufacturing and quality industry events near you. We love meeting new people and old friends.</p>
                                                </a>
                                                <a href="/events/?webinars">Webinars
                                                    <p class="add-info">See thought leaders sharing helpful insights and best-practices for manufacturing in highly regulated industries.</p>
                                                </a>

                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-3 card-sidebar">
                                      <div class="link-cards">
                                        <div class="event-card">
                                          <div class="event-bg">
                                            <img src="https://mastercontrol.com/images/default-source/events/masterssummit2023/events-page-banner-530x375.png" alt="">
                                          </div>
                                          <div class="event-caption">
                                            <p class="event-title">Masters Conference 2024</p>
                                            <p class="event-info">
                                              14-16 May | Dublin, Ireland
                                            </p>
                                            <br>
                                            <!-- <p class="text-white"><strong>Save the Date</strong></p>  -->
                                            <a href="https://www.mastercontrol.com/events/conference/" target="_blank" rel="noopener" class="btn btn-white">Learn More</a>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="link-cards">
                                        <div class="event-card">
                                          <div class="event-bg">
                                            <img src="https://www.mastercontrol.com/images/default-source/events/banner_savethedate_530x375.png?" alt="">
                                          </div>
                                          <div class="event-caption">
                                            <p class="event-title">Masters Summit 2024</p>
                                            <p class="event-info">
                                            14-18 October | Salt Lake City, UT
                                            </p>
                                            <br>
                                            <p class="text-white"><strong>Save the Date</strong></p> 
                                            <!-- <a href="https://www.mastercontrol.com/events/summit/" target="_blank" rel="noopener" class="btn btn-white">Learn More</a> -->
                                          </div>
                                        </div>
                                      </div>
                                      
                                      
                                    </div>
                                </div>
                                
                                <div class="drawer partner" id="partner">
                                    <div class="mobile-menu-return  col-12">
                                        <svg x="0px" y="0px" viewBox="0 0 4 6" width="4px">
                                          <path fill="#fff" class="st0" d="M0,3l4-3v6L0,3z"></path>
                                        </svg>
                                        About Us
                                      </div>
                                    <div class="middle-content">
                                        <p class="kicker">MasterControl Partner</p>
                                            <div class="links-columns ">
                                                <div class="col-sm-12 grid g-three">
                                                <a href="/partners/">Partner Program
                                                    <p>Grow your market and revenue with a MasterControl Partnership.</p>
                                                </a>
                                                <a href="/partners/referral/">Referral Partners
                                                    <p>Earn a commission when your referral becomes a MasterControl customer.</p>
                                                </a>
                                                <a href="/partners/sales-partners/">Sales Partners
                                                    <p>Go to market with MasterControl, a manufacturing industry leader.</p>
                                                </a>
                                                <a href="/partners/services-partners/">Service Partners
                                                    <p>Gain a new revenue stream by becoming an extension of MasterControl’s Services team.</p>
                                                </a>
                                                <a href="/partners/technology-and-strategic-partners/">Technology and Strategic Partners
                                                    <p>Offer more value by collaborating on innovative technologies.</p>
                                                </a>
                                                <a href="/associations/">Industry Associations
                                                  <p>See how we partner with many quality and manufacturing trade associations.</p>
                                              </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                  </div>
              
              </div>
          </div>
          <div class="right">
                  <div class="search-link">
                    <div class="field">
                      <i class="fal fa-search search-open"></i>
                      <input class="form-control" id="searchterm" name="search" placeholder="Search MasterControl.com" type="text" autocomplete="off" role="combobox" aria-describedby="unibox-controls-description" aria-owns="unibox-suggest-box" aria-expanded="false" aria-label="Search Input" tabindex="-1">
                    </div>
                    <div class="search-trigger opaque">
                      <i class="fal fa-search search-open" tabindex="0" aria-label="Search Open Button"></i>
                      <i class="fal fa-times search-close" tabindex="-1" aria-label="Search Close Button"></i>
                    </div>
                  </div>
                  <a class="login js-nav-link" href="/customers/" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | Login" tabindex="0" aria-label="Login"><span>Login</span></a>
                  <div class="lang" tabindex="-1">
                    <a class="lang-button" href="/" tabindex="0" aria-label="Language"><span>US</span>
                      <svg viewBox="0 0 6 4" width="9px" x="0px" y="0px">
                      <path class="st0" d="M3,4L0,0l6,0L3,4z"></path></svg>
                    </a>
                    <div class="lang-content">
                      <a class="language-nav-selector js-nav-link" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | International | English / United States" data-url-prefix="/us" href="/" tabindex="-1" aria-label="United States">
                        <div class="mcui-flag mcui-flag-us"></div>
                        English / United States
                      </a>
                      <a class="language-nav-selector js-nav-link" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | International | English / United Kingdom" data-url-prefix="/uk" href="/uk/" tabindex="-1" aria-label="United Kingdom">
                        <div class="mcui-flag mcui-flag-gb"></div>
                        English / United Kingdom
                      </a>
                      <!-- <a class="language-nav-selector js-nav-link" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | International | Deutsch / Deutschland" data-url-prefix="/de" href="/de/" tabindex="-1" aria-label="Deutsch / Deutschland">
                        <div class="mcui-flag mcui-flag-de"></div>
                        Deutsch / Deutschland
                      </a> -->
                      <a class="language-nav-selector js-nav-link" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | International | Français / France" data-url-prefix="/fr" href="/fr/" tabindex="-1" aria-label="France">
                        <div class="mcui-flag mcui-flag-fr"></div>
                        Français / France
                      </a>
                      <a class="language-nav-selector js-nav-link" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | International |日本語 / 日本" data-url-prefix="/jp" href="http://www.mastercontrol.co.jp/" aria-label="Japan" tabindex="-1">
                        <div class="mcui-flag mcui-flag-jp"></div>
                        日本語 / 日本
                      </a>
                      <a class="language-nav-selector js-nav-link" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | International |English / Australia" data-url-prefix="/au" href="/au/" aria-label="Australia" tabindex="-1">
                        <div class="mcui-flag mcui-flag-au"></div>
                        English / Australia
                      </a>
                      <!-- <a class="language-nav-selector js-nav-link lang-color" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | International | 繁体中文" data-url-prefix="/cn" href="https://www.mastercontrol.cn/" tabindex="-1" aria-label="Simplified Chinese">
                        简体中文
                      </a> -->
                      <a class="language-nav-selector js-nav-link lang-color" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | International | 繁體中文" data-url-prefix="/tw" href="https://www.mastercontrol.tw/" tabindex="-1" aria-label="Traditional Chinese">
                        繁體中文
                      </a>
                    </div>
                  </div>
                  <a class="js-nav-link btn-contact" href="/contact/" data-lne="Nav_MegaMenu" data-nlc="MegaMenu Nav | Contact" tabindex="0" aria-label="Contact Us">Contact Us</a>
          </div>
          </div>
  </div>
</nav>

    </div>
    </div>

