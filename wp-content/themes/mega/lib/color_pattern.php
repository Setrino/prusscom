<?php
//add new color css file
$wope_color_options 		= get_option('wope-color');
$wope_highlight_color 			= $wope_color_options['highlight-color'];
$wope_semi_color 				= $wope_color_options['semi-color'];
$wope_color_text = "::selection{
	background-color:".$wope_highlight_color.";
}

.content a,
.content a:link , 
.content a:visited{
	color:".$wope_highlight_color.";
}

.content a:hover{
	color:#808080;
}

#page{
	background-color:white;
}

#back_top{
	background-color:".$wope_highlight_color.";
}

#back_top i{
	color: #ffffff;
}

#back_top:hover{
	background-color:white;
}

#back_top:hover i{
	color:".$wope_highlight_color.";
}

#header.header-white{
	background-color:#ffffff;
}

.home-blog{
	
}

/* header */
.site-logo{
	color:#2e2e2e;
}

.site-logo a{
	color:#2e2e2e;
}

.site-logo a:hover{
	color:#808080;
}

.header-text-white .site-logo{
	color:white;
}

.header-text-white .site-logo a{
	color:white;
}

.header-text-white .site-logo a:hover{
	color:rgba(255,255,255,0.5);
}

/* top bar */
#top-bar{
	border-bottom:1px solid #d9d9d9;
}

#top-bar  .header-social a{
	background-color: transparent;
}

#top-bar .header-social a i{
	color: #808080;
}

#top-bar .header-social a:hover i{
	color: #4d4d4d;
}

#top-bar .search-form .search-input{
	border:0px;
	border-left:1px solid #d9d9d9;
	border-right:1px solid #d9d9d9;
}

#top-bar .search-form i{
	color: #808080;
}

#top-bar .search-form input{
	background-color: transparent;
}

.contact-detail-line ul li{
	color: #999999;
}

.contact-detail-line ul li i{
	color: #999999;
}


/* header text white */



.header-text-white .contact-detail-line ul li,
.header-text-white .contact-detail-line ul li i{
	color: rgba(255,255,255,0.8);
}

.header-text-white #top-bar{
	border-bottom:1px solid rgba(255,255,255,0.3);
}

.header-text-white #top-bar .header-social a i{
	color: rgba(255,255,255,0.8);
}

.header-text-white #top-bar .header-social a:hover i{
	color: white;
}

.header-text-white #top-bar .search-form .search-input{
	border:0px;
	border-left:1px solid rgba(255,255,255,0.3);
	border-right:1px solid rgba(255,255,255,0.3);
}

.header-text-white #top-bar .search-form i{
	color: rgba(255,255,255,0.8);
}

.header-text-white #top-bar .search-form input{
	background-color: transparent;
	color:white;
}

.header-text-white #top-bar .search-form input::-webkit-input-placeholder{
	color:rgba(255,255,255,0.8);
}

.header-text-white #top-bar .search-form input::-moz-placeholder{
	color:rgba(255,255,255,0.8);
}

.header-text-white #top-bar .search-form input:-ms-input-placeholder{
	color:rgba(255,255,255,0.8);
}

.header-text-white #top-bar .search-form input:-moz-placeholder{
	color:rgba(255,255,255,0.8);
}

/* top bar open */


#topbar-open {
    border: 1px solid #d9d9d9;
    color: #808080;
    border-top: 0px;
}

.header-text-white #topbar-open {
	border: 1px solid rgba(255,255,255,0.3);
    color: white;
    border-top: 0px;
}


/* search widget */

.icon-search{
	color: #999999;
}

.icon-search i{
	color: #cccccc;
}

#searchform input::-webkit-input-placeholder{
	color: #b2b2b2;
} 

#searchform input::-moz-placeholder{
	color: #b2b2b2;
	opacity: 1;
} 

/* header social */
.header-social a{
	background-color:#dfdfdf;
}

.header-social a i{
	color:white;
}

.header-social a:hover{
	background-color:".$wope_highlight_color.";
}

.header-social a:hover i{
	color:white;
}



/* scroll header */

#scroll-header{
	background-color:#f2f2f2;
	border-bottom:1px solid rgba(0,0,0,0.2);
}

/* Toggle Menu button */
#toggle-menu-button{
	border:1px solid #808080;
}

#toggle-menu-button i{
	color:#2e2e2e;
}

#toggle-menu-button:hover{
	background-color:".$wope_highlight_color.";
	border:1px solid ".$wope_highlight_color.";
}

#toggle-menu-button:hover i{
	color:white;
}

.header-text-white #toggle-menu-button{
	border:1px solid rgba(255,255,255,0.5);
}

.header-text-white #toggle-menu-button i{
	color:white;
}

.header-text-white #toggle-menu-button:hover{
	background-color:white;
	border:1px solid white;
}

.header-text-white #toggle-menu-button:hover i{
	color:#2e2e2e;
}

/* Toggle Menu  */
#main-menu-toggle{
	background-color:rgba(255,255,255,0.9);
	box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.2);
}

#main-menu-toggle a{
	color:#808080;
}

#main-menu-toggle a:hover{
	color:".$wope_highlight_color.";
}

.toggle-menu ul{
	background-color: #2e2e2e;
	box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.2);
}

.toggle-menu ul li a{
	color: #fff;
}

.toggle-menu ul li a:hover{
	color: ".$wope_highlight_color.";
}

.header-text-white #main-menu-toggle{
	background-color:rgba(20,20,20,0.95);
	box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.2);
}

.header-text-white .toggle-menu ul{
	background-color:rgba(20,20,20,0.95);
	box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.2);
}



/* Main menu */

.main-menu ul li a{
	color:#2e2e2e !important;
	border-bottom:1px solid transparent !important;
	background-color:transparent !important;
}

.main-menu ul li a:hover,
.main-menu ul li.current-menu-item a,
.main-menu ul li.current-menu-ancestor a,
.main-menu ul li.mega-current-menu-item a,
.main-menu ul li.mega-current-menu-ancestor a,
.main-menu ul li.current-menu-item a:hover,
.main-menu ul li.current-menu-ancestor a:hover{
	color:#2e2e2e !important;
	border-bottom:1px solid #2e2e2e !important;
}

.header-text-white .main-menu ul li a{
	color:white !important;
}

.header-text-white .main-menu ul li a:hover,
.header-text-white .main-menu ul li.current-menu-item a,
.header-text-white .main-menu ul li.current-menu-item a:hover,
.header-text-white .main-menu ul li.current-menu-ancestor a,
.header-text-white .main-menu ul li.current-menu-ancestor a:hover,
.header-text-white .main-menu ul li.mega-current-menu-item a,
.header-text-white .main-menu ul li.mega-current-menu-item a:hover,
.header-text-white .main-menu ul li.mega-current-menu-ancestor a,
.header-text-white .main-menu ul li.mega-current-menu-ancestor a:hover{
	color:white !important;
	border-bottom:1px solid white !important;
}

/* Sub menu */

.main-menu ul ul.sub-menu,
.main-menu ul ul.mega-sub-menu,
.main-menu ul ul.sub-menu ul.sub-menu{
	background-color: #2e2e2e !important;
	box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.2) !important;
}

.header-text-white .main-menu ul ul.sub-menu,
.header-text-white .main-menu ul ul.mega-sub-menu,
.header-text-white .main-menu ul ul.sub-menu ul.sub-menu{
	background-color: rgba(24,24,24,0.95) !important;
	box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.2) !important;
}

/* sub menu li */

.main-menu ul ul li a,
.main-menu ul li.current-menu-item li a,
.main-menu ul li.current-menu-ancestor li a,
.main-menu ul li.mega-current-menu-item li a,
.main-menu ul li.mega-current-menu-ancestor li a,
.main-menu ul li.current-menu-ancestor li.current-menu-item li a, /* SUB MENU LEVEL2 */
.main-menu ul li.current-menu-ancestor li.current-menu-parent li a,
.main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-item li a,
.main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-parent li a{
	color:#b2b2b2 !important;
	border-bottom:1px solid transparent !important;
}

