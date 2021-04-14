<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


<!--icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
<p class="form-title">Fill in the store information</p>
    <form id="shop_info" class="row g-3" method="post" action ="sellersection.php" enctype="multipart/form-data">
        <dl class="col-md-4">
            <dt><b class="">*</b>Email</dt>
                <dd>
                    <span class="ctrl-item">
                        <input type="text" class="w-270 h-46" name="email" id="email"
                               placeholder="Enter your email">
                        <div class="ctrl-tip error"></div>
                    </span>
                </dd>
        </dl>
        <dl class="col-md-4">
            <dt><b class="v2-red-require">*</b>Password</dt>
                <dd>
                   <span class="ctrl-item">
                        <input type="password" class="w270 h46" name="password" id="oldPwdID"
                               placeholder="Enter the Password">
                        <span class="ctrl-tip error"></span>
                    </span>
                 </dd>
        </dl>
                <dl class="col-md-4">
                    <dt><b class="v2-red-require">*</b>Confirm Password</dt>
                    <dd>
                    <span class="ctrl-item">
                        <input type="password" class="w270 h46" name="password_confirmation"
                               placeholder="Enter your Password">
                        <span class="ctrl-tip error"></span>
                    </span>
                    </dd>
                </dl>
                <dl class="col-md-5">
                <dt><b class="v2-red-require">*</b>First Name</dt>
                <dd>
                    <span class="ctrl-item">
                        <input type="text" class="w270 h46" value=""
                               name="FirstName" placeholder="Enter your First Name">
                        <span class="ctrl-tip error"></span>
                    </span>

                </dd>
            </dl>
            <dl class="col-md-5">
                <dt><b class="v2-red-require">*</b>Last Name</dt>
                <dd>
                    <span class="ctrl-item">
                        <input type="text" class="w270 h46" value=""
                               name="LastName" placeholder="Enter your Last Name">
                        <span class="ctrl-tip error"></span>
                    </span>

                </dd>
            </dl>
                <dl class="col-md-6" style="float:left;">
                <dt><b class="v2-red-require">*</b>Mobile phone</dt>
                <dd>
                    <span class="ctrl-item">

                        <select name="country_code" id="country_code" class="col-md-2" onchange="ChangeArea()">
                            <option value="254" selected>+254</option>
                            <option value="256" >+256</option>
                            <option value="234" >+234</option>
                        </select>
                        <input name="phonenumber" id="phone" type="text" class="col-md-4"
                                placeholder="e.g. 700200100" >
                        <span class="ctrl-tip  ctrl-tip-inline error" style="display: block"></span>
                    </span>
                </dd>
            </dl>

                        <dl class="ctrl-cf"></dl>
            <div  class="col-12">
                <dl class="ctrl-box mr100">
                    <dt><b class="v2-red-require">*</b>ID Card Number</dt>
                    <dd>
                        <span class="ctrl-item">
                            <input type="text" class="w680 h46" value=""
                                   name="idno" placeholder="Enter the ID card number">
                            <span class="ctrl-tip ctrl-tip-inline error"></span>
                        </span>

                    </dd>
                </dl>
            </div>
            <div  class="company-box-info">
                <dl class="col-12">
                    <dt><b class="v2-red-require">*</b>Company name</dt>
                    <dd>
                        <span class="ctrl-item">
                            <input type="text" class="w680 h46" value=""
                                   name="company_name" placeholder="Enter the Company name">
                            <span class="ctrl-tip  ctrl-tip-inline error"></span>
                        </span>
                    </dd>
                </dl>

            </div>
            <dl class="ctrl-cf"></dl>
</div>

<div class="container wrapper" style="padding-bottom: 30px;">
            <input type="hidden" id="payTypeID" name="payment_type" value="1">
            <dl class="ctrl-cf"></dl>
            <p class="f18 c42 mt40 mb20">Settlement account information</p>
            <div class="bankpay-box-info">
                <dl class="ctrl-box ctrl-inline w">
                    <dt class="lh46 w180"><b class="v2-red-require">*</b>Bank Account Name</dt>
                    <dd>
                        <span class="ctrl-item">
                            <input name="bank_account_name"
                                   value="" type="text"
                                   class="w380 h46" placeholder="Enter the Bank Account Name.">
                            <span class="ctrl-notice">Please enter your bank card name.</span>
                            <span class="ctrl-tip  ctrl-tip-inline error"></span>
                        </span>
                    </dd>
                </dl>
                <dl class="ctrl-box ctrl-inline w">
                    <dt class="lh46 w180"><b class="v2-red-require">*</b>Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number</dt>
                    <dd>
                        <span class="ctrl-item">
                            <input name="bank_account_number"
                                   value="" type="text"
                                   class="w380 h46" placeholder="Enter the Account Number.">
                            <span class="ctrl-notice">Please enter your bank account number. (e.g.,82090155260000676)</span>
                            <span class="ctrl-tip  ctrl-tip-inline error"></span>
                        </span>
                    </dd>
                </dl>
                <dl class="ctrl-box ctrl-inline w">
                    <dt class="lh46 w180"><b class="v2-red-require">*</b>Bank&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name</dt>
                    <dd>
                        <span class="ctrl-item">
                            <input name="bank_name" value="" type="text"
                                   class="w380 h46" placeholder="Enter the Bank Name.">
                            <span class="ctrl-notice">Please enter the bank name.</span>
                            <span class="ctrl-tip  ctrl-tip-inline error"></span>
                        </span>
                    </dd>
                </dl>
                <dl class="ctrl-box ctrl-inline w">
                    <dt class="lh46 w180"><b class="v2-red-require">*</b>Branch&nbsp;&nbsp;Bank&nbsp;&nbsp;Name</dt>
                    <dd>
                        <span class="ctrl-item">
                            <input name="bank_branch_name" value=""
                                   type="text" class="w380 h46"
                                   placeholder="Enter the Branch Bank Name">
                            <span class="ctrl-notice">Please fill in the bank + city name + branch.</span>
                            <span class="ctrl-tip  ctrl-tip-inline error"></span>
                        </span>
                    </dd>
                </dl>
                  </div>
            <p class="f18 c42 mt40 mb20" >Store Management Information</p>
            <dl class="ctrl-box ctrl-inline w" >
                <dt class="lh46 w180"><b class="v2-red-require">*</b>Store Name</dt>
                <dd>
                    <span class="ctrl-item">
                        <input name="store_name" id="store_name" value=""
                               type="text" class="w380 h46" placeholder="Store name can not be modified.">
                        <span class="ctrl-tip  ctrl-tip-inline error"></span>
                    </span>
                </dd>
            </dl>
</div>
<div style="background: #F4F4F4;margin-top:10px;">
            <div class="wrapper pt20 pb100">
                <div class="gobal-box-info">
                    <div class="f14 c40">
                    <input type="checkbox" id="agreementID" checked="checked">
                    I have read and agreed to the
                    <a href="" target="_blank"
                        style="color: #4A90E2;text-decoration: underline;">agreement</a>
                </div>
            </div>
        <div style="background: #F4F4F4;margin-top:10px;">
            <div class="tc mt50" style="padding:80px;">
                <span class="v2-btn v2-white-btn mr60"><a href="index.php?act=store_joinin&op=index">Previous step</a></span>
                <button class="v2-btn v2-blue-btn" id="btn_apply_company_next" name ="submit">Submit</button>
                <span class="v2-btn v2-grey-btn" style="display:none" id="btn_apply_grey">Submit</span>
            </div>
        </div>
</div>
</form>
</div>
</body>
</html>