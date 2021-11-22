<!DOCTYPE html>
<html lang="en">

<head>
    <meta charSet="utf-8" />
    <title>{{$data['meta_title']}}</title>
    <link rel="stylesheet" href="{{asset('_next/static/css/style-gread1.css')}}">
    <link rel="stylesheet" href="{{asset('_next/static/css/style-gread2.css')}}">
    <link rel="stylesheet" href="{{asset('_next/static/css/style-gread3.css')}}">
    <meta name="description" content="{{$data['meta_description']}}"> 
    <meta name="keyword" content="{{$data['meta_keyword']}}"> 
    <link rel="stylesheet" href="{{asset('_next/static/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('_next/static/css/style2.css')}}">
    <link rel="stylesheet" href="{{asset('_next/static/css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://www.google-analytics.com/analytics.js">

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        (function () {
            var ga_data = {};


            ga('create', 'UA-5641939-1', ga_data);

            // DC Integration
            ga('require', 'displayfeatures');

            var dimensions = {};
            dimensions = { "dimension4": "none", "dimension17": "Content", "dimension16": "workbook", "dimension14": "comparing-two-digit-numbers, creative-writing, early-writing-practice, two-digit-numbers, early-literacy-concepts, fiction-writing, genre-writing, writing, reading, number-sense, ela, math", "dimension15": "Math, Reading & writing", "dimension6": "first-grade", "contentGroup1": "first-grade" }
            // Add cid from session
            var cid = window.sessionStorage.getItem('cid');
            if (cid) {
                dimensions["dimension1"] = cid;
            }
            var current_cid = window.sessionStorage.getItem('current_cid');
            if (current_cid) {
                dimensions["dimension2"] = current_cid;
            }

            ga('set', dimensions);

            ga('send', 'pageview');

        })();
    </script>
    <!-- End Google Analytics -->


    <script>
        (function () {
            /* dataLayer for Google Tag Manager */
            window.dataLayer = [];

            var dimensions = { "dimension4": "none", "dimension17": "Content", "dimension16": "workbook", "dimension14": "comparing-two-digit-numbers, creative-writing, early-writing-practice, two-digit-numbers, early-literacy-concepts, fiction-writing, genre-writing, writing, reading, number-sense, ela, math", "dimension15": "Math, Reading & writing", "dimension6": "first-grade", "contentGroup1": "first-grade" } || {};

            // Add cid from session
            var cid = window.sessionStorage.getItem('cid');
            if (cid) {
                dimensions["dimension1"] = cid;
            }
            var current_cid = window.sessionStorage.getItem('current_cid');
            if (current_cid) {
                dimensions["dimension2"] = current_cid;
            }

            for (var i in dimensions) {
                if (dimensions.hasOwnProperty(i)) {
                    var obj = {};
                    obj[i] = "" + dimensions[i];
                    window.dataLayer.push(obj);
                }
            }
        })();
    </script>
    
</head>
<style>
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 30px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

.close {
    color: #0c0b0b;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.rterewtr p {
    font-size: 15px;
    color: #066b99;
}

.rterewtr {
    margin-bottom: 15px;
}
footer {
    margin: 70px 0 0 0;
    background: #2B2B2B;
}

.footer_inner {
    padding-top: 70px;
    padding-bottom: 30px;

}

.footer_inner h2 {
    font-style: normal;
    font-weight: normal;
    font-size: 22px;
    line-height: 16px;
    color: #FFFFFF;
    margin: 0 0 30px 0;
    padding: 0;
}

.footer_inner ul {
    margin: 0;
    padding: 0;
}

.footer_inner ul li {
    margin: 0 0 8px 0;
    padding: 0;
    list-style-type: none;
}

.footer_inner ul li a {
    font-style: normal;
    font-weight: normal;
    font-size: 15px;
    text-decoration: none;
    color: #9E9E9E;
    transition: .5s;
}

.contact_footer_box p {
    font-style: normal;
    font-weight: normal;
    font-size: 15px;
    line-height: 18px;
    color: #9E9E9E;
    margin: 0 0 10px 0;
    padding: 2px 0 2px 32px;
}

