<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$serverName = "localhost";
$connectionOptions = array(
  "Database" => "FAC",
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
// if($conn)
//   echo "Connected!";



$sql = "SELECT STREET1, DUNS, CPADATESIGNED, FYENDDATE, AUDITEECONTACT, AUDITEEEMAIL, AUDITEEPHONE, AUDITEEFAX FROM dbo.gen WHERE AUDITEENAME='$_GET['para1']'";
$stmt = sqlsrv_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <title>Assign Reviewer-CityofCharlottsville</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
  <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
  <link href="data/styles.css" type="text/css" rel="stylesheet"/>
  <link href="files/assign_reviewer-cityofcharlottsville/styles.css" type="text/css" rel="stylesheet"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" type="text/css" rel="stylesheet"/>
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
<script src="files/assign_reviewer-cityofcharlottsville/data.js"></script>
<script type="text/javascript">
$axure.utils.getTransparentGifPath = function() { return 'https://d1h0x9w88ijkiq.cloudfront.net/3372/images/transparent.gif'; };
$axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
$axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
</script>
<script src="/scripts/snippet-javascript-console.min.js?v=1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

    <div id="u37" class="ax_default box_2">
      <div id="u37_div" class=""></div>
    </div>

    <!-- nextsteps (Dynamic Panel) -->
    <div id="u365" class="ax_default ax_default_hidden" data-label="nextsteps" style="display:none; visibility: hidden">
      <div id="u365_state0" class="panel_state" data-label="State1" style="">
        <div id="u365_state0_content" class="panel_state_content">

          <!-- Unnamed (Rectangle) -->
          <div id="u366" class="ax_default shape">
            <div id="u366_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u367" class="ax_default shape">
            <div id="u367_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u368" class="ax_default paragraph1">
            <div id="u368_div" class=""></div>
            <div id="u368_text" class="text ">
              <p><span>Next Steps</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u369" class="ax_default fontawesome">
            <div id="u369_div" class=""></div>
            <div id="u369_text" class="text ">
              <p><span></span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u370" class="ax_default shape">
            <div id="u370_div" class=""></div>
          </div>

          <!-- BasicButton-Primary (Rectangle) -->
          <div id="u371" class="ax_default shape" data-label="BasicButton-Primary">
            <div id="u371_div" class=""></div>
            <div id="u371_text" class="text ">
              <p><span>Let's check reviewer's view now</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u372" class="ax_default paragraph1">
            <div id="u372_div" class=""></div>
            <div id="u372_text" class="text ">
              <p><span>After assigning reviewers to all the applications, Program Manager will continue to the next step.</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u373" class="ax_default paragraph1">
            <div id="u373_div" class=""></div>
            <div id="u373_text" class="text ">
              <p><span>On the other hand, a reviewer will be notified of the assigned applications.</span></p><p><span>Let's now checkout a reviewer's list of applications in his docket.</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) [footnote] -->
          <div id="u373_ann" class="annotation"></div>

          <!-- Unnamed (Rectangle) -->
          <div id="u374" class="ax_default paragraph1">
            <div id="u374_div" class=""></div>
            <div id="u374_text" class="text ">
              <p><span>Ideally, after assigning a reviewer to an application, Program Manager is navigated back to the home page to select the next application. A success message is displayed for the user as a confirmation of reviewer assignment.</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Unnamed (Applicant Details) -->

    <!-- Unnamed (Rectangle) -->
    <div id="u163_notif" class="ax_default image">
      <img id="u163_img" class="img " src="https://freeicons.io/laravel/public/uploads/icons/png/16496749731558965393-128.png"/>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u377" class="ax_default paragraph1">
      <div id="u377_div" class=""></div>
      <div id="u377_text" class="text ">
        <p><span id = "applicantText">City of Charlottesville Public Schools</span></p>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u378" class="ax_default paragraph1">
      <div id="u378_div" class=""></div>
      <div id="u378_text" class="text ">
        <p><span id = "address">400 Main St. , Charlottesville, VA&nbsp; 22908</span></p>
      </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u379" class="ax_default" data-left="59" data-top="116" data-width="107" data-height="19">

      <!-- Unnamed (Rectangle) -->
      <div id="u380" class="ax_default paragraph1">
        <div id="u380_div" class=""></div>
        <div id="u380_text" class="text ">
          <p><span>EIN </span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u381" class="ax_default paragraph1">
        <div id="u381_div" class=""></div>
        <div id="u381_text" class="text ">
          <p><span id = "einText">33-1234888</span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u382" class="ax_default" data-left="224" data-top="116" data-width="130" data-height="19">

      <!-- Unnamed (Rectangle) -->
      <div id="u383" class="ax_default paragraph1">
        <div id="u383_div" class=""></div>
        <div id="u383_text" class="text ">
          <p><span>DUNS</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u384" class="ax_default paragraph1">
        <div id="u384_div" class=""></div>
        <div id="u384_text" class="text ">
          <p><span id = "duns">88-111-8235</span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u385" class="ax_default box_3">
      <div id="u385_div" class=""></div>
    </div>

    <!-- btn-lg (Rectangle) -->
    <div id="u386" class="ax_default shape" data-label="btn-lg">
    </div>

    <!-- Unnamed (Image) -->
    <div id="u387" class="ax_default image">
      <img id="u387_img" class="img " src="https://i.imgur.com/QqVdqTF.png"/>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u388" class="ax_default" data-left="59" data-top="166" data-width="173" data-height="37">

      <!-- Unnamed (Rectangle) -->
      <div id="u389" class="ax_default paragraph">
        <div id="u389_div" class=""></div>
        <div id="u389_text" class="text ">
          <p><span>APPLICATION SUBMITTED BY</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u390" class="ax_default paragraph1">
        <div id="u390_div" class=""></div>
        <div id="u390_text" class="text ">
          <p><span id = "auditeecontact">Nancy Richards</span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u391" class="ax_default" data-left="285" data-top="166" data-width="158" data-height="37">

      <!-- Unnamed (Rectangle) -->
      <div id="u392" class="ax_default paragraph">
        <div id="u392_div" class=""></div>
        <div id="u392_text" class="text ">
          <p><span>EMAIL</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u393" class="ax_default paragraph1">
        <div id="u393_div" class=""></div>
        <div id="u393_text" class="text ">
          <p><span id = "auditeeemail">nancy.richards@ccps.gov</span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u394" class="ax_default" data-left="496" data-top="166" data-width="99" data-height="37">

      <!-- Unnamed (Rectangle) -->
      <div id="u395" class="ax_default paragraph1">
        <div id="u395_div" class=""></div>
        <div id="u395_text" class="text ">
          <p><span id = "auditeephone">(202) 111 2238</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u396" class="ax_default paragraph">
        <div id="u396_div" class=""></div>
        <div id="u396_text" class="text ">
          <p><span>PHONE</span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u397" class="ax_default" data-left="648" data-top="166" data-width="99" data-height="37">

      <!-- Unnamed (Rectangle) -->
      <div id="u398" class="ax_default paragraph">
        <div id="u398_div" class=""></div>
        <div id="u398_text" class="text ">
          <p><span>FAX</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u399" class="ax_default paragraph1">
        <div id="u399_div" class=""></div>
        <div id="u399_text" class="text ">
          <p><span id = "auditeefax">(202) 111 2248</span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u400" class="ax_default" data-left="411" data-top="116" data-width="174" data-height="19">

      <!-- Unnamed (Rectangle) -->
      <div id="u401" class="ax_default paragraph1">
        <div id="u401_div" class=""></div>
        <div id="u401_text" class="text ">
          <p><span>ASSIGNED ON</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u402" class="ax_default paragraph1">
        <div id="u402_div" class=""></div>
        <div id="u402_text" class="text ">
          <p><span id = "cpadatesigned">10/06/2018</span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u403" class="ax_default" data-left="642" data-top="116" data-width="174" data-height="19">

      <!-- Unnamed (Rectangle) -->
      <div id="u404" class="ax_default paragraph1">
        <div id="u404_div" class=""></div>
        <div id="u404_text" class="text ">
          <p><span>DUE ON</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u405" class="ax_default paragraph1">
        <div id="u405_div" class=""></div>
        <div id="u405_text" class="text ">
          <p><span id = "fyenddate">04/05/2019</span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u397" class="ax_default" data-left="648" data-top="166" data-width="99" data-height="37">

      <!-- Unnamed (Rectangle) -->
      <div id="u3982" class="ax_default paragraph">
        <div id="u398_div" class=""></div>
        <div id="u398_text" class="text ">
          <p><span>BUDGET REQUESTED</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u3992" class="ax_default paragraph1">
        <div id="u399_div" class=""></div>
        <div id="u399_text" class="text ">
          <p><span>$347,000.00</span></p>
        </div>
      </div>
    </div>

    <?php
    do {
      while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
        $dom = new DOMDocument;
        $dom->loadHTML("'.$row["STREET1"].'");
        $div = $dom->getElementById("address");
        echo $dom->saveHTML();

        $dom1 = new DOMDocument;
        $dom1->loadHTML("'.$row["DUNS"].'");
        $div1 = $dom1->getElementById("duns");
        echo $dom1->saveHTML();

        $dom2 = new DOMDocument;
        $dom2->loadHTML("'.$row["CPADATESIGNED"].'");
        $div2 = $dom2->getElementById("cpadatesigned");
        echo $dom2->saveHTML();

        $dom3 = new DOMDocument;
        $dom3->loadHTML("'.$row["FYENDDATE"].'");
        $div3 = $dom3->getElementById("fyenddate");
        echo $dom3->saveHTML();

        $dom4 = new DOMDocument;
        $dom4->loadHTML("'.$row["AUDITEECONTACT"].'");
        $div4 = $dom4->getElementById("auditeecontact");
        echo $dom4->saveHTML();

        $dom5 = new DOMDocument;
        $dom5->loadHTML("'.$row["AUDITEEEMAIL"].'");
        $div5 = $dom5->getElementById("auditeeemail");
        echo $dom5->saveHTML();

        $dom6 = new DOMDocument;
        $dom6->loadHTML("'.$row["AUDITEEPHONE"].'");
        $div6 = $dom6->getElementById("auditeephone");
        echo $dom6->saveHTML();

        $dom7 = new DOMDocument;
        $dom7->loadHTML("'.$row["AUDITEEFAX"].'");
        $div7 = $dom7->getElementById("auditeefax");
        echo $dom7->saveHTML();

      }
    } while (sqlsrv_next_result($stmt));


    sqlsrv_free_stmt($stmt);
    sqlsrv_close($conn); //Close the connnectiokn first


    ?>

    <!-- Unnamed (Rectangle) -->
    <div id="u406" class="ax_default box_3">
      <div id="u406_div" class=""></div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u407" class="ax_default box_3">
      <div id="u407_div" class=""></div>
    </div>

    <!-- Unnamed (Header-Grants) -->

    <!-- Unnamed (Rectangle) -->
    <div id="u410" class="ax_default box_2">
      <div id="u410_div" class=""></div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u411" class="ax_default box_2">
      <div id="u411_div" class=""></div>
    </div>

    <!-- Unnamed (Group) -->
    <div id="u412" class="ax_default" data-left="921" data-top="0" data-width="276" data-height="49">

    </div>

    <!-- Unnamed (Group) -->
    <div id="u414" class="ax_default" data-left="19" data-top="71" data-width="17" data-height="20">

      <!-- Unnamed (Rectangle) -->
      <div id="u415" class="ax_default fontawesome">
        <div id="u415_div" class=""></div>
        <div id="u415_text" class="text ">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u416" class="ax_default fontawesome">
        <div id="u416_div" class=""></div>
        <div id="u416_text" class="text ">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u417" class="ax_default fontawesome">
        <div id="u417_div" class=""></div>
        <div id="u417_text" class="text ">
          <p><span></span></p>
        </div>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u418" class="ax_default label">
      <div id="u418_div" class=""></div>
      <div id="u418_text" class="text ">
        <p><span>Home</span></p>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u419" class="ax_default label">
      <div id="u419_div" class=""></div>
      <div id="u419_text" class="text ">
        <p><span>Grants</span></p>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u420" class="ax_default label">
      <div id="u420_div" class=""></div>
      <div id="u420_text" class="text ">
        <p><span>Audits</span></p>
      </div>
    </div>

    <!-- Unnamed (Shape) -->
    <div id="u424" class="ax_default icon">
      <img id="u424_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u158.png?token=94b8f0a282346bad3789642fbb070492db273c6575f8cc3c662ae8ceddf2924b"/>
    </div>

    <!-- Unnamed (Shape) -->
    <div id="u425" class="ax_default icon">
      <img id="u425_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u158.png?token=94b8f0a282346bad3789642fbb070492db273c6575f8cc3c662ae8ceddf2924b"/>
    </div>

    <!-- Unnamed (Horizontal Line) -->
    <div id="u428" class="ax_default line">
      <img id="u428_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u162.png?token=1f47bb7e70b4d219b5140a8f3fd998093fc04788776f9588ec31c963563b6f17"/>
    </div>

    <!-- Unnamed (Image) -->
    <div id="u429" class="ax_default image">
      <img id="u429_img" class="img " src="https://centennial-tech-test.microsoftcrmportals.com/grants-initial/pfp.png"/>
    </div>

    <!-- GrantsMenuDP (Dynamic Panel) -->
    <div id="u430" class="ax_default ax_default_hidden" data-label="GrantsMenuDP" style="display:none; visibility: hidden">
      <div id="u430_state0" class="panel_state" data-label="State1" style="">
        <div id="u430_state0_content" class="panel_state_content">

          <!-- Unnamed (Rectangle) -->
          <div id="u431" class="ax_default box_2">
            <div id="u431_div" class=""></div>
            <div id="u431_text" class="text ">
              <p><span>Applications</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u432" class="ax_default box_2">
            <div id="u432_div" class=""></div>
            <div id="u432_text" class="text ">
              <p><span>Review Budget</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u433" class="ax_default box_2">
            <div id="u433_div" class=""></div>
            <div id="u433_text" class="text ">
              <p><span>Low Risk Applications</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u434" class="ax_default box_2">
            <div id="u434_div" class=""></div>
            <div id="u434_text" class="text ">
              <p><span>Previous Audit Findings &amp; High Risk</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Unnamed (Hot Spot) -->
    <div id="u435" class="ax_default">
    </div>

    <!-- Unnamed (Hot Spot) -->
    <div id="u436" class="ax_default">
    </div>

    <!-- userinfo (Dynamic Panel) -->
    <div id="u437" class="ax_default ax_default_hidden" data-label="userinfo" style="display:none; visibility: hidden">
      <div id="u437_state0" class="panel_state" data-label="State1" style="">
        <div id="u437_state0_content" class="panel_state_content">

          <!-- Unnamed (Triangle Left) -->
          <div id="u438" class="ax_default shape">
            <img id="u438_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u172.png?token=b16ec2749212edc7a790ab3003e0d5e40f9c74958aaa610dcb4e911f1bcdc596"/>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u439" class="ax_default shape">
            <div id="u439_div" class=""></div>
          </div>

          <!-- Unnamed (Triangle Left) -->
          <div id="u440" class="ax_default shape">
            <img id="u440_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u174.png?token=30c5d499f344c88ed141661c441ce62939b0ee1e43b677235520d382d872969e"/>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u441" class="ax_default label">
            <div id="u441_div" class=""></div>
            <div id="u441_text" class="text ">
              <p><span>Jacqueline Bowman</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u442" class="ax_default box_2">
            <div id="u442_div" class=""></div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u443" class="ax_default label">
            <div id="u443_div" class=""></div>
            <div id="u443_text" class="text ">
              <p><span>Program Manager</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u444" class="ax_default label">
            <div id="u444_div" class=""></div>
            <div id="u444_text" class="text ">
              <p><span>jacqueline.bowman@hhs.gov</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u445" class="ax_default label">
            <div id="u445_div" class=""></div>
            <div id="u445_text" class="text ">
              <p><span>(202) 558-7858</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u446" class="ax_default label">
            <div id="u446_div" class=""></div>
            <div id="u446_text" class="text ">
              <p><span>Logout</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- AuditsMenuDP (Dynamic Panel) -->
    <div id="u447" class="ax_default ax_default_hidden" data-label="AuditsMenuDP" style="display:none; visibility: hidden">
      <div id="u447_state0" class="panel_state" data-label="State1" style="">
        <div id="u447_state0_content" class="panel_state_content">

          <!-- Unnamed (Rectangle) -->
          <div id="u448" class="ax_default box_2">
            <div id="u448_div" class=""></div>
            <div id="u448_text" class="text ">
              <p><span>My Audits</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u449" class="ax_default box_2">
            <div id="u449_div" class=""></div>
            <div id="u449_text" class="text ">
              <p><span>Assign Audits</span></p>
            </div>
          </div>

          <!-- Unnamed (Rectangle) -->
          <div id="u450" class="ax_default box_2">
            <div id="u450_div" class=""></div>
            <div id="u450_text" class="text ">
              <p><span>Prior Year Closed Audit Details</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Unnamed (Hot Spot) -->
    <div id="u451" class="ax_default">
    </div>

    <!-- Unnamed (Group) -->
    <div id="u452" class="ax_default" data-left="19" data-top="6" data-width="827" data-height="271">

      <!-- Unnamed (Rectangle) -->
      <div id="u453" class="ax_default label">
        <div id="u453_div" class=""></div>
        <div id="u453_text" class="text ">
          <p><span>GRANTS &amp; AUDIT MANAGEMENT</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u454" class="ax_default box_1">
        <div id="u454_div" class=""></div>
      </div>

      <!-- Unnamed (Text Field) -->
      <div id="u455" class="ax_default text_field" title="Search ">
        <input id="u455_input" type="text" value="" title="Search " placeholder = "Search"/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u456" class="ax_default icon">
        <img id="u456_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/grants-initial/u190.png?token=186190e197f53450f965cfd2a6bd5b85c7871291557ef27ea830e9c92c15796d"/>
      </div>

      <!-- ddn (Dynamic Panel) -->
      <div id="u457" class="ax_default" data-label="ddn">
        <div id="u457_state0" class="panel_state" data-label="State1" style="">
          <div id="u457_state0_content" class="panel_state_content">

            <!-- DropDown-A-R (Rectangle) -->
            <div id="u458" class="ax_default shape" data-label="DropDown-A-R">
              <div id="u458_div" class=""></div>
              <div id="u458_text" class="text ">
                <p><span style="font-family:'Segoe UI Semibold', 'Segoe UI Regular', 'Segoe UI';font-weight:600;">All Grants &amp; Audits&nbsp; </span><span style="font-family:'FontAwesome';font-weight:400;"></span></p>
              </div>
            </div>
            <!-- searchcriteria-dropdown (Dynamic Panel) -->
            <div id="u459" class="ax_default ax_default_hidden" data-label="searchcriteria-dropdown" style="display:none; visibility: hidden">
              <div id="u459_state0" class="panel_state" data-label="State1" style="">
                <div id="u459_state0_content" class="panel_state_content">

                  <!-- Unnamed (Rectangle) -->
                  <div id="u460" class="ax_default shape">
                    <div id="u460_div" class=""></div>
                  </div>

                  <!-- item-1 (Rectangle) -->
                  <div id="u461" class="ax_default shape" data-label="item-1">
                    <div id="u461_div" class=""></div>
                    <div id="u461_text" class="text ">
                      <p><span>CFDA #</span></p>
                    </div>
                  </div>

                  <!-- item-2 (Rectangle) -->
                  <div id="u462" class="ax_default shape" data-label="item-2">
                    <div id="u462_div" class=""></div>
                    <div id="u462_text" class="text ">
                      <p><span>Grantee Name</span></p>
                    </div>
                  </div>

                  <!-- item-3 (Rectangle) -->
                  <div id="u463" class="ax_default shape" data-label="item-3">
                    <div id="u463_div" class=""></div>
                    <div id="u463_text" class="text ">
                      <p><span>DUNS #</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u464" class="ax_default shape" data-label="item-4">
                    <div id="u464_div" class=""></div>
                    <div id="u464_text" class="text ">
                      <p><span>EIN</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u465" class="ax_default shape" data-label="item-4">
                    <div id="u465_div" class=""></div>
                    <div id="u465_text" class="text ">
                      <p><span>Grant Awarded Year</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u466" class="ax_default shape" data-label="item-4">
                    <div id="u466_div" class=""></div>
                    <div id="u466_text" class="text ">
                      <p><span>Grant ID</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u467" class="ax_default shape" data-label="item-4">
                    <div id="u467_div" class=""></div>
                    <div id="u467_text" class="text ">
                      <p><span>Audit Year</span></p>
                    </div>
                  </div>

                  <!-- item-4 (Rectangle) -->
                  <div id="u468" class="ax_default shape" data-label="item-4">
                    <div id="u468_div" class=""></div>
                    <div id="u468_text" class="text ">
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
      <div id="u469" class="ax_default box_2">
        <div id="u469_div" class=""></div>
      </div>
    </div>

    <a class="btn btn-primary" href="#" role="button" id = 'backbtn' style = "background-color: rgba(0, 112, 210, 1);">Back</a>

    <!-- selected-tooltip (Group) -->
    <div id="u519" class="ax_default ax_default_hidden" data-label="selected-tooltip" style="display:none; visibility: hidden" data-left="0" data-top="0" data-width="0" data-height="0">

      <!-- tip-standard (Rectangle) -->
      <div id="u520" class="ax_default shape" data-label="tip-standard">
        <div id="u520_div" class=""></div>
        <div id="u520_text" class="text ">
          <p><span>Selected reviewer</span></p>
        </div>
      </div>

      <!-- Unnamed (Triangle Left) -->
      <div id="u521" class="ax_default shape">
        <img id="u521_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/assign_reviewer-cityofcharlottsville/u521.png?token=e2bf9dd2bd9cd83e77d71edda364aea137f543b85c6d58dc1484acf47dd4510f"/>
      </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u522" class="ax_default paragraph">
      <div id="u522_div" class=""></div>
      <div id="u522_text" class="text ">
        <p><span></span></p>
      </div>
    </div>

    <!-- selected-tooltip2 (Group) -->
    <div id="u526" class="ax_default ax_default_hidden" data-label="selected-tooltip2" style="display:none; visibility: hidden" data-left="0" data-top="0" data-width="0" data-height="0">

      <!-- tip-standard (Rectangle) -->
      <div id="u527" class="ax_default shape" data-label="tip-standard">
        <div id="u527_div" class=""></div>
        <div id="u527_text" class="text ">
          <p><span>Selected reviewer</span></p>
        </div>
      </div>

      <!-- Unnamed (Triangle Left) -->
      <div id="u528" class="ax_default shape">
        <img id="u528_img" class="img " src="https://d1icd6shlvmxi6.cloudfront.net/gsc/UQDAEN/33/ae/d1/33aed17b5236419da26af94a7ebc08c4/images/assign_reviewer-cityofcharlottsville/u521.png?token=e2bf9dd2bd9cd83e77d71edda364aea137f543b85c6d58dc1484acf47dd4510f"/>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <div id='umainbody' class='container'>
    <div class='row'>
      <div class='col'>
        <div id="u517">
          <div id="u517_text" class="text ">
            <p><span>Summary Schedule of Prior Year Findings</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col'>
        <table class="table" style='background-color: rgba(255, 255, 255, 1);'>
          <tbody>
            <tr class='sp'>
              <td>2015-001 - Internal Control over Financial Reporting</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>
                <p>
                  <strong>Condition</strong></br>
                  During the course of the auditing procedures over the combined financials statements, we proposed and posted several journal entries that resulted in a material change in financial statements. Recommendation: Management should routinely review financial statements for accuracy and document a better control process for doing so. Staff responsible for the preparation of financial statements should have adequate technical knowledge of Generally Accepting Accounting Standards and how to apply them to the internal procedures for preparing financial statements.
                </p>
              </td>
              <td>
                <strong>Recommendation</strong></br>
                None
              </td>
              <td>
                <p>
                  <strong>Current Status</strong>
                  <span class="label label-danger float-right" style=>Repeated</span>
                </br>
                During the course of the auditing procedures over the combined financials statements, we proposed and posted several journal entries that resulted in a material change in financial statements. Recommendation: Management should routinely review financial statements for accuracy and document a better control process for doing so. Staff responsible for the preparation of financial statements should have adequate technical knowledge of Generally Accepting Accounting Standards and how to apply them to the internal procedures for preparing financial statements.
              </p>
            </td>
          </tr>
          <tr class='sp'>
            <td>2015-002 - Reporting Requirements Not met, All Federal Awards</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>
              <p>
                <strong>Condition</strong></br>
                Management failed to file annual single audit reporting package to the Federal Audit Clearing House prior to the March 31, 2015 deadline for the year ended June 30, 2014.
              </p>
            </td>
            <td>
              <p>
                <strong>Recommendation</strong></br>
                We recommend that Management implement policies and procedures that would require monthly financial statements to be prepared within a month following the month end. We further recommend that Management complete a formal annual financial statement closing process immediately following the year end so that audit procedures can be performed more timely.
              </p>
            </td>
            <td>
              <p>
                <strong>Current Status</strong>
                <span class="label label-success float-right" style=>Resolved</span>
              </br>
              The reporting package for the year ended June 30, 2015 was submitted on time.
            </p>
          </td>
        </tr>
        <tr class='sp'>
          <td>2015-003 - Unallowable Cash Disbursements</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>
            <p>
              <strong>Condition</strong></br>
              Management inadvertently borrowed funds from HUD project homes to fund operating expenses of other projects and general operating expenses.
            </br></br>
            <strong>Questioned Costs</strong></br>
            $15,070 applicable to the Supportive Housing for Persons with Disabilities program $73,956 applicable to the Supportive Housing for Elderly program
          </p>
        </td>
        <td>
          <p>
            <strong>Recommendation</strong></br>
            In addition to recommendations made in finding 2015-001 and 2015-002 we recommend that Management refrain from disbursing funds for purposes other than those approved by HUD. It is also recommend that the Organization increase its knowledge of applicable compliance requirements and implement internal controls that will detect and prevent unallowable cash disbursements. It is further recommended that Management consider simplifying their financial processing and reduce the use of intercompany transactions as much as possible.
          </p>
        </td>
        <td>
          <p>
            <strong>Current Status</strong>
            <span class="label label-danger float-right" style=>Repeated</span>
          </br>
          The issue remains unresolved as Management is awaiting approval of a correction action plan from Department of Housing and Urban Development.
        </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
