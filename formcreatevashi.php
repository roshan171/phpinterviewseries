 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 	<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
 	<style type="text/css">
 		
/*

Template: Hi-soft - IT Solutions and Services Company HTML5 Template
Version: 1.0
Author: potenzaglobalsolutions
Design and Developed by: potenzaglobalsolutions.com


*/
/*================================================
[  Table of contents  ]
================================================

 :: Typography
 :: Helper Classes
 :: Shortcodes
  	- Accordion
  	- Button
  	- Case Study
    - Category
    - Client
    - Countdown
    - Counter
    - Feature Info
    - Form Control
    - List style
    - Newsletter
    - Owl Carousel
    - Portfolio
    - Pricing Table
    - Progress Bar
    - Tabs
    - Team
    - Testimonial
    - Timeline
 :: Header
   - Header
   - Header Style 02
   - Header Style 03
   - Header Transparent
 :: Banner
   - Banner
   - banner 02
   - banner 03
 :: Layout
   - Section Title
   - Sticky column
   - Header Inner
 :: Blog
   - Blog
   - blog post sticky
 :: Not Found
 :: Footer
 :: Responsive

======================================
[ End table content ]
======================================*/
/*****************************
  Typography
*****************************/
body {
  font-family: "Archivo", sans-serif;
  font-weight: normal;
  font-style: normal;
  font-size: 14px;
  color: #676c71;
  overflow-x: hidden; }

a {
  outline: medium none !important;
  color: #ff0000;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  text-decoration: none; }
  a:focus {
    color: #162b2f;
    text-decoration: none !important; }
  a:hover {
    color: #162b2f;
    text-decoration: none !important; }

a.text-dark:focus {
  color: #ef3139 !important; }

a.text-dark:hover {
  color: #ef3139 !important; }

input {
  outline: medium none !important;
  color: #ef3139; }

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: "Archivo", sans-serif;
  font-weight: normal;
  color:#162b2f;;
  margin: 0px 0px 1rem;
  font-weight: bold;
  line-height: 1.2; }
  h1 a,
  
  h3 a,
  h4 a,
  h5 a,
  h6 a,
  .h1 a,
  .h2 a,
  .h3 a,
  .h4 a,
  .h5 a,
  .h6 a {
    color: inherit; }
    
a5{
    color:red;
    font-size:17px;
    margin-left:183px;
    text-decoration-line: underline;
}    

a5:hover{
color:#022d62;    
}
.btn{
    font-size: 14px;
    font-weight: bold;
    padding: 16px 34px;
    line-height: 1;
    border-radius: 50px;
    position: relative;
    z-index: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
    width: -webkit-fill-available;
}


.btn-btn-primary-4:hover{
    color:#ffffff;  
    background:#022d62;
    border-color: #022d62;
    
}

.btn-btn-primary-5:hover{
    color:#ffffff;  
    background:#022d62;
    border-color: #022d62;
    
}


.z-1:hover{
    color:red;

}
.z-1{
   margin-left: 15px;
   
   /*font-size: 25px;*/
    
}
.color-icon{ 
    font-size:40px;
    width: 90px;
    height: 90px;
    line-height: 100px;
    border-radius: 50%;
    margin-top: 20px;
    
    box-shadow: 0px 10px 40px 0px rgb(50 50 50 / 10%);
    text-align: center;
    margin-right: 20px;
    align-items: center;
    background-color:#001fff33;
    color: #242f6c;
    
}
.color-icon-1{
     font-size:40px;
    width: 90px;
    height: 90px;
    line-height: 100px;
    border-radius: 50%;
    margin-top: 20px;
    
    box-shadow: 0px 10px 40px 0px rgb(50 50 50 / 10%);
    text-align: center;
    margin-right: 20px;
    align-items: center;
    background-color:#ff00004d;
    color: #242f6c;
    
}
.contact-line{
   margin-top:20px; 
}

/*contact css*/
.info-item{
    box-shadow: 0px 10px 40px 0px rgb(50 50 50 / 10%);
    padding: 50px 40px;
    margin-bottom: 30px;
    border: 0px solid #022d62;
    margin-top: 60px;
}

/*.contact-style{*/
/*    font-size:40px;*/
/*    width: 90px;*/
/*    height: 90px;*/
/*    line-height: 100px;*/
/*    border-radius: 50%;*/
/*    margin-top: 20px;*/
    
/*    box-shadow: 0px 10px 40px 0px rgb(50 50 50 / 10%);*/
/*    text-align: center;*/
/*    margin-right: 20px;*/
/*    align-items: center;*/
    
/*    color: #242f6c;*/
/*}*/
    

.contact-text{
    font-size:26px;
    margin-left: 120px;
    margin-top: -60px;
    font-weight: bold;
}
.contact-text-1{
    font-size:25px;
    margin-left: 120px;
    margin-top: -60px;
    font-weight: bold;
}

input {
  width: 295px;
  padding: 10px;
  border-radius: 2px;
  border: 1px solid #ccc;
}
input::placeholder {
  color: #bbb;
}

@media  (max-width: 479px){
    .s-2{
        
    }
}
    
/*contact us*/
   
@media (max-width: 479px) {
    
    .col-6{
        width:100%;
        
    }
}

/*------------iframe----------------*/



/*@media (max-width: 479px){*/
/*.meif{*/
/*   height: 356px;*/
/*}*/
/*}*/

@media  (max-width: 479px){
    .s-1{
margin-left: -165px;
/*float: left;*/
}
    }

@media (max-width: 479px) {
    
    .img-fluid1{
        margin-left: 30px;
        
    }
}

@media (max-width: 479px) {
    
    .a1{
        margin-left: 73px;
        width: 34px!important;
        
    }
}

@media (max-width: 479px) {
    
    .a5{
        margin-top: 47px;
        
    }
}

@media (max-width: 479px) {
    
    iframe{
       height:450px;
        
    }
}


@media (max-width: 479px) {
    
    .col-4{
       width:100%;
        
    }
}

iframe {
  width: 100%; }

label {
  font-weight: normal; }

h1 {
  font-size: 60px;
  font-style: normal; }

h2 {
  font-size: 36px; }

h3 {
  font-size: 30px; }

h4 {
  font-size: 24px;
  font-weight: 600; }

h5 {
  font-size: 18px; }

h6 {
  font-size: 16px;
  line-height: 1.5;
  font-weight: 500; }

p {
  line-height: 1.8; }
  
 .s-1{
      color: #030204d1;
    margin-top: 70px;
  }
 
 
*::-moz-selection {
  background: #ef3139;
  color: #ffffff;
  text-shadow: none; }

::-moz-selection {
  background: #ef3139;
  color: #ffffff;
  text-shadow: none; }

::selection {
  background: #ef3139;
  color: #ffffff;
  text-shadow: none; }

/* container-fluid */
.container-fluid.container-space {
  padding: 0 100px; }

@media (min-width: 1200px) {
  .container {
    max-width: 1140px; } }

/* border */
.border {
  border-color: #eeeeee !important; }

.border-top {
  border-top-color: #eeeeee !important; }

.border-left {
  border-left-color: #eeeeee !important; }

.border-right {
  border-right-color: #eeeeee !important; }

.border-bottom {
  border-bottom-color: #eeeeee !important; }

.border-radius {
  border-radius: 5px !important; }

.border-radius-0 {
  border-radius: 0px !important; }
  
  
 
/* badge */
.badge {
  border-radius: 5px;
  padding: .25em .4em; }
  .badge + .badge {
    margin-left: 6px; }

.badge-md {
  padding: 5px 8px;
  font-size: 13px;
  font-weight: normal; }

.badge-primary {
  background: #ef3139; }

/* back-to-to */
.back-to-top {
  background: #FF0000;
  color: #ffffff;
  width: 55px;
  height: 55px;
  line-height: 50px;
  font-size: 16px;
  display: inline-block;
  border-radius: 50%; }
  .back-to-top:hover {
    color: #ffffff; }
  .back-to-top:focus {
    color: #ffffff; }

/* pagination */
.pagination .page-item .page-link {
  padding: 12px 25px;
  color: #022d62;
  border-color: rgba(2, 45, 98, 0.1); }
  .pagination .page-item .page-link:hover {
    background: #022d62;
    color: #ffffff; }
  .pagination .page-item .page-link:focus {
    -webkit-box-shadow: none;
            box-shadow: none; }

.pagination .page-item.active .page-link {
  background: #ef3139;
  border-color: #ef3139;
  color: #ffffff; }

/* blockquote */
.blockquote {
  font-size: 16px;
  border-left: 10px solid #ef3139;
  padding-left: 30px;
  font-style: italic;
  display: block; }

.blockquote-quote {
  position: relative;
  font-size: 18px;
  border-left: 0 solid #ef3139;
  padding-left: 30px;
  font-style: italic;
  display: block;
  z-index: 1; }
  .blockquote-quote p {
    position: relative; }
  .blockquote-quote i {
    position: absolute;
    z-index: 0;
    top: 20px;
    left: 0;
    font-size: 60px;
    line-height: 60px;
    color: #dfdfdf; }

/* table */
.table-bordered td {
  border-color: #eeeeee; }

.table-bordered th {
  border-color: #eeeeee; }

.table thead th {
  border-bottom-color: #eeeeee; }

.table-striped tbody tr:nth-of-type(odd) {
  background: #f6f6f6; }

/*****************************
  Helper Classes
*****************************/
/* color */
.text-primary {
  color: #FF0000 !important; }

.text-light {
  color: #626262 !important; }

.text-dark {
  color: #162b2f !important;
  font-size: 14px;
    font-weight: bold;}

.bg-brush-primary {
  background: #ef3139;
  border-radius: 6% 33% 19% 39%;
  color: #ffffff;
  padding: 0 10px; }

/* fill colors for svg */
.fill-dark {
  fill: #022d62; }

.fill-primary {
  fill: #ef3139; }

.fill-light {
  fill: #dfdfdf; }

.fill-white {
  fill: #ffffff; }

/* hr */
hr {
  border-top-color: #f6f6f6; }

/* hr light bg */
hr.light-bg {
  border-top-color: #dfdfdf; }

/* background */
.bg-primary {
  background-color: #FF0000 !important; }

.bg-dark {
  background-color: #162b2f !important; }

.bg-light {
    background-color: #f6f6f6  !important;
     
 }
 .bg-light:hover {
     background-color: #f6f6f6 !important; 
    
 
 }

.bg-black {
  background-color: #000000 !important; }

/* Page section margin padding */
.space-ptb {
  padding: 26px 0; }

.space-pt {
  padding: 100px 0 0; }

.space-pb {
  padding: 0 0 100px; }

.h-100vh {
  height: 100vh !important; }

.h-800 {
  height: 800px; }

.h-700 {
  height: 700px; }

.h-600 {
  height: 600px; }

.h-500 {
  height: 500px; }

.m-n1 {
  margin: -0.25rem !important; }

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important; }

.me-n1,
.mx-n1 {
  margin-right: -0.25rem !important; }

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important; }

.ms-n1,
.mx-n1 {
  margin-left: -0.25rem !important; }

.m-n2 {
  margin: -0.5rem !important; }

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important; }

.me-n2,
.mx-n2 {
  margin-right: -0.5rem !important; }

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important; }

.ms-n2,
.mx-n2 {
  margin-left: -0.5rem !important; }

.m-n3 {
  margin: -1rem !important; }

.mt-n3,
.my-n3 {
  margin-top: -1rem !important; }

.me-n3,
.mx-n3 {
  margin-right: -1rem !important; }

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important; }

.ms-n3,
.mx-n3 {
  margin-left: -1rem !important; }

.m-n4 {
  margin: -1.5rem !important; }

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important; }

.me-n4,
.mx-n4 {
  margin-right: -1.5rem !important; }

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important; }

.ms-n4,
.mx-n4 {
  margin-left: -1.5rem !important; }

.m-n5 {
  margin: -3rem !important; }

.mt-n5,
.my-n5 {
  margin-top: -3rem !important; }

.me-n5,
.mx-n5 {
  margin-right: -3rem !important; }

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important; }

.ms-n5,
.mx-n5 {
  margin-left: -3rem !important; }

.p-6 {
  padding: 5rem !important;
  border: 2px solid black;
    
}
/*.l-1{*/
    /*padding-right:100px;*/
/*    width:1000px;*/
    
}

.px-6 {
  padding-left: 5rem !important;
  padding-right: 5rem !important; }

.py-6 {
  padding-bottom: 5rem !important;
  padding-top: 5rem !important; }

.pt-6 {
  padding-top: 5rem !important; }

.pb-6 {
  padding-bottom: 5rem !important; }

.pl-6 {
  padding-left: 5rem !important; }

.pr-6 {
  padding-right: 5rem !important; }

.m-n6 {
  margin: -7rem !important; }

.mt-n6,
.my-n6 {
  margin-top: -7rem !important; }

.me-n6,
.mx-n6 {
  margin-right: -7rem !important; }

.mb-n6,
.my-n6 {
  margin-bottom: -7rem !important; }

.ms-n6,
.mx-n6 {
  margin-left: -7rem !important; }

.m-n7 {
  margin: -9rem !important; }

.mt-n7,
.my-n7 {
  margin-top: -9rem !important; }

.me-n7,
.mx-n7 {
  margin-right: -9rem !important; }

.mb-n7,
.my-n7 {
  margin-bottom: -9rem !important; }

.ms-n7,
.mx-n7 {
  margin-left: -9rem !important; }

@media (min-width: 576px) {
  .m-sm-n1 {
    margin: -0.25rem !important; }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important; }
  .me-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important; }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important; }
  .ms-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important; }
  .m-sm-n2 {
    margin: -0.5rem !important; }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important; }
  .me-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important; }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important; }
  .ms-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important; }
  .m-sm-n3 {
    margin: -1rem !important; }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important; }
  .me-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important; }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important; }
  .ms-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important; }
  .m-sm-n4 {
    margin: -1.5rem !important; }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important; }
  .me-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important; }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important; }
  .ms-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important; }
  .m-sm-n5 {
    margin: -3rem !important; }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important; }
  .me-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important; }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important; }
  .ms-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important; }
  .mt-sm-n5, .my-sm-n5 {
    margin-top: -3rem !important; }
  .mb-sm-n5, .my-sm-n5 {
    margin-bottom: -3rem !important; }
  .m-sm-n6 {
    margin: -7rem !important; }
  .mt-sm-n6,
  .my-sm-n6 {
    margin-top: -7rem !important; }
  .me-sm-n6,
  .mx-sm-n6 {
    margin-right: -7rem !important; }
  .mb-sm-n6,
  .my-sm-n6 {
    margin-bottom: -7rem !important; }
  .ms-sm-n6,
  .mx-sm-n6 {
    margin-left: -7rem !important; }
  .m-sm-n7 {
    margin: -9rem !important; }
  .mt-sm-n7,
  .my-sm-n7 {
    margin-top: -9rem !important; }
  .me-sm-n7,
  .mx-sm-n7 {
    margin-right: -9rem !important; }
  .mb-sm-n7,
  .my-sm-n7 {
    margin-bottom: -9rem !important; }
  .ms-sm-n7,
  .mx-sm-n7 {
    margin-left: -9rem !important; }
  .p-sm-6 {
    padding: 5rem !important; }
  .px-sm-6 {
    padding-left: 5rem !important;
    padding-right: 5rem !important; }
  .py-sm-6 {
    padding-bottom: 5rem !important;
    padding-top: 5rem !important; }
  .pt-sm-6 {
    padding-top: 5rem !important; }
  .pb-sm-6 {
    padding-bottom: 5rem !important; }
  .pl-sm-6 {
    padding-left: 5rem !important; }
  .pr-sm-6 {
    padding-right: 5rem !important; } }

@media (min-width: 768px) {
  .m-md-n1 {
    margin: -0.25rem !important; }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important; }
  .me-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important; }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important; }
  .ms-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important; }
  .m-md-n2 {
    margin: -0.5rem !important; }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important; }
  .me-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important; }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important; }
  .ms-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important; }
  .m-md-n3 {
    margin: -1rem !important; }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important; }
  .me-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important; }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important; }
  .ms-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important; }
  .m-md-n4 {
    margin: -1.5rem !important; }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important; }
  .me-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important; }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important; }
  .ms-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important; }
  .m-md-n5 {
    margin: -3rem !important; }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important; }
  .me-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important; }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important; }
  .ms-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important; }
  .m-md-n6 {
    margin: -7rem !important; }
  .mt-md-n6,
  .my-md-n6 {
    margin-top: -7rem !important; }
  .me-md-n6,
  .mx-md-n6 {
    margin-right: -7rem !important; }
  .mb-md-n6,
  .my-md-n6 {
    margin-bottom: -7rem !important; }
  .ms-md-n6,
  .mx-md-n6 {
    margin-left: -7rem !important; }
  .m-md-n7 {
    margin: -9rem !important; }
  .mt-md-n7,
  .my-md-n7 {
    margin-top: -9rem !important; }
  .me-md-n7,
  .mx-md-n7 {
    margin-right: -9rem !important; }
  .mb-md-n7,
  .my-md-n7 {
    margin-bottom: -9rem !important; }
  .ms-md-n7,
  .mx-md-n7 {
    margin-left: -9rem !important; }
  .p-md-6 {
    padding: 5rem !important; }
  .px-md-6 {
    padding-left: 5rem !important;
    padding-right: 5rem !important; }
  .py-md-6 {
    padding-bottom: 5rem !important;
    padding-top: 5rem !important; }
  .pt-md-6 {
    padding-top: 5rem !important; }
  .pb-md-6 {
    padding-bottom: 5rem !important; }
  .pl-md-6 {
    padding-left: 5rem !important; }
  .pr-md-6 {
    padding-right: 5rem !important; } }

@media (min-width: 992px) {
  .m-lg-n1 {
    margin: -0.25rem !important; }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important; }
  .me-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important; }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important; }
  .ms-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important; }
  .m-lg-n2 {
    margin: -0.5rem !important; }
  .mt-lg-n2,f
  .my-lg-n2 {
    margin-top: -0.5rem !important; }
  .me-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important; }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important; }
  .ms-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important; }
  .m-lg-n3 {
    margin: -1rem !important; }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important; }
  .me-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important; }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important; }
  .ms-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important; }
  .m-lg-n4 {
    margin: -1.5rem !important; }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important; }
  .me-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important; }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important; }
  .ms-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important; }
  .m-lg-n5 {
    margin: -3rem !important; }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important; }
  .me-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important; }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important; }
  .ms-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important; }
  .m-lg-n6 {
    margin: -7rem !important; }
  .mt-lg-n6,
  .my-lg-n6 {
    margin-top: -7rem !important; }
  .me-lg-n6,
  .mx-lg-n6 {
    margin-right: -7rem !important; }
  .mb-lg-n6,
  .my-lg-n6 {
    margin-bottom: -7rem !important; }
  .ms-lg-n6,
  .mx-lg-n6 {
    margin-left: -7rem !important; }
  .m-lg-n7 {
    margin: -9rem !important; }
  .mt-lg-n7,
  .my-lg-n7 {
    margin-top: -9rem !important; }
  .me-lg-n7,
  .mx-lg-n7 {
    margin-right: -9rem !important; }
  .mb-lg-n7,
  .my-lg-n7 {
    margin-bottom: -9rem !important; }
  .ms-lg-n7,
  .mx-lg-n7 {
    margin-left: -9rem !important; }
  .p-lg-6 {
    padding: 5rem !important; }
  .px-lg-6 {
    padding-left: 5rem !important;
    padding-right: 5rem !important; }
  .py-lg-6 {
    padding-bottom: 5rem !important;
    padding-top: 5rem !important; }
  .pt-lg-6 {
    padding-top: 5rem !important; }
  .pb-lg-6 {
    padding-bottom: 5rem !important; }
  .pl-lg-6 {
    padding-left: 5rem !important; }
  .pr-lg-6 {
    padding-right: 5rem !important; } }