.main-menu ul li.current-menu-ancestor li.current-menu-item a,
.main-menu ul li.current-menu-ancestor li.current-menu-parent a,
.main-menu ul li.current-menu-ancestor li.current-menu-parent li.current-menu-item a,
.main-menu ul li.mega-current-menu-ancestor li.current-menu-item a, /* SUB MENU OF MEGA 4 COLUMN DOES NOT HAVE MEGA PREFIX */
.main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-item a,
.main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-parent a,
.main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-parent li.mega-current-menu-item a,
.main-menu ul ul li a:hover,   /* RESTORE HOVER */
.main-menu ul li.current-menu-ancestor li a:hover,
.main-menu ul li.current-menu-ancestor li.current-menu-item li a:hover,
.main-menu ul li.current-menu-ancestor li.current-menu-parent li a:hover,
.main-menu ul li.mega-current-menu-ancestor li a:hover,
.main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-item li a:hover,
.main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-parent li a:hover{
	color:#b2b2b2 !important;
	border-bottom:1px solid #b2b2b2 !important;
}


.header-text-white .main-menu ul ul li a,
.header-text-white .main-menu ul li.current-menu-item li a,
.header-text-white .main-menu ul li.current-menu-ancestor li a,
.header-text-white .main-menu ul li.mega-current-menu-item li a,
.header-text-white .main-menu ul li.mega-current-menu-ancestor li a,
.header-text-white .main-menu ul li.current-menu-ancestor li.current-menu-item li a, /* SUB MENU LEVEL2 */
.header-text-white .main-menu ul li.current-menu-ancestor li.current-menu-parent li a,
.header-text-white .main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-item li a,
.header-text-white .main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-parent li a{
	color:white !important;
	border-bottom:1px solid transparent !important;
}

.header-text-white .main-menu ul li.current-menu-ancestor li.current-menu-item a,
.header-text-white .main-menu ul li.current-menu-ancestor li.current-menu-parent a,
.header-text-white .main-menu ul li.current-menu-ancestor li.current-menu-parent li.current-menu-item a,
.header-text-white .main-menu ul li.mega-current-menu-ancestor li.current-menu-item a, /* SUB MENU OF MEGA 4 COLUMN DOES NOT HAVE MEGA PREFIX */
.header-text-white .main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-item a,
.header-text-white .main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-parent a,
.header-text-white .main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-parent li.mega-current-menu-item a,
.header-text-white .main-menu ul ul li a:hover,   /* RESTORE HOVER */
.header-text-white .main-menu ul li.current-menu-ancestor li a:hover,
.header-text-white .main-menu ul li.current-menu-ancestor li.current-menu-item li a:hover,
.header-text-white .main-menu ul li.current-menu-ancestor li.current-menu-parent li a:hover,
.header-text-white .main-menu ul li.mega-current-menu-ancestor li a:hover,
.header-text-white .main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-item li a:hover,
.header-text-white .main-menu ul li.mega-current-menu-ancestor li.mega-current-menu-parent li a:hover{
	color:white !important;
	border-bottom:1px solid white !important;
}

/* Max Mega Menu */
#mega-menu-wrap-main-menu{
	background-color:transparent !important;
}

h4.mega-block-title{
	color:white !important;
}


/* body */
.text-404{
	color:#2e2e2e;
}

.single-line{
	background-color:#2e2e2e;
}

/* page builder */
.white-bg{
	background-color:white;
}

.gray-bg{
	background-color:#f5f5f5;
}

.dark-bg{
	background-color:#2e2e2e;
}

.section-bg-white{
	background-color: #fff;
}

.section-bg-black{
	background-color: #000;
}

.section-bg-highlight{
	background-color:".$wope_highlight_color.";
}

.border-bottom.wrap{
	border-bottom:2px solid #e5e5e5;
}

.content-section-title{
	color:#2e2e2e;
}

.content-section-subtitle{
	color:#999999;
}

.white-text .content-section-title:before{
	background-color:white;
}

.white-text .content-section-title:after{
	background-color:white;
}

.white-text .content-section-text{
	color:#fff;
}

.white-text .content-section-title{
	color:#fff;
}

.white-text .content-section-subtitle{
	color: rgba(255, 255, 255, 0.5);
}

.content-section-text{
	color:#808080;
}

.content-section-line span{
	background-color:rgba(0,0,0,0.025);
	border-bottom:1px solid rgba(0,0,0,0.1);
	border-top:1px solid rgba(0,0,0,0.1);
}

.section-widget-title{
	color:#2e2e2e;
}

.white-text .section-widget-title{
	color:white;
}

.section-column-content-title{
	color: #2e2e2e;
}

.section-column-content-subtitle{
	color: #999;
}

/* content box */


/* callout */
.callout-gray{
	background-color:#f5f5f5;
}

.callout-highlight{
	background-color:".$wope_highlight_color.";
}

.callout-content,.callout-main-content{
	color: #2e2e2e;
}

.callout-sub-content{
	color: #808080;
}

.callout-highlight .callout-content,
.callout-highlight .callout-main-content,
.white-text .callout-content,
.white-text .callout-main-content{
	color: #fff;
}

.callout-highlight .callout-sub-content,
.white-text .callout-sub-content{
	color: rgba(255,255,255,0.5);
}

.callout-buttons.content .button{
	background-color:#2e2e2e;
	color:white;
	border:2px solid #2e2e2e;
}

.callout-buttons.content .button:hover{
	background-color:transparent;
	color:#2e2e2e;
	border:2px solid #2e2e2e;
}

.callout-buttons.content .callout-button2{
	background-color:".$wope_highlight_color.";
	color:white;
	border:2px solid ".$wope_highlight_color.";
}

.callout-buttons.content .callout-button2:hover{
	background-color:transparent;
	color:".$wope_highlight_color.";
	border:2px solid ".$wope_highlight_color.";
}

.callout-highlight .callout-buttons.content .button,
.white-text .callout-buttons.content .button{
	background-color:transparent;
	color:white;
	border:2px solid white;
}

.callout-highlight .callout-buttons.content .button:hover,
.white-text .callout-buttons.content .button:hover{
	background-color:white;
	color:#2e2e2e;
	border:2px solid white;
}

.callout-highlight .callout-buttons.content .callout-button2,
.white-text .callout-buttons.content .callout-button2{
	background-color:white;
	color:#2e2e2e;
	border:2px solid white;
}

.callout-highlight .callout-buttons.content .callout-button2:hover,
.white-text .callout-buttons.content .callout-button2:hover{
	background-color:transparent;
	color:white;
	border:2px solid white;
}

/* icon box 

.icon-box-name{
	color:#2e2e2e;
}

.icon-box-content{
	color:#808080;
}

.icon-box-link a{
	background-color:".$wope_highlight_color.";
	color:white;
	border:1px solid ".$wope_highlight_color.";
	box-shadow:0px 0px 0px rgba(0,0,0,0.1);
}

.icon-box-link a:hover{
	background-color:white;
	color:".$wope_highlight_color.";
	border:1px solid ".$wope_highlight_color.";
	box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

.icon-type-image{
	border:0px !important;
	background:none !important;
}


.icon-box-center a.icon-type-font,
.icon-box-center .icon-type-font{
	border:8px solid rgba(0,0,0,0.025);
}

.icon-box-center .icon-type-font i{
	color:#2e2e2e;
	background-color:white;
	border:1px solid rgba(0,0,0,0.15);
}

.icon-box-center a.icon-type-font:hover,
.icon-box-center .icon-type-font:hover{
	border:8px solid rgba(0,0,0,0.025);
}

.icon-box-center .icon-type-font i:hover{
	color:white;
	background-color:".$wope_highlight_color.";
	border:1px solid rgba(0,0,0,0.15);
}

.icon-box-name a,
.icon-box-name span{
	border:4px solid rgba(0,0,0,0.025);	
}

.icon-box-name i{
	color:#2e2e2e;
	border:1px solid rgba(0,0,0,0.15);
	background-color:white;
}

.icon-box-name a:hover,
.icon-box-name span:hover{
	border:4px solid rgba(0,0,0,0.025);	
}

.icon-box-name i:hover{
	color:white;
	background-color:".$wope_highlight_color.";
	border:1px solid rgba(0,0,0,0.15);
}

.icon-box-left a.icon-type-font,
.icon-box-left .icon-type-font{
	border:4px solid rgba(0,0,0,0.025);
}

.icon-box-left .icon-type-font i{
	color:".$wope_highlight_color.";
	background-color:white;
	border:1px solid rgba(0,0,0,0.15);
}

.icon-box-left a.icon-type-font:hover,
.icon-box-left .icon-type-font:hover{
	border:4px solid rgba(0,0,0,0.025);
}

.icon-box-horizontal .icon-box-name i{
	color:".$wope_highlight_color.";
	background-color:white;
	border:1px solid rgba(0,0,0,0.15);
}

.icon-box-horizontal .icon-box-name:hover i{
	color:white;
	background-color:".$wope_highlight_color.";
	border:1px solid rgba(0,0,0,0.15);
}

*/