</br>
<div class='row'>
  <div class='col'>
    <div id="u517">
      <div id="u517_text" class="text ">
        <p><span>Corrective Actions</span></p>
      </div>
    </div>
  </br>
  <p>
    Management should routinely review financial statements for accuracy and document a better control process for doing so. Staff responsible for the preparation of financial statements should have adequate technical knowledge of Generally Accepting Accounting Standards and how to apply them to the internal procedures for preparing financial statements.
  </p>
</br>
</div>
</div>
<div class='row'>
  <div class='col'>
    <div id="u517">
      <div id="u517_text" class="text ">
        <p><span>Summary Schedule of Prior Year Findings</span></p>
      </div>
    </div>
  </div>
  <div class='col'>
    <div class="modal fade" id="pdfModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="modaltitle" class="modal-title">Application_ccps.pdf</h4>
          </div>
          <div class="modal-body">
            <iframe width=800 height=575 src="https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf"></iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <button type="button" class="btn btn-info float-right" data-toggle='modal' data-target='#pdfModal'>Audit Document</button>
  </div>
</div>
<div class='row'>
  <div class='col'>
    <table class="table" style='background-color: rgba(255, 255, 255, 1);'>
      <tbody>
        <tr class='sp'>
          <td>2016-001 - Internal Control over Financial Reporting, Repeated Finding</td>
          <td></td>
        </tr>
        <tr>
          <td>
            <p>
              <strong>Condition</strong></br>
              During the course of the auditing procedures over the combined financials statements, we proposed and posted several journal entries that resulted in a material change in financial statements. Recommendation: Management should routinely review financial statements for accuracy and document a better control process for doing so. Staff responsible for the preparation of financial statements should have adequate technical knowledge of Generally Accepting Accounting Standards and how to apply them to the internal procedures for preparing financial statements.
            </br></br>
            <strong>Criteria</strong></br>
            Management is responsible for the basic financial statements and all accompanying information. Management is also responsible for establishing effective internal controls, the selection and application of appropriate accounting principles, and for the fair representation of the financial position, changes in net assets, and cash flows in conformity with Generally Accepted Accounting Principles.
          </br></br>
          <strong>Recommendation</strong></br>
          Management should routinely review financial statements for accuracy and document a better control process for doing so. Staff responsible for the preparation of financial statements should have adequate technical knowledge of Generally Accepted Accounting Principles and how to apply them to the internal procedures for preparing financial statements.
        </p>
      </td>
      <td>
        <p>
          <strong>Cause</strong></br>
          The staff responsible for preparing the financial statements lacked the technical skills to properly present financials in accordance with Generally Accepted Accounting Standards.
        </br></br>
        <strong>Effect</strong></br>
        As a result of the condition noted above, the financial statements were materially misstated and not prepared in conformity with Generally Accepted Accounting Standards.
      </br></br>
      <strong>Views of Reponsible Officials and Planned Correction Action</strong></br>
      Management should routinely review financial statements for accuracy and document a better control process for doing so. Staff responsible for the preparation of financial statements should have adequate technical knowledge of Generally Accepted Accounting Principles and how to apply them to the internal procedures for preparing financial statements.
    </p>
  </td>
