<?php
$wope_font_options 	= get_option('wope-font');
$wope_font_heading 	= $wope_font_options['font_heading'];
$wope_font_menu 	= $wope_font_options['font_menu'];
$wope_font_body 	= $wope_font_options['font_body'];
$wope_font_text = "

/* header */
.logo-text{
	font-size:36px;
	line-height:125px;
	font-weight:400;
	font-family:'".$wope_font_heading."',Arial !important;
	letter-spacing:2px;
	text-transform:uppercase;
}

#scroll-header .logo-text{
	font-size:24px;
	line-height:60px;
	font-weight:400;
	font-family:'".$wope_font_heading."',Arial !important;
	letter-spacing:2px;
	text-transform:uppercase;
}

#main-menu-toggle a{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:14px;
	font-style: normal;
	font-weight: 700;
	text-transform:uppercase;
}



#top-bar{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:14px;
	font-style: normal;
	font-weight: 400;
	text-transform:uppercase;
}

#topbar .search-form.content input[type=text]{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:14px;
	font-style: normal;
	font-weight: 400;
	text-transform:uppercase;
	letter-spacing:1px;
}



/* top bar open */
#topbar-open i {
    font-size: 20px;
    line-height: 20px;
}

/* contact detail */

.contact-detail-line ul li{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:14px;
	font-style: normal;
	font-weight: 400;
	text-transform:uppercase;
	letter-spacing:1px;
}

.contact-detail-line ul li i{
	font-size: 18px;
	line-height: 18px;
}


.main-menu ul li a, h4.mega-block-title{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px !important;
	line-height:18px !important;
	font-style: normal !important;
	font-weight: 400 !important;
	text-transform:uppercase !important;
	letter-spacing:2px !important;
}

.main-menu ul ul li a{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px !important;
	line-height:18px !important;
	font-style: normal !important;
	font-weight: 400 !important;
	text-transform:uppercase !important;
	letter-spacing:2px !important;
}



/* Toggle menu */
.toggle-menu ul li{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px !important;
	line-height:18px !important;
	font-style: normal !important;
	font-weight: 400 !important;
	text-transform:uppercase !important;
	letter-spacing:2px !important;
}


/* body */
.text-404{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:150px;
	line-height:204px;
	font-weight:400;
	text-transform:uppercase;
}

/* page builder */
.content-section-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:30px;
	line-height:36px;
	font-weight: 400;
	letter-spacing:2px;
	text-transform:uppercase;
}

.content-section-subtitle{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:20px;
	font-weight:400;
	letter-spacing:2px;
	text-transform: uppercase;
}

.content-section-text{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:18px;
	line-height:28px;
	font-weight:400;
}

.section-widget-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:24px;
	line-height:36px;
	font-weight: 400;
	text-transform:uppercase;
	letter-spacing:1px;
}


.content.content-box-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
	font-weight:400;
}

.align-center .section-column-content-heading{
	text-align: center;
}

.align-right .section-column-content-heading{
	text-align: right;
}

.section-column-content-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:30px;
	line-height:36px;
	font-weight:400;
	letter-spacing: 3px;
	text-transform:uppercase;
}

.section-column-content-subtitle{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight:400;
	letter-spacing: 2px;
	text-transform:uppercase;
}


/* quote block */
.quote-block-author{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:18px;
	line-height:28px;
	font-weight:400;
	font-style:italic;
}


.quote-block-content{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:30px;
	line-height:42px;
	font-weight:700;
	text-transform:uppercase;
	letter-spacing:1px;
	
}

/* people profile */
.team-item-left{
	text-align: left;
}

.team-item-center{
	text-align: center;
}


.team-name{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:18px;
	line-height:28px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.team-sub-name{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.team-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
	font-weight:400;
}

.team-socials p a i{
	font-size:18px;
}

.team-style-2.team-item{
	text-align: center;
}


/* callout */
.callout-content{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:24px;
	line-height:36px;
	font-weight:400;
	letter-spacing: 2px;
	text-transform:uppercase;
}

.callout-main-content{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:24px;
	line-height:30px;
	font-weight:400;
	letter-spacing: 2px;
	text-transform:uppercase;
}

.callout-sub-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:24px;
	font-weight:400;
}


.callout-buttons.content i{
	font-size: 16px;
	line-height: 20px;
}


/* tabs */
.tab-title,.tab-vertical-title{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:28px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.tab-title i,.tab-vertical-title i{
	font-size:24px;
	line-height:28px;
}

.content.tab-vertical-content, .content.tab-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
	font-weight:400;
}