/* icon box */
.icon-box-title, .icon-box-inline{
	color: #2e2e2e;
}

.white-text .icon-box-title{
	color: #fff;
}

.icon-box-content{
	color: #808080;
}

.white-text .icon-box-content{
	color: rgba(255, 255, 255, 0.7);
}

.icon-box-button a{
	color: #808080;
	background-color:#f2f2f2;
}

.gray-bg .icon-box-button a{
	color: #fff;
	background-color:".$wope_highlight_color.";
}

.gray-bg .icon-box-button a:hover{
	color: #fff;
	background-color: #2e2e2e;
}

.icon-box-button a:hover{
	color: #fff;
	background-color:".$wope_highlight_color.";
}

.image-box-style{
	background-color: #f5f5f5;
}

/* button block */
.button-block{
	background-color:#eff1f4;
}

.button-block-content{
	color:#808080;
}

.button-block-right a{
	background-color:".$wope_highlight_color.";
	color:white;
}

.button-block-right a:hover{
	background-color:#333333;
	color:white;
}

/* quote block */
.wrap-column .quote-block.bg-white .quote-block-inside{
	border:1px solid rgba(0,0,0,0.15);
}

.wrap-column .quote-block.bg-white .quote-block-inside{
	box-shadow:4px 4px 0px rgba(0,0,0,0.025);
}

.wrap-column .quote-block.bg-white{
	background-color:white;
}

.wrap-column .quote-block.bg-gray .quote-block-inside{
	border:1px solid rgba(0,0,0,0.15);
}

.wrap-column .quote-block.bg-gray .quote-block-inside{
	box-shadow:4px 4px 0px rgba(0,0,0,0.025);
}

.wrap-column .quote-block.bg-gray{
	background-color:#fafafa;
}

.quote-block-icon{
	border:4px solid rgba(0,0,0,0.025);
}

.quote-block-icon i{
	background-color:white;
	color:".$wope_highlight_color.";
	border:1px solid rgba(0,0,0,0.15);
}

.quote-block-content{
	color:#2e2e2e;
}

.quote-block-author{
	color:#808080;
}

.quote-block.bg-color .quote-block-inside{
	border:1px solid rgba(0,0,0,0.15);
}

.quote-block.bg-color .quote-block-inside{
	box-shadow:4px 4px 0px rgba(0,0,0,0.025);
}

.quote-block.bg-color{
	background-color:".$wope_highlight_color.";
}

.quote-block.bg-color .quote-block-content{
	color:white;
}

.quote-block.bg-color .quote-block-author{
	color:rgba(255,255,255,0.8);
}

.quote-block.bg-color .quote-block-icon{
	border:4px solid rgba(0,0,0,0.025);
}

.quote-block.bg-color .quote-block-icon i{
	background-color:transparent;
	color:white;
	border:1px solid rgba(0,0,0,0.15);
}

/* people profile */
.team-style-1.team-item .team-detail{
	border:1px solid #d9d9d9;
	border-top:0px;
}



.team-name{
	color:#2e2e2e;
}

.team-sub-name{
	color:#808080;
}

.team-content{
	color:#808080;
}

.team-thumb-bg{
	background:transparent;
}

.team-thumb:hover .team-thumb-bg{
	background:rgba(255,255,255,0.5);
}


/* callout */
.callout-button a{
	color: #fff;
	background-color: #2e2e2e;
	box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.1); 
}

.callout-button a:hover{
	background-color: ".$wope_highlight_color.";
}

.callout-button.callout-highlight a{
	background-color: ".$wope_highlight_color.";
}

.callout-button.callout-highlight a:hover{
	background-color: #2e2e2e;
}


/* tabs */
.tab-top{
	background-color:white;
}

.tab-title{
	color:#808080;
	border:1px solid #d9d9d9;
}

.tab-title:hover{
	color:#2e2e2e;
	border:1px solid #2e2e2e;
}

.tab-current,.tab-current:hover{
	color:white;
	border:1px solid #2e2e2e;
	background-color:#2e2e2e;
}

.tab-bottom{
	color:#808080;
	background-color:white;
}

.tab-title i{
	color:#808080;
}

.tab-title:hover i{
	color:#2e2e2e;
}

.tab-title.tab-current i{
	color: ".$wope_highlight_color.";
}

/* tab vertical */
.tab-vertical-title{
	color:#808080;
	border:1px solid #d9d9d9;
}

.tab-vertical-title:hover{
	color:#2e2e2e;
	border:1px solid #2e2e2e;
}

.tab-vertical-current,
.tab-vertical-current:hover{
	color:white;
	border:1px solid #2e2e2e;
	background-color:#2e2e2e;
}

.tab-vertical-bottom{
	color:#808080;
	background-color:white;
}

.tab-vertical-title i{
	color:#808080;
}

.tab-vertical-title:hover i{
	color:#2e2e2e;
}

.tab-vertical-title.tab-vertical-current i{
	color: ".$wope_highlight_color.";
}

/* accordion */
.accor-title{
	color:#999999;
	border:1px solid #d9d9d9;
}

.accor-title-icon{
	border-left:1px solid #d9d9d9;
}

.accor-title-icon i{
	color:#999999;
}

.accordion-type-stack .accor-title:hover,
.accordion-type-stack .ui-state-active,
.accordion-type-stack .ui-state-active:hover{
	color:#2e2e2e;
	border:1px solid #2e2e2e;
}

.accordion-type-stack .accor-title:hover .accor-title-icon,
.accordion-type-stack .ui-state-active .accor-title-icon,
.accordion-type-stack .ui-state-active:hover .accor-title-icon{
	border-left:1px solid #2e2e2e;
}

.accor-title:hover .accor-title-icon i,
.ui-state-active .accor-title-icon i,
.ui-state-active:hover .accor-title-icon i{
	color:#2e2e2e;
}

.ui-accordion-content-active{
	color:#808080;
}

.accordion-type-stack.accordion-style-highlight .ui-state-active,
.accordion-type-stack.accordion-style-highlight .ui-state-active:hover{
	color:white;
	border:1px solid #2e2e2e;
	background-color:#2e2e2e;
}

.accordion-style-highlight .ui-state-active .accor-title-icon,
.accordion-style-highlight .ui-state-active:hover .accor-title-icon{
	border-left:1px solid rgba(255,255,255,0.2);
}


.accordion-style-highlight .ui-state-active .accor-title-icon i,
.accordion-style-highlight .ui-state-active:hover .accor-title-icon i{
	color:".$wope_highlight_color.";
}

.accordion-type-group .accor-content{
	border:1px solid #d9d9d9;
	border-top:0px;
}

.accordion-type-group .accor-title{
	border-top:0px;
}

.accordion-type-group .accor-title:first-child{
	border-top:1px solid #d9d9d9;
}

.accordion-type-group .accor-title:hover,
.accordion-type-group .ui-state-active,
.accordion-type-group .ui-state-active:hover{
	color:#2e2e2e;
}


.accordion-type-group.accordion-style-highlight .ui-state-active,
.accordion-type-group.accordion-style-highlight .ui-state-active:hover{
	color:white;
	background-color:#2e2e2e;
}


/* testimonials */
.testimonials{
	border:1px solid #d9d9d9;
}

.testimonials-slider-box .testimonials-container{
	border:1px solid #d9d9d9;
}

.testimonials-author-name{
	color:#4c4c4c;
}

.testimonials-image i{
	background-color:".$wope_highlight_color.";
	color:white;
}

.testimonials-author-info.content{
	color: #808080;
}

.testimonials-content{
	color:#808080;
}

.testimonials-quote{
	color: #e5e5e5;
}

.testimonials-button-item{
	border: 1px solid #4c4c4c;
}

.testimonials-button-item.active,
.testimonials-button-item.active:hover{
	background-color: #4c4c4c;
	border: 1px solid #4c4c4c;
}

.testimonials-button-item:hover{
	background-color: ".$wope_highlight_color.";
	border: 1px solid ".$wope_highlight_color.";
}



/* logo */
.logo-style-border .logo-client-item{
	border:1px solid #d9d9d9;
}

.logo-style-border .logo-client-item:hover{
	border:1px solid #2e2e2e;
}

.logo-style-table{
	border-left:1px solid #d9d9d9;
	border-top:1px solid #d9d9d9;
}