</tr>
<tr class='sp'>
  <td>2016-002 - Unallowable Cash Disbursements</td>
  <td></td>
</tr>
<tr>
  <td>
    <p>
      <strong>Condition</strong></br>
      Management inadvertently borrowed funds from HUD project homes to fund operating expenses of other projects and general operating expenses.
    </br></br>
    <strong>Criteria</strong></br>
    Owners are required to establish and maintain a separate project account for each project. All rents, charges, income, and revenues arising from the project operation shall be maintained separately. Project funds should only be used to pay for mortgage payments, required deposits to the reserve for replacement fund, reasonable expenses necessary for the operation and maintenance of the project, distributions of surplus cash as permitted, and repayment of owner advances from surplus cash or as authorized by HUD. Disbursements from a centralized account must clearly be traceable to each project. The actual cash position of each project in this account must be easily identifiable at all times without exception.
  </br></br>
  <strong>Recommendation</strong></br>
  MIn addition to recommendations made in finding 2016-001, we recommend that Management refrain from disbursing funds for purposes other than those approved by HUD. It is also recommended that the Organization increase its knowledge of applicable compliance requirements and implement internal controls that will detect and prevent unallowable cash disbursements. It is further recommended that Management consider simplifying their financial processing and reduce the use of intercompany transactions as much as possible.