.contact_footer_box p.message {
    background: url('../_next/static/img/message.png') no-repeat left center;
}

.contact_footer_box p.address {
    background: url('../_next/static/img/location.png') no-repeat left center;
}

.copy_right {
    padding: 20px 0;
    border-top: 1px solid #3a3b3d;
}

.copy_right_inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.copy_right_inner p {
    font-style: normal;
    font-weight: 300;
    font-size: 15px;
    line-height: 18px;
    color: #595959;
    margin: 0;
    padding: 0;
}
.gtyur {
    margin: 10px 0px;
}
.Tag-module_tagBody_3Vvf9.active{background:#007bff !important;}
.Tag-module_tagBody_3Vvf9.active a{color: #fff !important;}
</style>

<body>
<header style="margin-top: 20px;">
    <div class="container">
<div class="row">
    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
        <a class="logo-holder" href="/" title="Education.com Home Page" aria-label="logo">
            <img src="{{asset('_next/static/img/logo.png')}}" alt="">
        </a>
    </div>
    <div class="col-md-7 col-lg-6 col-sm-12 col-xs-12">
        <div class="tabs">
        <div class="tab search-form-container">

            <form id="search-form" action="/search" method="post" title="Search 30,000+ Educational Resources" class="nav-search-form">
                @csrf
                <input class="Anonymous" type="hidden" name="cid" value="11.75">
                <input id="search-term-typeahead" class="form-control" name="q" type="search" placeholder="Search our library" name="q" class="search-term typeahead tt-input top-nav-search Anonymous" aria-label="Search our library" style="padding-left: 30px; border-radius: 26px;height: 40px;">
                <img class="icon-search" src="{{asset('_next/static/img/search.png')}}" alt="" style="width: 17px;position: absolute;left: 24px;top: 11px;">

                

            </form>
        </div>
    </div>
    </div>
    <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12">  <div style="float: right;"><button style="border: none;background: transparent;"><a href="http://quickmints.com/" class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Home</a></button></div></div>
</div>

    </div>
</header>

    
  
    <hr>

    <div class="banner-notifications-container"></div>


    <script>

        var blackFridaycountDownDate = new Date("Dec 2, 2019 04:59:59").getTime();
        var cyberMondaycountDownDate = new Date("Dec 3, 2019 04:59:59").getTime();
        var CMExtensioncountDownDate = new Date("Dec 6, 2019 04:59:59").getTime();

        // Get today's date and time
        var now = new Date().toLocaleString("en-US", { timeZone: "UTC" });
        now = new Date(now).getTime();
        var countDownDate = CMExtensioncountDownDate;
        if (now < cyberMondaycountDownDate) {
            countDownDate = cyberMondaycountDownDate;
        }
        if (now < blackFridaycountDownDate) {
            countDownDate = blackFridaycountDownDate;
        }

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Find the distance between now and the count down date
            now = new Date().toLocaleString("en-US", { timeZone: "UTC" });
            now = new Date(now).getTime();
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // If the countdown is finished, write some text
            if (distance == 0) {
                clearInterval(x);
            }

            //Set text to be plural iff there are multiple of that type
            var dayText = days === 1 ? " day, " : " days, ";
            var hourText = hours === 1 ? " hour, " : " hours, ";
            var minuteText = minutes === 1 ? " minute, " : " minutes, ";
            var secondText = seconds === 1 ? " second." : " seconds.";

            //If the clock exists, then we must update it
            if (document.getElementById("countdown-clock")) {
                // Display the result in the element
                document.getElementById("countdown-clock").innerHTML = days + dayText + hours + hourText
                    + minutes + minuteText + seconds + secondText;
            }

        }, 1000);

    </script>


    <main id='content'>
        <a class="anchor" name="anchor_11270"></a>


        <div id="pmid_11270" class="WorkbookContentDetail">


            <div class="content-detail-container">



                <div class="content-holder">




                    <script>
                        (window.dataLayer || []).push({
                            'dimension14': ["comparing-two-digit-numbers", "creative-writing", "early-writing-practice", "two-digit-numbers", "early-literacy-concepts", "fiction-writing", "genre-writing", "writing", "reading", "number-sense", "ela", "math"]
                        });
                    </script>


                    <script>
                        // Creating the facebook view content event
                        (window.dataLayer || []).push({
                            event: 'GAEvent',
                            eventAction: 'ViewContent',
                            eventContentType: 'workbook',
                            eventContentIds: '174794',
                            eventValue: 0
                        });
                    </script>

                    <section class="page-width content-detail">
                        <div class="container">
                            <div class="content-type">
                                <h3 class="vertical-align-text">
                                   
                                                    <!-- <span>Workbook</span> -->
                                            </h3>
                            </div>
                            <h1 style="font-size: 40px;
                            line-height: 1.25;
                            color: #009DFC;">{{$data['name']}}</h1>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="main-thumbnail">
                                        <img src="{{asset('public/uploads/image')}}/{{$data['image']}}" alt="" style="width: 100%; height:400px">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                    <div class="content-info">
                                        <div class="description">
                                            <p>{{$data['description']}}</p>
                                            <div class="book-info">
                                                
                                            </div>
                                        </div>
                                    
                                     
                                        <!-- Trigger/Open The Modal -->
                                        @if(isset($share))
                                            @if($share>=1)
                                            <form action="/second-form-submit" method="post">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ session()->get('user_id') }}">
                                                <input type="hidden" name="name" value="{{ session()->get('name') }}">
                                                <input type="hidden" name="email" value="{{ session()->get('email') }}">
                                                <input type="hidden" name="file" value="{{$data['file']}}">
                                                <button    class="btn btn-primary">Download Workbook</button>
                                            </form>
                                            
                                            @else
                                            <button id="myBtn"   class="react-signup download-link btn btn-primary">Download Workbook</button>
                                            @endif
                                            <!--@if($count>=20)-->
                                            <!--     <button id="myBtn"   class="react-signup download-link btn btn-primary">Download Workbook</button>-->
                                           
                                            <!-- @endif-->
                                        @else
                                            <button id="myBtn"   class="react-signup download-link btn btn-primary">Download Workbook</button>
                                        @endif
                                        
                                   <div class="CategoryTree-module_values_fZFlB" style="padding-top: 20px;">
                                        <h5 class="CategoryTree-module_title_1R1pj">Category</h5>
                                        @if(isset($arr))
                                        <div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('kinder garten', $arr)) active @endif"><a data-cid="10.993" href="/kindergarten">Kindergarten</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('pre school', $arr)) active @endif"><a data-cid="10.993" href="/">Preschool</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('1st grade', $arr)) active @endif"><a data-cid="10.993" href="/1st-grade">1st Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('2nd grade', $arr)) active @endif"><a data-cid="10.993" href="/2nd-grade">2nd Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('3rd grade', $arr)) active @endif"><a data-cid="10.993" href="/3rd-grade">3rd Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('4th grade', $arr)) active @endif"><a data-cid="10.993" href="/4th-grade">4th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('5th grade', $arr)) active @endif"><a data-cid="10.993" href="/5th-grade">5th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('6th grade', $arr)) active @endif"><a data-cid="10.993" href="/6th-grade">6th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('7th grade', $arr)) active @endif"><a data-cid="10.993" href="/7th-grade">7th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('8th grade', $arr)) active @endif"><a data-cid="10.993" href="/8th-grade">8th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('high school', $arr)) active @endif"><a data-cid="10.993" href="/high-chool">High School</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('miscellaneous', $arr)) active @endif"><a data-cid="10.993" href="/miscellaneous">Miscellaneous</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('cogat', $arr)) active @endif"><a data-cid="10.993" href="/cogat">Cogat</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('competitive math', $arr)) active @endif"><a data-cid="10.993" href="/competitive-math">Competitive Math</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('activities', $arr)) active @endif"><a data-cid="10.993" href="/activities">Activities</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if(in_array('stem', $arr)) active @endif"><a data-cid="10.993" href="/stem">STEM</a></div></div>
                                        @else
                                        <div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='Kinder garten') active @endif"><a data-cid="10.993" href="/kindergarten">Kindergarten</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='pre school') active @endif"><a data-cid="10.993" href="/">Preschool</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='1st grade') active @endif"><a data-cid="10.993" href="/1st-grade">1st Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='2nd grade') active @endif"><a data-cid="10.993" href="/2nd-grade">2nd Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='3rd grade')  active @endif"><a data-cid="10.993" href="/3rd-grade">3rd Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='4th grade') active @endif"><a data-cid="10.993" href="/4th-grade">4th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='5th grade') active @endif"><a data-cid="10.993" href="/5th-grade">5th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='6th grade') active @endif"><a data-cid="10.993" href="/6th-grade">6th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='7th grade') active @endif"><a data-cid="10.993" href="/7th-grade">7th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='8th grade') active @endif"><a data-cid="10.993" href="/8th-grade">8th Grade</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='high school') active @endif"><a data-cid="10.993" href="/high-chool">High School</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='miscellaneous') active @endif"><a data-cid="10.993" href="/miscellaneous">Miscellaneous</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='cogat') active @endif"><a data-cid="10.993" href="/cogat">Cogat</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='competitive math') active @endif"><a data-cid="10.993" href="/competitive-math">Competitive Math</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='activities') active @endif"><a data-cid="10.993" href="/activities">Activities</a></div><div class="Tag-module_tagBody_3Vvf9 CategoryTree-module_tag_2TiJ7 @if($data['category']=='stem') active @endif"><a data-cid="10.993" href="/stem">STEM</a></div></div>
                                        @endif
                                        <!--<div id="myModal" class="modal">-->
                                         @if(isset($count))
                                        @if($count<=4)
                                      <div id="myModal" class="modal">

                                            
                                             <div class="modal-content">
                                           
                                              <div class="erty" style="padding-bottom: 30px;">
                                                <span class="close">&times;</span>
                                              </div>
                                              <div class="rterewtr">
                                              <h4 style="text-align: center;color: #007bff;">{{$content['content1']}}</h4>
                                             </div>
                                                <div class="row">
                                                    <div class="col-md-5">