.logo-style-table .logo-client-item{
	border-right:1px solid #d9d9d9;
	border-bottom:1px solid #d9d9d9;
}

/* gallery */
.gallery-image-bg{
	background-color: rgba(51, 51, 51, 0.7);
}

.gallery-image-icon{
	color: white;
}

.gallery-image-icon i{
	color:white;
	background-color:".$wope_highlight_color.";
}


.gallery-image-icon:hover i{
	color:white;
	background-color:rgba(0,0,0,0.5);
}

.gallery-thumb-bottom .gallery-thumb-border{
	background:transparent;
}

.gallery-thumb-bottom .gallery-thumb-border:hover{
	background-color:#2e2e2e;
}

.gallery-demo-name a{
	color: #2e2e2e;
}

.gallery-demo-name a:hover{
	color: ".$wope_highlight_color.";
}




/* pricing table */
.pricing-table-item{
	background-color: #f2f2f2;
}

.pricing-table-highlight{
	background-color: #f5f5f5;
}

.pricing-table-title{
	color: #2e2e2e;
}

.pricing-table-sub-title{
	color: #999;
}

.pricing-table-unit, .pricing-table-price{
	color:".$wope_highlight_color.";
}

.pricing-table-pricing{
	border-top: 1px solid #d9d9d9;
	border-bottom: 1px solid #d9d9d9;
}

.pricing-table-pricing{
	color: #999999;
}

.pricing-table-featured-list{
	color: #999999;
}



/* divider */
.divider{
	border-top:1px solid #cccccc;
}

.divider.divider-dashed{
	border-top:1px dashed #cccccc;
}

.divider.divider-dotted{
	border-top:1px dotted #cccccc;
}

/* custom list */
ul.custom-list.border-solid li{
	border-bottom:1px solid #e5e5e5;
}

ul.custom-list.border-dotted li{
	border-bottom:1px dotted #cccccc;
}

ul.custom-list.border-dashed li{
	border-bottom:1px dashed #cccccc;
}

ul.custom-list li:last-child{
	border-bottom:0px;
}

/* black */

ul.custom-list,
.content ul.custom-list a{
	color:#808080;
}

ul.custom-list i{
	color:#2e2e2e;
}

.content ul.custom-list a:hover{
	color:".$wope_highlight_color.";
}

ul.custom-list.icon-circle i,
ul.custom-list.icon-square i{
	border:1px solid #999999;
}

ul.custom-list.icon-circle-bold i,
ul.custom-list.icon-square-bold i{
	border:1px solid #999999;
	background-color:#999999;
	color:white;
}

.content ul.custom-list.text-color-blue a:hover,
.content ul.custom-list.text-color-red a:hover,
.content ul.custom-list.text-color-green a:hover,
.content ul.custom-list.text-color-yellow a:hover,
.content ul.custom-list.text-color-orange a:hover,
.content ul.custom-list.text-color-pink a:hover,
.content ul.custom-list.text-color-purple a:hover,
.content ul.custom-list.text-color-aqua a:hover{
	color:#999999;
}

/* blue */

ul.custom-list.text-color-blue,
.content ul.custom-list.text-color-blue a,
ul.custom-list.icon-color-blue i{
	color:#3498DB;
}



ul.custom-list.icon-circle.icon-color-blue i,
ul.custom-list.icon-square.icon-color-blue i{
	border:1px solid #3498DB;
}

ul.custom-list.icon-circle-bold.icon-color-blue i,
ul.custom-list.icon-square-bold.icon-color-blue i{
	border:1px solid #3498DB;
	background-color:#3498DB;
	color:white;
}

/* red */

ul.custom-list.text-color-red,
.content ul.custom-list.text-color-red a,
ul.custom-list.icon-color-red i{
	color:#F64747;
}

ul.custom-list.icon-circle.icon-color-red i,
ul.custom-list.icon-square.icon-color-red i{
	border:1px solid #F64747;
}

ul.custom-list.icon-circle-bold.icon-color-red i,
ul.custom-list.icon-square-bold.icon-color-red i{
	border:1px solid #F64747;
	background-color:#F64747;
	color:white;
}

/* green */

ul.custom-list.text-color-green,
.content ul.custom-list.text-color-green a,
ul.custom-list.icon-color-green i{
	color:#2ECC71;
}

ul.custom-list.icon-circle.icon-color-green i,
ul.custom-list.icon-square.icon-color-green i{
	border:1px solid #2ECC71;
}

ul.custom-list.icon-circle-bold.icon-color-green i,
ul.custom-list.icon-square-bold.icon-color-green i{
	border:1px solid #2ECC71;
	background-color:#2ECC71;
	color:white;
}

/* yellow */

ul.custom-list.text-color-yellow,
.content ul.custom-list.text-color-yellow a,
ul.custom-list.icon-color-yellow i{
	color:#F9A825;
}

ul.custom-list.icon-circle.icon-color-yellow i,
ul.custom-list.icon-square.icon-color-yellow i{
	border:1px solid #F9A825;
}

ul.custom-list.icon-circle-bold.icon-color-yellow i,
ul.custom-list.icon-square-bold.icon-color-yellow i{
	border:1px solid #F9A825;
	background-color:#F9A825;
	color:white;
}

/* orange */

ul.custom-list.text-color-orange,
.content ul.custom-list.text-color-orange a,
ul.custom-list.icon-color-orange i{
	color:#F89406;
}

ul.custom-list.icon-circle.icon-color-orange i,
ul.custom-list.icon-square.icon-color-orange i{
	border:1px solid #F89406;
}

ul.custom-list.icon-circle-bold.icon-color-orange i,
ul.custom-list.icon-square-bold.icon-color-orange i{
	border:1px solid #F89406;
	background-color:#F89406;
	color:white;
}

/* pink */

ul.custom-list.text-color-pink,
.content ul.custom-list.text-color-pink a,
ul.custom-list.icon-color-pink i{
	color:#f14c96;
}

ul.custom-list.icon-circle.icon-color-pink i,
ul.custom-list.icon-square.icon-color-pink i{
	border:1px solid #f14c96;
}

ul.custom-list.icon-circle-bold.icon-color-pink i,
ul.custom-list.icon-square-bold.icon-color-pink i{
	border:1px solid #f14c96;
	background-color:#f14c96;
	color:white;
}

/* aqua */

ul.custom-list.text-color-aqua,
.content ul.custom-list.text-color-aqua a,
ul.custom-list.icon-color-aqua i{
	color:#4ecdc4;
}

ul.custom-list.icon-circle.icon-color-aqua i,
ul.custom-list.icon-square.icon-color-aqua i{
	border:1px solid #4ecdc4;
}

ul.custom-list.icon-circle-bold.icon-color-aqua i,
ul.custom-list.icon-square-bold.icon-color-aqua i{
	border:1px solid #4ecdc4;
	background-color:#4ecdc4;
	color:white;
}

/* purple */

ul.custom-list.text-color-purple,
.content ul.custom-list.text-color-purple a,
ul.custom-list.icon-color-purple i{
	color:#9B59B6;
}

ul.custom-list.icon-circle.icon-color-purple i,
ul.custom-list.icon-square.icon-color-purple i{
	border:1px solid #9B59B6;
}

ul.custom-list.icon-circle-bold.icon-color-purple i,
ul.custom-list.icon-square-bold.icon-color-purple i{
	border:1px solid #9B59B6;
	background-color:#9B59B6;
	color:white;
}


/* contact form */
.contact-name-field div,.contact-email-field div,.contact-subject-field div,.contact-textarea div{
	color:#808080;
}

/* icon box */
.icon-box-icon i{
	color:".$wope_highlight_color.";
}

.icon-box-style .icon-box-icon i{
	color: #fff;
	background-color: ".$wope_highlight_color.";
}

.single-icon-black-style .icon-box-icon i{
	color: #2e2e2e;
}

.single-icon-white-style .icon-box-icon i{
	color: #fff;
}

.single-icon-gray-style .icon-box-icon i{
	color: #ccc;
}

.single-icon-highlight-style .icon-box-icon i{
	color: ".$wope_highlight_color.";
}



/* contact detail */
.contact-detail-widget{
	color: #999999;
}

.contact-detail-widget i{
	color:#2e2e2e;
}

.contact-detail-board{
	background-color: #fafafa;
}

.contact-detail-box-item{
	background-color: #fafafa;
}


/* milestones */
.milestone-number i{
	color: ".$wope_highlight_color.";
}

.milestone-number{
	color: #2e2e2e;
}


.milestone-name{
	color: #808080;
}


