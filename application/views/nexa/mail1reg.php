

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexa</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Nexa</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <!--p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p-->


                        <p class="text-white">Nexa electricals trading LLC </p><p class="text-white"
                        >LLC AI Nakhal Road </p>
                    </div>
                </div>
            </div>
        </div>
<?php
//print_r($billdetail);
        /*$data = array(
            'lastname' =>"$lname",
            'state' =>"$state",
            'country' =>"$country",
            'apartment' =>"$apartment",
            'city' =>"$city",
            'companyname' =>"$companyname",
            'phone'=>$phone,'name'=>"$name",'password'=>"$pass",'lastname'=>"$lname",'address'=>$saddress,'zip'=>$zip,'email'=> $email
         );*/

        ?>

        

            <div class="body-section">
            <h3 class="heading">Registration Details</h3>
            <br>

            <table class="table-bordered">
            <thead>
        <tr>
            <th class="w-20">Sl.No:</th>
            <th class="w-20">Name</th>
            <th class="w-20">Email</th>
            <th class="w-20">Phone</th>
            <th class="w-20">Address</th>
            <th class="w-20">Apartment</th>
            <th class="w-20">Country</th>
            <th class="w-20">Zip</th>
            <th class="w-20">Company Name</th>
           <th class="w-20">City</th><th  class="w-20">State</th>
            
            
        </tr>
    </thead>
    <tbody>
        <?php 
        $slno = 0;
       
            $slno++; ?>
            <tr>
                <td align="center">
                    <?=$slno?></td>
                <td align="center"><?=trim($name)?></td>
                <td align="center"><?=$email?></td>
                <td align="center"><?=$phone?></td>
                <td align="center"><?=$address?></td>
                <td align="center"><?=$apartment?></td>
                <td align="center"><?=$country?></td>
                <td align="center"><?=$zip?></td>
                <td align="center"><?=$companyname?></td>
               
                <td align="center"><?=$city?></td>
                <td align="center"><?=$state?></td>

               

               
                
            </tr>
         
        <?php //} ?>
    </tbody>
</table>

           
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2024 - Nexa electricals. All rights reserved. 
                <a href="https://schneiderelectricals.com" class="float-right">www.schneiderelectricals.com</a>
            </p>
        </div>      
    </div>      

</body>
</html>