.content.tab-vertical-content h1, .content.tab-content h1,.content.tab-vertical-content h2, .content.tab-content h2,.content.tab-vertical-content h3, .content.tab-content h3{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:24px;
	line-height:32px;
	font-weight:400;

}

/* accordion */
.accor-title{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:28px;
	
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.accor-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
}	

/* testimonials */
.testimonials-author-name{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:18px;
	line-height:30px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.content.testimonials-author-info{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:20px;
	font-weight:400;
	letter-spacing:2px;
	text-transform:uppercase;
}


.testimonials-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:18px;
	line-height:30px;
	font-weight:400;
}



/* dropcap */
.dropcap{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 18px;
	line-height: 36px;
	font-weight: 400;
	text-transform: uppercase;
}


/* gallery */
.gallery{
	line-height: 0px;
}

div.pp_default .pp_description {
	font-family:'".$wope_font_menu."',Arial !important;
}

.gallery-demo-image{
	font-size: 0px;
	line-height: 0px;
}

.gallery-demo-name{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight:400;
	letter-spacing:2px;
	text-transform: uppercase;
}



/* icon box */
.icon-box-icon i{
	font-size: 72px;
	line-height: 72px;
	font-weight: 400;
}

.icon-box-style .icon-box-icon i{
	font-size: 36px;
	line-height: 100px;
	font-weight: 400;
}

.icon-box-vertical .icon-box-style .icon-box-icon i{
	font-size: 25.44px;
	line-height: 65.44px;
	font-weight: 400;
	width: 65.44px;
	height: 65.44px;
}

.icon-box-vertical .icon-box-icon i{
	font-size: 54px;
	line-height: 54px;
	font-weight: 400;
}

.icon-box-center{
	text-align: center;
}

.icon-box-center img, .icon-box-center img{
	text-align: center;
}

.icon-box-title, .icon-box-inline{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:18px;
	line-height:26px;
	font-weight:400;
	letter-spacing: 2px;
	text-transform:uppercase;
}

.icon-box-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
	font-weight:400;
}

.icon-box-vertical .icon-box-content{
	line-height:28px;
}

.icon-box-button a{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	letter-spacing: 2.5px;
	text-transform:uppercase;
}

.icon-box-image-box-container{
	font-size: 0px;
	line-height: 0px;
}

.icon-box-vertical .icon-box-right .icon-box-detail{
	text-align: right;
}	

.icon-box-vertical .icon-box-image-container{
	font-size: 0px;
	line-height: 0px;
}

/* milestone */
.milestone-item{
	text-align: center;
}

.milestone-number i{
	font-size: 36px;
	line-height: 42px;
}

.milestone-number{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:36px;
	line-height:42px;
	font-weight:400;
}

.milestone-name{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:20px;
	font-weight:400;
	text-transform: uppercase;
	letter-spacing:2px;
}


/* pricing table */
.pricing-table-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:24px;
	line-height:30px;
	font-weight:400;
	text-transform: uppercase;
	letter-spacing:2.5px;
}

.pricing-table-sub-title{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	text-transform: uppercase;
	letter-spacing:1.5px;
}

.pricing-table-pricing{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	text-transform: uppercase;
	letter-spacing:1.4px;
}

.pricing-table-unit{
	font-size:24px;
	line-height:30px;
}

.pricing-table-price{
	font-size:60px;
	line-height:66px;
	letter-spacing: 5px;
}

.pricing-table-featured-list{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:36px;
	font-weight:400;
}

.pricing-table-button a{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:16px;
	line-height:22px;
	font-weight:400;
	text-transform: uppercase;
	letter-spacing:2px;
}



/*icon list */
.content .custom-list,
.content .custom-list a{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
	font-weight:400;
}

.custom-list li i{
	font-size: 16px;
	line-height: 18px;
}

.custom-list.icon-normal li i{
	font-size: 24px;
	line-height: 22px;
	vertical-align:-3px;
}




/* contact widget */
.contact-name-field div,.contact-email-field div,.contact-subject-field div,.contact-textarea div{
	font-size: 14px;
	line-height: 18px;
	font-family: '".$wope_font_menu."',Arial !important;
	font-weight: 400;
	text-transform: uppercase;
	letter-spacing:1px;
}



/* contact detail */
.contact-detail-widget{
	font-family:'".$wope_font_body."',Arial !important;
	font-size: 16px;
	line-height:36px;
	font-weight:400;
}