.white-text .milestone-number{
	color:white;
}

.white-text .milestone-number:before{
	background-color:rgba(255, 255, 255, 0.5);
}

.white-text .milestone-name{
	color: rgba(255, 255, 255, 0.5);
}



/* typography */

.content h1,.content h2,.content h3,.content h4,.content h5,.content h6{
	color:#2e2e2e;
}

.content{
	color:#808080;
}

.white-text .content{
	color:white;
}


pre{
	border:3px solid #2e2e2e;
	background-color:#f2f2f2;
	color:#2e2e2e;
	margin-bottom:12px;
}


blockquote{
	color:#808080;
	background-color:#f7f7f7;
}

blockquote span{
	color:#b2b2b2;
}


.content  li a{
	color:".$wope_highlight_color.";
}

.content  li a:hover{
	color:#808080;
}

/*
.content .social-bitbucket:hover{
	background-color:#205081;
}

.content .social-dropbox:hover{
	background-color:#007ee5;
}

.content .social-dribbble:hover{
	background-color:#ea4c89;
}

.content .social-gittip:hover{
	color:#339966;
}

.content .social-facebook:hover{
	background-color:#3b5998;
}

.content .social-flickr:hover{
	background-color:#ff0084;
}

.content .social-foursquare:hover{
	background-color:#0cbadf;
}

.content .social-github:hover{
	background-color:#171515;
}

.content .social-google-plus:hover{
	background-color:#dd4b39;
}

.content .social-instagram:hover{
	background-color:#3f729b;
}

.content .social-linkedin:hover{
	background-color:#0e76a8;
}

.content .social-pinterest:hover{
	background-color:#c8232c;
}

.content .social-skype:hover{
	background-color:#00aff0;
}

.content .social-stack-exchange:hover{
	background-color:#3a6da6;
}

.content .social-stack-overflow:hover{
	background-color:#ef8236;
}

.content .social-trello:hover{
	background-color:#256a92;
}

.content .social-tumblr:hover{
	background-color:#34526f;
}

.content .social-twitter:hover{
	background-color:#55acee;
}

.content .social-vimeo-square:hover{
	background-color:#44bbff;
}

.content .social-vk:hover{
	background-color:#45668e;
}

.content .social-weibo:hover{
	background-color:#eb182c;
}

.content .social-xing:hover{
	background-color:#126567;
}

.content .social-youtube:hover{
	background-color:#c4302b;
}
*/

/* table */
#wp-calendar caption{
	color:white;
	border:3px solid #2e2e2e;
	border-bottom:0px;
	background-color:#2e2e2e;
	font-weight:bold;
	font-weight: 700;
	text-transform:uppercase;
}

.content  #wp-calendar table{
	color:#333333;
	border:3px solid #cccccc;
}

.content  #wp-calendar thead td , .content #wp-calendar thead th, .content #wp-calendar  tfoot td{
	color:#808080;
	border:2px solid #cccccc;
	font-weight:bold;
	font-weight: 700;
	text-transform:uppercase;
}

.content #wp-calendar tbody td{
	color:#999999;
	border:2px solid #cccccc;
}

/* default inputs */
.content input[type=text],.content input[type=tel],.content input[type=password],.contact-form input[type=text],.content input[type=email]{
	color:#808080;
	background-color:transparent;
	border:1px solid #999999;
}

.content textarea,.contact-form textarea{
	color:#808080;
	background-color:transparent;
	border:1px solid #999999;
}

.content select{
	color:#808080;
	background-color:transparent;
	border:1px solid #999999;
}

.gray-bg .contact-form input[type=text], .gray-bg .contact-form textarea, .content .subscribes-box input[type=email] ,.content .subscribes-box input[type=text]{
	background-color:#fff;
}


/* button */
.content input[type=submit],
.content button,
.content .button,
.content a.button,
.button,
a.button{
	background-color: #2e2e2e; 
	color:white;
	border:2px solid #2e2e2e;
}

.content input[type=submit]:hover,
.content button:hover,
.content .button:hover,
.content a.button:hover,
.button:hover,
a.button:hover{
	background-color: transparent;
	color: #2e2e2e;
	border:2px solid #2e2e2e;
}

.content a.white-button,
a.white-button{
	color:#2e2e2e;
	border:2px solid #2e2e2e;
	background-color:transparent;
}

.content a.white-button:hover,
a.white-button:hover{
	color:white;
	border:2px solid #2e2e2e;
	background-color:#2e2e2e;
}

.content a.black-button,
a.black-button{
	color:white;
	border:2px solid #2e2e2e;
	background-color:#2e2e2e;
}

.content a.black-button:hover,
a.black-button:hover{
	color:#2e2e2e;
	border:2px solid #2e2e2e;
	background-color:transparent;
}

.content a.blue-button,
a.blue-button{
	color:white;
	border:2px solid #3498DB;
	background-color:#3498DB;
}

.content a.blue-button:hover,
a.blue-button:hover{
	color:#3498DB;
	border:2px solid #3498DB;
	background-color:white;
}

.content a.red-button,
a.red-button{
	color:white;
	border:2px solid #F64747;
	background-color:#F64747;
}

.content a.red-button:hover,
a.red-button:hover{
	color:#F64747;
	border:2px solid #F64747;
	background-color:white;
}

.content a.green-button,
a.green-button{
	color:white;
	border:2px solid #2ECC71;
	background-color:#2ECC71;
}

.content a.green-button:hover,
a.green-button:hover{
	color:#2ECC71;
	border:2px solid #2ECC71;
	background-color:white;
}

.content a.yellow-button,
a.yellow-button{
	color:white;
	border:2px solid #F9BF3B;
	background-color:#F9BF3B;
}

.content a.yellow-button:hover,
a.yellow-button:hover{
	color:#F9BF3B;
	border:2px solid #F9BF3B;
	background-color:white;
}

.content a.pink-button,
a.pink-button{
	color:white;
	border:2px solid #f14c96;
	background-color:#f14c96;
}

.content a.pink-button:hover,
a.pink-button:hover{
	color:#f14c96;
	border:2px solid #f14c96;
	background-color:white;
}

.content a.aqua-button,
a.aqua-button{
	color:white;
	border:2px solid #4ecdc4;
	background-color:#4ecdc4;
}

.content a.aqua-button:hover,
a.aqua-button:hover{
	color:#4ecdc4;
	border:2px solid #4ecdc4;
	background-color:white;
}

.content a.orange-button,
a.orange-button{
	color:white;
	border:2px solid #F89406;
	background-color:#F89406;
}

.content a.orange-button:hover,
a.orange-button:hover{
	color:#F89406;
	border:2px solid #F89406;
	background-color:white;
}

.content a.purple-button,
a.purple-button{
	color:white;
	border:2px solid #9B59B6;
	background-color:#9B59B6;
}

.content a.purple-button:hover,
a.purple-button:hover{
	color:#9B59B6;
	border:2px solid #9B59B6;
	background-color:white;
}

.sidebar-widget a.sidebar-button{
	background-color:".$wope_highlight_color.";
	color:white;
}

.sidebar-widget a.sidebar-button:hover{
	color:rgba(255,255,255,0.5);
}



/* inner page */
.index-page{
	border-top:1px solid #d9d9d9;
}

.top-search-form{
	border-bottom:1px solid #e5e5e5;
}



#page-heading.heading-gray{
	background-color: #fafafa;
	border-top:1px solid #ebebeb;
	border-bottom:1px solid #ebebeb;
}

h1#page-title{
	color:#2e2e2e;
}

.header-text-white h1#page-title{
	color: #fff;
}

#breadcrumb,
#breadcrumb a,
#breadcrumb span{
	color:#999999;
}

#breadcrumb a:hover{
	color:".$wope_highlight_color.";
}

.header-text-white #breadcrumb,
.header-text-white #breadcrumb a,
.header-text-white #breadcrumb span{
	color:rgba(255,255,255,0.5);
}

.header-text-white #breadcrumb a:hover{
	color:white;
}


/* paginate */


.search .paginate{
	border-top: 1px solid #e5e5e5;
}

.paginate .current{
	color:white;
	background-color:#2e2e2e;
	border:2px solid #2e2e2e;
}

.paginate a{
	background-color:transparent;
	color:#2e2e2e;
	border:2px solid #2e2e2e;
}

.paginate a:hover{
	color:white;
	background-color:".$wope_highlight_color.";
	border:2px solid ".$wope_highlight_color.";
}


/* blog page */


.post-entry-body{
	background-color:white;
}