<img src="{{asset('images/pop-up.png')}}" alt="" style="height: 150px;">
                                                    </div>
                                                    <div class="col-md-7">
                                                    <form action="/form-submit" method="post">
                                                    @csrf
                                                    <input type="hidden" name="file" value="{{$data['file']}}">
                                                    
                                                     
                                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                                    <br>
                                                     
                                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                                    
                                                   
                                                    
                                                      <div style="text-align: center;padding-top: 20px;">
                                                        <button type="submit" id="fghtr"  class="form-control react-signup download-link btn btn-primary">Download Worksheet</button>
                                                      </div>
                                                  </form>
</div>
                                                </div>
                    </div> 
                                            </div>
                                            @else
                                             <div id="myModal" class="modal">

                                            <div class="modal-content">
                                            @if(Session::has('success'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{Session::get('success')}}
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                @endif
                                                @if(Session::has('error'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{Session::get('error')}}
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                @endif
                                              <div class="erty" style="padding-bottom: 30px;">
                                                <span class="close">&times;</span>
                                              </div>
                                               <div class="rterewtr" >
                                             <h4 style="text-align: center; color: black;">You have reached your limit. To access more free downloads, help us spread the word!</h4>
                                             </div>
                                              <div class="rterewtr">
                                             <p style="text-align: center;">{{$content['content2']}}</p>
                                             </div>
                                              <form action="/referral-form-submit" method="post">
                                                    @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                  <input type="text" class="form-control gtyur" placeholder="Name" name="name" required="" autocomplete="off">
                                                    <input type="text" class="form-control gtyur" placeholder="Name" name="name1" required="" autocomplete="off">
                                                      <input type="text" class="form-control gtyur" placeholder="Name" name="name2" required="" autocomplete="off">
                                                        <input type="text" class="form-control gtyur" placeholder="Name" name="name3" required="" autocomplete="off">
                                                          <input type="text" class="form-control gtyur" placeholder="Name" name="name4" required="" autocomplete="off">
                                                    </div>
                                                    <div class="col-md-6">
                                                   
                                                    <input type="hidden" name="file" value="{{$data['file']}}">
                                                    
                                                        <input type="email" class="form-control gtyur" placeholder="Email" name="email" required="" autocomplete="off">
                                                        <input type="email" class="form-control gtyur" placeholder="Email" name="email1" required="" autocomplete="off">
                                                        <input type="email" class="form-control gtyur" placeholder="Email" name="email2" required="" autocomplete="off">
                                                        <input type="email" class="form-control gtyur" placeholder="Email" name="email3" required="" autocomplete="off">
                                                        <input type="email" class="form-control gtyur" placeholder="Email" name="email4" required="" autocomplete="off">
                                                    
                                                   
                                                     
                                                 
                                                 </div>
                                              
                                                </div>
                                                <div style="text-align: center;padding-top: 20px;">
                                                      <button type="submit" class="form-control react-signup download-link btn btn-primary">Download Worksheet</button>
                                                      </div>
                                                  </form>
                                             </div>

                                        </div>
                                        @endif
                                       @endif
                                       
                                          <div id="myModal" class="modal">

                                            
                                             <div class="modal-content">
                                           
                                              <div class="erty" style="padding-bottom: 30px;">
                                                <span class="close">&times;</span>
                                              </div>
                                              <div class="rterewtr">
                                             <h4 style="text-align: center;color: #007bff;">{{$content['content1']}}</h4>
                                             </div>
                                                <div class="row">
                                                    <div class="col-md-5">
                                            <img src="{{asset('images/pop-up.png')}}" alt="" style="height: 150px;">
                                                    </div>
                                                    <div class="col-md-7">
                                                    <form action="/form-submit" method="post" >
                                                    @csrf
                                                    <input type="hidden" name="file" value="{{$data['file']}}">
                                                    
                                                     
                                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                                    <br>
                                                     
                                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                                    
                                                   
                                                    
                                                      <div style="text-align: center;padding-top: 20px;">
                                                        <button type="submit" id="fghtr" class="form-control react-signup download-link btn btn-primary">Download Worksheet</button>
                                                      </div>
                                                  </form>
</div>
                                                </div>
                    </div> 
                                            </div>
                                        <!--    @if(isset($count))-->
                                        <!--@if($count>=19)-->
                                        <!-- <div id="myModal" class="modal">-->

                                        <!--    <div class="modal-content">-->
                                        <!--    @if(Session::has('success'))-->
                                        <!--            <div class="alert alert-success" role="alert">-->
                                        <!--                {{Session::get('success')}}-->
                                        <!--                <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
                                        <!--                    <span aria-hidden="true">&times;</span>-->
                                        <!--                </button>-->
                                        <!--            </div>-->
                                        <!--        @endif-->
                                        <!--        @if(Session::has('error'))-->
                                        <!--            <div class="alert alert-danger" role="alert">-->
                                        <!--                {{Session::get('error')}}-->
                                        <!--                <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
                                        <!--                    <span aria-hidden="true">&times;</span>-->
                                        <!--                </button>-->
                                        <!--            </div>-->
                                        <!--        @endif-->
                                        <!--      <div class="erty" style="padding-bottom: 30px;">-->
                                        <!--        <span class="close">&times;</span>-->
                                        <!--      </div>-->
                                        <!--       <div class="rterewtr" >-->
                                        <!--     <h4 style="text-align: center; color: black;">You have reached your limit. To access more free downloads, help us spread the word!</h4>-->
                                        <!--     </div>-->
                                        <!--      <div class="rterewtr">-->
                                        <!--     <p style="text-align: center;">{{$content['content2']}}</p>-->
                                        <!--     </div>-->
                                        <!--      <form action="/referral-form-submit" method="post">-->
                                        <!--            @csrf-->
                                        <!--        <div class="row">-->
                                        <!--            <div class="col-md-6">-->
                                        <!--          <input type="text" class="form-control gtyur" placeholder="Name" name="name" required="" autocomplete="off">-->
                                        <!--            <input type="text" class="form-control gtyur" placeholder="Name" name="name1" required="" autocomplete="off">-->
                                        <!--              <input type="text" class="form-control gtyur" placeholder="Name" name="name2" required="" autocomplete="off">-->
                                        <!--                <input type="text" class="form-control gtyur" placeholder="Name" name="name3" required="" autocomplete="off">-->
                                        <!--                  <input type="text" class="form-control gtyur" placeholder="Name" name="name4" required="" autocomplete="off">-->
                                        <!--            </div>-->
                                        <!--            <div class="col-md-6">-->
                                                   
                                        <!--            <input type="hidden" name="file" value="{{$data['file']}}">-->
                                                    
                                        <!--                <input type="email" class="form-control gtyur" placeholder="Email" name="email" required="" autocomplete="off">-->
                                        <!--                <input type="email" class="form-control gtyur" placeholder="Email" name="email1" required="" autocomplete="off">-->
                                        <!--                <input type="email" class="form-control gtyur" placeholder="Email" name="email2" required="" autocomplete="off">-->
                                        <!--                <input type="email" class="form-control gtyur" placeholder="Email" name="email3" required="" autocomplete="off">-->
                                        <!--                <input type="email" class="form-control gtyur" placeholder="Email" name="email4" required="" autocomplete="off">-->
                                                    
                                                   
                                                     
                                                 
                                        <!--         </div>-->
                                              
                                        <!--        </div>-->
                                        <!--        <div style="text-align: center;padding-top: 20px;">-->
                                        <!--              <button type="submit" class="form-control react-signup download-link btn btn-primary">Download Worksheet</button>-->
                                        <!--              </div>-->
                                        <!--          </form>-->
                                        <!--     </div>-->

                                        <!--</div>-->
                                        <!--    @endif-->
                                        <!--    @endif-->
                                    </div>
                                </div>
                            </div>



                        </div>
                    </section>

                </div>
            </div>
<!--            <script type="text/javascript">-->
<!--        $(document).ready(function () { setInterval(function () { $('#fghtr').load('#fghtr')); }, 3000); });-->
<!--});-->
<!--        });-->
<!--    </script>-->

            <script>
               
                var modal = document.getElementById("myModal");

                 var btn = document.getElementById("myBtn");

              
                var span = document.getElementsByClassName("close")[0];

               
                btn.onclick = function () {
                    modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function () {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function (event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>



        </div>
        <!-- <div class="clear"></div> -->
    </main>








    <div class="gdpr-banner alert alert-notice" style="display: none">We enable strictly necessary cookies to give you
        the best possible experience on Education.com.<a href="/cookie-policy/" target="_blank">Cookie
            policy</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <button href="#" class="btn btn-secondary gdpr-opt-in" style="display: none">Enable Performance Cookies</button>
    </div>


    <div id="collections">
        <div class="overlay-back"></div>
        <div class="choose-collection">
            <i class="icon-cancel-light btn-round"></i>
            <h3 class="title">Add to collection</h3>
            <div class="item new">
                <div class="icon plus"><i class="icon-plus-light"></i></div>
                <div class="label">Create new collection</div>
            </div>
            <div class="list"></div>
        </div>
        <div class="new-collection">
            <i class="icon-cancel-light btn-round"></i>
            <h3 class="title">Create new collection</h3>
            <div class="form">
                <div class="input-row">
                    <label class="floating">
                        <span>Collection name</span>
                        <input name="title" type="text" maxlength="30">
                    </label>
                </div>
                <div class="error inactive"></div>
            </div>
            <div class="actions">
                <button class="btn btn-primary btn-save">Save</button>
                <button class="btn btn-secondary btn-cancel">Cancel</button>
            </div>
        </div>
        <div class="collection minimized">
            <div class="ribbon">
                <i class="icon-up-open"></i>
                <h3 class="title">New Collection</h3>
                <div class="count">0</div>
                <div class="error inactive"></div>
            </div>
            <div class="full">
                <i class="icon-down-open btn-round btn-minimize"></i>
                <div class="left">
                    <div class="change"><i class="icon-left-open btn-round btn-change-collection"></i></div>
                    <h3 class="title"><a>New Collection></a></h3>
                    <div class="info"><span class="count">0</span> <span class="count-label">items</span></div>
                    <div class="error inactive"></div>
                </div>
                <div class="right"></div>
            </div>
        </div>
    </div>
    <div class="modal" id="collections-featurewall">
        <i class="icon-cancel"></i>
        <img class="roly-collections"
            data-lazyload-src="https://cdn.education.com/files/static/collections/roly-collections.png" />
        <div class="modal-content">
            <h3>Sign up to start collecting!</h3>
            <p>Bookmark this to easily find it later. Then send your curated collection to your children, or put
                together your own custom lesson plan.</p>
            <div class="buttons">
                <a class="btn btn-teal btn-large collections-featurewall-btn-signup">Sign up</a>
                <a class="btn btn-tertiary btn-large collections-featurewall-btn-login">Log in</a>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        (function ($) {
            $(".collections-featurewall-btn-signup").on("click", function () {
                $("#collections-featurewall").find(".icon-cancel").click();
                window.Edu.openSignup();
            });
            $(".collections-featurewall-btn-login").on("click", function () {
                $("#collections-featurewall").find(".icon-cancel").click();
                window.Edu.openLogin();
            });

            var paywall_modal = jQuery("#collections-featurewall").modal({
                onOpen: function (data) {
                    if (this.ga_fired) return;
                    this.ga_fired = true;

                    var trackingData = {
                        action: "hit feature wall"
                    };
                    if (data) {
                        if (data.type) {
                            trackingData.itemType = data.type;
                        }
                        if (data.itemId) {
                            trackingData.itemId = data.id;
                        }
                    }

                    if (window.Edu && window.Edu.trackEvent) {
                        window.Edu.trackEvent("collections",
                            trackingData,
                            {
                                eventCategory: "Collections",
                                eventAction: "Hit feature wall"
                            });
                    }
                }
            });
        })(jQuery);
    </script>
    

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div id="react-reg-modal" data-react="RegistrationModal"></div>

    <footer>
                    <div class="container">
                        <div class="row footer_inner">
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <div _ngcontent-vpu-c169="" class="footer_main_box">
                                    <h2 _ngcontent-vpu-c169="">QuickMints </h2>
                                    <ul _ngcontent-vpu-c169="">
                                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/how-work"
                                                ng-reflect-router-link="/how-work">How It works</a></li>
                                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/term-conditions"
                                                ng-reflect-router-link="/term-conditions">Terms &amp; Conditions</a>
                                        </li>
                                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/Privacy-policy"
                                                ng-reflect-router-link="/Privacy-policy">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <div _ngcontent-vpu-c169="" class="footer_main_box">
                                    <h2 _ngcontent-vpu-c169="">Providers </h2>
                                    <ul _ngcontent-vpu-c169="">
                                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/provider-faq"
                                                ng-reflect-router-link="/provider-faq">Provider FAQS</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <div _ngcontent-vpu-c169="" class="footer_main_box">
                                    <h2 _ngcontent-vpu-c169="">Customers </h2>
                                    <ul _ngcontent-vpu-c169="">
                                        <li _ngcontent-vpu-c169=""><a _ngcontent-vpu-c169="" href="#/customer-faq"
                                                ng-reflect-router-link="/customer-faq">Customer FAQS</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                                <div _ngcontent-vpu-c169="" class="footer_main_box contact_footer_box">
                                    <h2 _ngcontent-vpu-c169="">Contact Us</h2>
                                    <p _ngcontent-vpu-c169="" ng-reflect-ng-class="[object Object]" class="message">
                                        admin@quickmints.com </p>
                                    <p _ngcontent-vpu-c169="" ng-reflect-ng-class="[object Object]" class="address"> San
                                        Ramon, CA </p>


                                </div>
                            </div>
                        </div>

                    </div>

                    <div _ngcontent-vpu-c169="" class="copy_right">
                        <div _ngcontent-vpu-c169="" class="container">
                            <div _ngcontent-vpu-c169="" class="copy_right_inner">
                                <p _ngcontent-vpu-c169="">© 2021 Quickmints. All rights reserved.</p><a
                                    _ngcontent-vpu-c169="" href="#"><img _ngcontent-vpu-c169=""
                                        src="../_next/static/img/payment_options5.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </footer>
    <!-- Button trigger modal -->




</body>

</html>