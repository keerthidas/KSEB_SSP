


<style>

#loader{
  margin:auto;
  margin-left:45%;
}
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
.dash-content{
  min-height:180px;
}
.mb-40{
  margin-bottom:20px;
}
.mt-40{
  margin-top:40px;
  /* margin-right:40px; */
}
.count{
  font-size:30px;
  float:right;
}

.pink{
  color:#ef2044;
}
.pink-background{
  background:#ef2044;
}
.lav{
  color:#69e44a;

}
.lav-background{
  background:#69e44a;
}
.green{
  color:#ff45b5;

}
.green-background{
  background:#ff45b5;

}
.blue{
  color:blue;
}
.blue-background
{
  background:blue;
}
.content{
  padding:20px;
}
.content-text{
  float:left

}
.border{
  height:5px;
  background:#eeee;
  width:100%;
  border:1px solid #eeee;
  
}
.color{
  width:70%;
  height:3px;
}
.mt-4{
  margin-top:15px;
}
.fill2{
  /* background:#003f5c!important; */
  background:  #62bae2!important;

}
.fill3{
  /* background:#58508d!important; */
  background:#5745d2!important;
}
.fill4{
  /* background:#bc5090!important; */
  background:#ca3f91!important;
}
.fill5{
  /* background:#ff6361!important; */
  background:#f54b49!important;
}
.fill6{
  /* background:#ffa600!important; */
  background:#ffbb3b!important;
}


</style>
<link href="<?=base_url()?>assets/supplier_portal/css/dashboard.css" rel="stylesheet" id="bootstrap-css">


<main id="tg-main" class="tg-main tg-haslayout">


	<section class="tg-main-section tg-haslayout">
   
<!------ Include the above in your HEAD tag ---------->
    <div class="container">
        <div class=" col-md-3 ">
          <div class="card dash-content">
              <div class="content">
                <span class="content-text mt-40">Total Tenders</span>
                <span class="count pink mt-40">23</span>
                <div class="clearfix"> </div>
                <div class="bar col-md-12  mt-4">
                  <div class="border">
                    <div class="color pink-background"></div>
                  </div>
                
                </div>

              </div>
          </div>
        </div>
        <div class=" col-md-3 ">
          <div class="card dash-content">
              <div class="content">
              <span class="content-text mt-40">Total Tenders</span>
              <span class="count blue mt-40">80</span>
                <div class="clearfix"> </div>
                  <div class="bar col-md-12  mt-4">
                    <div class="border">
                      <div class="color blue-background"></div>
                    </div>
                
                  </div>
              </div>
          </div>
        </div>
        <div class=" col-md-3 ">
          <div class="card dash-content">
              <div class="content">
              <span class="content-text mt-40">Total Tenders</span>
              <span class="count lav mt-40">169</span>
              <div class="clearfix"> </div>
                  <div class="bar col-md-12  mt-4">
                    <div class="border">
                      <div class="color lav-background"></div>
                    </div>
                
                  </div>
            
              </div>
          </div>
        </div>
        <div class=" col-md-3">
        
          <div class="card dash-content">
              <div class="content">
                <span class="content-text mt-40">Total Tenders</span>
                <span class="count green mt-40">99</span>
                <div class="clearfix"> </div>
                  <div class="bar col-md-12  mt-4">
                    <div class="border">
                      <div class="color green-background"></div>
                    </div>
                
                  </div>
              </div>
              </div>
        </div>
    </div>
   

    <div class="clearfix mb-40"></div>
    <div class="container">

        <div class=" col-md-6 ">
          <div class="card content">
              <h4>Activity Feed</h4>
              <hr>
              <div class="activity-feed">
                <div class="feed-item">
                  <div class="date">Sep 25</div>
                  <div class="text">Responded to need <a href="single-need.php">“Volunteer opportunity”</a></div>
                </div>
                <div class="feed-item">
                  <div class="date">Sep 24</div>
                  <div class="text">Added an interest “Volunteer Activities”</div>
                </div>
                <div class="feed-item">
                  <div class="date">Sep 23</div>
                  <div class="text">Joined the group <a href="single-group.php">“Boardsmanship Forum”</a></div>
                </div>
                <div class="feed-item">
                  <div class="date">Sep 21</div>
                  <div class="text">Responded to need <a href="single-need.php">“In-Kind Opportunity”</a></div>
                </div>
                <div class="feed-item">
                  <div class="date">Sep 18</div>
                  <div class="text">Created need <a href="single-need.php">“Volunteer Opportunity”</a></div>
                </div>
                <div class="feed-item">
                  <div class="date">Sep 17</div>
                  <div class="text">Attending the event <a href="single-event.php">“Some New Event”</a></div>
                </div>
            </div>
          </div>
        </div>
        <div class=" col-md-6 ">
          <div class="card content" style="min-height: 471px;">

            <div class="container vertical rounded">
              <h4>Tenders</h4>
              <hr>
              <div class="mb-40"></div>
              <div class="progress-bar">
                <div class="progress-track">
                  <div class="progress-fill ">
                    <span>100%</span>
                  </div>
                </div>
                <span style="color:black">Jan</span>
              </div>

              <div class="progress-bar">
                <div class="progress-track">
                  <div class="progress-fill fill2">
                    <span>75%</span>
                  </div>
                </div>
                <span style="color:black">Feb</span>
              </div>

              <div class="progress-bar">
                <div class="progress-track">
                  <div class="progress-fill fill3">
                    <span>60%</span>
                   
                  </div>

                </div>
                <span style="color:black">Mar</span>
              </div>

              <div class="progress-bar">
                <div class="progress-track">
                  <div class="progress-fill fill4">
                    <span>20%</span>
                  </div>
                </div>
                <span style="color:black">Apr</span>
              </div>

              <div class="progress-bar">
                <div class="progress-track">
                  <div class="progress-fill fill5">
                    <span>34%</span>
                  </div>
                </div>
                <span style="color:black">May</span>
              </div>

              <div class="progress-bar">
                <div class="progress-track">
                  <div class="progress-fill fill6">
                    <span>82%</span>
                  </div>
                </div>
                <span style="color:black">Jun</span>
              </div>
             
            </div>

          </div>
              
        
        </div>

    </div>
    
	</section>