.post-entry-top{
	border-bottom:2px solid #ebebeb;
}

.post-entry-categories{
	color:#b2b2b2;
}

.post-entry-categories a{
	color:".$wope_highlight_color.";
}

.post-entry-categories a:hover{
	color:#b2b2b2;
}

.post-entry-title a,.post-entry-title{
	color:#2e2e2e;
}

.post-entry-title a:hover{
	color:".$wope_highlight_color.";
}

.post-entry-meta,.post-entry-meta a{
	color:#808080;
	
}

.post-entry-meta a:hover{
	color:#2e2e2e;
}



.post-entry-share{
	color:#2e2e2e;
	border:1px solid #d9d9d9;
	background-color:#f5f5f5;
}

.post-entry-share a{
	color:#808080;
}

.post-entry-share a:hover{
	color:".$wope_highlight_color.";
}

.post-entry-content{
	color:#808080;
}

.post-entry-content.content a{
	color:#808080;
	background-color: #f2f2f2;
}

.post-entry-content.content a:hover{
	color:#fff;
	background-color:".$wope_highlight_color.";
}

.content.post-entry-button a{
	background-color:#2e2e2e;
	color:white;
	border:2px solid #2e2e2e;
}

.content.post-entry-button a:hover{
	background-color:transparent;
	color:#2e2e2e;
	border:2px solid #2e2e2e;
}

.post-entry-tags{
	
}

.post-entry-tags a{
	border:1px solid #d9d9d9;
	color:#666666;
}

.post-entry-tags a:hover{
	color:#2e2e2e;
	background-color:".$wope_highlight_color.";
	border:1px solid ".$wope_highlight_color.";
}

.single-icon-black-style .icon-box-inline i{
	color: #000;
}

.single-icon-white-style .icon-box-inline i{
	color: #fff;
}

.single-icon-gray-style .icon-box-inline i{
	color: #ccc;
}

.single-icon-highlight-style .icon-box-inline i{
	color: ".$wope_highlight_color.";
}

.icon-box-horizontal .icon-box-image-box-style{
	background-color: #f5f5f5;
}

.gray-bg .icon-box-horizontal .icon-box-image-box-style{
	background-color: #fff;
}

/* blog template 2 */
.blog-template-center .post-entry-title a{
	color: #2e2e2e;
}

.blog-template-center .post-entry-title:hover a{
	color: ".$wope_highlight_color.";
}

/* blog fullwidth template*/
.post-entry-shares a i{
	color: #d9d9d9;
}

.post-entry-shares a i:hover{
	color: ".$wope_highlight_color.";
}

.blog-fullwidth .post-entry-title a, .blog-fullwidth .post-entry-title h2 a{
	color: #2e2e2e;
}

.blog-fullwidth .post-entry-title a:hover, .blog-fullwidth .post-entry-title h2 a:hover{
	color: ".$wope_highlight_color.";
}

.blog-fullwidth .post-entry-meta{
	color: #999999;
}

.blog-fullwidth .content.post-cell-button a{
	background-color: #f2f2f2;
}

/* post cell */
.post-cell-title a{
	color:#2e2e2e;
}

.post-cell-grid .post-cell-detail,
.post-cell-masonry .post-cell-detail{
	border:1px solid #d9d9d9;
	border-top:0px;
}

.post-cell-list .post-cell-thumb{
	border:1px solid #d9d9d9;
}
  
.post-list-center-left .post-cell-thumb,
.post-list-center-right .post-cell-thumb{
	border:1px solid #d9d9d9;
}
  
.post-cell-title a:hover{
	color:".$wope_highlight_color.";
}

.post-cell-meta,.post-cell-meta span a{
	color:#808080;
}

.post-cell-meta span a:hover{
	color:#4c4c4c;
}

.post-cell-content{
	color:#808080;
}

.post-cell-medium .post-cell-thumb{
	border:1px solid #d9d9d9;
}

/* author bio */

.author-bio{
	color:#808080;
	
}

.author-bio-title{
	color:#2e2e2e;
}
	
.author-bio-description{
	color:#808080;
}

a.author-bio-url{
	background-color:".$wope_highlight_color.";
	color:white;
}

a.author-bio-url:hover{
	color:white;
	background-color:#808080;
}

/* post relative */

.post-relative-date{
	color:#999999;
}

a.post-relative-title{
	color:#2e2e2e;
}

a.post-relative-title:hover{
	color:".$wope_highlight_color.";
}


.post-section-title,#reply-title{
	color: #2e2e2e;
	background-color: #FFF;
}

.post-relative-entry a .post-relative-bg{
	background-color: transparent;
}

.post-relative-entry:hover a .post-relative-bg{
	background-color: #333333;
}

.post-relative-entry a .post-relative-title{
	color: transparent;
}

.post-relative-entry:hover a .post-relative-title{
	color: #fff;
}

/* post search */

.content .post-search-entry-title a{
	color:#2e2e2e;
}

.content .post-search-entry-title a:hover{
	color:".$wope_highlight_color.";
}

.content .search-form i{
	color: #999999;
}

.search-form-title{
	color:#2e2e2e;
}

.search-form-results{
	color:#2e2e2e;
}

.post-search-entry-icon i{
	color: #2e2e2e;
}

/* comment section */
.comment-entry{
	background-color: #f7f7f7;
}

.comment-author,.comment-author a{
	color:#2e2e2e;
}

.bypostauthor .comment-author a,
.bypostauthor .comment-author{
	color:#2e2e2e;
}


.comment-date,.comment-date a{
	color:#b2b2b2;
}

.comment-date a:hover{
	color:".$wope_highlight_color.";
}

.comment-reply a{
	background-color:#fff;
	color:#808080;
	border:1px solid transparent;
}

.comment-reply a:hover{
	background-color:".$wope_highlight_color.";
	color:white;
	border:1px solid ".$wope_highlight_color.";
}

.comment-content{
	
	color:#808080;
}

/* comment form */

.comment-notes{
	color:".$wope_highlight_color.";
}


/* portfolio page */
#portfolio-section-des{
	color:#333333;
}
	
/* portfolio single */

.portfolio-single-detail{
	color:#2e2e2e;
}

.portfolio-single-detail-entry{
	border-bottom:1px solid #e5e5e5;
}

.portfolio-single-detail-entry:last-child{
	border-bottom:0px;
}


.portfolio-single-detail-name{
	color:#999999;
}


.portfolio-single-detail-content,
.portfolio-single-detail-content a{
	color:#2e2e2e;
}


.portfolio-single-detail-content a:hover{
	color:".$wope_highlight_color.";
}

 
.portfolio-single-author, .portfolio-single-category, .portfolio-single-project{
	border-bottom:1px solid #f2f2f2;
 }
 
.portfolio-single-navigation a{
	color:white;
	background-color:".$wope_highlight_color.";
}

.portfolio-single-navigation a:hover{
	color:white;
	background-color:#2e2e2e;
}

.portfolio-single-navigation{
	border-bottom:1px solid #e5e5e5;
}

.pagination_full{
	border-right:0px;
}

.portfolio-single-share .post-entry-share{
	background-color: transparent;
}

.portfolio-single-content h3{
	color: #2e2e2e;
	background-color: #FFF;
}

/* portfolio relative  */
.portfolio-relative-title{
	color:#333333;
}

/* portfolio cell */
.portfolio-cell-bg{
	background-color:transparent;
}

.portfolio-cell:hover .portfolio-cell-bg{
	background-color:rgba(51,51,51,0.7);
}

.portfolio-cell-title a{
	color:#2e2e2e;
}

.portfolio-cell-title a:hover{
	color:".$wope_highlight_color.";
}

.portfolio-cell-categories,.portfolio-cell-categories a{
	color:#808080;
}

.portfolio-cell-categories a:hover{
	color:#b2b2b2;
}

/* portfolio board */
.portfolio-board-title{
	background-color:".$wope_highlight_color.";
	color:white;
}

.portfolio-board-title a{
	color:white;
}

.portfolio-board-bg{
	background-color:".$wope_highlight_color.";
}

/* portfolio filter */

.filters li{
	color:#999999;
}

.filters span:hover{
	color:".$wope_highlight_color.";
}

.filters span.active{
	color:#2e2e2e;
}

a.portfolio-cell-view{
	color:white;
	background-color: ".$wope_highlight_color.";
}

a.portfolio-cell-view:hover{
	color:white;
	background-color:rgba(0,0,0,0.5);
}
	
/* widget */

/* widget basic style */
.sidebar-widget{
	
}