@media (min-width: 1200px) {
  .m-xl-n1 {
    margin: -0.25rem !important; }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important; }
  .me-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important; }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important; }
  .ms-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important; }
  .m-xl-n2 {
    margin: -0.5rem !important; }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important; }
  .me-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important; }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important; }
  .ms-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important; }
  .m-xl-n3 {
    margin: -1rem !important; }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important; }
  .me-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important; }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important; }
  .ms-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important; }
  .m-xl-n4 {
    margin: -1.5rem !important; }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important; }
  .me-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important; }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important; }
  .ms-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important; }
  .m-xl-n5 {
    margin: -3rem !important; }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important; }
  .me-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important; }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important; }
  .ms-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important; }
  .m-xl-n6 {
    margin: -7rem !important; }
  .mt-xl-n6,
  .my-xl-n6 {
    margin-top: -7rem !important; }
  .me-xl-n6,
  .mx-xl-n6 {
    margin-right: -7rem !important; }
  .mb-xl-n6,
  .my-xl-n6 {
    margin-bottom: -7rem !important; }
  .ms-xl-n6,
  .mx-xl-n6 {
    margin-left: -7rem !important; }
  .m-xl-n7 {
    margin: -9rem !important; }
  .mt-xl-n7,
  .my-xl-n7 {
    margin-top: -9rem !important; }
  .me-xl-n7,
  .mx-xl-n7 {
    margin-right: -9rem !important; }
  .mb-xl-n7,
  .my-xl-n7 {
    margin-bottom: -9rem !important; }
  .ms-xl-n7,
  .mx-xl-n7 {
    margin-left: -9rem !important; }
  .p-xl-6 {
    padding: 5rem !important; }
  .px-xl-6 {
    padding-left: 5rem !important;
    padding-right: 5rem !important; }
  .py-xl-6 {
    padding-bottom: 5rem !important;
    padding-top: 5rem !important; }
  .pt-xl-6 {
    padding-top: 5rem !important; }
  .pb-xl-6 {
    padding-bottom: 5rem !important; }
  .pl-xl-6 {
    padding-left: 5rem !important; }
  .pr-xl-6 {
    padding-right: 5rem !important; } }

.overview-hidden {
  overflow: hidden; }

/* img holder */
.bg-holder {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  width: 100%; }

.dotted-overlay {
  position: relative;
  z-index: 1; }
  .dotted-overlay:after {
    content: '';
    display: block;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: transparent;
    background-image: radial-gradient(#626262 10%, transparent 10%);
    background-size: 5px 5px;
    z-index: 0; }

/* Background overlay */
.bg-overlay-black-10 {
  position: relative;
  z-index: 1; }
  .bg-overlay-black-10:before {
    background: rgba(2, 45, 98, 0.1);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-black-20 {
  position: relative;
  z-index: 1; }
  .bg-overlay-black-20:before {
    background: rgba(2, 45, 98, 0.2);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-black-30 {
  position: relative;
  z-index: 1; }
  .bg-overlay-black-30:before {
    background: rgba(2, 45, 98, 0.3);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-black-40 {
  position: relative;
  z-index: 1; }
  .bg-overlay-black-40:before {
    background: rgba(2, 45, 98, 0.4);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-black-50 {
  position: relative;
  z-index: 1; }
  .bg-overlay-black-50:before {
    background: rgba(22, 43, 47, 0.74);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-black-60 {
  position: relative;
  z-index: 1; }
  .bg-overlay-black-60:before {
    background: rgba(2, 45, 98, 0.6);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-black-70 {
  position: relative;
  z-index: 1; }
  .bg-overlay-black-70:before {
    background: rgba(2, 45, 98, 0.7);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-black-80 {
  position: relative;
  z-index: 1;
 }
  .bg-overlay-black-80:before {
    background: rgba(22, 43, 47, 0.74);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-black-90 {
  position: relative;
  z-index: 1; }
  .bg-overlay-black-90:before {
    background: rgba(22, 43, 47, 0.93);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-white-10 {
  position: relative;
  z-index: 1; }
  .bg-overlay-white-10:before {
    background: rgba(255, 255, 255, 0.1);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-white-20 {
  position: relative;
  z-index: 1; }
  .bg-overlay-white-20:before {
    background: rgba(255, 255, 255, 0.2);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-white-30 {
  position: relative;
  z-index: 1; }
  .bg-overlay-white-30:before {
    background: rgba(255, 255, 255, 0.3);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-white-40 {
  position: relative;
  z-index: 1; }
  .bg-overlay-white-40:before {
    background: rgba(255, 255, 255, 0.4);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-white-50 {
  position: relative;
  z-index: 1; }
  .bg-overlay-white-50:before {
    background: rgba(255, 255, 255, 0.5);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-white-60 {
  position: relative;
  z-index: 1; }
  .bg-overlay-white-60:before {
    background: rgba(255, 255, 255, 0.6);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-white-70 {
  position: relative;
  z-index: 1; }
  .bg-overlay-white-70:before {
    background: rgba(255, 255, 255, 0.7);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-white-80 {
  position: relative;
  z-index: 1; }
  .bg-overlay-white-80:before {
    background: rgba(255, 255, 255, 0.8);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-white-90 {
  position: relative;
  z-index: 1; }
  .bg-overlay-white-90:before {
    background: rgba(255, 255, 255, 0.9);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-theme-20 {
  position: relative;
  z-index: 1; }
  .bg-overlay-theme-20:before {
    background: rgba(239, 49, 57, 0.2);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-theme-50 {
  position: relative;
  z-index: 1; }
  .bg-overlay-theme-50:before {
    background: rgba(239, 49, 57, 0.5);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-theme-70 {
  position: relative;
  z-index: 1; }
  .bg-overlay-theme-70:before {
    background: rgba(239, 49, 57, 0.7);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-theme-90 {
  position: relative;
  z-index: 1; }
  .bg-overlay-theme-90:before {
    background: rgba(239, 49, 57, 0.9);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0; }

.bg-overlay-gradient-x-bottom {
  position: relative; }
  .bg-overlay-gradient-x-bottom:before {
    z-index: 0;
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0.6)));
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0.6) 100%);
    top: auto;
    height: 75%;
    -webkit-transition: all .35s;
    transition: all .35s; }

.bg-overlay-gradient-x-top {
  position: relative; }
  .bg-overlay-gradient-x-top:before {
    z-index: 0;
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    top: 0;
    content: "";
    background: -webkit-gradient(linear, left bottom, left top, color-stop(0, rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0.6)));
    background: linear-gradient(to top, rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0.6) 100%);
    bottom: auto;
    height: 70%;
    -webkit-transition: all .35s;
    transition: all .35s; }

.bg-overlay-gradient-x-light-bottom {
  position: relative; }
  .bg-overlay-gradient-x-light-bottom:before {
    z-index: 0;
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(255, 255, 255, 0)), to(white)), -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(255, 255, 255, 0)), to(white));
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, white 100%), linear-gradient(to bottom, rgba(255, 255, 255, 0) 0, white 100%);
    top: auto;
    height: 100%;
    -webkit-transition: all .35s;
    transition: all .35s; }

.bg-overlay-gradient-x-dark-bottom {
  position: relative; }
  .bg-overlay-gradient-x-dark-bottom:before {
    z-index: 0;
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(2, 45, 98, 0)), to(#022d62)), -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(2, 45, 98, 0)), to(#022d62));
    background: linear-gradient(to bottom, rgba(2, 45, 98, 0) 0, #022d62 100%), linear-gradient(to bottom, rgba(2, 45, 98, 0) 0, #022d62 100%);
    top: auto;
    height: 100%;
    -webkit-transition: all .35s;
    transition: all .35s; }

.bg-overlay-gradient-x-light-bottom {
  position: relative; }
  .bg-overlay-gradient-x-light-bottom:before {
    z-index: 0;
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(246, 246, 246, 0)), to(#f6f6f6)), -webkit-gradient(linear, left top, left bottom, color-stop(0, rgba(246, 246, 246, 0)), to(#f6f6f6));
    background: linear-gradient(to bottom, rgba(246, 246, 246, 0) 0, #f6f6f6 100%), linear-gradient(to bottom, rgba(246, 246, 246, 0) 0, #f6f6f6 100%);
    top: auto;
    height: 100%;
    -webkit-transition: all .35s;
    transition: all .35s; }

.bg-overlay-gradient-y-left {
  position: relative; }
  .bg-overlay-gradient-y-left:before {
    z-index: 0;
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
    bottom: 0;
    content: "";
    background: -webkit-gradient(linear, right top, left top, color-stop(0, rgba(2, 45, 98, 0)), to(#022d62)), -webkit-gradient(linear, right top, left top, color-stop(0, rgba(2, 45, 98, 0)), to(#022d62));
    background: linear-gradient(to left, rgba(2, 45, 98, 0) 0, #022d62 100%), linear-gradient(to left, rgba(2, 45, 98, 0) 0, #022d62 100%);
    top: auto;
    height: 100%;
    -webkit-transition: all .35s;
    transition: all .35s; }

/* border-radius-overlay */
.border-radius.bg-overlay-black-10:before,
.border-radius.bg-overlay-black-20:before,
.border-radius.bg-overlay-black-30:before,
.border-radius.bg-overlay-black-40:before,
.border-radius.bg-overlay-black-50:before,
.border-radius.bg-overlay-black-60:before,
.border-radius.bg-overlay-black-70:before,
.border-radius.bg-overlay-black-80:before,
.border-radius.bg-overlay-black-90:before,
.border-radius.bg-overlay-white-10:before,
.border-radius.bg-overlay-white-20:before,
.border-radius.bg-overlay-white-30:before,
.border-radius.bg-overlay-white-40:before,
.border-radius.bg-overlay-white-50:before,
.border-radius.bg-overlay-white-60:before,
.border-radius.bg-overlay-white-70:before,
.border-radius.bg-overlay-white-80:before,
.border-radius.bg-overlay-white-90:before,
.border-radius.bg-overlay-theme-10:before,
.border-radius.bg-overlay-theme-20:before,
.border-radius.bg-overlay-theme-30:before,
.border-radius.bg-overlay-theme-40:before,
.border-radius.bg-overlay-theme-50:before,
.border-radius.bg-overlay-theme-60:before,
.border-radius.bg-overlay-theme-70:before,
.border-radius.bg-overlay-theme-80:before,
.border-radius.bg-overlay-theme-90:before,
.border-radius.bg-overlay-gradient-x-bottom:before,
.border-radius.bg-overlay-gradient-x-top:before,
.border-radius.bg-overlay-gradient-x-light-bottom:before,
.border-radius.bg-overlay-gradient-y-left:before {
  border-radius: 5px; }
  
  
  
  /* my css */
 .w-24{
     width:25px!important;
 } 
 
  .w-25{
     width:75px!important;
 } 
 

 
 .w-27{
     width:200px!important;
 } 
 
 .s-1{
     
 }
.custom-margin-bottom{
     font-size: 18px;
     color:#000000;
    text-align:justify;
}

.btn-btn-primary-2{
    background: #ff0000;
    border-color: #ef3139;
    font-size: 14px;
    font-weight: bold;
    padding: 4px 27px;
    line-height: 1;
    border-radius: 50px;
    position: relative;
    z-index: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
}

.btn-btn-primary-4{
    background: #ff0000;
    border-color: #ef3139;
    font-size: 14px;
    font-weight: bold;
    padding: 14px 27px;
    line-height: 1;
    border-radius: 50px;
    position: relative;
    z-index: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
    margin-left: 7px;
    color:#ffffff;
        width: -webkit-fill-available;
}

.btn-btn-primary-5{
    background: #ff0000;
    border-color: #ef3139;
    font-size: 14px;
    font-weight: bold;
    padding: 14px 27px;
    line-height: 1;
    border-radius: 50px;
    position: relative;
    z-index: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
    margin-left: 7px;
    color:#ffffff;
      
}




@media(max-width:479px)
{
    .btn-btn-primary-2{
     margin-left:48px;
        }
}

@media(max-width:479px)
{
    .btn-btn-primary-4{
     margin-left:5px;
        }
}


@media(max-width:479px)
{
    .w-24{
            margin-left: -12px;
            width: 17px!important;
            }
    
}

@media(max-width:479px)
{
    .k-27{
            margin-left: 30px;
            width: 27px!important;
            }
    
}

@media(max-width:479px)
{
    .p-1{
            margin-left: 20px;
        
            }
    
}
.btn-btn-primary-3 {
    background: #ef3139;
    border-color: #ef3139;
    font-size: 14px;
    font-weight: bold;
    padding: 6px 57px;
    line-height: 1;
    border-radius: 50px;
    position: relative;
    z-index: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    text-decoration: none;
}

.btn-btn-primary-2:hover {
    background: #162b2f;
    border-color: #022d62;
}

.page-banner--tech-served__frameworks {
    margin: 3rem auto;
    position: relative;
    z-index: 1;
    border: solid 1px;
    border-top: snow;
    width: 80%;
}

.page-banner--tech-served__frameworks__title {
    font-size: 1.2rem;
    color: #fff;
    margin-bottom: 0;
    font-family: "Lato-Bold";
    display: table;
    white-space: nowrap;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    left: 83%;
    position: relative;
    top: 0px;
    width: 100%;
}

.page-banner--tech-served__frameworks__title:after {
    left: 0px;
    width: 27%;
}

.page-banner--tech-served__frameworks__title:before, .page-banner--tech-served__frameworks__title:after {
    border-top: 1px solid #fff;
    content: "";
    display: table-cell;
    position: absolute;
    top: 0;
    width: 25%;
}

#sy-whatshelp {
    right: 32px;
    bottom: 100px;
  position: fixed;
  z-index: 9999;
}

#sy-whatshelp a {
  position: relative;
}

#sy-whatshelp a.sywh-open-services {
  background-color: #129bf4;
  color: #fff;
  line-height: 55px;
  margin-top: 10px;
  border: none;
  cursor: pointer;
  font-size: 23px;
  width: 55px;
  height: 55px;
  text-align: center;
  box-shadow: 2px 2px 8px -3px #000;
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
  display: inline-block;
}

#sy-whatshelp a.sywh-open-services i {
  line-height: 55px;
}

#sy-whatshelp a.sywh-open-services i.fa-times {
  display: none;
}

#sy-whatshelp .sywh-services {
  width: 55px;
  height: auto;
}

#sy-whatshelp .sywh-services a {
  display: none;
}

#sy-whatshelp .sywh-services a i {
  background-color: #129bf4;
  color: #fff;
  line-height: 55px;
  margin-top: 10px;
  border: none;
  cursor: pointer;
  font-size: 23px;
  width: 55px;
  height: 55px;
  text-align: center;
  box-shadow: 2px 2px 8px -3px #000;
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
}

#sy-whatshelp .sywh-services a.mail i {
  background-color: #b92b27;
}

#sy-whatshelp .sywh-services a.instagram i {
  background-color: #e4405f;
}

#sy-whatshelp .sywh-services a.messenger i {
  background-color: #0084ff;
}

#sy-whatshelp .sywh-services a.whatsapp i {
  background-color: #25d366;
}

#sy-whatshelp .sywh-services a.viber i {
  background-color: #ef3139;
}

#sy-whatshelp .sywh-services a.call i {
  background-color: #ff6600;
}

a[data-tooltip] {
  position: relative;
}

a[data-tooltip]::before,
a[data-tooltip]::after {
  position: absolute;
  display: none;
  opacity: 0.85;
  transition: all 0.3s ease-in-out;
}

a[data-tooltip]::before {
  content: attr(data-tooltip);
  background: #000;
  color: #fff;
  font-size: 13px;
  padding: 7px 11px;
  border-radius: 5px;
  white-space: nowrap;
  text-decoration: none;
}

a[data-tooltip]::after {
  width: 0;
  height: 0;
  border: 6px solid transparent;
  content: "";
}

a[data-tooltip]:hover::before,
a[data-tooltip]:hover::after {
  display: block;
}

a.sywh-open-services[data-tooltip]::before,
a.sywh-open-services[data-tooltip]::after {
  display: block;
}

a.data-tooltip-hide[data-tooltip]::before,
a.data-tooltip-hide[data-tooltip]::after {
  display: none !important;
}

a.sywh-open-services[data-tooltip][data-placement="left"]::before {
  top: 11px;
}

a[data-tooltip][data-placement="left"]::before {
  top: -7px;
  right: 100%;
  line-height: normal;
  margin-right: 10px;
}

a[data-tooltip][data-placement="left"]::after {
  border-left-color: #000;
  border-right: none;
  top: 50%;
  right: 100%;
  margin-top: -6px;
  margin-right: 4px;
}

a[data-tooltip][data-placement="right"]::before {
  top: -7px;
  left: 100%;
  line-height: normal;
  margin-left: 10px;
}

a[data-tooltip][data-placement="right"]::after {
  border-right-color: #000;
  border-left: none;
  top: 50%;
  left: 100%;
  margin-top: -6px;
  margin-left: 4px;
}

a[data-tooltip][data-placement="top"]::before {
  bottom: 100%;
  left: 0;
  margin-bottom: 10px;
}

a[data-tooltip][data-placement="top"]::after {
  border-top-color: #000;
  border-bottom: none;
  bottom: 100%;
  left: 10px;
  margin-bottom: 4px;
}

a[data-tooltip][data-placement="bottom"]::before {
  top: 100%;
  left: 0;
  margin-top: 10px;
}

a[data-tooltip][data-placement="bottom"]::after {
  border-bottom-color: #000;
  border-top: none;
  top: 100%;
  left: 10px;
  margin-top: 4px;
}


/*.wrapper {*/
  /*height: 100vh;*/
  /*background: #333;*/
/*}*/

/*#main-div {*/
/*  position: fixed;*/
/*  right: 20px;*/
/*  bottom: 20px;*/
/*  z-index: 9999;*/
/*}*/

/*#main-button {*/
/*  display: flex;*/
/*  align-items: center;*/
/*  justify-content: center;*/
/*  position: absolute;*/
/*  right: 0;*/
/*  bottom: 0;*/
/*  height: 50px;*/
/*  width: 50px;*/
/*  font-size: 20px;*/
/*  color: #fff;*/
/*  cursor: pointer;*/
/*  background-color: #129bf4;*/
/*  box-shadow: 0 0 10px 0 rgba(0,0,0,.5);*/
/*  border-radius: 50%;*/
/*  -webkit-border-radius: 50%;*/
/*  -moz-border-radius: 50%;*/
/*  -ms-border-radius: 50%;*/
/*  -o-border-radius: 50%;*/
/*}*/

/*#main-button ~ button {*/
/*  visibility: hidden;*/
/*  font-weight: 600;*/
/*  height: 50px;*/
/*  padding: 0 20px;*/
/*  color: #fff;*/
/*  background: linear-gradient(90deg, #00a1f5, #0064f3);*/
/*  box-shadow: 0 0 10px 0 rgba(0,0,0,.5);*/
/*  border: 0;*/
/*  position: absolute;*/
/*  z-index: -1;*/
/*  right: 0;*/
/*  bottom: 0;*/
/*  opacity: 0;*/
/*  white-space: nowrap;*/
/*  cursor: pointer;*/
/*  transition: .2s all linear;*/
/*  -webkit-transition: .2s all linear;*/
/*  -moz-transition: .2s all linear;*/
/*  -ms-transition: .2s all linear;*/
/*  -o-transition: .2s all linear;*/
/*  border-radius: 5px;*/
/*  -webkit-border-radius: 5px;*/
/*  -moz-border-radius: 5px;*/
/*  -ms-border-radius: 5px;*/
/*  -o-border-radius: 5px;*/
/*}*/

/*#main-button.open ~ button {*/
/*  visibility: visible;*/
/*  right: 70px;*/
/*  opacity: 1;*/
/*  transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*  -webkit-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*  -moz-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*  -ms-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*  -o-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*}*/

/*#main-button ~ a {*/
/*  display: flex;*/
/*  align-items: center;*/
/*  justify-content: center;*/
/*  cursor: pointer;*/
/*  position: absolute;*/
/*  right: 0;*/
/*  bottom: 0;*/
/*  z-index: -1;*/
/*  height: 50px;*/
/*  width: 50px;*/
/*  font-size: 20px;*/
/*  opacity: 0;*/
/*  text-decoration: none;*/
/*  color: #fff;*/
/*  background-color: #fff;*/
/*  box-shadow: 0 0 10px 0 rgba(0,0,0,.5);*/
/*  border-radius: 50%;*/
/*  -webkit-border-radius: 50%;*/
/*  -moz-border-radius: 50%;*/
/*  -ms-border-radius: 50%;*/
/*  -o-border-radius: 50%;*/
/*  transition: .2s all linear;*/
/*  -webkit-transition: .2s all linear;*/
/*  -moz-transition: .2s all linear;*/
/*  -ms-transition: .2s all linear;*/
/*  -o-transition: .2s all linear;*/
/*}*/

/*#main-button ~ .telegram-color {*/
/*  background: linear-gradient(0deg, #017AB1, #01ABE6);*/
/*}*/

/*#main-button ~ .whatsapp-color {*/
/*  background: linear-gradient(0deg, #00B100, #09db09);*/
/*}*/

/*#main-button ~ .messenger-color {*/
/*  background: linear-gradient(0deg, #0078FF, #00C6FF);*/
/*}*/

/*#main-button.open ~ a {*/
/*  opacity: 1;*/
/*  transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*  -webkit-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*  -moz-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*  -ms-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*  -o-transition: .4s all cubic-bezier(0, 0.01, 0, 1.27);*/
/*}*/
/*#main-button.open ~ a:nth-of-type(1) {*/
/*  bottom: 60px;*/
/*}*/
/*#main-button.open ~ a:nth-of-type(2) {*/
/*  bottom: 120px;*/
/*}*/
/*#main-button.open ~ a:nth-of-type(3) {*/
/*  bottom: 180px;*/
/*}*/

/*.wave {*/
/*  animation-name: wave;*/
/*  animation-duration: 1s;*/
/*  animation-timing-function: linear;*/
/*  animation-iteration-count: infinite;*/
/*}*/

/*@keyframes wave {*/
/*  0% {box-shadow: 0 0 0px 0px rgba(255, 255, 255, 0.5);}*/
/*  100% {box-shadow: 0 0 0px 10px rgba(255, 255, 255, 0);}*/
/*}*/

/*.open {*/
/*  animation-iteration-count: 1;*/
/*}*/



/*a{*/
/*  text-decoration:none;*/
/*}*/
/*.floating_btn {*/
/*  position: fixed;*/
/*  bottom: 30px;*/
/*   right: 30px; */
/*  width: 100px;*/
/*  height: 100px;*/
/*  display: flex;*/
/*  flex-direction: column;*/
/*  align-items:center;*/
/*  justify-content:center;*/
/*  z-index: 1000;*/
/*}*/

/*@keyframes pulsing {*/
/*  to {*/
/*    box-shadow: 0 0 0 30px rgba(232, 76, 61, 0);*/
/*  }*/
/*}*/

/*.contact_icon {*/
/*  background-color: #42db87;*/
/*  color: #fff;*/
/*  width: 60px;*/
/*  height: 60px;*/
/*  font-size:30px;*/
/*  border-radius: 50px;*/
/*  text-align: center;*/
/*  box-shadow: 2px 2px 3px #999;*/
/*  display: flex;*/
/*  align-items: center;*/
/*  justify-content: center;*/
/*  transform: translatey(0px);*/
/*  animation: pulse 1.5s infinite;*/
/*  box-shadow: 0 0 0 0 #42db87;*/
/*  -webkit-animation: pulsing 1.5s infinite cubic-bezier(0.66, 0, 0, 1);*/
/*  -moz-animation: pulsing 1.5s infinite cubic-bezier(0.66, 0, 0, 1);*/
/*  -ms-animation: pulsing1.5s infinite cubic-bezier(0.66, 0, 0, 1);*/
/*  animation: pulsing 1.5s infinite cubic-bezier(0.66, 0, 0, 1);*/
/*  font-weight: normal;*/
/*  font-family: sans-serif;*/
/*  text-decoration: none !important;*/
/*  transition: all 300ms ease-in-out;*/
/*}*/


/*.text_icon {*/
/*  margin-top: 8px;*/
/*  color: #707070;*/
/*  font-size: 13px;*/
/*}*/



/*.float{*/
/*	position:fixed;*/
/*	width:60px;*/
/*	height:60px;*/
/*	bottom:40px;*/
/*	left:40px;*/
/*	background-color:#25d366;*/
/*	color:#FFF;*/
/*	border-radius:50px;*/
/*	text-align:center;*/
/*  font-size:30px;*/
/*	box-shadow: 2px 2px 3px #999;*/
/*  z-index:100;*/
/*}*/

/*.my-float{*/
/*	margin-top:16px;*/
/*}*/

/* 404 scg css */
.digit1, .digit2 {
  fill-rule: evenodd; }

.digit3 {
  font-size: 230px;
  font-weight: 600; }

/* avatar */
.avatar {
  width: 50px;
  height: 50px;
  display: inline-block; }

.avatar.avatar-sm {
  width: 20px;
  height: 20px; }

.avatar.avatar-md {
  width: 80px;
  height: 80px; }

.avatar.avatar-lg {
  width: 145px;
  height: 145px; }

/* font size */
.font-sm {
  font-size: 13px; }

.font-md {
  font-size: 15px; }

.font-lg {
  font-size: 17px; }

.font-xl {
  font-size: 21px; }

.font-xll {
  font-size: 30px; }

.font-xlll {
  font-size: 40px;
  line-height: 40px; }

/* border-radius */
.b-radius-none {
  border-radius: 0 !important; }

.b-radius-left-none {
  border-radius: 0 3px 3px 0; }

.b-radius-right-none {
  border-radius: 3px 0 0 3px; }

.b-radius-100 {
  border-radius: 100%; }

/* z index */
.z-index-1 {
  z-index: 1; }

.z-index-9 {
  z-index: 9; }

.z-index-99 {
  z-index: 99; }

.z-index-999 {
  z-index: 999; }

.w-space {
  white-space: nowrap; }

.grayscale, .img-grayscale {
  -webkit-filter: grayscale(100%);
          filter: grayscale(100%);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out; }

.grayscale:hover {
  -webkit-filter: inherit;
          filter: inherit; }

/*************************
       Responsive
*************************/
@media (max-width: 767px) {
  .h-sm-600 {
    height: 600px; }
  .h-sm-500 {
    height: 500px; }
  .h-sm-400 {
    height: 400px; }
  .h-sm-300 {
    height: 300px; }
  .p-6 {
    padding: 3rem !important; }
  .pt-6 {
    padding-top: 3rem !important; }
  .pb-6 {
    padding-bottom: 3rem !important; }
  .pl-6 {
    padding-left: 3rem !important; }
  .pr-6 {
    padding-right: 3rem !important; }
  /* comming soon */
  .coming-soon {
    height: 100% !important;
    padding-bottom: 50px !important;
    padding-top: 100px !important; } }

@media (min-width: 1200px) {
  .display-1 {
    font-size: 5.5rem; } }

/*****************************
  Shortcodes
*****************************/
/*****************************
  Accordion
*****************************/
.accordion .card {
  border: none; }
  .accordion .card:last-child .card-header {
    margin-bottom: 0; }

.accordion .card-body {
  padding: 35px 45px 45px 62px; }

.accordion .card-header {
  background: none;
  border-bottom: none;
  padding: 0; }

.accordion > .card .card-header {
  margin-bottom: 10px; }

.accordion .accordion-icon.card-header button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background: #ef3139;
  font-size: 18px;
  color: #ffffff;
  padding: 32px 30px 32px 62px;
  width: 100%;
  text-align: left;
  border: none;
  font-weight: normal;
  position: relative;
  border-radius: 5px;
  font-weight: 500; }

