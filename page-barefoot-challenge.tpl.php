<?php
/**
 * templage page for displaying stats
 */
?>
<div id="page-barefoot-challenge">

<div style='font: normal 400 43px "alternate-gothic-no-3-d-1","alternate-gothic-no-3-d-2",sans-serif;margin: 0;text-transform: uppercase;color: #383838;'>The Challenge Top 10</div>    
    <div id="leading">
        <div id="graphs" class="clearfix">
            <?php print corporate_barefoot_challenge_top(10); //Corporate Barefoot Challenge Top 10 ?>
        </div><!-- #graphs -->
    </div><!-- #leading -->
</div>
<style>
#page-barefoot-challenge {
width:1000px;
height:431px;
background: url(/sites/all/themes/odws/images/challenge/challenge-bg.jpg) no-repeat!important;
}
#page-leading-barefoot-challenge #leading {
	background: url(/sites/all/themes/odws/images/home-slide-bg.jpg) no-repeat;
    height:400px;
    width:646px;
}

#page-leading-barefoot-challenge #graphs {
	background: url(/sites/all/themes/odws/images/leading-bg.jpg) no-repeat;
	height: 400px;
    overflow:hidden;
}

#graphs p {
    border-bottom: 1px dashed #D6D1C7;
	color: #2d2d2d;
    font-size: 16px;
    margin: 0 29px 0 21px;
    padding: 80px 0 5px;
}

.page-challenge .messages {
    display:none;
}

.page-challengeform tbody {
    border-top: none;
}

.page-challenge .form-item {
    margin:0;
}

.page-challenge .form-text {
    margin:0;
    color:#8e8e8e;
    height: 24px;
    line-height: 24px;
}
#corporate-barefoot-form #edit-submit {
    float: right;
    width: 81px;
}

#corporate-barefoot-form #edit-company-wrapper {
    display:inline;
}

#corporate-barefoot-form #formTable {
    width:275px;
    height:110px;
    margin: 0;
}

#corporate-barefoot-form #edit-firstname {
    width:132px;
}

#corporate-barefoot-form #edit-lastname {
    width:132px;
    float: right;
}

#corporate-barefoot-form #edit-email {
    width:275px;
}

#corporate-barefoot-form #edit-company {
    width:186px;
}


.page-barefoot-challenge .status, .page-barefoot-challenge .error {
 /*   display:none;*/
}

.graph {
    padding-left: 25px;
	padding-top: 12px;
}

.bar-title {
	border-right: 1px solid #d7d3c8;
	clear: left;
	color: #3d3b37;
	font: bold 15px Arial, Helvetica, sans-serif;
	float: left;
	padding: 12px 0 16px;
    position: relative;
    top: -7px;
	width: 130px;
}
.bar-container {
	float: left;
	margin-left: 0;
	width: 307px;
}
.bar-container div {
	background-color: rgb(182, 213, 220);
	height: 24px;
	position: relative;
}
.bar-container div span {
	color: #847a67;
	font: 15px "john-doe-1","john-doe-2",serif;
	position: absolute;
	right: -92px;
	top: 3px;
}


#challenge-signup {
	height: 422px;
	position: relative;
	width: 315px;
}

#corporate-barefoot-form {
	padding: 85px 0 0 16px
}

#challenge-terms {
	bottom: 0;
	position: absolute;
	right: 15px;
}

#challenge-terms a {
	color: #e6dccd;
	font-size: 10px;
}

</style>
<div id="form-corporate-barefoot-challenge" class="content">
    <div id="wrapper">
        <div id="challenge-signup">
            <?php print corporate_barefoot_challenge(); //Corporate Signup Form ?>
            <script>
            $(document).ready(function(){

            $('#edit-firstname').focus(function(){
                if(this.value=='First name'){this.value=''}
            });
            $('#edit-firstname').blur(function(){
                if(this.value==''){this.value='First name'}
            });
            $('#edit-lastname').focus(function(){
                if(this.value=='Last name'){this.value=''}
            });
            $('#edit-lastname').blur(function(){
                if(this.value==''){this.value='Last name'}
            });
             $('#edit-email').focus(function(){
                if(this.value=='Email address'){this.value=''}
            });
            $('#edit-email').blur(function(){
                if(this.value==''){this.value='Email address'}
            });
            $('#edit-company').focus(function(){
                if(this.value=='Company name'){this.value=''}
            });
            $('#edit-company').blur(function(){
                if(this.value==''){this.value='Company name'}
            });

            $('#corporate-barefoot-form').submit(function(){
                var firstname = $('#edit-firstname');
                var lastname = $('#edit-lastname');
                var email = $('#edit-email');
                var company = $('#edit-company');

                if(firstname.val()=='First name'){
                    firstname.val('');
                }
                if(lastname.val()=='Last name'){
                    lastname.val('');
                }
                if(email.val()=='Email address'){
                    email.val('');
                }
                if(company.val()=='Company name'){
                    company.val('');
                }
            });
            });
            </script>
            <div class="clearfix">&nbsp;</div>
            <p id="challenge-terms"><a href="javascript:void(0);" onclick="window.open('/challenge-legal','popupterms','location=yes,menubar=yes,resizable=yes,scrollbars=yes,status=yes,titlebar=yes,toolbar=yes');">Click here to read Terms & Conditions</a></p>
        </div><!-- #challenge-singup -->
    </div>
</div>
<a href="/user/login" class="ajax_popup"><img src="/sites/all/themes/odws/images/login-header.png" alt="" title="" width="101" height="36"></a>