.sidebar-widget-title{
	color:#2e2e2e;
	background-color:white;
}

.sidebar-widget{
	color:#808080;
}

.sidebar-widget a{
	color:".$wope_highlight_color.";
}

.sidebar-widget a:hover{
	color:#808080;
}

.sidebar-widget ul li a, .sidebar-widget ul li a i{
	color:#808080;
}

.sidebar-widget ul li a:hover{
	color:".$wope_highlight_color.";
}

/* portfolio style 2 */
.portfolio-cell-data{
	background-color: #f5f5f5;
}

.gray-bg .portfolio-cell-data{
	background-color: #fff;
}

/* footer */
#footer{
	background-color:#2e2e2e;
}

.footer-column .content{
	color: #b2b2b2;
}

.footer-column .content ul li a{
	color: #b2b2b2;
}

/* footer widget */
.footer-widget-title{
	color:#ffffff;
}

.footer-column .content ul li a:hover{
	color:".$wope_highlight_color.";
}

/* footer default inputs */
#footer .content input[type=text],
#footer .content input[type=email],
#footer .content input[type=password]{
	border:1px solid #cccccc;
	color:#808080;
	background-color:transparent;
}

#footer .content textarea{
	border:1px solid #cccccc;
	color:#808080;
	background-color:transparent;
}

#footer .content select{
	border:1px solid #cccccc;
	color:#808080;
	background-color:transparent;
	color:#999999;
}

.footer-widget.widget_nav_menu ul li,
.footer-widget.widget_recent_entries ul li,
.footer-widget.widget_archive ul li,
.footer-widget.widget_categories ul li,
.footer-widget.widget_pages ul li 
{
	
}


/* common widget */
.widget_archive  i,
.widget_categories i,
.widget_pages i,
.widget_meta i,
.widget_recent_entries  i,
.widget_nav_menu  i{
	color:#2e2e2e;
}


 
/*recent comment widget*/
.sidebar-widget.widget_recent_comments{
	color:#2e2e2e;
}

.sidebar-widget.widget_recent_comments li a{
	color:".$wope_highlight_color.";
}

.sidebar-widget.widget_recent_comments  li a:hover{
	color:#2e2e2e;
}


/* tagcloud */

.content .tagcloud a{
	border:1px solid #d9d9d9;
	color:#666666;
}

.tagcloud a:hover{
	color:#2e2e2e;
	background-color:".$wope_highlight_color.";
	border:1px solid ".$wope_highlight_color.";
}


/* footer tagcloud */
.footer-widget .tagcloud a{
	
}

.footer-widget .tagcloud a:hover{
	
}

/* widget post */


.widget-post-title a{
	color:#2e2e2e;
}

.content .widget-post-title a{
	color:#2e2e2e;
}

.widget-post-title a:hover{
	color:".$wope_highlight_color.";
}

.content .widget-post-title a:hover{
	color:".$wope_highlight_color.";
}

.widget-post-meta a{
	color:#808080;
}

.widget-post-meta a:hover{
	color:".$wope_highlight_color.";
}

.content .widget-post-meta a{
	color:#808080;
}

.content .widget-post-meta a:hover{
	color:".$wope_highlight_color.";
}

/* flex slider style */
.flex-direction-nav .flex-next,
.flex-direction-nav .flex-prev{
	background-color:rgba(0,0,0,0.5);
	color:white;
	opacity:0;
}

.flexslider:hover .flex-next,
.flexslider:hover .flex-prev{
	opacity:0.8;
}

.flex-direction-nav i{
	color:#808080 !important;
}

.flex-direction-nav .flex-next:hover ,
.flex-direction-nav .flex-prev:hover{
	background-color:".$wope_highlight_color."!important;
}

.flex-direction-nav .flex-next:hover i,
.flex-direction-nav .flex-prev:hover i{
	color:white !important;
}




/* subscribes widget */
.subscribe-style-box{
	background-color:#f5f5f5;
}

.subscribe-style-box input[type='email']{
	background-color:white;
}


.subscribe-style-border-box{
	border:2px solid #2e2e2e;
}

.subscribe-style-border-box .subscribe-box-inner{
	border:1px solid #D9D9D9;
}



/* sidebar widget */
.sidebar-widget.content li a{
	color: #808080;
}

.sidebar-widget.content li a:hover i{
	color: ".$wope_highlight_color.";
}

.sidebar-widget.content li a:hover{
	color: ".$wope_highlight_color.";
}



/* timeline widget pb */
.timeline-detail{
	background-color: #f5f5f5;
}

.timeline-title{
	color: #2e2e2e;
}

.timeline-year{
	color: #fff;
	background-color: ".$wope_highlight_color.";
}

.timeline-content{
	color: #808080;
}

/* progress widget pb */
.progress-name, .progress-value{
	color: #2e2e2e;
}

.progress-background{
	background-color: #f5f5f5;
}

.progress-current{
	background-color: ".$wope_highlight_color.";
}

/* process widget pb */
.process-item{
	background-color: #f5f5f5;
}

.process-number{
	color: ".$wope_highlight_color.";
}

.process-name{
	color: #2e2e2e;
}

.process-content{
	color: #999999;
}

.process_even{
	background-color: #ebebeb;
}

.process-arrow{
	background-color: #f5f5f5;
}

.process_even .process-arrow{
	background-color: #ebebeb;
}

.process_active{
	background-color: ".$wope_highlight_color.";
}

.process_active .process-arrow{
	background-color: ".$wope_highlight_color.";
}

.process_active .process-name, .process_active .process-number{
	color: #fff;
}

.process_container_3{
	background-color: transparent;
}

/* subcribe widget */
.subscribe-wrap{
	background-color: #f5f5f5;
}

.background-style-no.subscribe-wrap{
	background-color: transparent;
}

.subscribe-name{
	color: #2e2e2e;
}

.subscribe-description{
	color: #808080;
}

.subscribe-button input{
	color: #fff;
	background-color: ".$wope_highlight_color.";
}

.box-success{
	color: ".$wope_highlight_color.";
}

.subscribe-small.background-style-gray .subscribe-email input{
	background-color: #ffffff;
}

.subscribe-small.background-style-border{
	border: 2px solid #2e2e2e;
	background-color: transparent;
}

.subscribe-small.background-style-border .subscribe-post{
	border: 1px solid #D9D9D9;
}

.subscribe-fullwidth .subscribe-name, .subscribe-fullwidth .subscribe-description{
	color: #fff;
}

.subscribe-fullwidth .subscribe-email input{
	background-color: #fff;
}

.subscribe-fullwidth .subscribe-button input{
	color: #2e2e2e;
	background-color: #FFF;
}

.subscribe-fullwidth .subscribe-button input:hover{
	color: #fff;
	background-color: #333;
}

.subcribe-overlay-black{
	background-color: #000;
}

.subcribe-overlay-white{
	background-color: #fff;
}

.subcribe-overlay-highlight{
	background-color: ".$wope_highlight_color.";
}

.subcribe-overlay-white ~ .subscribe-post .subscribe-name{
	color: #2e2e2e;
}

.subcribe-overlay-white ~ .subscribe-post .subscribe-description{
	color: #808080;
}

.subcribe-overlay-white ~ .subscribe-post .subscribe-email{
	color: #808080;
}

.subcribe-overlay-white ~ .subscribe-post .subscribe-email input{
	border: 1px solid rgba(0, 0, 0, 0.1);
}



/* promote box */
.promote-bg-white{
	background-color:white;
}

.promote-bg-gray{
	background-color:#cccccc;
}

.promote-bg-black{
	background-color:#333333;
}

.promote-bg-highlight{
	background-color:".$wope_highlight_color.";
}

.promote-title{
	color:#2e2e2e;
}

.promote-content{
	color:#808080;
}

.content.promote-buttons a{
	background-color:#2e2e2e;
	border:2px solid #2e2e2e;
	color:white;
}

.content.promote-buttons a:hover{
	background-color:transparent;
	border:2px solid #2e2e2e;
	color:#2e2e2e;
}

.content.promote-buttons .promote-button1{
	background-color:".$wope_highlight_color.";
	border:2px solid ".$wope_highlight_color.";
	color:white;
}

.content.promote-buttons .promote-button1:hover{
	background-color:transparent;
	border:2px solid ".$wope_highlight_color.";
	color:#2e2e2e;
}

.promote-text-white .promote-title{
	color:white;
}

.promote-text-white .promote-content{
	color:white;
}

