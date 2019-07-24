<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$serverName = "localhost";
$connectionOptions = array(
  "Database" => "FAC",
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if($conn)
echo "Connected!";

$sql = "SELECT TOP 10 AUDITEENAME, EIN, STATE, FACACCEPTEDDATE, TOTFEDEXPEND, PYSCHEDULE FROM dbo.gen";
$stmt = sqlsrv_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="robots" content="noindex, nofollow"/>
  <title>Audits-initial</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <!--<link href="https://centennial-tech-test.microsoftcrmportals.com/grants-initial//theme.css" type="text/css" rel="stylesheet"/>-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link href="/theme.css" type="text/css" rel="stylesheet"/>
  <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
  <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
  <link href="data/styles.css" type="text/css" rel="stylesheet"/>
  <link href="files/grants-initial/styles.css" type="text/css" rel="stylesheet"/>
  <link href="https://axure.guru/cdn/FontAwesome-501/css/fontawesome-all.axure.guru.css" type="text/css" rel="stylesheet"/>
  <script type="text/javascript">
  AXSHARE_HOST_URL = 'http://app.axure.cloud';
  AXSHARE_HOST_SECURE_URL = 'https://share.axure.com';
  ACCOUNT_SERVICE_URL = 'http://accounts.axure.com';
  ACCOUNT_SERVICE_SECURE_URL = 'https://accounts.axure.com';
  ON_PREM_LDAP_ENABLED = 'false';
  </script><script src="resources/scripts/jquery-1.7.1.min.js"></script>
  <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
  <script src="resources/scripts/prototypePre.js"></script>
  <script src="data/document.js"></script>
  <script src="resources/scripts/prototypePost.js"></script>
  <script src="files/grants-initial/data.js"></script>
  <script type="text/javascript">
  $axure.utils.getTransparentGifPath = function() { return 'https://d1h0x9w88ijkiq.cloudfront.net/3372/images/transparent.gif'; };
  $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
  $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
  </script>

  <script>
  $(document).ready(function(){
    $("iframe").each(function( index ) {
      var iframeSrc = $(this).attr('src') || '';
      if(iframeSrc.indexOf('http:') != -1){
        $(this).attr('scrolling', 'auto');
        $(this).css('overflow', 'auto');
        $(this).attr('src', 'https://uftnur.axshare.com/');
      }
    });
  });
  </script>
</head>
<body>


  <div id="base" class="">

    <!-- Unnamed (Rectangle) -->
    <div id="u37" class="ax_default box_2">
      <div id="u37_div" class=""></div>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u38" class="ax_default image ax_default_hidden" style="display:none; visibility: hidden">
      <img id="u38_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u38.png?token=d9b80a3ca27e8737eeccc969fe2d6ed4a4afdefcaa03be0c0b1a28889d6a4d14"/>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u39" class="ax_default ax_default_hidden" style="display:none; visibility: hidden" data-left="0" data-top="0" data-width="0" data-height="0">

      <!-- Unnamed (Rectangle) -->
      <div id="u40" class="ax_default shape">
        <div id="u40_div" class=""></div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u41" class="ax_default shape">
        <div id="u41_div" class=""></div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u42" class="ax_default paragraph1">
        <div id="u42_div" class=""></div>
        <div id="u42_text" class="text ">
          <p><span>Documents submitted with application: 7</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u48" class="ax_default shape">
        <div id="u48_div" class=""></div>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u49" class="ax_default box_2 ax_default_hidden" style="display:none; visibility: hidden">
      <div id="u49_div" class=""></div>
    </div>

    <!-- Unnamed (Footer) -->

    <!-- Unnamed (Rectangle) -->
    <div id="u52" class="ax_default box_2">
      <div id="u52_div" class=""></div>
    </div>

    <!-- applications-list (Dynamic Panel) -->
    <div id="u53" class="ax_default" data-label="applications-list">
      <div id="u53_state0" class="panel_state" data-label="State1" style="">
        <div id="u53_state0_content" class="panel_state_content">
        </div>
      </div>
    </div>
    <table id = 'headingtbl2'>
      <thead id = 'heading'>
        <tr>
          <td colspan = "5" style="padding-right: 350px;">Auditee ▼</td>
          <td style="padding-right: 100px;">State</td>
          <td colspan = "2" style="padding-right: 100px;">Auditee EIN</td>
          <td colspan = "2" style="padding-right: 100px;">Assigned On</td>
          <td colspan = "2" style="padding-right: 100px;">Assigned By</td>
        </tr>
      </thead>
    </table>
    <table id = 'tbl2' cellspacing="40">
      <thead id = 'heading'>
        <tr>
          <td colspan = "5" style="padding-right: 440px;"></td>
          <td style="padding-right: 145px;"></td>
          <td colspan = "2" style="padding-right: 200px;"></td>
          <td colspan = "2" style="padding-right: 215px;"></td>
          <td colspan = "2" style="padding-right: 200px;"></td>
        </tr>
      </thead>
      <div id = 'scrollbody'>
        <tbody>
          <tr>
            <td colspan = "5">
              Richmond Redevelopment and Housing Authority
            </td>
            <td>
              33-1234888
            </td>
            <td colspan = "2">
              10/06/2018
            </td>
            <td colspan = "2">
              Jacqueline Bowman
            </td>
            <td colspan = "2">
              Initial audit complete
            </td>
          </tr>
          <tr>
            <td colspan = "5">
              City of Norfolk
            </td>
            <td>
              73-1234888
            </td>
            <td colspan = "2">
              10/05/2018
            </td>
            <td colspan = "2">
              Judy Larson
            </td>
            <td colspan = "2">
              Initial audit complete
            </td>
          </tr>
          <tr>
            <td colspan = "5">
              Eastern Virginia Medical School
            </td>
            <td>
              53-1234888
            </td>
            <td colspan = "2">
              10/01/2018
            </td>
            <td colspan = "2">
              Nicholas White
            </td>
            <td colspan = "2">
              Initial audit complete
            </td>
          </tr>
        </tbody>
      </div>
    </table>

    <table id = 'headingtbl3'>
      <thead id = 'heading'>
        <tr>
          <td colspan = "5" style="padding-right: 350px;">Auditee ▼</td>
          <td style="padding-right: 100px;">State</td>
          <td colspan = "2" style="padding-right: 100px;">Auditee EIN</td>
          <td colspan = "2" style="padding-right: 100px;">Assigned On</td>
          <td colspan = "2" style="padding-right: 100px;">Assigned By</td>
        </tr>
      </thead>
    </table>
    <table id = 'tbl3' cellspacing="40">
      <thead id = 'heading'>
        <tr>
          <td colspan = "5" style="padding-right: 440px;"></td>
          <td style="padding-right: 145px;"></td>
          <td colspan = "2" style="padding-right: 200px;"></td>
          <td colspan = "2" style="padding-right: 215px;"></td>
          <td colspan = "2" style="padding-right: 200px;"></td>
        </tr>
      </thead>
      <div id = 'scrollbody'>
        <tbody>
          <tr>
            <td colspan = "5">
              Richmond Redevelopment and Housing Authority
            </td>
            <td>
              33-1234888
            </td>
            <td colspan = "2">
              10/06/2018
            </td>
            <td colspan = "2">
              Jacqueline Bowman
            </td>
            <td colspan = "2">
              Monitoring
            </td>
          </tr>
          <tr>
            <td colspan = "5">
              City of Norfolk
            </td>
            <td>
              73-1234888
            </td>
            <td colspan = "2">
              10/05/2018
            </td>
            <td colspan = "2">
              Judy Larson
            </td>
            <td colspan = "2">
              Monitoring
            </td>
          </tr>
          <tr>
            <td colspan = "5">
              Eastern Virginia Medical School
            </td>
            <td>
              53-1234888
            </td>
            <td colspan = "2">
              10/01/2018
            </td>
            <td colspan = "2">
              Nicholas White
            </td>
            <td colspan = "2">
              Monitoring
            </td>
          </tr>
        </tbody>
      </div>
    </table>
    <style>
    table {
    }
    tr:nth-child(odd) {background-color: #f2f2f2;}
    </style>
  </head>
  <body>
    <script>
    function searchFunction() {
      // Declare variables
      var x = document.getElementById("tbl");
      var y = document.getElementById("tbl2");
      var z = document.getElementById("tbl3");
      if (window.getComputedStyle(x).display !== "none"){
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("tbl");
        tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
              tr[0].style.display = "";
            }
            else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      if (window.getComputedStyle(y).display !== "none"){
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("tbl2");
        tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
              tr[0].style.display = "";
            }
            else {
              tr[i].style.display = "none";
            }
          }
        }
      }
      if (window.getComputedStyle(z).display !== "none"){
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("tbl3");
        tr = table.getElementsByTagName("tr");
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
              tr[0].style.display = "";
            }
            else {
              tr[i].style.display = "none";
            }
          }
        }
      }
    }

    </script>

    <!-- Unnamed (Rectangle) -->
    <div id="u145" class="ax_default box_2">
      <div id="u145_div" class=""></div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u146" class="ax_default box_2">
      <div id="u146_div" class=""></div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u148" class="ax_default" data-left="19" data-top="71" data-width="17" data-height="20">

      <!-- Unnamed (Rectangle) -->
      <div id="u149" class="ax_default fontawesome">
        <div id="u149_div" class=""></div>
        <div id="u149_text" class="text ">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u150" class="ax_default fontawesome">
        <div id="u150_div" class=""></div>
        <div id="u150_text" class="text ">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u151" class="ax_default fontawesome">
        <div id="u151_div" class=""></div>
        <div id="u151_text" class="text ">
          <p><span></span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u152" class="ax_default label">
      <div id="u152_div" class=""></div>
      <div id="u152_text" class="text ">
        <p><span>Home</span></p>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u153" class="ax_default label">
      <div id="u153_div" class=""></div>
      <div id="u153_text" class="text ">
        <p><span>Grants ▾</span></p>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u154" class="ax_default label">
      <div id="u154_div" class=""></div>
      <div id="u154_text" class="text ">
        <p><span>Audits ▾</span></p>
      </div>
    </div>

    <div id="u154a" class="ax_default label">
      <div id="u154a_div" class=""></div>
      <div id="u154a_text" class="text ">
        <p><span>FAC</span></p>
      </div>
    </div>

    <!-- Unnamed (Horizontal Line) -->
    <div id="u155" class="ax_default line">
      <img id="u155_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u155.png?token=3e65980cc3d00a08ee58067efa4b05a6b60793a8cb7d4122224d0f436a32fc4e"/>
    </div>

    <!-- Unnamed (Vertical Line) -->
    <div id="u156" class="ax_default line">
      <img id="u156_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u156.png?token=087a06a0d619cf3cb3651cda7520547cdd0cf9fe9f1863ddefe345a7a4716509"/>
    </div>

    <!-- Unnamed (Vertical Line) -->
    <div id="u157" class="ax_default line">
      <img id="u157_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u156.png?token=087a06a0d619cf3cb3651cda7520547cdd0cf9fe9f1863ddefe345a7a4716509"/>
    </div>

    <!-- Unnamed (Shape) -->
    <div id="u158" class="ax_default icon">
      <img id="u158_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u158.png?token=308a76162cc911dace65173ed06b74b58a9121d739a254d77e1d7fe0df1cb5e6"/>
    </div>

    <!-- Unnamed (Shape) -->
    <div id="u159" class="ax_default icon">
      <img id="u159_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u158.png?token=308a76162cc911dace65173ed06b74b58a9121d739a254d77e1d7fe0df1cb5e6"/>
    </div>

    <!-- Unnamed (Horizontal Line) -->
    <div id="u160" class="ax_default line">
      <img id="u160_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u160.png?token=1f8a4ffcc81534fd9cddacb674f4d1223101adf1229dc895f8dac0836578055c"/>
    </div>

    <!-- Unnamed (Horizontal Line) -->
    <div id="u161" class="ax_default line">
      <img id="u161_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u161.png?token=5a14d6ce4cd3daf1dbf3950b0c112667b8e9eb1d2cd7791cfc96745d90ce2933"/>
    </div>

    <!-- Unnamed (Horizontal Line) -->
    <div id="u162" class="ax_default line">
      <img id="u162_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u162.png?token=85b01772d2923537d629b76ae97a185633a375ab094ec1153699cb8b5f2a96da"/>
    </div>

    <div id="u163_notif" class="ax_default image">
      <img id="u163_img" class="img " src="https://freeicons.io/laravel/public/uploads/icons/png/16496749731558965393-128.png"/>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u163" class="ax_default image">
      <img id="u163_img" class="img " src="https://centennial-tech-test.microsoftcrmportals.com/grants-initial/pfp.png"/>
    </div>

    <!-- GrantsMenuDP (Dynamic Panel) -->
    <div id="u164" class="ax_default ax_default_hidden" data-label="GrantsMenuDP" style="display:none; visibility: hidden">
      <div id="u164_state0" class="panel_state" data-label="State1" style="">
        <div id="u164_state0_content" class="panel_state_content">

          <!-- Unnamed (Rectangle) -->
          <div id="u165" class="ax_default box_2">
            <div id="u165_div" class=""></div>
            <div id="u165_text" class="text ">
              <p><span>Applications</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u166" class="ax_default box_2">
            <div id="u166_div" class=""></div>
            <div id="u166_text" class="text ">
              <p><span>Review Budget</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u167" class="ax_default box_2">
            <div id="u167_div" class=""></div>
            <div id="u167_text" class="text ">
              <p><span>Low Risk Applications</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u168" class="ax_default box_2">
            <div id="u168_div" class=""></div>
            <div id="u168_text" class="text ">
              <p><span>Previous Audit Findings &amp; High Risk</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Unnamed (Hot Spot) -->
    <div id="u169" class="ax_default">
    </div>

    <!-- Unnamed (Hot Spot) -->
    <div id="u170" class="ax_default">
    </div>

    <!-- userinfo (Dynamic Panel) -->
    <div id="u171" class="ax_default ax_default_hidden" data-label="userinfo" style="display:none; visibility: hidden">
      <div id="u171_state0" class="panel_state" data-label="State1" style="">
        <div id="u171_state0_content" class="panel_state_content">

          <!-- Unnamed (Triangle Left) -->
          <div id="u172" class="ax_default shape">
            <img id="u172_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u172.png?token=fd22f1e69cb1c9e52c2cb92b7b987d2ccf544515c8c5ea4113b585cb7d225b87"/>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u173" class="ax_default shape">
            <div id="u173_div" class=""></div>
          </div>

          <!-- Unnamed (Triangle Left) -->
          <div id="u174" class="ax_default shape">
            <img id="u174_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u174.png?token=4cf35c7172e8e2deadefc4595790276019ba0838ba6555e012c062882e51afd2"/>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u175" class="ax_default label">
            <div id="u175_div" class=""></div>
            <div id="u175_text" class="text ">
              <p><span>Jacqueline Bowman</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u176" class="ax_default box_2">
            <div id="u176_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u177" class="ax_default label">
            <div id="u177_div" class=""></div>
            <div id="u177_text" class="text ">
              <p><span>Program Manager</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u178" class="ax_default label">
            <div id="u178_div" class=""></div>
            <div id="u178_text" class="text ">
              <p><span>jacqueline.bowman@hhs.gov</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u179" class="ax_default label">
            <div id="u179_div" class=""></div>
            <div id="u179_text" class="text ">
              <p><span>(202) 558-7858</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u180" class="ax_default label">
            <div id="u180_div" class=""></div>
            <div id="u180_text" class="text ">
              <p><span>Logout</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- AuditsMenuDP (Dynamic Panel) -->
    <div id="u181" class="ax_default ax_default_hidden" data-label="AuditsMenuDP" style="display:none; visibility: hidden">
      <div id="u181_state0" class="panel_state" data-label="State1" style="">
        <div id="u181_state0_content" class="panel_state_content">

          <!-- Unnamed (Rectangle) -->
          <div id="u182" class="ax_default box_2">
            <div id="u182_div" class=""></div>
            <div id="u182_text" class="text ">
              <p><span>My Audits</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u183" class="ax_default box_2">
            <div id="u183_div" class=""></div>
            <div id="u183_text" class="text ">
              <p><span>Assign Audits</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u184" class="ax_default box_2">
            <div id="u184_div" class=""></div>
            <div id="u184_text" class="text ">
              <p><span>Access Risk</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Unnamed (Hot Spot) -->
    <div id="u185" class="ax_default">
    </div>

    <div id="u185a" class="ax_default" tabindex="0"style="cursor: pointer;">
    </div>

    <!-- Unnamed (Group) -->
    <div id="u186" class="ax_default" data-left="19" data-top="6" data-width="827" data-height="271">

      <!-- Unnamed (Rectangle) -->
      <div id="u187" class="ax_default label">
        <div id="u187_div" class=""></div>
        <div id="u187_text" class="text ">
          <p><span>GRANTS &amp; AUDIT MANAGEMENT</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u188" class="ax_default box_1">
        <div id="u188_div" class=""></div>
      </div>

      <!-- Unnamed (Text Field) -->
      <div id="u189" class="ax_default text_field" title="Search ">
        <input id="u189_input" type="text" value="" title="Search "/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u190" class="ax_default icon">
        <img id="u190_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u190.png?token=d93039283d35d813d8bf8f72586e0024f6f074205dd27fe06709a22bcf18cbf0"/>
      </div>

      <!-- ddn (Dynamic Panel) -->
      <div id="u191" class="ax_default" data-label="ddn">
        <div id="u191_state0" class="panel_state" data-label="State1" style="">
          <div id="u191_state0_content" class="panel_state_content">

            <!-- DropDown-A-R (Rectangle) -->
            <div id="u192" class="ax_default shape" data-label="DropDown-A-R">
              <div id="u192_div" class=""></div>
              <div id="u192_text" class="text ">
                <p><span style="font-family:'Segoe UI Semibold', 'Segoe UI Regular', 'Segoe UI';font-weight:600;">All Audits&nbsp; </span><span style="font-family:'FontAwesome';font-weight:400;"></span></p>
                <img id = "icon2" src = "https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png" style = "width:15px;height:15px">
              </div>
            </div>

            <!-- searchcriteria-dropdown (Dynamic Panel) -->
            <div id="u193" class="ax_default ax_default_hidden" data-label="searchcriteria-dropdown" style="display:none; visibility: hidden">
              <div id="u193_state0" class="panel_state" data-label="State1" style="">
                <div id="u193_state0_content" class="panel_state_content">

                  <!-- Unnamed (Rectangle) -->
                  <div id="u194" class="ax_default shape">
                    <div id="u194_div" class=""></div>
                  </div>

                  <!-- item-1 (Rectangle) -->
                  <div id="u195" class="ax_default shape" data-label="item-1">
                    <div id="u195_div" class=""></div>
                    <div id="u195_text" class="text ">
                      <p><span>CFDA #</span></p>
                    </div>
                  </div>

                  <!-- item-2 (Rectangle) -->
                  <div id="u196" class="ax_default shape" data-label="item-2">
                    <div id="u196_div" class=""></div>
                    <div id="u196_text" class="text ">
                      <p><span>Grantee Name</span></p>
                    </div>
                  </div>

                  <!-- item-3 (Rectangle) -->
                  <div id="u197" class="ax_default shape" data-label="item-3">
                    <div id="u197_div" class=""></div>
                    <div id="u197_text" class="text ">
                      <p><span>DUNS #</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u198" class="ax_default shape" data-label="item-4">
                    <div id="u198_div" class=""></div>
                    <div id="u198_text" class="text ">
                      <p><span>EIN</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u199" class="ax_default shape" data-label="item-4">
                    <div id="u199_div" class=""></div>
                    <div id="u199_text" class="text ">
                      <p><span>Grant Awarded Year</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u200" class="ax_default shape" data-label="item-4">
                    <div id="u200_div" class=""></div>
                    <div id="u200_text" class="text ">
                      <p><span>Grant ID</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u201" class="ax_default shape" data-label="item-4">
                    <div id="u201_div" class=""></div>
                    <div id="u201_text" class="text ">
                      <p><span>Audit Year</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u202" class="ax_default shape" data-label="item-4">
                    <div id="u202_div" class=""></div>
                    <div id="u202_text" class="text ">
                      <p><span>Auditor Name</span></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u203" class="ax_default box_2">
        <div id="u203_div" class=""></div>
      </div>
    </div>

    <!-- Audits-list (Dynamic Panel) -->
    <div id="u204" class="ax_default ax_default_hidden" data-label="Audits-list" style="display:none; visibility: hidden">
      <div id="u204_state0" class="panel_state" data-label="State1" style="">
        <div id="u204_state0_content" class="panel_state_content">

          <!-- ReviewerViewLnk (Rectangle) -->
          <div id="u207" class="ax_default paragraph1" data-label="ReviewerViewLnk">
            <div id="u207_div" class=""></div>
            <div id="u207_text" class="text ">
              <p><span style="font-family:'Segoe UI';font-weight:400;">Audits for CFDA# 98.102:</span><span style="font-family:'Segoe UI Light', 'Segoe UI Regular', 'Segoe UI';font-weight:300;"> </span><span style="font-family:'Segoe UI Semibold', 'Segoe UI Regular', 'Segoe UI';font-weight:600;">15</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- monitor-list (Dynamic Panel) -->
    <div id="u250" class="ax_default ax_default_hidden" data-label="monitor-list" style="display:none; visibility: hidden">
      <div id="u250_state0" class="panel_state" data-label="State1" style="">
        <div id="u250_state0_content" class="panel_state_content">

          <!-- ReviewerViewLnk (Rectangle) -->
          <div id="u253" class="ax_default paragraph1" data-label="ReviewerViewLnk">
            <div id="u253_div" class=""></div>
            <div id="u253_text" class="text ">
              <p><span style="font-family:'Segoe UI';font-weight:400;">Audits for CFDA# 98.102:</span><span style="font-family:'Segoe UI Light', 'Segoe UI Regular', 'Segoe UI';font-weight:300;"> </span><span style="font-family:'Segoe UI Semibold', 'Segoe UI Regular', 'Segoe UI';font-weight:600;">15</span></p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Audits-DP (Dynamic Panel) -->
    <div id="u296" class="ax_default ax_default_hidden" data-label="Audits-DP" style="display:none; visibility: hidden">
      <div id="u296_state0" class="panel_state" data-label="State1" style="">
        <div id="u296_state0_content" class="panel_state_content">

          <!-- Unnamed (Rectangle) -->
          <div id="u297" class="ax_default shape">
            <div id="u297_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u298" class="ax_default shape">
            <div id="u298_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u299" class="ax_default paragraph1">
            <div id="u299_div" class=""></div>
            <div id="u299_text" class="text ">
              <p><span>15</span></p>
            </div>
          </div>

          <!-- Unnamed (Group) -->
          <div id="u300" class="ax_default" data-left="391" data-top="0" data-width="375" data-height="198">

            <!-- Unnamed (Group) -->
            <div id="u301" class="ax_default" data-left="391" data-top="0" data-width="375" data-height="198">

              <!-- Unnamed (Rectangle) -->
              <div id="u302" class="ax_default shape">
                <div id="u302_div" class=""></div>
              </div>

              <!-- Unnamed (Rectangle) -->
              <div id="u303" class="ax_default shape">
                <div id="u303_div" class=""></div>
              </div>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u304" class="ax_default paragraph1">
              <div id="u304_div" class=""></div>
              <div id="u304_text" class="text ">
                <p><span>Assigned Audits</span></p>
              </div>
            </div>
          </div>

          <!-- Unnamed (Group) -->
          <div id="u305" class="ax_default" data-left="781" data-top="0" data-width="375" data-height="198">

            <!-- Unnamed (Group) -->
            <div id="u306" class="ax_default" data-left="781" data-top="0" data-width="375" data-height="198">

              <!-- Unnamed (Rectangle) -->
              <div id="u307" class="ax_default shape">
                <div id="u307_div" class=""></div>
              </div>

              <!-- Unnamed (Rectangle) -->
              <div id="u308" class="ax_default shape">
                <div id="u308_div" class=""></div>
              </div>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u309" class="ax_default paragraph1">
              <div id="u309_div" class=""></div>
              <div id="u309_text" class="text ">
                <p><span>Closed Audits</span></p>
              </div>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u310" class="ax_default label">
            <div id="u310_div" class=""></div>
            <div id="u310_text" class="text ">
              <p><span>New audit reports received</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u311" class="ax_default paragraph1">
            <div id="u311_div" class=""></div>
            <div id="u311_text" class="text ">
              <p><span>New Audits</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u312" class="ax_default paragraph1">
            <div id="u312_div" class=""></div>
            <div id="u312_text" class="text ">
              <p><span>44</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u313" class="ax_default label">
            <div id="u313_div" class=""></div>
            <div id="u313_text" class="text ">
              <p><span>Audits already assigned</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u314" class="ax_default paragraph1">
            <div id="u314_div" class=""></div>
            <div id="u314_text" class="text ">
              <p><span>16</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u315" class="ax_default label">
            <div id="u315_div" class=""></div>
            <div id="u315_text" class="text ">
              <p><span>Audits closed</span></p>
            </div>
          </div>

          <!-- Unnamed (Hot Spot) -->
          <div id="u316" onclick = "myFunction()" class="ax_default">
          </div>

          <!-- Unnamed (Hot Spot) -->
          <div id="u317" onclick = "myFunction2()" class="ax_default">
          </div>

          <!-- Unnamed (Hot Spot) -->
          <div id="u318" onclick = "myFunction3()" class="ax_default">
          </div>
        </div>
      </div>
    </div>

    <!-- Monitor-DP (Dynamic Panel) -->
    <div id="u319" class="ax_default ax_default_hidden" data-label="Monitor-DP" style="display:none; visibility: hidden">
      <div id="u319_state0" class="panel_state" data-label="State1" style="">
        <div id="u319_state0_content" class="panel_state_content">

          <!-- Unnamed (Rectangle) -->
          <div id="u320" class="ax_default shape">
            <div id="u320_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u321" class="ax_default shape">
            <div id="u321_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u322" class="ax_default paragraph1">
            <div id="u322_div" class=""></div>
            <div id="u322_text" class="text ">
              <p><span>15</span></p>
            </div>
          </div>

          <!-- Unnamed (Group) -->
          <div id="u323" class="ax_default" data-left="391" data-top="0" data-width="375" data-height="198">

            <!-- Unnamed (Group) -->
            <div id="u324" class="ax_default" data-left="391" data-top="0" data-width="375" data-height="198">

              <!-- Unnamed (Rectangle) -->
              <div id="u325" class="ax_default shape">
                <div id="u325_div" class=""></div>
              </div>

              <!-- Unnamed (Rectangle) -->
              <div id="u326" class="ax_default shape">
                <div id="u326_div" class=""></div>
              </div>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u327" class="ax_default paragraph1">
              <div id="u327_div" class=""></div>
              <div id="u327_text" class="text ">
                <p><span>Assigned Audits</span></p>
              </div>
            </div>
          </div>

          <!-- Unnamed (Group) -->
          <div id="u328" class="ax_default" data-left="781" data-top="0" data-width="375" data-height="198">

            <!-- Unnamed (Group) -->
            <div id="u329" class="ax_default" data-left="781" data-top="0" data-width="375" data-height="198">

              <!-- Unnamed (Rectangle) -->
              <div id="u330" class="ax_default shape">
                <div id="u330_div" class=""></div>
              </div>

              <!-- Unnamed (Rectangle) -->
              <div id="u331" class="ax_default shape">
                <div id="u331_div" class=""></div>
              </div>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u332" class="ax_default paragraph1">
              <div id="u332_div" class=""></div>
              <div id="u332_text" class="text ">
                <p><span>Closed Audits</span></p>
              </div>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u333" class="ax_default label">
            <div id="u333_div" class=""></div>
            <div id="u333_text" class="text ">
              <p><span>New audit reports received</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u334" class="ax_default paragraph1">
            <div id="u334_div" class=""></div>
            <div id="u334_text" class="text ">
              <p><span>New Audits</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u335" class="ax_default paragraph1">
            <div id="u335_div" class=""></div>
            <div id="u335_text" class="text ">
              <p><span>44</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u336" class="ax_default label">
            <div id="u336_div" class=""></div>
            <div id="u336_text" class="text ">
              <p><span>Audits already assigned</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u337" class="ax_default paragraph1">
            <div id="u337_div" class=""></div>
            <div id="u337_text" class="text ">
              <p><span>16</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u338" class="ax_default label">
            <div id="u338_div" class=""></div>
            <div id="u338_text" class="text ">
              <p><span>Audits closed</span></p>
            </div>
          </div>

          <!-- Unnamed (Hot Spot) -->
          <div id="u339" onclick = "myFunction()" class="ax_default">
          </div>

          <!-- Unnamed (Hot Spot) -->
          <div id="u340" onclick = "myFunction2()" class="ax_default">
          </div>

          <!-- Unnamed (Hot Spot) -->
          <div id="u341" onclick = "myFunction3()" class="ax_default">
          </div>
        </div>
      </div>
    </div>

    <!-- Applications-DP (Dynamic Panel) -->
    <div id="u342" class="ax_default" data-label="Applications-DP">
      <div id="u342_state0" class="panel_state" data-label="State1" style="">
        <div id="u342_state0_content" class="panel_state_content">

          <!-- Unnamed (Rectangle) -->
          <div id="u343" class="ax_default shape">
            <div id="u343_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u344" class="ax_default shape">
            <div id="u344_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u345" class="ax_default paragraph1">
            <div id="u345_div" class=""></div>
            <div id="u345_text" class="text ">
              <p><span>15</span></p>
            </div>
          </div>

          <!-- Unnamed (Group) -->
          <div id="u346" class="ax_default" data-left="391" data-top="0" data-width="375" data-height="198">

            <!-- Unnamed (Group) -->
            <div id="u347" class="ax_default" data-left="391" data-top="0" data-width="375" data-height="198">

              <!-- Unnamed (Rectangle) -->
              <div id="u348" class="ax_default shape">
                <div id="u348_div" class=""></div>
              </div>

              <!-- Unnamed (Rectangle) -->
              <div id="u349" class="ax_default shape">
                <div id="u349_div" class=""></div>
              </div>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u350" class="ax_default paragraph1">
              <div id="u350_div" class=""></div>
              <div id="u350_text" class="text ">
                <p><span>Assigned Audits</span></p>
              </div>
            </div>
          </div>

          <!-- Unnamed (Group) -->
          <div id="u351" class="ax_default" data-left="781" data-top="0" data-width="375" data-height="198">

            <!-- Unnamed (Group) -->
            <div id="u352" class="ax_default" data-left="781" data-top="0" data-width="375" data-height="198">

              <!-- Unnamed (Rectangle) -->
              <div id="u353" class="ax_default shape">
                <div id="u353_div" class=""></div>
              </div>

              <!-- Unnamed (Rectangle) -->
              <div id="u354" class="ax_default shape">
                <div id="u354_div" class=""></div>
              </div>
            </div>

            <!-- Unnamed (Rectangle) -->
            <div id="u355" class="ax_default paragraph1">
              <div id="u355_div" class=""></div>
              <div id="u355_text" class="text ">
                <p><span>Closed Audits</span></p>
              </div>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u356" class="ax_default label">
            <div id="u356_div" class=""></div>
            <div id="u356_text" class="text ">
              <p><span>New audit reports received</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u357" class="ax_default paragraph1">
            <div id="u357_div" class=""></div>
            <div id="u357_text" class="text ">
              <p><span>New Audits</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u358" class="ax_default paragraph1">
            <div id="u358_div" class=""></div>
            <div id="u358_text" class="text ">
              <p><span>44</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u359" class="ax_default label">
            <div id="u359_div" class=""></div>
            <div id="u359_text" class="text ">
              <p><span>Audits already assigned</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u360" class="ax_default paragraph1">
            <div id="u360_div" class=""></div>
            <div id="u360_text" class="text ">
              <p><span>16</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u361" class="ax_default label">
            <div id="u361_div" class=""></div>
            <div id="u361_text" class="text ">
              <p><span>Audits closed</span></p>
            </div>
          </div>

          <!-- Unnamed (Hot Spot) -->
          <div onclick = "myFunction()"id="u316" class="ax_default">
          </div>
          <div onclick = "myFunction2()"id="u363" class="ax_default">
          </div>
          <div onclick = "myFunction3()"id="u364" class="ax_default">
          </div>

          <script>
          function myFunction() {
            var a = document.getElementById("tbl");
            var b = document.getElementById("headingtbl");
            var c = document.getElementById("tbl2");
            var d = document.getElementById("headingtbl2");
            var e = document.getElementById("tbl3");
            var f = document.getElementById("headingtbl3");
            a.style.display = "block";
            b.style.display = "block";
            c.style.display = "none";
            d.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";
          }
          function myFunction2() {
            var a = document.getElementById("tbl");
            var b = document.getElementById("headingtbl");
            var c = document.getElementById("tbl2");
            var d = document.getElementById("headingtbl2");
            var e = document.getElementById("tbl3");
            var f = document.getElementById("headingtbl3");
            c.style.display = "block";
            d.style.display = "block";
            a.style.display = "none";
            b.style.display = "none";
            e.style.display = "none";
            f.style.display = "none";

          }

          function myFunction3() {
            var a = document.getElementById("tbl");
            var b = document.getElementById("headingtbl");
            var c = document.getElementById("tbl2");
            var d = document.getElementById("headingtbl2");
            var e = document.getElementById("tbl3");
            var f = document.getElementById("headingtbl3");
            e.style.display = "block";
            f.style.display = "block";
            c.style.display = "none";
            d.style.display = "none";
            a.style.display = "none";
            b.style.display = "none";

          }
          </script>

          <!--  <div id="u362" class="ax_default">
        </div>  -->

        <!--  Unnamed (Hot Spot) -->
        <!--       <div id="u363" class="ax_default">
      </div>  -->

      <!-- Unnamed (Hot Spot) -->
      <!-- <div id="u364" class="ax_default">
    </div> -->
  </div>