</p>
</td>
<td>
  <p>
    <strong>Cause</strong></br>
    Due to internal staffing constraints and the effects caused by finding 2016-001, financial statements were not prepared accurately and timely. Due to the complex nature of Lokahi Pacific and Affiliates’ financial reporting practices, intercompany transactions were not handled correctly resulting in interfund borrowings that were not remedied timely.
  </br></br>
  <strong>Effect</strong></br>
  Disbursements made from project accounts were not in accordance with the criteria above, thus noncompliance has occurred.
</br></br>
<strong>Views of Reponsible Officials and Planned Correction Action</strong></br>
Lokahi Pacific continues to work with HUD to address this situation and is cooperating with HUD's Enforcement Center Referral office in finding the correct solution to this matter.
</br></br>
<strong>Questioned Costs</strong></br>
$63,776 applicable to the Supportive Housing for Elderly program
</p>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class='row' style = "margin-bottom: 100px;">
  <div class='col'>
    <div class="btn-group float-right" style='margin-left: 20px;'>
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Select Action...
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#" onclick = "redirectFunction()">Send Confirmation to Grantee</a>
        <a class="dropdown-item" href="#" onclick = "redirectFunction()">Notify XYZ</a>
        <a class="dropdown-item" href="#" onclick = "redirectFunction()">Documents Missing</a>
      </div>
    </div>
    <script>
    function redirectFunction(){
      window.location.href = "../dashboard4/AuditAnalyst-initial.html" + window.location.search;
    }
    </script>
    <div id="u518" class="btn float-right" style='top:15px;'>
      <div id="u518_text" class="text ">
        <p><span>Cancel</span></p>
      </div>
    </div>
  </div>
</div>
</div>
<script>
var urlParams = new URLSearchParams(window.location.search);
var currentLink = document.URL;

myApplicant = urlParams.get('para1');
myGranteeEIN = urlParams.get('para2');
document.getElementById("applicantText").innerHTML = myApplicant + "&nbsp;&nbsp;<span id=\"newlabel\" class=\"label label-success\">Initial Audit</span>";
document.getElementById("einText").innerHTML = myGranteeEIN;
</script>
<!-- Unnamed (Rectangle) -->
<div class="footer navbar-fixed-bottom">
  <div id="u525_div" class=""></div>
</div>
</body>
</html>
