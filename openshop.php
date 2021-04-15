<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!--icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="styles.css">
    <title>Fashion-Fix | Open a Shop</title>
</head>
<body>
<div class="container justify-content-around">
<p class="form-title">Fill in the store information</p>
    <form id="shop_info" class="row g-3" method="post" action ="sellersection.php" enctype="multipart/form-data">
        <dl class="col-md-4">
            <dt><b class="">*</b>Email</dt>
                <dd>
                    <span class="ctrl-item">
                        <input type="text" class="form-control form-control-sm validate" name="email" id="email"
                               placeholder="Enter your email">
                        <div class="ctrl-tip error"></div>
                    </span>
                </dd>
        </dl>
        <dl class="col-md-4">
            <dt><b class="v2-red-require">*</b>Password</dt>
                <dd>
                   <span class="ctrl-item">
                        <input type="password" class="form-control form-control-sm validate" name="password" id="oldPwdID"
                               placeholder="Enter the Password">
                        <span class="ctrl-tip error"></span>
                    </span>
                 </dd>
        </dl>
                <dl class="col-md-4">
                    <dt><b>*</b>Confirm Password</dt>
                    <dd>
                    <span class="ctrl-item">
                        <input type="password" class="form-control form-control-sm validate" name="password_confirmation"
                               placeholder="Enter your Password">
                        <span class="ctrl-tip error"></span>
                    </span>
                    </dd>
                </dl>
                <dl class="col-md-5">
                <dt><b >*</b>First Name</dt>
                <dd>
                    <span class="ctrl-item">
                        <input type="text" class="form-control form-control-sm validate" value=""
                               name="FirstName" placeholder="Enter your First Name">
                        <span class="ctrl-tip error"></span>
                    </span>

                </dd>
            </dl>
            <dl class="col-md-5">
                <dt><b >*</b>Last Name</dt>
                <dd>
                    <span class="ctrl-item">
                        <input type="text" class="form-control form-control-sm validate" value=""
                               name="LastName" placeholder="Enter your Last Name">
                        <span class="ctrl-tip error"></span>
                    </span>

                </dd>
            </dl>
                <dl class="col-7">
                <dt><b >*</b>Mobile phone</dt>
                <dd>
                    <span class="ctrl-item">

                        <select name="country_code" id="country_code" class="col-md-2">
                            <option value="254" selected>+254</option>
                            <option value="256" >+256</option>
                            <option value="234" >+234</option>
                        </select>
                        <input name="phonenumber" id="phone" type="text" class="form-control form-control-sm validate col-6"
                                placeholder="e.g. 700200100" >
                    </span>
                </dd>
            </dl>

            <div  class="col-7">
                <dl class="">
                    <dt><b class="v2-red-require">*</b>ID Card Number</dt>
                    <dd>
                        <span class="">
                            <input type="text" class="form-control form-control-sm validate" value=""
                                   name="idno" placeholder="Enter the ID card number">
                            <span class="ctrl-tip ctrl-tip-inline error"></span>
                        </span>

                    </dd>
                </dl>
            </div>
            <div  class="col-7 company-box-info">
                <dl class="">
                    <dt><b class="">*</b>Company name</dt>
                    <dd>
                        <span class="">
                            <input type="text" class="form-control form-control-sm validate" value=""
                                   name="company_name" placeholder="Enter the Company name">
                            <span class="ctrl-tip  ctrl-tip-inline error"></span>
                        </span>
                    </dd>
                </dl>

            </div>

</div>
<!--bank info-->
<div class=" " style="margin: 30px;">
            <input type="hidden" id="payTypeID" name="payment_type" value="1">
            <p class="f18 c42 mt40 mb20">Settlement account information</p>
            <div class="bankpay-box-info">
                <dl class="row mb-3">
                    <dt class="col-sm-2 col-form-label"><b >*</b>Bank Account Name</dt>
                    <dd>
                        <span class="col-sm-10">
                            <input name="bank_account_name"
                                   value="" type="text"
                                   class="form-control form-control-sm validate" placeholder="Please enter your bank card name">
                        </span>
                    </dd>
                </dl>

                <dl class="row mb-3">
                    <dt class="col-sm-2 col-form-label"><b>*</b>Account Number</dt>
                    <dd>
                        <span class="col-sm-10">
                            <input name="bank_account_number"
                                   value="" type="text"
                                   class="form-control form-control-sm validate" placeholder="Enter the Account Number.">
                        </span>
                    </dd>
                </dl>
                <dl class="row mb-3">
                    <dt class="col-sm-2 col-form-label"><b>*</b>Bank Name</dt>
                    <dd>
                        <span class="col-sm-10">
                            <input name="bank_name" value="" type="text"
                                   class="form-control form-control-sm validate" placeholder="Enter the Bank Name.">
                        </span>
                    </dd>
                </dl>
                <dl class="row mb-3">
                    <dt class="col-sm-2 col-form-label"><b>*</b>Branch Bank Name</dt>
                    <dd>
                        <span class="col-sm-10">
                            <input name="bank_branch_name" value=""
                                   type="text" class="form-control form-control-sm validate "
                                   placeholder="Enter the Branch Bank Name">
                        </span>
                    </dd>
                </dl>
                  </div>
                  <div style="margin: 30px;">
            <p class="f18 c42 mt40 mb20" >Store Management Information</p>
            <dl class="row mb-3" >
                <dt class="col-sm-2 col-form-label"><b class="">*</b>Store Name</dt>
                <dd>
                    <span class="col-sm-10">
                        <input name="store_name" id="store_name" value=""
                               type="text" class="form-control form-control-sm validate" placeholder="Store name can not be modified.">
                    </span>
                </dd>
            </dl>
            </div>
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