.accordion .accordion-icon.card-header .btn:after {
  content: "\f062";
  margin-left: auto;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  font-family: "Font Awesome 5 Free";
  font-weight: bold; }

.accordion .accordion-icon.card-header button.collapsed {
  background: #162b2f; }
  .accordion .accordion-icon.card-header button.collapsed:after {
    -webkit-transform: rotate(180deg);
            transform: rotate(180deg); }

/*****************************
  Feature Info
*****************************/
.feature-info .feature-info-icon {
  color: #ff0000;
  font-size: 60px;
  line-height: 1;
  margin-bottom: 15px; }

/* Style 01 */
.feature-info-style-01 {
  background: #ffffff;
  padding: 45px;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: 2px 2px 4px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 2px 2px 4px 0px rgba(2, 45, 98, 0.1);
  border-radius: 5px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out; }
  .feature-info-style-01:hover {
    background: #022d62; }
    .feature-info-style-01:hover .feature-info-icon {
      top: -90px; }
    .feature-info-style-01:hover .feature-info-content {
      margin-top: 0;
      margin-bottom: 80px; }
      .feature-info-style-01:hover .feature-info-content .feature-info-title {
        color: #ffffff; }
      .feature-info-style-01:hover .feature-info-content p {
        color: #ffffff; }
      .feature-info-style-01:hover .feature-info-content .icon-btn {
        bottom: 45px; }
  .feature-info-style-01 .feature-info-icon {
    margin-bottom: 25px;
    position: absolute;
    top: 45px; }
  .feature-info-style-01 .feature-info-content {
    margin-top: 80px; }
    .feature-info-style-01 .feature-info-content .icon-btn {
      position: absolute;
      bottom: -90px; }

.feature-info,
.feature-info .feature-info-icon,
.feature-info .feature-info-content,
.feature-info .feature-info-content .feature-info-title,
.feature-info .feature-info-content p,
.feature-info-style-05 .feature-info-icon i,
.feature-info-style-05 .feature-info-icon i:after,
.feature-info-style-06 .feature-info-number,
.feature-info-style-06 .feature-info-number span,
.feature-info-style-08 .feature-info-item .feature-info-number span,
.feature-info-style-08 .feature-info-item .feature-info-number span:after {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out; }

/* Style 02 */
.feature-info-style-02 {
  background: #ffffff;
  padding: 35px;
  overflow: hidden;
  position: relative;
  -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
  border-radius: 5px;
  cursor: pointer; }
  .feature-info-style-02 .feature-info-icon {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    margin-bottom: 15px;
    position: inherit;
    top: 0; }
  .feature-info-style-02 .feature-info-bg-img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-size: cover;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-transform: scale(1);
            transform: scale(1); }
    .feature-info-style-02 .feature-info-bg-img:before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      background: rgba(2, 45, 98, 0.5);
      z-index: 9;
      width: 100%;
      height: 100%; }
  .feature-info-style-02:hover .feature-info-bg-img {
    opacity: 1;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-transform: scale(1.1);
            transform: scale(1.1); }
  .feature-info-style-02:hover .feature-info-content .icon-btn {
    opacity: 1; }
  .feature-info-style-02 .feature-info-content .icon-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    opacity: 0;
    z-index: 10;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); }

/* Style 03 */
.feature-info-style-03 {
  padding: 45px;
  background: #f6f6f6;
  border-radius: 5px; }

/* Style 04 */
.feature-info-style-04 {
  padding: 45px;
  background: #f6f6f6;
  position: relative;
  overflow: hidden;
  border-radius: 5px; }
  .feature-info-style-04:hover {
    background: #022d62; }
    .feature-info-style-04:hover .feature-info-content .feature-info-title {
      position: absolute;
      top: -55px; }
    .feature-info-style-04:hover .feature-info-content p {
      color: #ffffff;
      margin-top: 0px;
      margin-bottom: 50px; }
    .feature-info-style-04:hover .feature-info-content .btn {
      bottom: 35px; }
  .feature-info-style-04 .feature-info-content .feature-info-title {
    position: absolute;
    top: 45px; }
  .feature-info-style-04 .feature-info-content p {
    margin-top: 50px;
    margin-bottom: 0; }
  .feature-info-style-04 .feature-info-content .btn {
    position: absolute;
    bottom: -55px; }

/* Style 05 */
.feature-info-style-05 .feature-info-icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-bottom: 45px; }
  .feature-info-style-05 .feature-info-icon i {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    background: #f6f6f6;
    color: #162b2f;
    width: 144px;
    height: 144px;
    position: relative;
    border-radius: 50%; }
    .feature-info-style-05 .feature-info-icon i:after {
      top: 100%;
      left: 50%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
      border-color: rgba(0, 0, 0, 0);
      border-top-color: #f6f6f6;
      border-width: 9px;
      margin-left: -9px;
      margin-top: -1px; }

.feature-info-style-05:before {
  content: "";
  border-top: 2px dotted #022d62;
  width: 52px;
  display: inline-block;
  position: absolute;
  right: -26px;
  top: 70px; }