.contact-detail-widget i{
	font-size: 18px;
	line-height:36px;
}

.contact-detail-box-item i{
	font-size: 48px;
	line-height:48px;
}

.contact-detail-box-item{
	font-family:'".$wope_font_body."',Arial !important;
	font-size: 16px;
	line-height:24px;
	font-weight:400;
}


/* typography */
.content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size: 16px;
	line-height:24px;
	font-weight:400;
}

blockquote{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:18px;
	line-height:30px;
	font-weight:400;
	font-style:italic;
}

blockquote span{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:150px;
	line-height:48px;
	font-weight:400;
	font-style: normal;
}

h1{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size: 36px;
	line-height:48px;
	font-weight:400;
	
}

h2{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size: 30px;
	line-height:44px;
	font-weight:400;
	
}

h3{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size: 24px;
	line-height:36px;
	font-weight:400;
	
}

h4{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size: 18px;
	line-height:30px;
	font-weight:400;
	
}

h5{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size: 16px;
	line-height:24px;
	font-weight:400;
}

h6{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size: 14px;
	line-height:20px;
	font-weight:400;
	
}

pre{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:24px;
	font-weight:400;
}


/* button */
.content .small-button,
.content a.small-button{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:10px;
	line-height:18px;
	font-weight:400;
	letter-spacing:2px;
	text-transform:uppercase;
}

a.small-button i{
	font-size:10px;
	line-height:18px;
}

.content input[type=submit],
.content button,
.content .normal-button,
.content a.normal-button,
.normal-button,
a.normal-button{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:14px;
	line-height:20px;
	font-weight:400;
	letter-spacing:2px;
	text-transform:uppercase;
}

a.normal-button i{
	font-size:14px;
	line-height:20px;
}

.content .large-button,
.content a.large-button{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size: 14px;
	line-height: 24px;
	font-weight:400;
	letter-spacing:2px;
	text-transform:uppercase;
}

a.large-button i{
	font-size: 14px;
	line-height: 24px;
}

.button-center{
	text-align: center;
}

.button-right{
	text-align: right;
}


/* default input */
.content input[type=text], .content input[type=tel],.content input[type=email],.content input[type=password],.contact-form input[type=text]{
	font-size:16px;
	line-height:20px;
	font-family:'".$wope_font_body."',Arial !important;
	font-weight:400;
}

.content textarea,.contact-form textarea{
	font-size:16px;
	line-height:20px;
	font-family:'".$wope_font_body."',Arial !important;
	font-weight:400;
}

.content select,.content select option{
	font-size:16px; !important;
	line-height:20px !important;
	font-family:'".$wope_font_body."',Arial !important;
	font-weight:400 !important;
}


/* inner page */
h1#page-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:24px;
	line-height:36px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing: 2px;
}

.heading-align-center h1#page-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:30px;
	line-height:48px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing: 2px;
}

#breadcrumb{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:24px;
	font-weight:400;
	letter-spacing:2px;
	text-transform:uppercase;
}

.paginate{
	font-size: 0;

}

.paginate .current{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:18px;
	line-height:26px;
	font-weight:400;
}

.paginate a{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:18px;
	line-height:26px;
	font-weight:400;
}

.paginate .next,.paginate .prev{
	
}

.paginate i{
	font-size:18px;
	line-height:26px;
}