.promote-text-white .content.promote-buttons a{
	background-color:transparent;
	border:2px solid white;
	color:white;
}

.promote-text-white .content.promote-buttons a:hover{
	background-color:white;
	border:2px solid white;
	color:#2e2e2e;
}

.promote-text-white .content.promote-buttons .promote-button1{
	background-color:white;
	border:2px solid white;
	color:#2e2e2e;
}

.promote-text-white .content.promote-buttons .promote-button1:hover{
	background-color:transparent;
	border:2px solid white;
	color:white;
}


/* blockquote */
.blockquote-bg-white{
	background-color:white;
}

.blockquote-bg-gray{
	background-color:#cccccc;
}

.blockquote-bg-black{
	background-color:#333333;
}

.blockquote-bg-highlight{
	background-color:".$wope_highlight_color.";
}

.blockquote-content{
	color:#404040;
}

.blockquote-author{
	color:#2e2e2e;
}

.blockquote-text-white .blockquote-content{
	color:white;
}

.blockquote-text-white .blockquote-author{
	color:white;
}

.blockquote-box i.fa-quote-right{
	color:rgba(0,0,0,0.5);
}

.blockquote-text-white.blockquote-box i.fa-quote-right{
	color:rgba(255,255,255,0.5);
}





/* social icons widget */
a.social-icons{
	color:#2e2e2e;
	border:1px solid #d9d9d9;
}

a.social-icons i{
	color:#2e2e2e;
}

a.social-icons:hover{
	background-color:#2e2e2e;
	border:1px solid #2e2e2e;
}

a.social-icons:hover i{
	color: ".$wope_highlight_color.";
}


/* information box widget */

.info-box{
	border: 1px solid #d9d9d9;
}

.info-box-icon i{
	color: #b3b3b3;
}

.info-box-content{
	color: #999;
}

.info-box-hide i{
	color: #9b9b9b;
}

.info-box-hide i:hover{
	color: #2e2e2e;
}

.info-box-color{
	background-color: #f5f5f5;
	border: 1px solid #f5f5f5;
}

.info-box-color .info-box-hide i{
	color: #fff;
	background-color: rgba(0, 0, 0, 0.2);
}

.info-box-color .info-box-hide:hover i{
	color: #fff;
	background-color: rgba(0, 0, 0, 0.5);
}

.info-box-step .info-box-icon i{
	color: #549fd3;
}

.info-box-note .info-box-icon i{
	color: #49d2e6;
}

.info-box-alert .info-box-icon i{
	color: #f6cd0e;
}

.info-box-success .info-box-icon i{
	color: #43ca8f;
}

.info-box-error .info-box-icon i{
	color: #ff6353;
}

.info-box-color .info-box-icon i,
.info-box-color .info-box-content{
	color: #fff;
}

.info-box-color.info-box-general{
	background-color: #2e2e2e;
}

.info-box-color.info-box-step{
	background-color: #549fd3;
}

.info-box-color.info-box-note{
	background-color: #49d2e6;
}

.info-box-color.info-box-alert{
	background-color: #f6cd0e;
}

.info-box-color.info-box-success{
	background-color: #43ca8f;
}

.info-box-color.info-box-error{
	background-color: #ff6353;
}

/* dropcap */
.dropcap-style1 {
    color: #2e2e2e;
    background-color: #F2F2F2;
    border:2px solid #F2F2F2;
}

.dropcap-style2 {
    color: #2e2e2e;
   	border:2px solid #2e2e2e;
}

.dropcap-style3 {
    background-color: #2e2e2e;
    color: white;
    border:2px solid #2e2e2e;
}

.dropcap-style4 {
    background-color:".$wope_highlight_color.";
    color: #2e2e2e;
    border:2px solid ".$wope_highlight_color.";

}




/* WOOCOMMERCE */




/* shop/archive page */



.woocommerce span.onsale{
	background-color:".$wope_highlight_color.";
	color:#2e2e2e;
}

.woocommerce ul.products li.product h3 a{
	color:#2e2e2e;
}

.woocommerce ul.products li.product h3 a:hover{
	color:".$wope_highlight_color.";
}

.woocommerce ul.products li.product .price{
	color:".$wope_highlight_color.";
}

.woocommerce ul.products li.product .price del{
	color:#cccccc;
	opacity:1;
}

.woocommerce ul.products li.product .price ins{
	color:".$wope_highlight_color.";
}

.woocommerce ul.products li.product .product-brand{
	color:#999999;
}

.woocommerce ul.products li.product .add_to_cart_button,
.woocommerce ul.products li.product .yith-wcqv-button{
	background-color:".$wope_highlight_color.";
	border:2px solid ".$wope_highlight_color.";
	color:#2e2e2e;
}

.woocommerce ul.products li.product .add_to_cart_button:hover,
.woocommerce ul.products li.product .yith-wcqv-button:hover{
	background-color:#2e2e2e;
	border:2px solid #2e2e2e;
	color:white;
}


/* woocommerce single product */

.woocommerce div.product .price{
	color:".$wope_highlight_color." !important;
}

.woocommerce div.product form.cart div.quantity input,
.woocommerce .quantity .qty{
	background-color:#f2f2f2;
	border:0px;
}


.woocommerce div.product .single_add_to_cart_button{
	color: #2e2e2e;
    border: 2px solid ".$wope_highlight_color.";
    background-color: ".$wope_highlight_color.";
}

.woocommerce div.product .single_add_to_cart_button:hover{
	color: #2e2e2e;
    border: 2px solid #2e2e2e;
    background-color: transparent;
}


.woocommerce div.product .add_to_wishlist{
	color: white;
    border: 2px solid #2e2e2e;
    background-color: #2e2e2e;
}


.woocommerce div.product .add_to_wishlist:hover{
	color: #2e2e2e;
    border: 2px solid #2e2e2e;
    background-color: transparent;
}


/* form */

.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, 
.woocommerce button.button.alt, 
.woocommerce input.button.alt{
	color: #2e2e2e;
    border: 2px solid ".$wope_highlight_color.";
    background-color: ".$wope_highlight_color.";
    border-radius:0px;
}

.woocommerce #respond input#submit.alt:hover, 
.woocommerce a.button.alt:hover, 
.woocommerce button.button.alt:hover, 
.woocommerce input.button.alt:hover{
	color: #2e2e2e;
    border: 2px solid #2e2e2e;
    background-color: transparent;

}


#yith-quick-view-modal .yith-wcqv-main{
box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.2);
}


/* pagination */

.paginate .current{
	color:white;
	background-color:#2e2e2e;
	border:2px solid #2e2e2e;
}

.paginate a{
	background-color:transparent;
	color:#2e2e2e;
	border:2px solid #2e2e2e;
}

.paginate a:hover{
	color:white;
	background-color:".$wope_highlight_color.";
	border:2px solid ".$wope_highlight_color.";
}

.woocommerce nav.woocommerce-pagination ul{
	border:2px solid #2e2e2e;
}

.woocommerce .woocommerce-pagination ul.page-numbers li, 
.woocommerce-page .woocommerce-pagination ul.page-numbers li{
	border-right:2px solid #2e2e2e;
}

.woocommerce .woocommerce-pagination ul.page-numbers li:last-child, 
.woocommerce-page .woocommerce-pagination ul.page-numbers li:last-child{
	border-right:0px;
}

.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover{
	color:#2e2e2e;
	background-color:".$wope_highlight_color.";
}

.woocommerce nav.woocommerce-pagination ul li span.current{
	color:white;
	background-color:#2e2e2e;
}

.woocommerce nav.woocommerce-pagination ul li a, 
.woocommerce nav.woocommerce-pagination ul li span{
	background-color:transparent;
	color:#2e2e2e;
}


/* multi footer */
#footer-bottom{
	color:#999999;
}

#footer-bottom a{
	color:#999999;
}

#footer-bottom a:hover{
	color:".$wope_highlight_color.";
}

.footer-social a i:hover{
	color:".$wope_highlight_color.";
}

.footer-social a i{
	color: #999999;
}

#footer-bottom{
	background-color: #262626;
}

.footer-style-5 .footer-bottom-top{
	border-bottom: 1px solid #2e2e2e;
}

.footer-style-7 .footer-bottom-top{
	border-bottom: 1px solid #2e2e2e;
}

#footer-bottom.footer-white{
	background-color: transparent;
}

.footer-white.footer-style-5 .footer-bottom-top, .footer-white.footer-style-7 .footer-bottom-top{
	border-bottom: 1px solid #ccc;
}

";
