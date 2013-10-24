<?php require_once('./include/head.php'); ?>
<body class="inner details">
<div class="head-wrapper">
    <!--==============================header=================================-->
  <div class="header-block clearfix">
      <header>
        <div class="container clearfix">
          <div class="row ">
            <div class="container">
              <div class="span12">
                <!-- Navigation -->
                <div class="navbar">
                    <div class="logo">
                      <a href="index.php"><img src="images/logo.png" alt=""></a><span>impact</span>Project
                    </div>
                    <!--=========== menu ===============-->
                    <ul class="nav sf-menu">
                      <li class=""><a href="/">Home</a></li>
                      <li class=""><a href="about.php">About</a> </li>
                      <li class="active action"><a href="details.php">Follow the Impact</a></li>
                      <li class=""><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
  </div>
</div>
<!--==============================content=================================-->
<section id="content">
  <div class="breadcrumb-wrapper">
    <div class="shadowdrop"></div>
    <div class="container">
    </div>
  </div>
  <div class="container">
    <!-- Icons -->
    <div class="row">
      <div class="col-md-12 toggle">
        <select>
            <option value="revenue-oil">Comparison of reported oil revenue</option>
            <option value="difference-oil">Difference in oil revenue reports</option>
            <option value="revenue-gas">Comparison of reported gas revenue</option>
            <option value="difference-gas">Difference in gas revenue reports</option>
        </select>
      </div>
      <div class="col-md-12">
          <div class="section-2 chart-title">
             <h1>The chart below shows the difference <br>in reported oil revenue ($'000,000) by the <a href="https://en.wikipedia.org/wiki/Central_bank_of_nigeria" target="_blank">CBN</a> and oil companies</h1>
          </div>
         <div id="container">
          <div id='chart'>
            <svg style='height:500px'> </svg>
          </div>
        </div>
       </div>      
    </div>
     <div id="row">
         <div class="col-md-12">
             <div class="section-2 questions">
                 <h3>According to the <a href="http://neiti.org.ng/sites/default/files/pdf_uploads/NEITI-EITI-Core-Audit-Report-Oil-Gas-2009-2011-310113-New.pdf" target="_blank">NEITI 2009 to 2011 Audit Report</a>:<br> the nation is yet to recover about <span>₦1.3 trillion from extractive industries</span></h3>
    <h3>Take charge and recover this money?<br /><a id="recoverID" href="#" class="btn btn-large btn-success">get started now!</a></h3>

             </div>
         </div>
     </div>
      <div class="row" id="action">
         <div class="span12">
       
        
             </div>
     </div>
  </div>
    <div class="section-5 centre" id="policyID">
    <div class="container">
     
      <div class="row">
        <div class="span12">
      <h2> As part of the Nigerian Government, what would you do to recover these funds?</h2>
         
<ul>
            <li></li>
            <li>
                <input id="1" type="checkbox" />Accountant General Of the Federation (AGF) should exercise greater management and control over ﬁnancial ﬂows</li>
            <li>
                <input id="Checkbox1" type="checkbox" />Centeral Bank Of Nigeria(CBN) should establish reporting systems to anticipate ﬁnancial ﬂows</li>
            <li>
                <input id="Checkbox2" type="checkbox" />Greater use of IT systems is needed to improve controls and eliminate inconsistencies.</li>
            <li>
                <input id="Checkbox3" type="checkbox" />Department of Petroleum Resources (DPR) should play a greater role in oil industry regulation</li>
            <li>
                <input id="Checkbox4" type="checkbox" />Federal Inland Revenue Service (FIRS) capacity to deal with Petroleum Profit Tax should be strengthened</li>
            <li>
                <input id="Checkbox5" type="checkbox" />FIRS and DPR should routinely work together and share information</li>
            <li>
                <input id="Checkbox6" type="checkbox" />Natural gas industry requires its own laws and regulations</li>

        </ul>
            <input id="executeID" type="button" value="ENFORCE YOUR DECISION" class="btn btn-large btn-success" />
        </div>
      </div>
    </div>
  </div>
  <div class="section-5 centre" id="actionResultID">
    <div class="container">
      <!-- Strip with button -->
      <div class="row">
        <div class="span12">
          <h2 id="resultarea"></h2>
            <hr />
          <h3><span>Can You Do Better Investing This Your Hard Earned Money For Nigeria?</span></h3>
            <input id="Button1" type="button" value="SURE YOU CAN" class="btn btn-large btn-success" />
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style "
        addthis:url="http://impactproject.com.ng"
        addthis:title="You have saved 1,000,000 using impactProject"
        addthis:description="Have you used the impactProject App"> 
  <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
  </div> 

<script type="text/javascript">var addthis_config = { "data_track_addressbar": true };</script>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5191fd05501ed512"></script>-->
<!-- AddThis Button END -->
        </div>
      </div>
    </div>
  </div>
    <div class="section-5 centre" id="InvestmentID">
    <div class="container">
     
      <div class="row">
        <div class="span12" style="font-size:medium">
        <h2>Show your economic prowess. Which top four sectors would you invest in?</h2>
        <ul id="healthli">
        <li>
            <input id="health" type="checkbox" />
            Health
        </li>
        <li>
            <input id="food" type="checkbox" />
            Food
        </li>
        <li>
            <input id="housing" type="checkbox" />Housing
        </li>
        <li>
            <input id="transportation" type="checkbox" />Transportation
        </li>

        <li>
            <input id="electricity " type="checkbox" />Electricity 
        </li>
        </ul>
            <input id="Button2" type="button" value="Invest and see what others think" class="btn btn-large btn-success" />
    </div>
        </div>
      </div>
    </div>
 
   <div class="section-5 centre" id="finalchartID">
    <div class="container">
      <!-- Strip with button -->
      <div class="row">
        <div class="span12">
          <h2>Overview Of Where Nigerians Want Improvement</h2>
            <hr />
            <div id="containerPie"></div>
            <input id="Button3" type="button" value="THANKS" class="btn btn-large btn-success" />
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style "
        addthis:url="http://impactproject.com.ng"
        addthis:title="You have saved 1,000,000 using impactProject"
        addthis:description="Have you used the impactProject App"> 
  <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
  </div> 

<script type="text/javascript">var addthis_config = { "data_track_addressbar": true };</script>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5191fd05501ed512"></script>-->
<!-- AddThis Button END -->
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
<?php require_once('./include/footer.php'); ?>