/* blog page */
.post-entry-categories{`
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight:400;
	font-style:italic;	
}

.post-entry-meta{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:24px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}


.post-entry-share a{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:16px;
	line-height:24px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.post-entry-share{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}



.post-entry-title h2, .post-entry-title a,.post-entry-title h2 a{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:24px;
	line-height:30px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing: 2px;
}

.post-entry-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
	font-weight:400;
}

.post-entry-button a{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:24px;
	font-weight:400;
	letter-spacing:2px;
	text-transform:uppercase;
}

.post-entry-tags a,.post-entry-tags{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}

.icon-box-inline i{
	font-size: 24px;
}


.blog-template-center .post-entry-meta{
	letter-spacing:2.4px;
}

/* blog fullwidth template*/
.blog-fullwidth .post-entry-categories{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:20px;
	font-weight:400;
	font-style: normal;
	text-transform:uppercase;
	letter-spacing:3px;
}


.blog-fullwidth .post-entry-meta{
	letter-spacing:2.5px;
}

.blog-fullwidth .post-entry-heading{
	text-align: center;
}

.post-entry-shares a i{
	font-size: 16px;
	line-height: 16px;
}

.blog-fullwidth .paginate{
	text-align: center;
}


/* blog medium template*/


.blog-medium .post-entry-meta{
	letter-spacing:2.5px;
}

/* blog list center template*/
.blog-list-center .paginate{
	text-align: center;
}

.blog-list-center .post-entry.left .post-entry-detail{
	text-align: right;
}


.blog-list-center .post-entry-meta{
	letter-spacing:2.5px;
}


/* post small */
.post-small-meta-text{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:31px;
}

/* post cell */

.post-cell-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:18px;
	line-height:30px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.post-cell-meta{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.post-cell-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:24px;
	font-weight:400;
}

a.square-button{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}



/* view all */
.view-all-link a{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:24px;
	font-weight:900;
	text-transform:uppercase;
	letter-spacing:1px;
}

/* post list */
.post-list-title{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:20px;
	line-height:30px;
	font-weight:900;
	text-transform:uppercase;
}


.post-list-meta{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:24px;
	font-weight:700;
	text-transform:uppercase;
	letter-spacing:1px;
}

.post-list-meta i{
	font-size:18px;
	line-height:24px;
}


/* author bio */
.author-bio{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
	font-weight:400;
}

.author-bio-title{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing: 2px;
}

a.author-bio-url{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
}

/* relative post  */
.post-relative-title{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.post-relative-date{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}

/* seach form */
.content .search-form i{
	font-size:18px;
	line-height:18px;
}

.search-form-title{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:30px;
	line-height:38px;
	font-weight:400;
	letter-spacing: 0px;
}


/* subscribes widget */
.subscribe-box-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:24px;
	line-height:36px;
	font-weight:400;
	letter-spacing:2px;
	text-transform:uppercase;
}


/* post search */
.post-search-entry-title{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:18px;
	line-height:30px;
	font-weight:400;
	letter-spacing:2px;
	text-transform:uppercase;
}

.post-search-entry-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
	font-weight:400;
}

.search-form-results{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:30px;
	line-height:38px;
	font-weight:400;
}

.post-search-entry-icon i{
	font-size: 18px;
    line-height: 18px;
}

/* comment section */
.post-section-title ,h3#reply-title{
	font-family:'".$wope_font_heading."',Arial !important;
    font-size: 18px;
    line-height: 24px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.comment-info{
	font-size:0px;
	line-height:0px;
}

.comment-author{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:18px;
	line-height:30px;
	font-weight:400;
	letter-spacing:2px;
	text-transform:uppercase;
}


.comment-date{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:20px;
	font-weight:400;
	letter-spacing:1px;
	text-transform:uppercase;
	
}

.comment-reply a{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:14px;
	font-weight:400;
	letter-spacing: 3px;
	text-transform: uppercase;
}

.comment-content{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
	font-weight:400;
}

/* comment form */
#comment-form{
	font-size:14px;
	line-height:18px;
	font-family:'".$wope_font_menu."',Arial !important;
	font-weight:400;
	text-transform:uppercase;
}

.comment-notes{
	font-size:14px;
	line-height:24px;
	font-family:'".$wope_font_menu."',Arial !important;
}


	
/* portfolio page */

#portfolio-section-des{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:22px;
}

/* portfolio relative  */
.portfolio-relative-title{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:24px;
	line-height:30px;
	font-weight:900;
	text-transform:uppercase;
}

/* portfolio single */
.portfolio-single-meta{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:24px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}


.portfolio-single-categories a{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:10px;
	line-height:14px;
	font-style:italic;
}

.portfolio-single-navigation a{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:14px;
	line-height:14px;
	font-style:italic;
}

a.portfolio-cell-view{
	font-size:0px;
}

.portfolio-single-content h3{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size: 18px;
	line-height: 24px;
	font-weight: 400;
	text-transform: uppercase;
	letter-spacing: 2px;
}

.portfolio-single-meta-name{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:22px;
	font-weight:400;
	text-transform: uppercase;
	letter-spacing:2px;	
}

.portfolio-single-meta-content{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:16px;
	line-height:22px;
	font-weight:400;
	text-transform: capitalize;
}

.portfolio-single-meta-content ul a i{
	font-size: 16px;
	line-height: 24px;
	font-weight:400;
}

.portfolio-single-meta-content ul a span{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size: 16px;
	line-height: 24px;
	font-weight:400;
}

.portfolio-single-center .portfolio-single-media{
	text-align: center;
}

/* portfolio cell */
.portfolio-cell-title a{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.portfolio-cell-categories a,.portfolio-cell-categories{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	letter-spacing:2px;
	text-transform: uppercase;
}

.portfolio-cell-banner i{
	font-size:15px;
	line-height:18px;
}

/* portfolio board */
.portfolio-board-title a{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:18px;
	line-height:30px;
}

/* portfolio filter */
.filters li{
	text-transform: uppercase;
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	letter-spacing: 2px;
}

.filters li::after{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:14px;
	line-height:14px;
	font-weight:400;
}	

a.portfolio-cell-view i{
	font-size:24px;
	line-height: 50px;
}

a.portfolio-cell-view{
	letter-spacing: 0px;
	text-align: center;
}

/* widget */

/* widget basic style */

.sidebar-widget{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
}

.sidebar-widget-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight: 400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.sidebar-widget ul li a{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
	font-weight:400;
}

.sidebar-widget ul li a i, .recentcomments ,.recentcomments i{
	font-size:16px;
	line-height:28px;
	font-weight:400;
}

.footer-widget{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
	font-weight:400;
}

.footer-widget-title{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight: 400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.footer-widget ul li a{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:16px;
	line-height:32px;
	font-weight:400;
}

.footer-widget ul li a i{
	font-size:16px;
	line-height:28px;
}

.footer-social a i{
	font-size:18px;
	line-height:18px;
}

/* footer bottom*/
#footer-bottom{
	font-size:14px;
	line-height:24px;
	font-family:'".$wope_font_body."',Arial !important;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}

/* tagcloud widget */
.tagcloud a{
	font-family:'".$wope_font_menu."',Arial !important;
	font-size:12px !important;
	line-height:14px !important;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}


/* widget post */
.widget-post-title a{
	font-family:'".$wope_font_heading."',Arial !important;
	font-size:14px;
	line-height:20px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}

.widget-post-meta a{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:14px;
	line-height:20px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:2px;
}



/* timeline widget pb */

.timeline-image{
	font-size: 0px;
	line-height: 0px;
}

.timeline-title{
	font-family: '".$wope_font_menu."',Arial !important;
	font-size: 18px;
	line-height: 28px;
	font-weight:400;
	letter-spacing: 1.8px;
}

.timeline-year{
	font-family: '".$wope_font_menu."',Arial !important;
	font-size: 16px;
	line-height: 16px;
	font-weight:400;
	letter-spacing: 2px;
}

.timeline-content{
	font-family: '".$wope_font_body."',Arial !important;
	font-size: 16px;
	line-height: 24px;
	font-weight:400;
}

/* progress widget pb */
.progress-name{
	font-family: '".$wope_font_menu."',Arial !important;
	font-size: 18px;
	line-height: 26px;
	font-weight:400;
	letter-spacing: 2px;
	text-transform:uppercase;
}

.progress-value{
	font-family: '".$wope_font_menu."',Arial !important;
	font-size: 18px;
	line-height: 26px;
	font-weight:400;
	letter-spacing: 2px;
}

.progress-pie-chart-item .progress-value{
	font-size: 24px;
	line-height: 24px;
}

/* process widget pb */
.process-number{
	font-family: '".$wope_font_menu."',Arial !important;
	font-size: 60px;
	line-height: 60px;
	font-weight: 700;
	letter-spacing: 2px;
}

.process-name{
	font-family: '".$wope_font_menu."',Arial !important;
	font-size: 18px;
	line-height: 26px;
	font-weight:400;
	letter-spacing: 1.8px;
}

.process-content{
	font-family: '".$wope_font_body."',Arial !important;
	font-size: 16px;
	line-height: 28px;
	font-weight:400;
}

.process_container_3{
	text-align: center;
}

.process_container_3 .process-number{
	font-size: 48px;
	line-height: 48px;
}

.process_container_3 .process-content h1, .process_container_3 .process-content h2, .process_container_3 .process-content h3, .process_container_3 .process-content h4{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 24px;
	line-height: 30px;
	font-weight: 400;
	letter-spacing: 2.2px;
}


/* promote box */


h2.promote-title{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 24px;
	line-height: 28px;
	font-weight: 400;
	letter-spacing: 2px;
	text-transform: uppercase;
}

.promote-section h2.promote-title{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 36px;
	line-height: 48px;
	font-weight: 400;
	letter-spacing: 2px;
	text-transform: uppercase;
}

.promote-content{
	font-family: '".$wope_font_body."',Arial !important;
	font-size: 16px;
	line-height: 24px;
	font-weight:400;
}

.promote-content-uppercase.promote-content{
	font-family: '".$wope_font_menu."',Arial !important;
	font-size: 16px;
	line-height: 24px;
	font-weight:400;
	letter-spacing: 2px;
	text-transform: uppercase;
}

/* blockquote */
.blockquote-content{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 24px;
	line-height: 36px;
	font-weight:400;
	letter-spacing: 2px;
	text-transform:uppercase;
}

.blockquote-author{
	font-family: '".$wope_font_body."',Arial !important;
	font-size: 14px;
	line-height: 20px;
	font-weight: 400;
	letter-spacing: 2px;
	text-transform:uppercase;
}

.blockquote-container i{
	font-size: 60px;
	line-height: 60px;
}

.blockquote-section .blockquote-container{
	text-align: center;
}

.blockquote-section .blockquote-content{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 30px;
	line-height: 54px;
	font-weight: 400;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: 2px;
}

.blockquote-section .blockquote-author{
	font-family: '".$wope_font_body."',Arial !important;
	font-size: 18px;
	line-height: 24px;
	font-weight: 400;
	letter-spacing: 2px;
}



/* information box widget */
.info-box-icon i{
	font-size: 48px;
	line-height: 48px;
}

.info-box-content{
	font-family: '".$wope_font_body."',Arial !important;
	font-size: 16px;
	line-height: 28px;
	font-weight:400;
}

.info-box-hide i{
	font-size: 32px;
	line-height: 32px;
}





/* woocommerce pages */




.woocommerce-result-count,
.woocommerce-ordering{
	font-family: '".$wope_font_body."',Arial !important;
	font-size: 16px;
	line-height: 28px;
	font-weight:400;
}



.woocommerce span.onsale{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 18px;
	line-height: 70px;
	font-weight: 400;
	letter-spacing:1px;
}

.woocommerce ul.products li.product h3{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 18px;
	line-height: 30px;
	font-weight: 400;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: 1px;
}

.woocommerce ul.products li.product .price{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 18px;
	line-height: 24px;
}

.woocommerce ul.products li.product .product-brand{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 14px;
	line-height: 18px;
	font-weight: 400;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: 2px;
}



/* woocommerce single product */



.woocommerce div.product h1.product_title{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 30px;
	line-height: 36px;
	font-weight: 400;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: 2px;
}

.woocommerce div.product .product-brand{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 18px;
	line-height: 24px;
	font-weight: 400;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: 2px;
}


.woocommerce div.product .summary .price{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 24px !important;
	line-height: 30px;
	font-weight: 400;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: 2px;
}

.woocommerce .quantity .qty,
.woocommerce div.product .single_add_to_cart_button,
.woocommerce div.product .add_to_wishlist,
.woocommerce #respond input#submit, 
.woocommerce a.button, 
.woocommerce button.button, 
.woocommerce input.button{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 14px;
	line-height: 18px;
	font-weight: 400;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: 2px;
}

.woocommerce-page div.product .woocommerce-tabs ul.tabs li a{
	font-family: '".$wope_font_body."',Arial !important;
	font-size: 14px;
	line-height: 18px;
	font-weight: 400;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: 2px;
}

.woocommerce-page .product h2{
	font-family: '".$wope_font_heading."',Arial !important;
	font-size: 18px;
	line-height: 24px;
	font-weight: 400;
	font-style: normal;
	text-transform: uppercase;
	letter-spacing: 2px;
}

/* pagination */

.paginate{
	font-size: 0;

}

.paginate .current{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:18px;
	line-height:26px;
	font-weight:400;
}

.paginate a{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:18px;
	line-height:26px;
	font-weight:400;
}

.paginate .next,.paginate .prev{
	
}

.paginate i{
	font-size:18px;
	line-height:26px;
}

.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li a, 
.woocommerce nav.woocommerce-pagination ul li span{
	font-family:'".$wope_font_body."',Arial !important;
	font-size:18px;
	line-height:26px;
	font-weight:400;
}


/* multi footer */
.footer-social a i{
	font-size: 18px;
	line-height: 18px;
}

.footer-menu-container{
	font-family: '".$wope_font_menu."',Arial !important;
	font-size: 14px;
	line-height: 20px;
	font-weight:400;
	letter-spacing: 2px;
	text-transform: uppercase;
} 


";