.feature-info-style-05:hover .feature-info-icon i {
  background: #FF0000;
  color: #ffffff; }
  .feature-info-style-05:hover .feature-info-icon i:after {
    border-top-color: #FF0000; }

.row [class*=col]:last-child .feature-info-style-05:before {
  content: none; }

/* Style 06 */
.feature-info-style-06 .feature-info-img {
  margin-bottom: 30px; }
  .feature-info-style-06 .feature-info-img img {
    border-radius: 5px; }

.feature-info-style-06 .feature-info-number {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 30px;
  padding-bottom: 30px;
  border-bottom: 2px solid #eeeeee;
  position: relative; }
  .feature-info-style-06 .feature-info-number:after {
    content: "";
    height: 2px;
    background: #f6f6f6;
    width: 0%;
    position: absolute;
    bottom: -2px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out; }
  .feature-info-style-06 .feature-info-number span {
    color: #022d62;
    font-size: 48px;
    line-height: 1;
    font-weight: bold;
    opacity: 0.1;
    position: relative; }
  .feature-info-style-06 .feature-info-number .feature-info-title {
    -ms-flex-item-align: center;
        align-self: center; }

.feature-info-style-06:hover .feature-info-number:after {
  width: 100%;
  background: #022d62; }

.feature-info-style-06:hover .feature-info-number span {
  color: #ef3139;
  opacity: 0.5; }

.feature-info-style-06 .feature-info-content p {
  -ms-flex-item-align: center;
      align-self: center; }

.dark-background .feature-info-style-06:hover .feature-info-number span {
  color: #ef3139;
  opacity: 0.5; }

/* Dark Background */
.dark-background .feature-info-style-06 .feature-info-number {
  border-bottom-color: rgba(255, 255, 255, 0.1); }
  .dark-background .feature-info-style-06 .feature-info-number span {
    color: #ffffff;
    opacity: 0.1; }
  .dark-background .feature-info-style-06 .feature-info-number .feature-info-title {
    color: #ffffff; }

.dark-background .feature-info-style-06:hover .feature-info-number {
  border-bottom-color: #ffffff; }
  .dark-background .feature-info-style-06:hover .feature-info-number:after {
    background: #ffffff; }

.dark-background .feature-info-style-06 .feature-info-content p {
  color: #ffffff; }

/* Style 07 */
.feature-info-style-07 {
  position: relative; }
  .feature-info-style-07 .feature-info-img img {
    border-radius: 5px; }
  .feature-info-style-07 .feature-info-content {
    padding: 30px 0 10px;
    background: #ffffff;
    position: relative; }
    .feature-info-style-07 .feature-info-content .feature-info-title {
      margin-bottom: 25px; }
    .feature-info-style-07 .feature-info-content .icon-btn {
      position: absolute;
      bottom: -40px;
      left: 0;
      opacity: 0; }
  .feature-info-style-07:hover .feature-info-content {
    margin-top: -40px;
    padding-bottom: 50px; }
    .feature-info-style-07:hover .feature-info-content .icon-btn {
      bottom: 0px;
      opacity: 1; }

/* Style 08 */
.feature-info-style-08 .feature-info-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-bottom: 90px;
  position: relative; }
  .feature-info-style-08 .feature-info-item:before {
    position: absolute;
    top: 0;
    content: "";
    left: 38px;
    height: 100%;
    width: 2px;
    background: #f6f6f6; }
  .feature-info-style-08 .feature-info-item:last-child {
    padding-bottom: 0; }
    .feature-info-style-08 .feature-info-item:last-child:before {
      position: relative;
      content: none; }
  .feature-info-style-08 .feature-info-item:hover .feature-info-number span {
    background: #ef3139;
    color: #ffffff; }
    .feature-info-style-08 .feature-info-item:hover .feature-info-number span:after {
      border-left-color: #ef3139; }

.feature-info-style-08 .feature-info-inner {
  position: relative; }

.feature-info-style-08 .feature-info-number span {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: #ef3139;
  color: #022d62;
  font-size: 24px;
  width: 74px;
  height: 74px;
  margin-right: 25px;
  font-weight: bold;
  border-radius: 50%;
  position: relative;
  background: #f6f6f6; }
  .feature-info-style-08 .feature-info-number span:after {
    left: 100%;
    top: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(246, 246, 246, 0);
    border-left-color: #f6f6f6;
    border-width: 6px;
    margin-top: -6px;
    margin-left: -1px; }

.feature-info-style-08 .feature-info-content {
  margin-top: 28px; }

.dark-background .feature-info-style-08 .feature-info-inner:before {
  border-left-color: rgba(246, 246, 246, 0.1); }

.dark-background .feature-info-style-08 .feature-info-content .feature-info-title {
  color: #ffffff; }

.dark-background .feature-info-style-08 .feature-info-content p {
  color: #ffffff;
  opacity: 0.5; }

@media (max-width: 1199px) {
  .feature-info-style-04 {
    padding: 45px 25px; } }

@media (max-width: 991px) {
  .feature-info-style-03 {
    padding: 20px; }
  .feature-info-style-04 {
    padding: 45px 15px; }
  .feature-info-style-05 .feature-info-icon {
    margin-bottom: 35px; }
  .feature-info-style-08 .feature-info-item {
    margin-bottom: 0px;
    padding-bottom: 40px; } }

@media (max-width: 767px) {
  .feature-info-style-02 {
    padding: 20px; }
  .feature-info-style-05:before {
    content: none; }
  .feature-info-style-05 .feature-info-icon {
    margin-bottom: 25px; }
  .feature-info-style-05 .feature-info-content .feature-info-title {
    margin-bottom: 5px; }
  .feature-info-style-06 .feature-info-img {
    margin-bottom: 20px; }
  .feature-info-style-06 .feature-info-number {
    padding-bottom: 20px; }
  .feature-info-style-07 .feature-info-content .feature-info-title {
    margin-bottom: 15px; }
  .feature-info-style-08 .feature-info-number span {
    font-size: 16px;
    width: 54px;
    height: 54px;
    margin-right: 15px; }
  .feature-info-style-08 .feature-info-inner:before {
    left: 28px; }
  .feature-info-style-08 .feature-info-item {
    padding-bottom: 30px; }
    .feature-info-style-08 .feature-info-item:before {
      left: 28px; }
  .feature-info-style-08 .feature-info-content {
    margin-top: 18px; } }

/*****************************
	Team
*****************************/
.team {
  text-align: center;
  position: relative; }
  .team .team-img img {
    border-radius: 5px; }
  .team:hover .team-img {
    z-index: 9;
    position: relative; }
  .team:hover .team-info {
    z-index: 9;
    position: relative; }
    .team:hover .team-info ul {
      opacity: 1;
      bottom: -35px; }
  .team:hover .team-bg {
    opacity: 1;
    z-index: 5; }
  .team .team-info {
    padding: 20px 0px 0px; }
    .team .team-info .team-name {
      color: #022d62;
      font-size: 13px;
      font-weight: 600; }
      .team .team-info .team-name:hover {
        color: #ef3139; }
    .team .team-info p {
      font-size: 11px;
      margin-bottom: 20px; }
    .team .team-info ul {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      margin-bottom: 0;
      position: absolute;
      bottom: -25px;
      left: 0;
      right: 0;
      opacity: 0;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out; }
      .team .team-info ul li {
        margin: 0 12px; }
        .team .team-info ul li a {
          color: #022d62; }
          .team .team-info ul li a:hover {
            color: #ef3139; }
  .team .team-bg {
    background: #ffffff;
    position: absolute;
    left: -10%;
    top: -10%;
    width: 120%;
    height: 134%;
    z-index: 4;
    opacity: 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    border-radius: 5px;
    -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
            box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1); }

.apply-position .team-icon {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background: #022d62;
  padding: 0;
  border-radius: 3px;
  font-size: 110px;
  min-height: 173px;
  color: rgba(255, 255, 255, 0.1); }

.apply-position .btn {
  padding: 0;
  font-size: 13px; }
  .apply-position .btn:after {
    margin-left: 10px; }

@media (max-width: 575px) {
  .team .team-img img {
    width: 100%; } }

/*****************************
    Testimonial
*****************************/
.testimonial .owl-item {
  padding: 0 2%; }

.testimonial .testimonial-item .testimonial-avatar {
  margin-bottom: 40px;
  background: #ffffff;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 0px auto 40px; }

.testimonial .testimonial-item .testimonial-content {
  margin-bottom: 30px; }
  .testimonial .testimonial-item .testimonial-content p {
    font-size: 26px;
    color: #022d62;
    line-height: 1.4; }

.testimonial .testimonial-item .testimonial-author .testimonial-name h6 {
  font-weight: 700; }

.row-background .testimonial-item .testimonial-content p {
  color: #ffffff; }

.row-background .testimonial-item .testimonial-author {
  color: #ffffff; }
  .row-background .testimonial-item .testimonial-author .testimonial-name h6 {
    color: #ef3139; }

/* style 02 */
.testimonial-style-02 {
  -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
  border-radius: 5px;
  /* testimonial-item-sm */ }
  .testimonial-style-02 .testimonial-item {
    padding: 0 15%;
    margin-top: -70px;
    position: relative;
    z-index: 9; }
    .testimonial-style-02 .testimonial-item .testimonial-content p {
      font-size: 18px;
      color: #000000;
      font-style: italic; }
    .testimonial-style-02 .testimonial-item .testimonial-author {
      margin-bottom: 20px; }
    .testimonial-style-02 .testimonial-item .testimonial-avatar {
      width: 120px;
      height: 120px;
      margin: 0 auto; }
  .testimonial-style-02 .item .svg-item svg {
    position: absolute;
    bottom: 0px;
    left: 0;
    width: 100%;
    height: auto; }
  .testimonial-style-02 .testimonial-item-sm {
    padding: 0 15%;
    margin-top: -50px;
    position: relative;
    z-index: 9; }
    .testimonial-style-02 .testimonial-item-sm .testimonial-content p {
      font-size: 18px;
      color: #000000;
      font-style: italic; }
    .testimonial-style-02 .testimonial-item-sm .testimonial-avatar-sm {
      width: 90px;
      height: 90px;
      margin: 0 auto; }

.testimonial-style-02.owl-carousel .owl-nav {
  width: auto;
  display: inline-block;
  position: relative;
  bottom: -20px;
  -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
  padding: 8px 10px;
  border-radius: 5px;
  background: #ffffff; }
  .testimonial-style-02.owl-carousel .owl-nav .owl-next {
    position: relative;
    top: 0;
    -webkit-transform: inherit;
            transform: inherit;
    right: 0; }
  .testimonial-style-02.owl-carousel .owl-nav .owl-prev {
    position: relative;
    top: 0;
    -webkit-transform: inherit;
            transform: inherit;
    left: 0; }
  .testimonial-style-02.owl-carousel .owl-nav i {
    font-size: 14px;
    padding: 0 10px; }

.testimonial-style-02.owl-carousel .testimonial-img {
  position: relative; }

.video-image {
  position: relative; }
  .video-image img {
    border-top-right-radius: 5px;
    border-top-left-radius: 5px; }

.popup-icon {
  display: block; }
  .popup-icon i {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
    font-size: 32px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    width: 70px;
    height: 70px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding-left: 5px;
    border: 7px solid #ffffff;
    border-radius: 50%;
    color: #ffffff; }

/*****************************
    testimonial-style-03
*****************************/
.testimonial-style-03 {
  position: relative; }
  .testimonial-style-03 .testimonial-content .quotes {
    position: absolute;
    font-size: 40px;
    z-index: 0;
    color: #ffffff;
    right: 20px;
    bottom: 20px; }
  .testimonial-style-03 .testimonial-content .testimonial-des {
    font-size: 18px;
    margin-top: 10px; }

@media (max-width: 991.98px) {
  .testimonial-item .testimonial-content p {
    font-size: 20px; } }

@media (max-width: 767.98px) {
  .testimonial-item .testimonial-avatar {
    margin-bottom: 20px; }
  .testimonial-item .testimonial-content {
    margin-bottom: 20px; }
  .testimonial-item .testimonial-content p {
    font-size: 16px; }
  .testimonial-style-02 .testimonial-item {
    padding: 0 5%; }
  .testimonial-style-02 .item .svg-item {
    display: none; }
  .popup-icon i {
    width: 50px;
    height: 50px;
    font-size: 20px; } }

@media (max-width: 575.98px) {
  .testimonial-style-02 .testimonial-item {
    margin-top: 20px; }
  .testimonial-style-02 .testimonial-item .testimonial-avatar {
    width: 80px;
    height: 80px; } }

/*****************************
  Shortcodes
*****************************/
/*****************************
  Accordion
*****************************/
.accordion .card {
  border: none; }
  .accordion .card:last-child .card-header {
    margin-bottom: 0; }

.accordion .card-body {
  padding: 35px 45px 45px 62px; }

.accordion .card-header {
  background: none;
  border-bottom: none;
  padding: 0; }

.accordion > .card .card-header {
  margin-bottom: 10px; }

.accordion .accordion-icon.card-header button {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background: #ff0000;
  font-size: 18px;
  color: #ffffff;
  padding: 32px 30px 32px 62px;
  width: 100%;
  text-align: left;
  border: none;
  font-weight: normal;
  position: relative;
  border-radius: 5px;
  font-weight: 500; }

.accordion .accordion-icon.card-header .btn:after {
  content: "\f062";
  margin-left: auto;
  -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
  font-family: "Font Awesome 5 Free";
  font-weight: bold; }

.accordion .accordion-icon.card-header button.collapsed {
  background: #162b2f; }
  .accordion .accordion-icon.card-header button.collapsed:after {
    -webkit-transform: rotate(180deg);
            transform: rotate(180deg); }

/*****************************
  Newsletter
*****************************/
.newsletter {
  position: relative; }
  .newsletter .form-control {
    padding-right: 150px; }
  .newsletter .btn {
    position: absolute;
    right: 0;
    line-height: 20px;
    top: 0;
    padding: 14px 30px; }

/*****************************
  Counter
*****************************/
.counter {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 20px 0px; }
  .counter .counter-icon i {
    color: #ef3139;
    margin-right: 25px;
    font-size: 70px;
    line-height: 70px; }
  .counter .counter-content {
    -ms-flex-item-align: center;
        align-self: center; }
    .counter .counter-content .timer {
      position: relative;
      font-size: 36px;
      line-height: 36px;
      font-weight: 700;
      font-family: "Archivo", sans-serif;
      color: #ffffff;
      margin-bottom: 10px;
      display: block; }
    .counter .counter-content label {
      display: block;
      color: #ffffff;
      margin-bottom: 0; }

/* Counter 02 */
.counter.counter-02 .counter-content .timer {
  color: #162b2f; }

.counter.counter-02 .counter-content label {
  color: #626262; }

.counter.counter-02 .counter-icon i {
  color: #dfdfdf; }

/* Counter 03 */
.counter.counter-03 {
  background: #ff0000;
  padding: 32px;
  text-align: center;
  display: block;
  border-radius: 5px; }

/*****************************
	Tabs
*****************************/
.nav-pills .nav-link {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  color: #162b2f;
  font-size: 22px;
  line-height: 1;
  padding: 20px 0px;
  font-weight: 600;
  border-radius: 0;
  position: relative; }
  .nav-pills .nav-link:hover {
    color: #ef3139;
    background: transparent; }
    .nav-pills .nav-link:hover:after {
      opacity: 1;
      -webkit-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      right: 0; }
    .nav-pills .nav-link:hover .data-hover {
      -webkit-transform: translate3d(0px, 0px, -30px) rotateX(90deg);
              transform: translate3d(0px, 0px, -30px) rotateX(90deg); }
  .nav-pills .nav-link:after {
    content: '\f061';
    font-family: "Font Awesome 5 Free";
    font-weight: bold;
    opacity: 0;
    position: absolute;
    right: 20px;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); }
  .nav-pills .nav-link .data-hover {
    display: block;
    position: relative;
    -webkit-transition: .5s ease-in-out all;
    transition: .5s ease-in-out all;
    -webkit-transform-origin: 50% 0;
            transform-origin: 50% 0;
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
    width: 100%;
    font-weight: 500; }
    .nav-pills .nav-link .data-hover span {
      margin-right: 20px; }
    .nav-pills .nav-link .data-hover:before {
      display: block;
      content: attr(data-title);
      position: absolute;
      left: 0;
      top: 0;
      -webkit-transition: .5s ease-in-out all;
      transition: .5s ease-in-out all;
      -webkit-transform-origin: 50% 0;
              transform-origin: 50% 0;
      -webkit-transform: translate3d(0px, 105%, 0px) rotateX(-90deg);
              transform: translate3d(0px, 105%, 0px) rotateX(-90deg);
      font-weight: bold;
      width: 100%; }

.nav-pills .nav-link.active {
  color: #ef3139;
  background: transparent; }
  .nav-pills .nav-link.active:after {
    opacity: 1;
    -webkit-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    right: 0; }
  .nav-pills .nav-link.active .data-hover {
    -webkit-transform: translate3d(0px, 0px, -30px) rotateX(90deg);
            transform: translate3d(0px, 0px, -30px) rotateX(90deg); }

.nav-pills .show > .nav- {
  color: #ef3139;
  background: transparent; }

.nav-pills .show > .nav-link {
  color: #ef3139;
  background: transparent; }

.nav-tabs.nav-tabs-02 {
  border: none; }
  .nav-tabs.nav-tabs-02 .nav-link {
    border: none;
    color: #022d62;
    font-weight: 700;
    background: #f6f6f6;
    border-radius: 50px;
    margin-right: 10px;
    padding: 12px 28px;
    margin-bottom: 10px; }
  .nav-tabs.nav-tabs-02 .nav-link.active {
    color: #ffffff;
    background: #ef3139; }
  .nav-tabs.nav-tabs-02 .nav-link:hover {
    color: #ffffff;
    background: #ef3139; }

@media (max-width: 1199px) {
  .nav-pills .nav-link {
    font-size: 18px; } }

@media (max-width: 991px) {
  .nav-pills .nav-link {
    font-size: 14px; } }

@media (max-width: 767px) {
  .accordion .accordion-icon.card-header button {
    padding: 22px 20px 22px 52px; }
  .accordion .card-body {
    padding: 25px 25px 35px 52px; }
  .nav-pills.flex-column {
    -webkit-box-orient: inherit !important;
    -webkit-box-direction: inherit !important;
        -ms-flex-direction: inherit !important;
            flex-direction: inherit !important; }
  .nav-pills .nav-link {
    padding: 0 25px 25px 0;
    font-size: 16px; }
  .nav-pills .nav-link.active:after {
    content: none; } }

@media (max-width: 575px) {
  .accordion .accordion-icon.card-header button {
    font-size: 16px;
    padding: 20px;
    line-height: 22px; }
  .accordion .card-body {
    padding: 20px; } }

/*****************************
	Owl Carousel
*****************************/
.owl-carousel .owl-item img {
  width: auto;
  display: inherit; }

.owl-carousel .owl-nav {
  cursor: pointer;
  z-index: 999;
  width: 100%; }
  .owl-carousel .owl-nav .owl-prev {
    display: block;
    position: absolute;
    text-indent: inherit;
    width: auto;
    cursor: pointer;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    left: 0px;
    display: block;
    position: absolute;
    text-indent: inherit;
    top: 55%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    margin: 0 !important;
    display: inline-block;
    margin: 14px 2px 0; }
  .owl-carousel .owl-nav .owl-next {
    display: block;
    position: absolute;
    text-indent: inherit;
    width: auto;
    cursor: pointer;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    right: 0px;
    display: block;
    position: absolute;
    text-indent: inherit;
    top: 55%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    margin: 0 !important;
    display: inline-block;
    margin: 14px 2px 0; }
  .owl-carousel .owl-nav i {
    font-size: 24px;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    color: #022d62;
    opacity: 0.4; }
    .owl-carousel .owl-nav i:hover {
      color: #022d62;
      opacity: 1; }

.row-background .owl-carousel .owl-nav i {
  color: #ffffff;
  opacity: 0.4; }
  .row-background .owl-carousel .owl-nav i:hover {
    color: #ffffff;
    opacity: 1; }

.owl-carousel .owl-dots {
  text-align: center;
  margin-top: 20px; }

.owl-carousel button.owl-dot {
  width: 9px;
  height: 9px;
  background: #022d62 !important;
  border-radius: 50%;
  margin-right: 10px;
  opacity: 0.5; }

.owl-carousel button.owl-dot.active {
  background: #ef3139 !important;
  opacity: 1; }

@media (max-width: 991px) {
  .owl-carousel .owl-nav .owl-next {
    right: 0; }
  .owl-carousel .owl-nav .owl-prev {
    left: 0; } }

/*****************************
  Pricing Table
*****************************/
.pricing-tab {
  text-align: center; }
  .pricing-tab span {
    vertical-align: middle; }
  .pricing-tab .monthly-tab {
    font-weight: 700;
    font-size: 18px;
    color: #022d62; }
  .pricing-tab .yearly-tab {
    font-weight: 700;
    font-size: 18px;
    color: #022d62; }
  .pricing-tab .pricing-tab-switcher {
    height: 32px;
    width: 60px;
    background: #ffffff;
    display: inline-block;
    border-radius: 30px;
    position: relative;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    margin: 0 10px;
    border: 2px solid #ef3139; }
    .pricing-tab .pricing-tab-switcher:before {
      content: '';
      position: absolute;
      left: 4px;
      top: 4px;
      background: #ef3139;
      width: 20px;
      height: 20px;
      border-radius: 100%;
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease; }
  .pricing-tab .pricing-tab-switcher.active:before {
    left: calc(100% - 24px); }

.pricing {
  padding: 30px 20px;
  text-align: center;
  -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
  border-radius: 5px; }
  .pricing .pricing-title {
    margin-bottom: 20px; }
  .pricing .pricing-price {
    display: inline-block;
    position: relative;
    color: #626262;
    font-weight: 600;
    margin-top: 30px; }
    .pricing .pricing-price sup {
      position: absolute;
      top: 15px;
      left: -20px;
      font-size: 24px;
      color: #022d62; }
    .pricing .pricing-price strong {
      color: #022d62;
      font-size: 70px;
      line-height: 70px;
      padding-right: 10px;
      font-weight: 500; }
  .pricing .yearly-price {
    display: none; }
  .pricing .change-pricing-price .yearly-price {
    display: block; }
  .pricing .change-pricing-price .monthly-price {
    display: none; }
  .pricing .pricing-list {
    margin-top: 30px;
    margin-bottom: 30px; }
    .pricing .pricing-list li {
      padding: 6px 0;
      color: #626262;
      font-weight: 600; }
      .pricing .pricing-list li:last-child {
        padding-bottom: 0; }

.pricing.active {
  background: #022d62;
  color: #ffffff; }
  .pricing.active .pricing-list li {
    color: #ffffff; }
  .pricing.active .pricing-title {
    color: #ffffff; }
  .pricing.active .pricing-price {
    color: #ffffff; }
  .pricing.active sup {
    color: #ffffff; }
  .pricing.active strong {
    color: #ef3139; }
  .pricing.active .btn-round {
    color: #ffffff; }
    .pricing.active .btn-round:hover {
      color: #ffffff; }
  .pricing.active .btn-light-round:before {
    background-color: #ef3139;
    opacity: 1; }

.switch {
  display: inline-block;
  width: 60px;
  height: 30px;
  margin: 0px 15px;
  position: relative; }
  .switch .switch-btn {
    margin-bottom: 30px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center; }
    .switch .switch-btn span {
      font-size: 18px;
      color: #022d62;
      font-weight: 600; }
  .switch input {
    display: none; }

/*****************************
  Countdown
*****************************/
.countdown-wrapper {
  border-radius: 5px;
  overflow: hidden; }

.countdown {
  padding: 20px;
  width: 140px;
  position: relative; }
  .countdown span {
    font-size: 54px;
    line-height: 60px;
    font-weight: 600;
    color: #ffffff; }
  .countdown p {
    font-size: 18px;
    text-transform: capitalize;
    margin-bottom: 0;
    color: #022d62; }

.countdown.countdown-last {
  position: absolute;
  bottom: 0;
  left: 140px; }

.countdown-small span {
  font-size: 24px;
  line-height: 24px; }

.countdown-small p {
  font-size: 14px; }

@media (max-width: 767px) {
  .countdown span {
    font-size: 34px;
    line-height: 40px; }
  .countdown p {
    font-size: 16px; } }

/*****************************
  Button
*****************************/
/* btn */
.btn {
  font-size: 14px;
  font-weight: bold;
  padding: 16px 34px;
  line-height: 1;
  border-radius: 50px;
  position: relative;
  z-index: 1;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  text-decoration: none; }
  .btn:not(:disabled):not(.disabled).active:focus {
    -webkit-box-shadow: none;
            box-shadow: none;
    outline: none; }
  .btn:not(:disabled):not(.disabled):active:focus {
    -webkit-box-shadow: none;
            box-shadow: none;
    outline: none;
    color: #ffffff; }
  .btn:hover {
    -webkit-box-shadow: none;
            box-shadow: none;
    outline: none; }
  .btn:focus {
    -webkit-box-shadow: none;
            box-shadow: none;
    outline: none;
    color: #ffffff; }
  .btn:active {
    -webkit-box-shadow: none;
            box-shadow: none;
    outline: none;
    color: #ffffff; }

button {
  outline: medium none !important;
  color: #ffffff; }

.btn-link:after {
  margin-left: 12px; }

.show > .btn.dropdown-toggle:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: none;
  color: #ffffff; }

.show > .btn-primary.dropdown-toggle {
  background: #ef3139;
  border-color: #ef3139; }

.btn-primary {
  background: #FF0000;
  border-color: #FF0000; }
  .btn-primary:hover {
    background: #162b2f;
    border-color: #162b2f; }
    .btn-primary:hover:not(:disabled):not(.disabled).active {
      background: #ef3139;
      border-color: #ef3139; }
    .btn-primary:hover:not(:disabled):not(.disabled):active {
      background: #ef3139;
      border-color: #ef3139; }

.btn-primary:not(:disabled):not(.disabled):active:focus {
  background: #ef3139;
  border-color: #ef3139; }

.btn-dark {
  background: #162b2f;
  border-color: #162b2f2; }
  .btn-dark:hover {
    background: #ff0000;
    border-color: #ff0000; }

.btn:not(:disabled):not(.disabled).active:focus {
  color: #ffffff; }

.btn-link {
  color: #ef3139;
  padding: 0; }
  .btn-link:hover {
    color: #022d62;
    text-decoration: none;
    outline: none; }
  .btn-link:focus {
    color: #022d62;
    text-decoration: none;
    outline: none; }

.btn.btn-link:not(:disabled):not(.disabled):active:focus {
  color: #022d62; }

.btn-white {
  background: #ffffff;
  border-color: #ffffff;
  color: #022d62; }
  .btn-white:hover {
    background: #ef3139;
    border-color: #ef3139;
    color: #ffffff; }
  .btn-white:active {
    color: #ffffff; }
  .btn-white:focus {
    color: #ffffff; }

.btn.btn-white:not(:disabled):not(.disabled):active:focus {
  color: #022d62; }

.btn-light:active {
  color: #022d62; }

.btn-light:focus {
  color: #022d62; }

.btn.btn-light:not(:disabled):not(.disabled):active:focus {
  color: #022d62; }

.btn.btn-sm {
  padding: 12px 24px; }

.btn.btn-md {
  padding: 8px 30px; }

.btn.btn-lg {
  padding: 17px 64px;
  font-size: 18px; }

.btn-app {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .btn-app i {
    font-size: 40px; }

/* Hi Soft Button Round */
.btn-round:before {
  content: '';
  width: 60px;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  border-radius: 50px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: -1;
  opacity: 0.8; }

.right-round:before {
  right: 0;
  left: auto; }

.bg-dark .btn-primary-round:before {
  opacity: 1; }

.btn-round:hover:before {
  width: 100%; }

.btn-round,
.btn-round:hover {
  color: #162b2f; }

.btn-primary-round:before {
  background-color: #FF0000; }

.btn-light-round:before {
  background-color: #f6f6f6; }

.btn-round.btn-dark-round,
.btn-round.btn-dark-round:hover,
.btn-round.btn-dark-round:focus,
.btn.btn-round.btn-dark-round:not(:disabled):not(.disabled):active:focus {
  color: #ef3139; }

.btn-round.btn-dark-round:hover {
  color: #ffffff; }

.btn-dark-round:before {
  background-color: #022d62;
  opacity: 1; }

a.text-primary:focus,
a.text-primary:hover {
  color: #ef3139 !important; }

.btn-white-round:before {
  background-color: #ffffff; }

.btn-round:focus,
.btn.btn-round:not(:disabled):not(.disabled):active:focus {
  color: #022d62; }

.dark-background .btn-round:before {
  opacity: 1; }

/* Button Outline */
.btn-outline-primary {
  color: #ef3139;
  border-color: #ef3139; }

.btn.btn-outline-primary:focus {
  color: #ef3139; }

.btn-outline-primary:hover,
.btn-outline-primary:not(:disabled):not(.disabled).active,
.btn-outline-primary:not(:disabled):not(.disabled):active,
.show > .btn-outline-primary.dropdown-toggle {
  background-color: #ef3139;
  border-color: #ef3139; }

.btn-outline-dark {
  color: #022d62;
  border-color: #022d62; }

.btn-outline-dark:focus {
  color: #022d62; }

.btn-outline-dark:hover,
.btn-outline-dark:not(:disabled):not(.disabled).active,
.btn-outline-dark:not(:disabled):not(.disabled):active,
.show > .btn-outline-dark.dropdown-toggle {
  background-color: #022d62;
  border-color: #022d62; }

.btn-primary-round.btn-round:hover {
  color: #ffffff; }

/* Group Button */
.btn-group .btn:after {
  content: none; }

.icon-btn {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 40px;
  height: 40px;
  text-align: center;
  background: #ef3139;
  border-radius: 50%;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-item-align: center;
      align-self: center;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  color: #ffffff; }

.icon-btn {
  opacity: 1; }

.icon-btn.btn-animation {
  opacity: 1; }

.icon-btn-lg {
  width: 80px;
  height: 80px; }

.icon-btn-md {
  width: 60px;
  height: 60px; }

.icon-btn-sm {
  width: 40px;
  height: 40px; }

.icon-btn-all-center {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%); }

.btn-animation:before {
  content: "";
  position: absolute;
  z-index: -9;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  display: block;
  width: 50px;
  height: 50px;
  background: #ef3139;
  border-radius: 50%;
  -webkit-animation: pulse-border 1500ms ease-out infinite;
          animation: pulse-border 1500ms ease-out infinite; }

.btn-animation.icon-btn-lg:before {
  width: 80px;
  height: 80px; }

.btn-animation.icon-btn-md:before {
  width: 70px;
  height: 70px; }

.video-btn.btn-animation {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%); }

.video-btn-02 a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center; }
  .video-btn-02 a span {
    font-weight: 600; }

.video-btn-02 .btn-animation {
  position: inherit;
  -webkit-transform: translate(0%, 0%);
          transform: translate(0%, 0%); }

/* keyframes */
@-webkit-keyframes pulse-border {
  0% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
    opacity: 0; } }
@keyframes pulse-border {
  0% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
            transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
    opacity: 0; } }

@-webkit-keyframes sonarWave {
  from {
    opacity: 0.4; }
  to {
    -webkit-transform: scale(3);
            transform: scale(3);
    opacity: 0; } }

@keyframes sonarWave {
  from {
    opacity: 0.4; }
  to {
    -webkit-transform: scale(3);
            transform: scale(3);
    opacity: 0; } }

@media (max-width: 991px) {
  .btn:after {
    margin-left: 22px; } }

/*****************************
  Case Study
*****************************/
.case-study {
  position: relative;
  overflow: hidden;
  margin-bottom: 30px; }
  .case-study .case-study-title {
    display: block;
    color: #022d62;
    font-size: 18px;
    font-weight: 600; }
    .case-study .case-study-title:hover {
      color: #ef3139; }
  .case-study .case-study-services {
    display: block;
    margin-bottom: 10px; }
    .case-study .case-study-services:hover {
      color: #ffffff; }
  .case-study .case-study-img {
    background-size: cover;
    min-height: 249px;
    border-radius: 5px;
    background-position: center center; }
  .case-study .case-study-img.case-study-lg {
    min-height: 530px; }
  .case-study .case-study-info {
    padding: 20px;
    width: 90%;
    position: absolute;
    left: 50%;
    bottom: -90px;
    z-index: 2;
    opacity: 0;
    border-radius: 5px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-transform: translate(-50%, 0%);
            transform: translate(-50%, 0%);
    background: #ffffff; }
    .case-study .case-study-info p {
      max-height: 66px;
      overflow: auto; }
  .case-study:hover .case-study-info {
    opacity: 1;
    bottom: 20px; }
  .case-study .case-study-lg + .case-study-info p {
    max-height: 340px;
    overflow: auto; }

/* style 02 */
.case-study-style-02 {
  position: relative; }
  .case-study-style-02:before {
    position: absolute;
    width: 100%;
    height: 0;
    bottom: 0;
    left: 0;
    top: auto;
    background: rgba(2, 45, 98, 0.85);
    content: "";
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    border-radius: 5px; }
  .case-study-style-02:hover:before {
    bottom: 0;
    height: 100%; }
  .case-study-style-02 .case-study-title {
    color: #ffffff; }
  .case-study-style-02 .case-study-info {
    background: transparent; }
    .case-study-style-02 .case-study-info p {
      color: #ffffff; }

.clients-detail {
  margin: 0; }
  .clients-detail li {
    padding-right: 150px;
    margin-top: 20px; }
    .clients-detail li:last-child {
      padding-right: 0px; }

.case-study-style-03 {
  overflow: hidden; }
  .case-study-style-03 .case-study-img {
    -webkit-transition: -webkit-transform .5s ease-in-out;
    transition: -webkit-transform .5s ease-in-out;
    transition: transform .5s ease-in-out;
    transition: transform .5s ease-in-out, -webkit-transform .5s ease-in-out;
    overflow: hidden;
    border-radius: 0; }
  .case-study-style-03 .case-study-info {
    padding: inherit;
    width: inherit;
    position: relative;
    left: inherit;
    bottom: inherit;
    z-index: 2;
    opacity: inherit;
    border-radius: inherit;
    -webkit-transform: inherit;
            transform: inherit;
    background: #ffffff;
    padding-top: 20px; }
  .case-study-style-03:hover .case-study-info {
    bottom: inherit;
    height: 100%;
    -webkit-transition: -webkit-transform .5s ease-in-out;
    transition: -webkit-transform .5s ease-in-out;
    transition: transform .5s ease-in-out;
    transition: transform .5s ease-in-out, -webkit-transform .5s ease-in-out; }
  .case-study-style-03:hover .case-study-img {
    -webkit-transform: scale(1.07);
            transform: scale(1.07);
    -webkit-transition: -webkit-transform .5s ease-in-out;
    transition: -webkit-transform .5s ease-in-out;
    transition: transform .5s ease-in-out;
    transition: transform .5s ease-in-out, -webkit-transform .5s ease-in-out; }
  .case-study-style-03 .case-study-services:hover {
    color: #ef3139; }

/* Responsive View */
@media (max-width: 1199px) {
  .clients-detail li {
    padding-right: 110px; } }

@media (max-width: 991px) {
  .case-study .case-study-info {
    padding: 20px; }
  .clients-detail li {
    padding-right: 50px; } }

@media (max-width: 767px) {
  .clients-detail li {
    padding-right: 50px;
    width: 50%;
    float: left; } }

@media (max-width: 575px) {
  .clients-detail li {
    padding-right: 0px;
    width: 100;
    float: none; } }

/*****************************
  Category
*****************************/
/* Transition */
.category-grid-style-01 .category-item .category-icon,
.category-grid-style-01 .category-item:before,
.category-list-style-01 ul,
ul.category-list li a:after,
.category-box .category-icon,
.category-box:hover .category-icon i,
.category-box:hover .category-icon .category-title,
.category-box-style-02,
.category-box-style-02:before,
.category-box-style-02 ul.category-list {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out; }

/* Grid Style 01 */
.category-grid-style-01 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  background: #ffffff;
  -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
  border-radius: 5px; }
  .category-grid-style-01 .category-item {
    padding: 30px;
    text-align: center;
    width: 16.6666%;
    border-right: 1px solid #eeeeee;
    border-bottom: 1px solid #eeeeee;
    position: relative;
    cursor: pointer; }
    .category-grid-style-01 .category-item:nth-child(6n+0) {
      border-right: none; }
    .category-grid-style-01 .category-item:before {
      content: "";
      background: #ffffff;
      width: 110%;
      height: 110%;
      display: inline-block;
      position: absolute;
      left: -5%;
      top: -5%;
      z-index: 1;
      opacity: 0;
      -webkit-transform: scale(0.96);
              transform: scale(0.96); }
    .category-grid-style-01 .category-item:hover:before {
      -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
              box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
      opacity: 1;
      -webkit-transform: scale(1);
              transform: scale(1); }
    .category-grid-style-01 .category-item:hover .category-icon {
      color: #fe0000; }
    .category-grid-style-01 .category-item:hover .category-title {
      color: #fe0000; }
    .category-grid-style-01 .category-item .category-icon {
      color:#162b2f;
      font-size: 44px;
      line-height: 1;
      margin-bottom: 10px;
      position: relative;
      z-index: 2; }
    .category-grid-style-01 .category-item .category-title {
      color: #022d62;
      font-weight: bold;
      margin-bottom: 0;
      position: relative;
      z-index: 2;
      font-size: 16px; }
  .category-grid-style-01 .show-more-cat {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    margin: 60px 0 -20px 0;
    width: 100%; }
    .category-grid-style-01 .show-more-cat a {
      color: #022d62;
      font-size: 12px;
      font-weight: bold; }
      .category-grid-style-01 .show-more-cat a:hover {
        color: #ef3139; }
    .category-grid-style-01 .show-more-cat i {
      margin: 5px auto 0 auto; }

/* Grid Style 02 */
.category-grid-style-02 ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin: 0px -15px 0px -15px; }
  .category-grid-style-02 ul li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 25%;
    padding-right: 15px;
    padding-left: 15px;
    margin-bottom: 45px; }
    .category-grid-style-02 ul li a {
      -webkit-box-flex: 0;
          -ms-flex: 0 0 100%;
              flex: 0 0 100%;
      font-size: 18px;
      color: #022d62;
      padding-bottom: 35px;
      border-bottom: 1px solid #eeeeee; }
      .category-grid-style-02 ul li a:hover {
        color: #ef3139; }
    .category-grid-style-02 ul li:nth-last-child(-n+4) a {
      margin-bottom: 0; }

/* List Style 01 */
.category-list-style-01 ul.category-list {
  margin-bottom: 0;
  padding: 0 0 15px;
  height: 100%;
  border-bottom: 2px solid rgba(255, 255, 255, 0.1); }

.category-list-style-01 ul.category-list:hover {
  border-bottom-color: rgba(255, 255, 255, 0.3); }

ul.category-list {
  padding-left: 0;
  margin-bottom: 0; }
  ul.category-list li {
    list-style: none;
    margin-bottom: 15px; }
    ul.category-list li a {
      display: inline-block;
      color: #626262; }
      ul.category-list li a:hover {
        color: #ef3139;
        font-weight: bold; }
        ul.category-list li a:hover:after {
          margin-left: 10px;
          opacity: 1; }
      ul.category-list li a:after {
        content: '\f061';
        font-family: "Font Awesome 5 Free";
        font-size: 12px;
        font-weight: bold;
        margin-left: -10px;
        opacity: 0; }

.dark-background ul.category-list li a {
  color: #ffffff; }
  .dark-background ul.category-list li a:hover {
    color: #ef3139; }

/* Category Box Style 01 */
.category-box .category-icon {
  background: #ffffff;
  padding: 40px 30px;
  margin-bottom: 30px;
  text-align: center;
  -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
  border-radius: 5px; }
  .category-box .category-icon i {
    color: #ef3139;
    font-size: 80px;
    margin-bottom: 20px; }

.category-box:hover .category-icon {
  background: #162b2f; }
  .category-box:hover .category-icon i {
    color: #ffffff; }
  .category-box:hover .category-icon .category-title {
    color: #ffffff; }

.category-box ul.category-list li {
  margin-bottom: 20px; }
  .category-box ul.category-list li:last-child {
    margin-bottom: 0; }

.category-box p {
  font-size: 16px;
  text-align: center;
  color: #000000;
  margin-bottom: 0; }

/* Category Box Style 02 */
.category-box-style-02 {
  padding: 60px 5px;
  border-radius: 5px;
  -webkit-transform: scale(0.98);
          transform: scale(0.98); }
  .category-box-style-02:hover {
    background: #022d62;
    -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
            box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
    -webkit-transform: scale(1);
            transform: scale(1); }
    .category-box-style-02:hover .category-icon {
      background: transparent; }
    .category-box-style-02:hover ul.category-list {
      opacity: 1; }
  .category-box-style-02 .category-icon {
    background: transparent;
    -webkit-box-shadow: none;
            box-shadow: none;
    padding: 0; }
  .category-box-style-02 ul.category-list {
    opacity: 0; }
    .category-box-style-02 ul.category-list li a {
      color: #ffffff; }
      .category-box-style-02 ul.category-list li a:hover {
        color: #ef3139; }

.category-box-style-02.active {
  background: #022d62;
  -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
  -webkit-transform: scale(1);
          transform: scale(1); }
  .category-box-style-02.active .category-icon {
    background: transparent; }
    .category-box-style-02.active .category-icon i {
      color: #ffffff; }
    .category-box-style-02.active .category-icon .category-title {
      color: #ffffff; }
  .category-box-style-02.active ul.category-list {
    opacity: 1; }

/* category-style-03 */
.category-style-03 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap; }
  .category-style-03 a.category-item {
    padding: 40px 30px 25px 30px; }

/* Responsive View */
@media (max-width: 991px) {
  .category-grid-style-01 .category-item {
    width: 25%; }
  .category-grid-style-01 .category-item:nth-child(6n+0) {
    border-right: 1px solid #eeeeee; }
  .category-grid-style-01 .category-item:nth-child(4n+0) {
    border-right: none; }
  .category-box-style-02 {
    padding: 20px 5px; }
  .category-grid-style-02 ul li {
    width: 33.3333%;
    margin-bottom: 35px; }
    .category-grid-style-02 ul li a {
      padding-bottom: 25px; } }

@media (max-width: 767px) {
  .category-grid-style-01 .category-item {
    width: 33.3333%; }
    .category-grid-style-01 .category-item:nth-child(4n+0) {
      border-right: 1px solid #eeeeee; }
    .category-grid-style-01 .category-item:nth-child(3n+0) {
      border-right: none; }
  .category-grid-style-01 .show-more-cat {
    margin-top: 40px; }
  .category-grid-style-02 ul li {
    width: 50%;
    margin-bottom: 25px; }
    .category-grid-style-02 ul li a {
      padding-bottom: 15px; } }

@media (max-width: 575px) {
  .category-grid-style-01 .category-item {
    width: 100%; }
    .category-grid-style-01 .category-item:nth-child(3n+0) {
      border-right: 1px solid #eeeeee; }
    .category-grid-style-01 .category-item:nth-child(2n+0) {
      border-right: none; }
  .category-grid-style-02 ul li {
    width: 100%;
    margin-bottom: 15px; } }

/*****************************
  Client
*****************************/
.our-clients {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center; }
  .our-clients .owl-stage {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 100%; }
  .our-clients .item {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 100%; }
  .our-clients .client-title {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16%;
            flex: 0 0 16%; }
    .our-clients .client-title h5 {
      position: relative;
      z-index: 9;
      margin-bottom: 0; }
  .our-clients .svg-item {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    overflow: hidden; }
  .our-clients .brand-logo {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 64%;
            flex: 0 0 64%;
    overflow: hidden;
    padding-right: 30px; }
  .our-clients .client-btn {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
            flex: 0 0 20%; }

/* style 02 */
.our-clients-style-02 {
  border-radius: 5px;
  padding: 40px 0; }
  .our-clients-style-02 .svg-item {
    border-radius: 5px;
    width: 100%;
    height: 100%; }
    .our-clients-style-02 .svg-item:before {
      position: absolute;
      left: -49px;
      width: 200px;
      height: 200px;
      background: #FF0000;
      content: "";
      top: -30px;
      border-radius: 100%; }
    .our-clients-style-02 .svg-item:after {
      position: absolute;
      left: 80px;
      width: 70px;
      height: 70px;
      background: #ef3139;
      content: "";
      bottom: -40px;
      border-radius: 100%; }

@media (max-width: 1199px) {
  .our-clients-style-02 {
    display: block;
    padding: 0; }
    .our-clients-style-02 .client-title {
      padding-left: 20px;
      padding: 20px;
      background: #ef3139; }
    .our-clients-style-02 .svg-item {
      display: none; }
    .our-clients-style-02 .brand-logo {
      margin: 40px 20px; }
    .our-clients-style-02 .client-btn {
      padding-left: 20px;
      padding-bottom: 20px; } }

/*****************************
  Form Control
*****************************/
/* form-control */
.form-control {
  border: 1px solid black;
  border-radius: 0px;
  padding: 10px 20px;
  -webkit-box-shadow: none;
          box-shadow: none;
  font-size: 14px;
  font-weight: 500;
  background: #f6f6f6;
  color: #022d62;
  border-radius: 5px;
  background-clip: inherit !important; }
  .form-control:focus {
    -webkit-box-shadow: none;
            box-shadow: none;
    border-color: #ef3139; }

input.form-control {
  height: 48px; }

.form-control::-moz-placeholder {
  color: #3a4957; }

.form-control::-ms-input-placeholder {
  color: #3a4957; }

.form-control::-webkit-input-placeholder {
  color: #3a4957; }

/* form-dark */
.form-dark .form-control {
  background-color: #022d62;
  color: #ffffff; }
  .form-dark .form-control:focus {
    -webkit-box-shadow: 2px 2px 4px 0px rgba(2, 45, 98, 0.1);
            box-shadow: 2px 2px 4px 0px rgba(2, 45, 98, 0.1);
    border-color: #ef3139; }

.form-white .form-control {
  background-color: #ffffff;
  color: #ffffff; }
  .form-white .form-control:focus {
    border-color: #ef3139; }

.form-dark .form-control::-moz-placeholder {
  color: #ffffff; }

.form-dark .form-control::-ms-input-placeholder {
  color: #ffffff; }

.form-dark .form-control::-webkit-input-placeholder {
  color: #ffffff; }

/* custom-file */
.custom-file {
  height: 50px; }
  .custom-file .custom-file-input {
    height: 50px;
    color: #022d62;
    border-radius: 5px;
    border-color: #eeeeee; }
    .custom-file .custom-file-input:focus {
      -webkit-box-shadow: none;
              box-shadow: none;
      border-color: #ef3139; }
  .custom-file .custom-file-label {
    height: 50px;
    font-size: 14px;
    font-weight: 600;
    color: #022d62;
    border-color: #eeeeee;
    padding: 15px 90px 15px 20px;
    border-radius: 5px; }
    .custom-file .custom-file-label:after {
      height: 48px;
      padding: 14px 25px; }

.custom-file-input:focus ~ .custom-file-label {
  -webkit-box-shadow: none;
          box-shadow: none;
  border-color: #ef3139; }

/* input-group-prepend */
.input-group-prepend .input-group-text,
.input-group-append .input-group-text {
  background: transparent;
  border-color: #eeeeee;
  -webkit-box-shadow: none;
          box-shadow: none;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center; }

/* checkbox */
.custom-control-input:checked ~ .custom-control-label:before {
  background: #ef3139;
  border-color: #ef3139; }

.custom-control-input:not(:disabled):active ~ .custom-control-label:before {
  background: transparent;
  border-color: transparent; }

.custom-control-input:focus ~ .custom-control-label:before {
  -webkit-box-shadow: none;
          box-shadow: none; }

.custom-control-input:focus:not(:checked) ~ .custom-control-label:before {
  border-color: #eeeeee; }

.custom-control-label:before {
  top: 0px; }

.custom-control-label:after {
  top: 0px; }

.custom-checkbox .custom-control-label:before {
  border-radius: 5px;
  border: 2px solid #dfdfdf; }

/* contact form */
.contact-form-style-02 .inp {
  position: relative;
  margin: auto;
  width: 100%; }
  .contact-form-style-02 .inp .label {
    position: absolute;
    top: 16px;
    left: 0;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.5);
    font-weight: 400;
    -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
  .contact-form-style-02 .inp .border {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 1px;
    width: 100%;
    background: #ef3139 !important;
    -webkit-transform: scaleX(0);
            transform: scaleX(0);
    -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    border: none !important; }
  .contact-form-style-02 .inp .form-control {
    -webkit-appearance: none;
    width: 100%;
    padding: 0;
    border: 0;
    font-family: inherit;
    font-size: 16px;
    font-weight: 500;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    background: none;
    border-radius: 0;
    color: #ffffff;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease; }
    .contact-form-style-02 .inp .form-control:hover {
      background: rgba(2, 45, 98, 0.03); }
    .contact-form-style-02 .inp .form-control:not(:-moz-placeholder-shown) + span {
      color: rgba(2, 45, 98, 0.05);
      transform: translateY(-16px) scale(0.75);
      color: rgba(2, 45, 98, 0.05);
      transform: translateY(-16px) scale(0.75);
      display: none; }
    .contact-form-style-02 .inp .form-control:not(:-ms-input-placeholder) + span {
      color: rgba(2, 45, 98, 0.05);
      transform: translateY(-16px) scale(0.75);
      color: rgba(2, 45, 98, 0.05);
      transform: translateY(-16px) scale(0.75);
      display: none; }
    .contact-form-style-02 .inp .form-control:not(:placeholder-shown) + span {
      color: rgba(2, 45, 98, 0.05);
      -webkit-transform: translateY(-16px) scale(0.75);
              transform: translateY(-16px) scale(0.75);
      color: rgba(2, 45, 98, 0.05);
      transform: translateY(-16px) scale(0.75);
      display: none; }
    .contact-form-style-02 .inp .form-control:focus {
      background: none;
      outline: none; }
      .contact-form-style-02 .inp .form-control:focus + span {
        color: #ffffff;
        -webkit-transform: translateY(-16px) scale(0.75);
                transform: translateY(-16px) scale(0.75);
        opacity: 1; }
        .contact-form-style-02 .inp .form-control:focus + span + .border {
          -webkit-transform: scaleX(1);
                  transform: scaleX(1);
          border-color: #ef3139 !important; }

/*************************
        Portfolio
*************************/
.portfolio-item {
  position: relative;
  overflow: hidden; }
  .portfolio-item:before {
    position: absolute;
    content: "";
    background: #022d62;
    width: 100%;
    height: 100%;
    opacity: 0.3; }
  .portfolio-item:hover .portfolio-overlay {
    background: #ffffff;
    opacity: 1; }
  .portfolio-item:hover .portfolio-info {
    bottom: 20px; }
  .portfolio-item:hover .portfolio-icon {
    top: 20px; }

.portfolio-overlay {
  padding: 20px;
  position: absolute;
  bottom: 0;
  width: 100%;
  left: 0;
  opacity: 0;
  height: 100%;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  color: #ffffff; }
  .portfolio-overlay .portfolio-title {
    color: #ef3139; }

.portfolio-info {
  position: absolute;
  bottom: 0px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  width: 100%;
  left: 0px;
  padding-left: 20px; }

.portfolio-icon {
  position: absolute;
  top: 0px;
  left: 0px;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -ms-flex-item-align: center;
      align-self: center;
  padding-left: 20px; }
  .portfolio-icon span {
    color: #000000;
    font-size: 18px; }
  .portfolio-icon i {
    color: #ef3139;
    font-size: 20px; }

/*************************************
         Shuffle
 *************************************/
.my-shuffle-container.columns-1 .grid-item {
  width: 100%;
  padding: 15px; }

.my-shuffle-container.columns-2 .grid-item {
  width: 50%;
  padding: 15px; }

.my-shuffle-container.columns-3 .grid-item {
  width: 33.33333333%;
  padding: 15px; }

.my-shuffle-container.columns-4 .grid-item {
  width: 25%;
  padding: 10px; }

.my-shuffle-container.columns-5 .grid-item {
  width: 20%;
  padding: 15px; }

.my-shuffle-container.columns-6 .grid-item {
  width: 16.666666%;
  padding: 0px; }

.my-shuffle-container .portfolio-item {
  position: relative;
  -webkit-filter: contrast(0.8);
          filter: contrast(0.8);
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease; }

.my-shuffle-container .portfolio-item:hover {
  -webkit-filter: contrast(1);
          filter: contrast(1); }

@media (max-width: 1199px) {
  .my-shuffle-container.columns-6 .grid-item {
    width: 25%; } }

@media (max-width: 991px) {
  .my-shuffle-container.columns-6 .grid-item {
    width: 33%; } }

@media (max-width: 767px) {
  .my-shuffle-container.columns-3 .grid-item {
    width: 50%; }
  .my-shuffle-container.columns-4 .grid-item {
    width: 50%; }
  .my-shuffle-container.columns-5 .grid-item {
    width: 50%; }
  .my-shuffle-container.columns-6 .grid-item {
    width: 50%; } }

@media (max-width: 575px) {
  .my-shuffle-container.columns-2 .grid-item {
    width: 100%; }
  .my-shuffle-container.columns-3 .grid-item {
    width: 100%; }
  .my-shuffle-container.columns-4 .grid-item {
    width: 100%; }
  .my-shuffle-container.columns-5 .grid-item {
    width: 100%; }
  .my-shuffle-container.columns-6 .grid-item {
    width: 100%; } }

/*****************************
    Timeline
*****************************/
.cd-horizontal-timeline {
  opacity: 0;
  -webkit-transition: opacity 0.2s;
  transition: opacity 0.2s; }
  .cd-horizontal-timeline ul {
    margin-top: 0;
    margin-bottom: 0rem;
    list-style-type: none;
    padding: 0; }
  .cd-horizontal-timeline a {
    text-decoration: none; }
  .cd-horizontal-timeline::before {
    content: 'mobile';
    display: none; }
  .cd-horizontal-timeline .timeline {
    position: relative;
    height: 100px;
    width: 100%; }
  .cd-horizontal-timeline .events-wrapper {
    position: relative;
    height: 100%;
    margin: 0 80px;
    overflow: hidden; }
  .cd-horizontal-timeline .events {
    position: absolute;
    z-index: 1;
    left: 0;
    top: 49px;
    height: 2px;
    background: #dfdfdf;
    -webkit-transition: -webkit-transform 0.4s;
    transition: -webkit-transform 0.4s;
    transition: transform 0.4s;
    transition: transform 0.4s, -webkit-transform 0.4s; }
    .cd-horizontal-timeline .events a {
      position: absolute;
      bottom: 0;
      z-index: 2;
      text-align: center;
      padding-bottom: 15px;
      color: #022d62;
      font-weight: 600;
      -webkit-transform: translateZ(0);
              transform: translateZ(0); }
      .cd-horizontal-timeline .events a::after {
        content: '';
        position: absolute;
        left: 50%;
        right: auto;
        -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
        bottom: -5px;
        height: 12px;
        width: 12px;
        border-radius: 50%;
        border: 2px solid #dfdfdf;
        background-color: #ffffff;
        -webkit-transition: background-color 0.3s, border-color 0.3s;
        transition: background-color 0.3s, border-color 0.3s; }
    .cd-horizontal-timeline .events a.selected {
      pointer-events: none; }
      .cd-horizontal-timeline .events a.selected::after {
        background-color: #ef3139;
        border-color: #ef3139; }
    .cd-horizontal-timeline .events a.older-event::after {
      background-color: #ef3139;
      border-color: #ef3139; }
  .cd-horizontal-timeline .filling-line {
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-color: #ef3139;
    -webkit-transform: scaleX(0);
            transform: scaleX(0);
    -webkit-transform-origin: left center;
            transform-origin: left center;
    -webkit-transition: -webkit-transform 0.3s;
    transition: -webkit-transform 0.3s;
    transition: transform 0.3s;
    transition: transform 0.3s, -webkit-transform 0.3s; }

.cd-horizontal-timeline.loaded {
  opacity: 1; }

.no-touch .cd-horizontal-timeline .events a:hover::after {
  background-color: #dfdfdf;
  border-color: #dfdfdf; }

.events-content .year {
  font-size: 96px;
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
  position: absolute;
  top: 50px;
  right: -30px;
  margin-bottom: 0;
  opacity: 0.1;
  color: #ef3139; }

.cd-timeline-navigation a {
  position: absolute;
  z-index: 1;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  height: 50px;
  width: 50px;
  border-radius: 50%;
  background: #f6f6f6;
  border: 2px solid #f6f6f6;
  overflow: hidden;
  color: transparent;
  -webkit-transition: border-color 0.3s;
  transition: border-color 0.3s;
  left: 0; }
  .cd-timeline-navigation a:hover {
    border: 2px solid #ef3139;
    color: #ffffff;
    background: #ef3139; }
    .cd-timeline-navigation a:hover:before {
      color: #ffffff; }

.cd-timeline-navigation a.prev::before {
  content: "\f060";
  font-family: "Font Awesome 5 Free";
  color: #022d62;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  font-weight: bold; }

.cd-timeline-navigation a.next {
  right: 0;
  left: auto; }
  .cd-timeline-navigation a.next::before {
    content: "\f061";
    font-family: "Font Awesome 5 Free";
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
    color: #022d62;
    font-weight: bold; }

.cd-timeline-navigation a.inactive {
  cursor: not-allowed; }
  .cd-timeline-navigation a.inactive::after {
    background-position: 0 -16px; }

.cd-horizontal-timeline .events-content {
  position: relative;
  width: 100%;
  margin-top: 30px;
  overflow: hidden;
  -webkit-transition: height 0.4s;
  transition: height 0.4s;
  z-index: -9; }
  .cd-horizontal-timeline .events-content li {
    position: absolute;
    z-index: 1;
    width: 100%;
    left: 0;
    top: 0;
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
    padding: 0 5%;
    opacity: 0;
    -webkit-animation-duration: 0.4s;
            animation-duration: 0.4s;
    -webkit-animation-timing-function: ease-in-out;
            animation-timing-function: ease-in-out; }
    .cd-horizontal-timeline .events-content li > * {
      max-width: 700px;
      margin: 0 auto; }
  .cd-horizontal-timeline .events-content li.selected {
    position: relative;
    z-index: 2;
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0); }
  .cd-horizontal-timeline .events-content li.enter-right {
    -webkit-animation-name: cd-enter-right;
            animation-name: cd-enter-right; }
  .cd-horizontal-timeline .events-content li.leave-right {
    -webkit-animation-name: cd-enter-right;
            animation-name: cd-enter-right;
    animation-direction: reverse; }
  .cd-horizontal-timeline .events-content li.enter-left {
    -webkit-animation-name: cd-enter-left;
            animation-name: cd-enter-left; }
  .cd-horizontal-timeline .events-content li.leave-left {
    -webkit-animation-name: cd-enter-left;
            animation-name: cd-enter-left;
    animation-direction: reverse; }

@media only screen and (min-width: 1100px) {
  .cd-horizontal-timeline::before {
    /* never visible - this is used in jQuery to check the current MQ */
    content: 'desktop'; } }

@media only screen and (max-width: 767px) {
  .cd-horizontal-timeline .events-content {
    margin-top: 0; }
  .cd-horizontal-timeline .events-wrapper {
    margin: 0 40px; }
  .events-content .year {
    font-size: 66px;
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
    position: relative;
    top: 0;
    right: 0; }
  .cd-timeline-navigation a {
    width: 30px;
    height: 30px; } }

@-webkit-keyframes cd-enter-right {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100%); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0%); } }

@keyframes cd-enter-right {
  0% {
    opacity: 0;
    -webkit-transform: translateX(100%);
    transform: translateX(100%); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0%);
    transform: translateX(0%); } }

@-webkit-keyframes cd-enter-left {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100%); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0%); } }

@keyframes cd-enter-left {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0%);
    transform: translateX(0%); } }

/*****************************
	Progress Bar
*****************************/
.progress {
  position: relative;
  overflow: inherit;
  height: 10px;
  margin: 40px 0px 15px;
  width: 100%;
  display: inline-block;
  border-radius: 5px; }
  .progress .progress-bar {
    height: 10px;
    border-radius: 5px; }
  .progress .progress-bar-title {
    position: absolute;
    left: 0;
    top: -30px;
    color: #022d62;
    font-size: 14px;
    font-weight: 600; }
  .progress .progress-bar-number {
    position: absolute;
    right: 0;
    color: #022d62;
    top: -30px;
    font-weight: 600; }

/*****************************
  List style
*****************************/
.list {
  margin: 0;
  padding: 0; }
  .list li {
    margin-bottom: 15px;
    color: #000000; }
    .list li:last-child {
      margin-bottom: 0px; }

.list-number li span {
  background: rgba(239, 49, 57, 0.1);
  color: #ef3139;
  border-radius: 50%;
  margin-right: 8px;
  width: 25px;
  height: 25px;
  font-weight: 600;
  text-align: center;
  display: inline-block;
  line-height: 25px;
  font-size: 13px; }

/*************************
       Header
*************************/
.header {
  background: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-box-shadow: 0 1px 14px rgba(0, 0, 0, 0.05);
          box-shadow: 0 1px 14px rgba(0, 0, 0, 0.05); }
  .header .container-fluid {
    padding: 0 33px; }

.header-transparent {
  position: absolute;
  background: transparent;
  width: 100%;
  z-index: 9;
  -webkit-box-shadow: none;
          box-shadow: none; }
  .header-transparent .navbar .navbar-brand {
    padding: 30px 0px; }
  .header-transparent .navbar .navbar-nav .nav-link {
    color: #ffffff; }
  .header-transparent .search .search-btn {
    color: #ffffff; }

.header.header-transparent.sticky-top {
  background: #022d62; }

/* topbar */
.header .topbar {
  padding: 4px 0;
  border-bottom: 1px solid rgba(2, 45, 98, 0.1); }
  .header .topbar ul {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 0;
    color: #ffffff; }
    .header .topbar ul li {
      padding: 0 12px; }
      .header .topbar ul li:last-child {
        padding-right: 0; }
  .header .topbar a {
    color: #022d62;
    font-size: 13px;
    font-weight: 600; }
    .header .topbar a:hover {
      color: #ef3139; }

/* navbar */
.navbar {
  padding: 0; }

.navbar .navbar-nav .nav-link {
  font-weight: 600;
  font-size: 16px;
  padding: 10px 16px 10px;
  margin-right: 0px;
  margin-left: 20px;
  color: #162b2f;
  text-transform: capitalize; }
  .navbar .navbar-nav .nav-link:hover {
    color: #ff0000; }

.navbar .navbar-nav .nav-item.active a.nav-link {
  color: #ef3139; }

.navbar .navbar-nav .nav-item:last-child .nav-link {
  margin-right: 0; }

.dropdown-menu {
  z-index: 9999; }

.navbar-collapse {
  position: relative; }

.navbar-light {
  color: #ffffff;
  background-color: #f6f6f6;
  border-color: #eeeeee; }

.navbar-light .navbar-nav > li > a {
  color: #ffffff; }

.navbar-light .navbar-nav > .dropdown > a .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff; }

.navbar-brand {
  padding: 20px 0px;
  margin-right: 0; }

.navbar-brand img {
  height: 40px; }

.navbar .navbar-brand {
  color: #ffffff;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 200px;
          flex: 0 0 200px; }

.header .navbar-nav > li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }

.header .navbar-nav li > a {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 3px 0px;
  color: #022d62;
  text-transform: capitalize;
  font-size: 14px; }

.header .navbar-nav li > a:hover {
  color: #ef3139; }

.header .navbar-nav li > a i {
  color: #ef3139;
  margin-left: 10px;
  font-size: 12px; }

.header li > .dropdown-item:focus,
.header li > .dropdown-item:hover {
  color: #ef3139;
  background: none; }

.header .dropdown-item.active,
.header .dropdown-item:active,
.header .dropdown-item:focus,
.header .dropdown-item:hover {
  background: none; }

.header .dropdown-toggle::after {
  content: none; }

.header .navbar-collapse {
  -webkit-box-align: inherit;
      -ms-flex-align: inherit;
          align-items: inherit; 
        place-content: flex-end;
        margin-right: 30px;
}

.header .megamenu .dropdown-item {
  padding: 0px; }

.header .navbar .dropdown-menu a.dropdown-item {
  min-width: 200px; }

.header .navbar .dropdown-menu {
  padding: 15px; }

.header .navbar .dropdown-menu li a i {
  margin-left: 0;
  opacity: 0;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  color: #ef3139; }

.navbar .dropdown > .dropdown-menu li > a:hover i {
  opacity: 1;
  margin-left: 10px; }

.navbar .dropdown > .dropdown-menu li.active > a i {
  opacity: 1;
  margin-left: 10px; }

.navbar .dropdown > .dropdown-menu li > a {
  font-size: 14px;
  padding: 10px 20px 10px 0;
  border-radius: 3px;
  position: relative;
  margin-bottom: 3px; }

.navbar .dropdown > .dropdown-menu li > a:hover {
  background: rgba(239, 49, 57, 0.1);
  color: #ef3139;
  padding-left: 15px; }

.navbar .dropdown > .dropdown-menu li.active > a {
  background: rgba(239, 49, 57, 0.1);
  color: #ef3139;
  padding-left: 15px; }

.search {
  vertical-align: middle;
  display: table;
  height: 100%;
  float: left; }

.search .search-btn {
  display: block;
  height: 22px;
  line-height: 22px;
  position: relative;
  text-indent: -9999px;
  width: 14px;
  color: #022d62;
  -webkit-transition: color 300ms ease 0s;
  transition: color 300ms ease 0s;
  -webkit-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out; }

.search .search-btn:before {
  content: "\f002";
  font-family: "Font Awesome 5 Free";
  font-size: 16px;
  font-weight: 900;
  left: 0;
  position: absolute;
  text-indent: 0;
  top: 0; }

.search.search-open .search-btn:before {
  content: "\f00d"; }

.search-box {
  display: block;
  margin: 0;
  opacity: 0 !important;
  position: absolute;
  right: 0;
  top: 100%;
  -webkit-transition: visibility 300ms ease 0s, opacity 300ms ease 0s;
  transition: visibility 300ms ease 0s, opacity 300ms ease 0s;
  visibility: hidden;
  width: 327px;
  z-index: 888;
  border-radius: 3px;
  -webkit-transform: rotateX(90deg);
          transform: rotateX(90deg);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  -webkit-transition: all 400ms ease;
  transition: all 400ms ease; }

.search-box.open {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translateY(10px);
  transform: translateY(10px); }

.search.search-open .search-box {
  opacity: 1 !important;
  visibility: visible !important;
  -webkit-transform: rotateX(0deg);
          transform: rotateX(0deg);
  -webkit-box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 5px 5px 24px 0px rgba(2, 45, 98, 0.1); }

.search .search-box button {
  background: transparent;
  border: none;
  cursor: pointer;
  font-size: 16px;
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out; }

.search .search-box .form-control {
  height: 58px; }

.header.sticky-top {
  position: fixed;
  width: 100%;
  background: #ffffff;
  -webkit-box-shadow: 2px 2px 4px 0px rgba(2, 45, 98, 0.1);
          box-shadow: 2px 2px 4px 0px rgba(2, 45, 98, 0.1);
  -webkit-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
  z-index: 999;
  -webkit-animation: stickySlideDown 0.65s cubic-bezier(0.23, 1, 0.32, 1) both;
          animation: stickySlideDown 0.65s cubic-bezier(0.23, 1, 0.32, 1) both; }

.header.sticky-top .topbar {
  display: none; }

.header.sticky-top .navbar-brand {
  padding: 15px 0px; }

/* Header Style 02 */
.header-style-02 {
  background: #022d62; }

.header-style-02 .topbar {
  padding: 0;
  border-color: rgba(255, 255, 255, 0.1); }

.header-style-02.sticky-top .topbar {
  display: block; }

.header-style-02 .topbar .contact-info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center; }

.header-style-02 .topbar .contact-info ul {
  padding: 0;
  margin: 0; }

.header-style-02 .topbar .contact-info li {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  padding: 20px 40px; }

.header-style-02 .topbar .contact-info li:last-child {
  border-right: 0;
  font-size: 12px; }

.header-style-02 .topbar .contact-info li i {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  font-size: 30px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-right: 20px; }

.header-style-02 .topbar .contact-info li label {
  margin-bottom: 0; }

.header-style-02 .navbar .navbar-nav .nav-item .nav-link {
  color: #ffffff; }

.header-style-02 .navbar .navbar-nav .nav-item:first-child .nav-link {
  padding-left: 0; }

.header-style-02 .search .search-btn {
  color: #ffffff; }

.header-style-02 .search-box {
  opacity: 1 !important;
  position: inherit;
  visibility: visible;
  -webkit-transform: inherit;
          transform: inherit;
  width: auto;
  border-left: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 0; }

.header-style-02 .search-box .form-control {
  background: transparent;
  border: transparent;
  color: #ffffff;
  border-radius: 0;
  height: 60px;
  padding: 10px 18px; }

.header-style-02 .search-box .search-button {
  position: absolute;
  right: 0px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  background: transparent;
  border: transparent;
  color: #ffffff; }

.header-style-02.sticky-top {
  background: #022d62; }

.header-style-02.sticky-top .topbar .contact-info {
  display: none !important; }

.header-style-02.sticky-top .navbar {
  position: absolute;
  right: 10px;
  top: -65px; }

.header-style-02 .search-box .form-control::-webkit-input-placeholder {
  font-weight: normal;
  color: rgba(255, 255, 255, 0.5); }

.header-style-02 .search-box .form-control::-moz-placeholder {
  font-weight: normal;
  color: rgba(255, 255, 255, 0.5); }

.header-style-02 .search-box .form-control:-ms-input-placeholder {
  font-weight: normal;
  color: rgba(255, 255, 255, 0.5); }

.header-style-02 .search-box .form-control::-ms-input-placeholder {
  font-weight: normal;
  color: rgba(255, 255, 255, 0.5); }

.header-style-02 .search-box .form-control::placeholder {
  font-weight: normal;
  color: rgba(255, 255, 255, 0.5); }

/* Header Style 03 */
.header-style-03 {
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 9;
  background: transparent; }

.header-style-03.sticky-top {
  background: #022d62; }

.header-style-03 .topbar {
  background: #ffffff; }

.header-style-03 .navbar .navbar-nav .nav-link {
  color: #ffffff; }

.header-style-03 .search {
  position: relative; }

.header-style-03 .search-box {
  right: 0;
  margin-top: 10px; }

.header-style-03 .search .search-btn {
  color: #ffffff; }

.header-style-03 + .banner {
  margin-top: 60px; }

/* Header Transparent */
.header-transparent .search {
  position: relative; }

.header-transparent .search-box {
  right: 0;
  margin-top: 10px; }

.header-transparent .search .search-btn {
  color: #ffffff; }

.megamenu {
  padding: 20px 20px;
  width: 100%; }

.megamenu > div > li > ul {
  padding: 0;
  margin: 0; }

.megamenu > div > li > ul > li {
  list-style: none; }

.megamenu .card {
  outline: none; }

.megamenu .card:hover,
.megamenu .card:focus {
  outline: 1px solid #000000; }

.megamenu > div > li > ul > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.428571429;
  color: #022d62;
  white-space: normal; }

.megamenu > div > li > ul > li > a:hover,
.megamenu > div > li > ul > li > a:focus {
  text-decoration: none;
  color: #022d62;
  background-color: #f6f6f6; }

.megamenu.disabled > a,
.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
  color: #f6f6f6; }

.megamenu.disabled > a:hover,
.megamenu.disabled > a:focus {
  text-decoration: none;
  background-color: transparent;
  background-image: none;
  cursor: not-allowed; }

.megamenu.dropdown-header {
  color: #ef3139;
  font-size: 18px; }

@media (min-width: 992px) {
  .search .search-btn:before {
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%); } }

.header .form-control {
  background: #ffffff;
  border: 1px solid #ffffff; }

.form-check {
  padding-left: 15px; }

.form-check-input {
  margin-left: 0; }

.form-check-input:checked {
  background: #ef3139;
  border-color: #ef3139; }

.form-check-input:focus {
  -webkit-box-shadow: none;
          box-shadow: none; }

/* Contact Number */
.contact-number a {
  font-size: 16px; }

.contact-number i {
  font-size: 20px;
  vertical-align: middle; }

/* New Arrow */
.navbar .navbar-nav .nav-item .nav-link {
  position: relative; }

.navbar .navbar-nav .dropdown.nav-item .nav-link:before,
.navbar .navbar-nav .dropdown.nav-item .nav-link:after {
  content: "";
  top: 23px;
  position: absolute;
  width: 8px;
  height: 2px;
  background-color: #ef3139;
  display: inline-block;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
  border-radius: 3px; }

.navbar .navbar-nav .dropdown.nav-item .nav-link:after {
  right: -5px;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg); }

.navbar .navbar-nav .dropdown.nav-item .nav-link:before {
  right: 0;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg); }

.navbar .navbar-nav .dropdown.nav-item:hover .nav-link:after {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg); }

.navbar .navbar-nav .dropdown.nav-item:hover .nav-link:before {
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg); }

/* Header search */
.center-position {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  border-radius: 8px; }

.header-search-inner {
  width: 18px;
  height: 18px;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  cursor: pointer;
  position: relative; }

.header-search-inner::before {
  content: "";
  position: absolute;
  top: 7px;
  right: -2px;
  width: 0;
  height: 3px;
  margin-top: -2px;
  background-color: #022d62;
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
  -webkit-transform-origin: right top;
          transform-origin: right top;
  border-radius: 5px; }

.header-search-inner::after {
  content: "";
  position: absolute;
  bottom: 0px;
  right: 2px;
  width: 9px;
  height: 3px;
  margin-top: -2px;
  background-color: #022d62;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  -webkit-transform-origin: right bottom;
          transform-origin: right bottom;
  border-radius: 5px; }

.header-search-icon {
  position: absolute;
  display: block;
  top: 0px;
  left: 0px;
  width: 14px;
  height: 14px;
  border-radius: 50%;
  border-width: 3px;
  border-style: solid;
  border-color: #022d62; }

.header-search-inner:hover::before,
.header-search-inner:hover::after {
  width: 15px; }

.header-search-inner:hover::before {
  top: 7px;
  right: 2px; }

.header-search-inner:hover .header-search-icon {
  width: 0;
  height: 0;
  border-color: transparent; }

.header-search-inner::before,
.header-search-inner::after,
.header-search-inner .header-search-icon {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out; }

.header-inner {
  z-index: 99; }

.header-inner-nav {
  position: relative; }

.header-inner .header-inner-nav.page-menu-top {
  position: fixed;
  width: 100%;
  background: #022d62;
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
          box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
  top: 70px;
  -webkit-animation: stickySlideDown 0.85s cubic-bezier(0.23, 1, 0.32, 1) both;
          animation: stickySlideDown 0.85s cubic-bezier(0.23, 1, 0.32, 1) both;
  padding: 5px 0; }

.header-inner .header-inner-nav.page-menu-top .nav li a {
  color: #ffffff;
  padding: 10px 40px; }

/*************************
       Responsive
*************************/
@media (min-width: 992px) {
  .header .navbar .dropdown-menu {
    margin: 0px;
    font-size: 14px;
    border-radius: 0px;
    border: none;
    left: 100%;
    -webkit-transform: translate3d(-50%, 10px, 0);
            transform: translate3d(-50%, 10px, 0);
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-transition-property: opacity, visibility, -webkit-transform;
    transition-property: opacity, visibility, -webkit-transform;
    transition-property: opacity, visibility, transform;
    transition-property: opacity, visibility, transform, -webkit-transform;
    -webkit-transform-origin: top center;
            transform-origin: top center;
    -webkit-box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
    visibility: hidden;
    opacity: 0;
    display: block !important;
    border-radius: 3px;
    top: 100%; }
  .header .navbar .dropdown-menu.megamenu {
    left: 50%; }
  .navbar-nav .dropdown-menu.dropdown-menu-lg {
    min-width: 540px; }
  .navbar-nav .mega-menu {
    position: static; }
  .header .navbar .dropdown:hover > .dropdown-menu {
    -webkit-transform: translate3d(-50%, 0, 0);
            transform: translate3d(-50%, 0, 0);
    visibility: visible;
    opacity: 1; }
  .header .navbar .dropdown-menu .dropdown-submenu .dropdown-menu {
    left: 100%;
    right: auto;
    -webkit-transform: translate3d(15px, 10px, 0);
            transform: translate3d(15px, 10px, 0); }
  .header .navbar .dropdown-menu .dropdown-submenu .dropdown-menu.left-side {
    right: 100%;
    left: auto;
    -webkit-transform: translate3d(-15px, 10px, 0);
            transform: translate3d(-15px, 10px, 0); }
  .navbar-nav li:hover > ul.dropdown-menu {
    visibility: visible;
    opacity: 1; }
  .header-transparent .navbar-collapse, .header-style-03 .navbar-collapse {
    position: static; }
  .header.default .container, .header.default .container-fluid {
    position: relative; }
  .header.default .navbar-collapse {
    position: static; }
  .header.default .container-fluid .navbar-collapse {
    position: relative;
               }
  .header-style-02 .navbar .dropdown:hover > .dropdown-menu.megamenu {
    -webkit-transform: translate3d(-50%, -7px, 0);
            transform: translate3d(-50%, -7px, 0); }
  .header-style-03 .navbar .dropdown:hover > .dropdown-menu.megamenu {
    -webkit-transform: translate3d(-50%, -7px, 0);
            transform: translate3d(-50%, -7px, 0); }
  .header-transparent .navbar .dropdown:hover > .dropdown-menu.megamenu {
    -webkit-transform: translate3d(-50%, -26px, 0);
            transform: translate3d(-50%, -26px, 0); }
  .header.default .navbar .container .dropdown:hover > .dropdown-menu.megamenu {
    -webkit-transform: translate3d(-50%, -16px, 0);
            transform: translate3d(-50%, -16px, 0); }
  .header.default .container .dropdown:hover > .dropdown-menu.megamenu {
    -webkit-transform: translate3d(-50%, -16px, 0);
            transform: translate3d(-50%, -16px, 0); } }

@media (max-width: 1366px) {
  .navbar .navbar-nav .nav-link {
    padding: 10px 15px; } }

@media (max-width: 1199px) {
  .header .container-fluid {
    padding: 0 15px; }
  .navbar .navbar-brand {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 150px;
            flex: 0 0 150px; }
  .navbar .navbar-nav .nav-link {
    font-size: 16px;
    padding: 10px 14px; }
  .search-box {
    right: 15px; }
  .contact-number a {
    font-size: 14px; }
  .header.default .navbar .navbar-nav .nav-link {
    padding: 10px 0px; } }

@media (max-width: 991px) {
  .header .navbar .dropdown-menu {
    width: 100%; }
  .header.default .container {
    max-width: 100%; }
  .navbar-toggler {
    position: absolute;
    right: 15px;
    top: 50%;
    -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
    color: #022d62;
    border-color: #022d62;
    -webkit-box-shadow: none !important;
            box-shadow: none !important; }
  .header-style-02.sticky-top .navbar {
    position: relative;
    right: 0;
    top: 0px; }
  .header-style-03 .navbar-toggler {
    right: 0; }
  .header-style-03.sticky-top .navbar-toggler {
    color: #ffffff;
    border-color: #ffffff; }
  .header-style-03.sticky-top .navbar-toggler i {
    color: #ffffff; }
  .navbar-collapse {
    position: absolute;
    z-index: 999;
    background: #ffffff;
    width: 100%;
    left: 0;
    top: 80px;
    padding: 10px;
    -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); }
  .header .navbar-nav > li {
    display: block; }
  .navbar .navbar-nav .nav-item:last-child .nav-link {
    margin-right: 16px; }
  .navbar .navbar-nav .nav-item .nav-link {
    display: block;
    width: 93%; }
  .header-style-02 .navbar-toggler {
    position: absolute;
    right: 0;
    top: -40px;
    border-color: #ffffff;
    color: #ffffff; }
  .header-style-02.sticky-top .navbar-toggler {
    top: -35px; }
  .header-style-02 .navbar-collapse {
    top: 0; }
  .header-style-02 .navbar .navbar-nav .nav-item .nav-link {
    color: #022d62; }
  .header-style-02 .navbar .navbar-nav .nav-item:first-child .nav-link {
    padding-left: 10px; }
  .header .navbar .dropdown-menu {
    max-height: 200px;
    overflow: scroll;
    margin-bottom: 15px; }
  .header-style-03 {
    position: relative;
    background: #022d62; }
  .header-style-03 .navbar-toggler {
    border-color: #ffffff;
    color: #ffffff; }
  .header-style-03 .search .search-btn {
    color: #ffffff; }
  .header-style-03 .navbar-brand {
    padding: 10px 0px; }
  .header-style-03 .navbar .navbar-nav .nav-link {
    color: #162b2f; }
  .header-style-03 + .banner {
    margin-top: 0; }
  .header-inner .header-inner-nav.page-menu-top .nav li a {
    padding: 10px 20px; }
  .header-style-03 .navbar-collapse {
    position: absolute;
    top: 60px;
    z-index: 999;
    background: #ffffff;
    width: 100%;
    max-height: 400px;
    overflow: auto;
    left: 0;
    margin-left: 0px;
    -webkit-box-shadow: 2px 2px 4px 0px rgba(2, 45, 98, 0.1);
            box-shadow: 2px 2px 4px 0px rgba(2, 45, 98, 0.1); }
  .sticky-top .navbar-collapse {
    top: 70px; }
  .header-style-02.sticky-top .navbar-collapse {
    top: 0; }
  .header-transparent {
    position: relative;
    background: #022d62; }
  .header-transparent .navbar-toggler {
    border-color: #ffffff;
    color: #ffffff; }
  .header-transparent .search .search-btn {
    color: #ffffff; }
  .header-transparent .navbar .navbar-brand {
    padding: 14px 0px; }
  .navbar-expand-lg > .container, .navbar-expand-lg > .container-fluid {
    padding-left: 15px;
    padding-right: 15px; }
  .header-transparent .navbar .navbar-nav .nav-link {
    color: #162b2f; }
  .navbar .navbar-nav .dropdown.nav-item .nav-link:after {
    right: 20px; }
  .navbar .navbar-nav .dropdown.nav-item .nav-link:before {
    right: 15px; }
  .navbar .navbar-nav .dropdown.nav-item .nav-link:after {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg); }
  .navbar .navbar-nav .dropdown.nav-item .nav-link:before {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg); }
  .navbar .navbar-nav .dropdown.nav-item:hover .nav-link:after {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg); }
  .navbar .navbar-nav .dropdown.nav-item:hover .nav-link:before {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg); }
  header .nav-title {
    margin-bottom: 2px !important;
    margin-top: 10px; }
  .navbar .dropdown > .dropdown-menu li > a {
    padding: 6px 20px 6px 0; }
  .dropdown-menu.megamenu ul {
    margin-bottom: 11px; } }

@media (max-width: 767px) {
  .navbar .navbar-brand {
    padding: 10px 0; }
  .navbar-collapse {
    top: 60px; }
  .navbar-toggler {
    right: 15px; }
  .header.default .container .navbar-toggler {
    right: 15px; } }

/* sticky header */
@-webkit-keyframes stickySlideDown {
  0% {
    opacity: 0.7;
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%); }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0); } }
@keyframes stickySlideDown {
  0% {
    opacity: 0.7;
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%); }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0); } }

/*****************************
  banner
*****************************/
.banner h1 {
  color: #ffffff;
  font-size: 72px;
  line-height: 82px;
  margin-bottom: 20px; }

.banner h6 {
  color: #ffffff;
  margin-bottom: 30px; }

.swiper-button-prev, .swiper-button-next {
  background-image: none;
  opacity: 0.5;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out; }

.swiper-button-prev {
  left: 10%; }

.swiper-button-next {
  right: 10%; }

.swiper-button-prev:hover, .swiper-button-next:hover {
  opacity: 1; }

.banner ul {
  padding: 0;
  margin: 30px 0 50px;
  list-style-type: none;
  text-align: center; }

.banner ul li {
  display: inline-block; }

.banner ul li a {
  color: #ffffff;
  font-size: 18px;
  font-weight: 600;
  border-right: 2px solid #ffffff;
  padding: 0 15px; }

.banner ul li a:hover {
  color: #162b2f; }

.banner ul li:last-child a {
  border-right: 0; }

/* banner 02 */
.slider-02 .font-large {
  font-size: 86px;
  line-height: 100px; }

.text-stroke-white {
  color: transparent !important;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #ffffff;
  display: block; }

.text-stroke-primary {
  color: transparent !important;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #162b2f;
  display: block; }

.text-stroke-dark {
  color: transparent !important;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #022d62;
  display: block; }

/* banner 03 */
.banner-logo {
  padding: 10px 20px;
  background: #ef3139;
  -webkit-box-flex: 0;
      -ms-flex: 0 0 240px;
          flex: 0 0 240px;
  border-radius: 7px;
  color: #ffffff;
  font-size: 50px;
  line-height: 60px;
  position: relative;
  -ms-flex-item-align: center;
      align-self: center;
  margin-left: 20px;
  text-align: center;
  display: inline-block; }

.banner-logo:before {
  position: absolute;
  content: "";
  width: 30px;
  height: 21px;
  left: -30px;
  border-top: 20px solid rgba(239, 49, 57, 0);
  border-right: 20px solid #ef3139;
  top: 15px; }

.banner .swiper-button-big .icon-btn {
  font-size: 100px;
  background: transparent;
  font-weight: 500; }

/*************************
       Responsive
*************************/
@media (max-width: 991px) {
  .banner h1 {
    font-size: 66px;
    line-height: 76px;
    margin-bottom: 10px; }
  .slider-02 .font-large {
    font-size: 66px;
    line-height: 76px; }
  .swiper-button-prev {
    left: 5%; }
  .swiper-button-next {
    right: 5%; } }

@media (max-width: 767px) {
  .banner h1 {
    font-size: 42px;
    line-height: 52px;
    margin-bottom: 10px; }
  .slider-02 .font-large {
    font-size: 52px;
    line-height: 60px; }
  .banner-logo {
    width: auto;
    font-size: 50px;
    line-height: 50px; } }

/*****************************
  Layout
*****************************/
/*****************************
   Section Title
*****************************/
.section-title {
  margin-bottom: 50px; }

.section-title p {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 0;
  line-height: 1.5;
  color: #000000; }

/* Top Half Background */
.bg-dark-half-lg,
.bg-dark-half-md,
.bg-dark-half-sm {
  position: relative; }

.bg-dark-half-lg:before,
.bg-dark-half-md:before,
.bg-dark-half-sm:before {
  content: "";
  background: #162b2f;
  width: 100%;
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0; }

.bg-light-half-lg,
.bg-light-half-md,
.bg-light-half-sm {
  position: relative; }

.bg-light-half-lg:before,
.bg-light-half-md:before,
.bg-light-half-sm:before {
  content: "";
  background: #f6f6f6;
  width: 100%;
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0; }

.bg-dark-half-lg:before,
.bg-light-half-lg:before {
  height: 470px; }

.bg-dark-half-md:before,
.bg-light-half-md:before {
  height: 370px; }

.bg-dark-half-sm:before,
.bg-light-half-sm:before {
  height: 250px; }

/* Background Border Top */
.background-border-top {
  background: #ef3139;
  height: 5px;
  width: 100%;
  border-radius: 5px; }

/* Footer Address */
.contact-address .contact-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-bottom: 25px; }

.contact-address .contact-item:last-child {
  margin-bottom: 0; }

.contact-address .contact-item label {
  min-width: 100px;
  color: #022d62;
  font-style: italic;
  margin-bottom: 0;
  text-align: right;
  padding-right: 20px;
  font-weight: 500; }

.contact-address .contact-item p {
  margin-bottom: 0; }

.contact-address-02 .contact-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }

.contact-address-02 .contact-item:last-child {
  margin-bottom: 0; }

.contact-address-02 .contact-item label {
  min-width: 70px;
  color: #022d62;
  margin-bottom: 0;
  padding-right: 20px;
  font-weight: 600; }

.contact-address-02 .contact-item p {
  margin-bottom: 0; }

/* Sticky column */
.is-sticky {
  position: sticky;
  top: 130px; }

/* Back To Top */
.back-to-top {
  position: fixed;
  bottom: 30px;
  right: 30px;
  display: inline-block;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  width: 55px;
  height: 55px;
  line-height: 50px;
  overflow: hidden;
  cursor: pointer;
  -webkit-box-shadow: 0px 0px 12px rgba(2, 45, 98, 0.1);
          box-shadow: 0px 0px 12px rgba(2, 45, 98, 0.1);
  -webkit-transition: width 0.5s ease-in-out, margin 0.5s ease-in-out, border-radius 0.25s ease-in-out, color 0.25s ease-in-out;
  transition: width 0.5s ease-in-out, margin 0.5s ease-in-out, border-radius 0.25s ease-in-out, color 0.25s ease-in-out;
  z-index: 9; }

.back-to-top:hover, .back-to-top.auto {
  color: rgba(255, 255, 255, 0);
  -webkit-transition: width 0.5s ease-in-out, margin 0.5s ease-in-out, border-radius 1s 0.25 ease-in-out, color 0.25s ease-in-out 0.25s;
  transition: width 0.5s ease-in-out, margin 0.5s ease-in-out, border-radius 1s 0.25 ease-in-out, color 0.25s ease-in-out 0.25s; }

.back-to-top:hover:before, .back-to-top.auto:before {
  -webkit-animation: lineUp 1s cubic-bezier(0, 0.6, 1, 0.4) infinite 0.5s;
          animation: lineUp 1s cubic-bezier(0, 0.6, 1, 0.4) infinite 0.5s; }

.back-to-top:hover:after, .back-to-top.auto:after {
  -webkit-animation: tipUp 1s cubic-bezier(0, 0.6, 1, 0.4) infinite 0.5s;
          animation: tipUp 1s cubic-bezier(0, 0.6, 1, 0.4) infinite 0.5s; }

.back-to-top:before {
  position: absolute;
  display: inline-block;
  content: "";
  background: #ffffff;
  width: 3px;
  height: 20px;
  top: 50%;
  left: 50%;
  margin-top: -8px;
  margin-left: -2px;
  -webkit-transform: translateY(50px);
  transform: translateY(50px); }

.back-to-top:after {
  position: absolute;
  display: inline-block;
  content: "";
  width: 15px;
  height: 15px;
  color: #ffffff;
  border-top: 3px solid;
  border-left: 3px solid;
  -webkit-transform: rotateZ(45deg);
          transform: rotateZ(45deg);
  top: 50%;
  left: 50%;
  margin-top: -9px;
  margin-left: -8px;
  -webkit-transform: translateY(50px) rotateZ(45deg);
          transform: translateY(50px) rotateZ(45deg); }

@-webkit-keyframes tipUp {
  0% {
    -webkit-transform: translateY(50px) rotateZ(45deg);
            transform: translateY(50px) rotateZ(45deg); }
  100% {
    -webkit-transform: translateY(-70px) rotateZ(45deg);
            transform: translateY(-70px) rotateZ(45deg); } }

@keyframes tipUp {
  0% {
    -webkit-transform: translateY(50px) rotateZ(45deg);
            transform: translateY(50px) rotateZ(45deg); }
  100% {
    -webkit-transform: translateY(-70px) rotateZ(45deg);
            transform: translateY(-70px) rotateZ(45deg); } }

@-webkit-keyframes lineUp {
  0% {
    -webkit-transform: translateY(50px);
            transform: translateY(50px); }
  100% {
    -webkit-transform: translateY(-70px);
            transform: translateY(-70px); } }

@keyframes lineUp {
  0% {
    -webkit-transform: translateY(50px);
            transform: translateY(50px); }
  100% {
    -webkit-transform: translateY(-70px);
            transform: translateY(-70px); } }

.imageblock-section {
  position: relative;
  display: block;
  width: 100%; }

.imageblock-section-img {
  position: absolute;
  height: 100%;
  top: 0;
  padding: 0;
  float: left;
  left: 0;
  right: auto; }

.background-image-holder {
  position: absolute;
  height: 100%;
  top: 0;
  left: 0;
  background-size: cover !important;
  background-position: 50% 50% !important;
  -webkit-transition: opacity .3s linear;
  transition: opacity .3s linear;
  display: block;
  width: 100%; }

/* Header Inner */
.header-inner {
  padding: 15px 10px;
  background-size: cover;
  background-position: center center; }

.header-inner .header-inner-title {
  font-size: 18px; }

.header-inner-menu {
  padding-bottom: 0; }

.header-inner-menu .header-inner-title {
  margin-bottom: 80px; }

.header-inner .header-inner-nav {
  padding: 15px 0;
  background: -webkit-gradient(linear, left bottom, left top, color-stop(20%, black), color-stop(100%, rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 0)));
  background: linear-gradient(0deg, black 20%, rgba(255, 255, 255, 0) 100%, rgba(255, 255, 255, 0) 100%); }

.header-inner .header-inner-nav .nav li a {
  color: #ffffff;
  padding: 14px 40px;
  font-weight: 600;
  border-radius: 5px; }

.header-inner .header-inner-nav .nav li a.active {
  background: #ef3139; }

.contact-bg-logo {
  position: absolute;
  top: 0;
  z-index: -9; }
  .contact-bg-logo i {
    font-size: 42rem;
    color: rgba(239, 49, 57, 0.06); }

.badge-round {
  width: 120px;
  height: 120px;
  line-height: 120px;
  background: #ef3139;
  color: #ffffff;
  display: inline-block;
  border-radius: 50%;
  padding-top: 26px; }

.envelope-box {
  padding: 1em;
  border: 16px solid transparent;
  -o-border-image: 16 repeating-linear-gradient(-45deg, red 0, red 1em, transparent 0, transparent 2em, #58a 0, #58a 3em, transparent 0, transparent 4em);
     border-image: 16 repeating-linear-gradient(-45deg, red 0, red 1em, transparent 0, transparent 2em, #58a 0, #58a 3em, transparent 0, transparent 4em); }

.cookie {
  position: fixed;
  left: 50px;
  bottom: 50px;
  z-index: 9; }

@media (max-width: 1199px) {
  /* Header Inner */
  .header-inner {
    padding: 100px 0px; }
  .header-inner-menu {
    padding-bottom: 0; }
  .header-inner-menu .header-inner-title {
    margin-bottom: 60px; }
  .header-inner .header-inner-nav .nav li a {
    padding: 14px 38px; } }

@media (max-width: 991px) {
  /* Header Inner */
  .header-inner {
    padding: 80px 0px; }
  .header-inner-menu {
    padding-bottom: 0; }
  .header-inner-menu .header-inner-title {
    margin-bottom: 40px; }
  .header-inner .header-inner-nav .nav li a {
    padding: 10px 20px; } }

@media (max-width: 767px) {
  /* Header Inner */
  .header-inner {
    padding: 60px 0px; }
  .header-inner-menu {
    padding-bottom: 0; }
  .header-inner-menu .header-inner-title {
    margin-bottom: 20px; }
  .header-inner .header-inner-nav .nav li a {
    padding: 6px 14px; }
  .header-inner .header-inner-title {
    font-size: 16px; }
  /* section title */
  .section-title {
    margin-bottom: 30px; }
  .section-title p {
    font-size: 16px; }
  /* svg */
  .icon-bg-dar svg {
    width: 100%;
    height: 100%;
    left: 0; }
  .imageblock-section-img {
    position: relative;
    height: 400px; }
  .contact-bg-logo i {
    font-size: 30rem; }
  .imageblock-section-img {
    float: none; } }

@media (max-width: 575px) {
  /* Header Inner */
  .header-inner {
    padding: 40px 0px; }
  .header-inner-menu {
    padding-bottom: 0; }
  .bg-dark-half-sm:before, .bg-light-half-sm:before {
    height: 150px; }
  .contact-bg-logo i {
    font-size: 18rem; } }
    
    
/*************************
       my css
*************************/
.a-2{
  color: #293745;
    font-weight: 500;
    padding: 7px 0px;
    display: block;
  
}



/*************************
       Blog
*************************/
.blog-post {
  position: relative; }
  .blog-post .blog-post-image {
    position: relative;
    -webkit-transition: all .5s ease;
    transition: all .5s ease; }
    .blog-post .blog-post-image img {
      border-radius: 5px; }
  .blog-post .blog-post-content {
    padding: 20px 20px 0; }
    .blog-post .blog-post-content .blog-post-info {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      margin-bottom: 10px; }
      .blog-post .blog-post-content .blog-post-info .btn {
        padding: 5px 12px; }
      .blog-post .blog-post-content .blog-post-info .btn-round:before {
        width: 30px; }
      .blog-post .blog-post-content .blog-post-info .btn-round:hover:before {
        width: 100%; }
    .blog-post .blog-post-content .blog-post-date {
      padding-left: 15px; }
      .blog-post .blog-post-content .blog-post-date a {
        color: rgba(2, 45, 98, 0.5); }
        .blog-post .blog-post-content .blog-post-date a:hover {
          color: #ef3139; }
    .blog-post .blog-post-content .blog-post-details .blog-post-title a:hover {
      color: #ef3139; }

.blog-post .blog-post-content .blog-post-details .blog-post-meta {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 5px 0; }
  .blog-post .blog-post-content .blog-post-details .blog-post-meta a {
    padding: 0 15px;
    border-right: 1px solid #f6f6f6;
    color: #626262;
    font-weight: 500; }
    .blog-post .blog-post-content .blog-post-details .blog-post-meta a:first-child {
      padding-left: 0; }
    .blog-post .blog-post-content .blog-post-details .blog-post-meta a:hover {
      color: #ef3139; }

/* blog post sticky */
.blog-post-sticky .blog-post-image {
  position: relative; }
  .blog-post-sticky .blog-post-image:before {
    content: "\f005";
    position: absolute;
    top: 7px;
    right: 5px;
    z-index: 2;
    font-family: "Font Awesome 5 free";
    color: #ffffff;
    font-size: 14px;
    font-weight: 900;
    line-height: normal; }
  .blog-post-sticky .blog-post-image:after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    z-index: 1;
    border-style: solid;
    border-width: 0 45px 45px 0;
    border-color: transparent #ef3139 transparent transparent; }

.post-navigation .nav-previous {
  display: inline-block; }
  .post-navigation .nav-previous span {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    width: 230px;
    display: inline-block; }

.post-navigation .nav-next {
  display: inline-block;
  position: relative;
  float: right; }
  .post-navigation .nav-next span {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    width: 230px;
    display: inline-block; }

.pagination {
  margin-bottom: 0;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center; }

.comments .media-body p:last-child {
  margin-bottom: 0; }

/*************************
       Responsive
*************************/
@media (max-width: 767px) {
  .post-navigation .nav-previous {
    display: block;
    text-align: center; }
  .post-navigation .nav-next {
    display: block;
    text-align: center;
    float: none; } }

@media (max-width: 575px) {
  .blog-post-meta {
    display: block; }
  .blog-post-meta a {
    display: inline-block;
    margin-bottom: 5px; }
  .post-navigation .nav-previous span, .post-navigation .nav-next span {
    width: 150px; } }

/*****************************
    Footer
*****************************/
.footer {
  /* Social icon */ }
  .footer .container-fluid {
    padding: 0 100px; }
  .footer .footer-link {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
    .footer .footer-link ul {
      padding-right: 50px; }
      .footer .footer-link ul:last-child {
        padding-right: 0px; }
      .footer .footer-link ul li a {
        color: #293745;
        font-weight: 500;
        padding: 7px 0px;
        display: block; }
      .footer .footer-link ul li:hover a {
        color: #ef3139; }
      .footer .footer-link ul li:first-child a {
        padding-top: 0; }
      .footer .footer-link ul li:last-child a {
        padding-bottom: 0; }
  .footer .social-icon li {
    display: inline-block;
    margin-right: 50px; }
    .footer .social-icon li:last-child {
      margin-right: 0; }
    .footer .social-icon li a {
      font-size: 18px;
      color: #162b2f; }
    .footer .social-icon li:hover a {
      color: #ef3139; }
  .footer .footer-contact-info p {
    color: #293745;
    font-weight: 500; }
  .footer .flag-svg {
    height: 30px; }

.footer.bg-dark .footer-link ul li a {
  color: #ffffff; }
  .footer.bg-dark .footer-link ul li a:hover {
    color: #ef3139; }

.footer.bg-dark .social-icon li {
  margin-right: 30px; }
  .footer.bg-dark .social-icon li a {
    color: #ffffff; }
    .footer.bg-dark .social-icon li a:hover {
      color: #ef3139; }

/*************************
       Responsive
*************************/
@media (max-width: 767px) {
  .social-icon-lg li i {
    font-size: 24px; } }

@media (max-width: 575px) {
  .footer-link {
    display: block; }
    .footer-link ul li:first-child a {
      padding-top: 7px; }
    .footer-link ul li:last-child a {
      padding-bottom: 7px; }
  /* Social icon */
  .social-icon li {
    padding: 0 10px;
    margin-right: 8px; }
    .social-icon li i {
      font-size: 18px; } }

/*************************
       Responsive
*************************/
/*************************
       1700px
*************************/
@media only screen and (min-width: 1200px) and (max-width: 1400px) {
  .footer .container-fluid {
    padding: 0 15px; } }

@media (max-width: 991px) {
  .space-ptb {
    padding: 70px 0; }
  .space-pt {
    padding-top: 70px; }
  .space-pb {
    padding-bottom: 70px; }
  .footer .container-fluid {
    padding: 0 50px; }
  .swiper-button-prev, .swiper-button-next {
    display: none; } }

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .container {
    max-width: 96%; }
  .display-4 {
    font-size: 3rem; } }

@media (max-width: 767px) {
  h1 {
    font-size: 32px; }
  h2 {
    font-size: 28px; }
  h3 {
    font-size: 24px; }
  h4 {
    font-size: 20px; }
  h5 {
    font-size: 18px; }
  h6 {
    font-size: 17px; }
  .space-ptb {
    padding: 3px 10px; }
  .display-2 {
    font-size: 3rem !important; }
  .display-4 {
    font-size: 2rem; }
  .space-pt {
    padding-top: 50px; }
  .space-pb {
    padding-bottom: 50px; }
  .container {
    max-width: 100%; }
  .footer .container-fluid {
    padding: 0 30px; }
  .owl-carousel.testimonial .owl-nav i {
    display: none; } }

@media (max-width: 575px) {
  h1 {
    font-size: 30px; }
  h2 {
    font-size: 24px; }
  h3 {
    font-size: 22px; }
  .testimonial .testimonial-item .testimonial-content p {
    font-size: 18px; }
  .footer.bg-dark .social-icon li {
    margin-bottom: 7px; }
  .footer .footer-link {
    display: block; }
  .pagination .page-item .page-link {
    padding: 10px 15px; }
  .footer .social-icon li {
    margin-right: -22px; }
  .category-style-03 {
    display: block; }
  .category-style-03 a.category-item {
    display: inline-table; } }

@media (max-width: 479px) {
  .footer .container-fluid {
    padding: 0 15px; }
  .font-xlll {
    font-size: 30px;
    line-height: 30px; } }

/*# sourceMappingURL=../css/style.css.map */
 	</style>
 </head>
 <body>
 
 <section class="space-ptb overflow-hidden">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
        
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.961188074399!2d72.99955296482175!3d19.065443987093996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c60eef50a4e3%3A0xe89ad741fdf85133!2sAlive%20Inc%20-%20To%20Grow%20Together!5e0!3m2!1sen!2sin!4v1656945828267!5m2!1sen!2sin" width="30%" height="50%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div><br>
    
    <div class="col-md-6">
    <div class="p-6 bg-light h-100">
    <div class="contact-line">
    <h4>Complete the form below. We will respond as soon as possible.</h4>
    </div>
            
         
              
                           
      <form class="mt-6 row"name="Contact Email" method="post">
      <div class="mb-3 col-lg-6">
      <input type="text" class="form-control" id="contact-name" name="name" placeholder="First Name.."  onkeyup='validateName()'>
      <span class='error-message' id='name-error'></span>
      </div>
    
      <div class="mb-3 col-lg-6">
      <input type="text" class="form-control" id="contact-lastname" name="lastname" placeholder="Last Name.."  onkeyup='validateLname()'>
      <span class='error-message' id='lastname-error'></span>
      </div> 
            
      <div class="mb-3 col-12">
      <input type="email" class="form-control" id="contact-email"  name="email" placeholder="Enter Email" onkeyup='validateEmail()'>
      <span class='error-message' id='email-error'></span>
      </div>  
         
      <div class="mb-3 col-12 d-grid">
      <input type="tel" class="form-control" id="phone_number" name="phone" placeholder="Phone Number" onkeyup='validatePhone()'>
      <span class='error-message' id='phone-error'></span>
      </div>   

      <div class="mb-4 col-12">
      <textarea class="form-control" rows="5" id='contact-message'  name='message'  placeholder="Enter a brief message" onkeyup='validateMessage()'></textarea>
      <span class='error-message' id='message-error'></span>
      </div>
    
    <div class="mb-4 col-12">
    <div class="form-check ms-2">
    <input type="checkbox" class="form-check-input" name="checkbox" required id="flexCheckDefault">   
    <label class="form-check-label" for="flexCheckDefault">
           I agree to talk about my project with Alive Inc.
    </label>
    </div>
    </div>
    
    <div class="mb-0 col-12 d-grid">
    <input type="submit" name="submit" class="btn btn-primary btn-block" onclick='return validateForm()' > 
      <span class='error-message' id='submit-error'></span>
    </div>
    
   
    
         
    </form>
    </div>
    </div></div></div>
     <br>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    

     <script>
         function validateName() {

      var name = document.getElementById('contact-name').value;

      if(name.length == 0) {

        producePrompt('Please enter your name', 'name-error' , 'red')
        return false;

    }

    if (!name.match(/^[A-Za-z]{1}[A-Za-z]*$/)) {

        producePrompt('Enter Your First name.','name-error', 'red');
        return false;

    }

    producePrompt('Valid', 'name-error', 'green');
    return true;

}


         function validateLname() {

      var lastname = document.getElementById('contact-lastname').value;

      if(lastname.length == 0) {

        producePrompt('Please enter your last name', 'lastname-error' , 'red')
        return false;

    }

    if (!lastname.match(/^[A-Za-z]{1}[A-Za-z]*$/)) {

        producePrompt('Please enter your Last name.','lastname-error', 'red');
        return false;

    }

    producePrompt('Valid', 'lastname-error', 'green');
    return true;

}



function validatePhone() {

  var phone = document.getElementById('phone_number').value;

  if(phone.length == 0) {
      producePrompt('Phone number is required.', 'phone-error', 'red');
      return false;
  }

  if(phone.length != 10) {
      producePrompt('Error.', 'phone-error', 'red');
      return false;
  }

  if(!phone.match(/^[0-9]{10}$/)) {
      producePrompt('Only digits, please.' ,'phone-error', 'red');
      return false;
  }

  producePrompt('Valid', 'phone-error', 'green');
  return true;

}

function validateEmail () {

  var email = document.getElementById('contact-email').value;

  if(email.length == 0) {

    producePrompt('Email Invalid','email-error', 'red');
    return false;

}

if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {

    producePrompt('Email Invalid', 'email-error', 'red');
    return false;

}

producePrompt('Valid', 'email-error', 'green');
return true;

}

function validateMessage() {
  var message = document.getElementById('contact-message').value;
  var required = 30;
  var left = required - message.length;

  if (left > 0) {
    producePrompt(left + ' more characters required','message-error','red');
    return false;
}

producePrompt('Valid', 'message-error', 'green');
return true;

}

function validateForm() {
  if (!validateName() || !validateLname() || !validatePhone() || !validateEmail() || !validateMessage()) {
    jsShow('submit-error');
    producePrompt('Please fix errors to submit.', 'submit-error', 'red');
    setTimeout(function(){jsHide('submit-error');}, 2000);
    return false;
}
else {

}
}

function jsShow(id) {
  document.getElementById(id).style.display = 'block';
}

function jsHide(id) {
  document.getElementById(id).style.display = 'none';
}


function producePrompt(message, promptLocation, color) {

  document.getElementById(promptLocation).innerHTML = message;
  document.getElementById(promptLocation).style.color = color;

}
    </script>

     </body>
 </html>