</div>
</div>
</div>
<div id='umainbody' class='container'>
  <div class='row'>
    <a class="btn btn-primary" href="#" role="button" id="backbtn" style="background-color: rgba(0, 112, 210, 1)">Back</a>
  </div>
  <div class='row' style='height:60px;'></div>
  <div class='row'>
    <div class='col-6'>
      <div id="u56" class="ax_default paragraph1">
        <div id="u56_text" class="text " style="left: 0px; width: 253px; transform-origin: 126.5px 13px;">
          <p><span style="font-family:'Segoe UI';font-weight:400;">Audits for CFDA# 98.102:</span><span style="font-family:'Segoe UI Light', 'Segoe UI Regular', 'Segoe UI';font-weight:300;"> </span><span style="font-family:'Segoe UI Semibold', 'Segoe UI Regular', 'Segoe UI';font-weight:400;">15</span></p>
        </div>
      </div>
    </div>
    <div class='col-6'>
      <img id = "icon" src = "https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png" style = "width:15px;height:15px" class='float-right align-middle'>
      <input type ="text"; id = "myInput", onkeyup = "searchFunction()"placeholder = " Search" style = "color: rgb(128,128,128)" class='float-right align-middle'>
      <div class="input-group input-daterange float-right align-middle" style='width:240px;'>
        <input type="text" class="form-control" value="2012-04-05">
        <div class="input-group-addon">to</div>
        <input type="text" class="form-control" value="2012-04-19">
      </div>
    </div>
  </div>
  <div class='row' style='height:30px;'></div>
  <div class='row'>
    <div class='col table-responsive'>
      <table id = 'tbl' class='table'>
        <thead id = 'heading'>
          <tr>
            <td scope="col" >Applicant ▼</td>
            <td scope="col">Grantee EIN</td>
            <td scope="col">State</td>
            <td scope="col">FAC Accepted Date</td>
            <td scope="col">Expenditures</td>
            <td scope="col">Prior Finding</td>
            <td scope="col">Audit</td>
          </tr>
        </thead>
        <div id = 'scrollbody'>
          <tbody>
            <?php
            $result = array();

            do {
              while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
                echo '
                <tr>
                <td>'.$row["AUDITEENAME"].'</td>
                <td>'.$row["EIN"].'</td>
                <td>'.$row["STATE"].'</td>
                <td>'.$row["FACACCEPTEDDATE"].'</td>
                <td>'.$row["TOTFEDEXPEND"].'</td>
                <td>'.$row["PYSCHEDULE"].'</td>
                <td><input type="checkbox" oninput=""></td>
                </tr>
                ';
              }
            } while (sqlsrv_next_result($stmt));


            // sqlsrv_free_stmt($stmt);
            // sqlsrv_close($conn); //Close the connnectiokn first

            // echo json_encode($result); //You will get the encoded array variable
            ?>
          </tbody>
        </div>
      </table>

      <script type="text/javascript">
      $('#tbl tr').on('click', function (){
      $('.clicked').removeClass('clicked');
      $(this).addClass('clicked');
      $tds = $(this).closest("tr").find("td:nth-child(1)");
      applicant = $tds.text();
      $tds = $(this).closest("tr").find("td:nth-child(2)");
      granteeEIN = $tds.text();
      applicant = applicant.trim();
      granteeEIN = granteeEIN.trim();
      queryString = "?para1=" + applicant + "&para2=" + granteeEIN;
      console.log(queryString);
      console.log(applicant);
      console.log(granteeEIN);
      window.location.href = "../08-02/InitialAudit.html" + queryString;
    });
  </script>

</div>
</div>
<div class='row'>
  <div class='col'>
    <span class="btn glyphicon glyphicon-floppy-disk float-right" id="savebutton" style="color: rgba(0, 112, 210, 1);"></span>
    <div id="u518" class="btn float-right">
      <div id="u518_text" class="text ">
        <p><span>Cancel</span></p>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>