</main>
<style>
*, *:before, *:after {
  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
 }




.horizontal .progress-bar {
  float: left;
  height: 45px;
  width: 100%;
  padding: 12px 0;
}

.horizontal .progress-track {
  position: relative;
  width: 100%;
  height: 20px;
  background: #ebebeb;
}

.horizontal .progress-fill {
  position: relative;
  background: #666;
  height: 20px;
  width: 50%;
  color: #fff;
  text-align: center;
  font-family: "Lato","Verdana",sans-serif;
  font-size: 12px;
  line-height: 20px;
}

.rounded .progress-track,
.rounded .progress-fill {
  border-radius: 3px;
  box-shadow: inset 0 0 5px rgba(0,0,0,.2);
}



/* Vertical */

.vertical .progress-bar {
  float: left;
  height: 300px;
  width: 40px;
  margin-right: 25px;
}

.vertical .progress-track {
  position: relative;
  width: 40px;
  height: 100%;
  background: #ebebeb;
}

.vertical .progress-fill {
  position: relative;
  /* background: #825; */
  background:#f33393;
  height: 50%;
  width: 40px;
  color: #fff;
  text-align: center;
  font-family: "Lato","Verdana",sans-serif;
  font-size: 12px;
  line-height: 20px;
}

.rounded .progress-track,
.rounded .progress-fill {
  box-shadow: inset 0 0 5px rgba(0,0,0,.2);
  border-radius: 3px;
}


.activity-feed .feed-item:after {
  background: #de5b5b!important;
}


</style>
<script>
$('.vertical .progress-fill span').each(function(){
  var percent = $(this).html();
  var pTop = 100 - ( percent.slice(0, percent.length - 1) ) + "%";
  $(this).parent().css({
    'height' : percent,
    'top' : pTop
  });
});

</script>


