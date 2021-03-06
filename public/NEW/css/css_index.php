<?php
    header("Content-type: text/css; charset: UTF-8");
?>
 
    .heading {
      background-image: url('https://www.coinschedule.com/img/titlecoins.jpg');
      color: #fff;
      padding: 5px 0px 5px; 0px;
      line-height: 1.4;
    }
    
    .heading h1 {
      color: #fff;
      margin: 0px;
    }
    
    #events, #blog {
      position:absolute;
      top:-35px;
    }
 
    
    section {
      position:relative;
    }             
    
    
 
    /************************************** */
    /* Filter                               */
    /************************************** */    
    
    .filtertoggle {
      padding: 4px 0px 0px 0px;
      cursor: pointer;
      cursor: hand;
      font-size: 1.1em;
      border: solid 1px #e4e5e7;
      text-align: center;
    }
    
    .filter {
      display: none;
      margin-top: 10px;
    }
    
    .filterbox {
      display: inline-block;
      border: 1px solid #ccc;
      padding: 5px;
      margin-bottom: 10px;
      width: 100%;
      box-sizing: border-box;
    }
    
    .filteritem {
      display: inline-block;
      margin: 0px;
      vertical-align: middle;
      padding-right: 15px;
    }
    
    .filteritem img {
      padding-bottom: 1px;
    }
    
    .filtercategory .filteritem {
      width: 230px;
    }
    
    .filterbox input {
      margin: 5px 2px 0px 0px;
    }
    
    .filteritemtext {
      cursor: pointer;
      cursor: hand;
    }
    
    .filter .apply {
      cursor: pointer;
      color: #6a6c6f;
      font-weight: bold;
      padding: 3px 8px 3px 8px;
    }
    
    
      
    /* ************************************* */
    /* Live ICOs                             */
    /* ************************************* */
    
    .liveview {
      float: right; 
      font-size: 0.6em;
      padding-top: 10px;
    }
    
    .liveview select {
      font-size: inherit;                        
    }
    
    .liveicos {
      margin:0 auto;
      width:1755px;
    }
    
 
    .live .projlogo {
      padding-top: 2px;
    }
    
    .live .list-container {
      max-height: 100% !important;
    }
    
    @media screen and (max-width: 1800px) { .liveicos { width:1535px;} }
    @media screen and (max-width: 1590px) { .liveicos { width:1315px;} }
    @media screen and (max-width: 1380px) { .liveicos { width:1095px;} }
    @media screen and (max-width: 1160px) { .liveicos { width:880px;} }
    @media screen and (max-width: 1000px) { .liveicos { width:795px;} }
    @media screen and (max-width: 840px) { .liveicos { width:595px;} }
    @media screen and (max-width: 600px) { .liveicos { width:505px;} }
    @media screen and (max-width: 540px) { .liveicos { width:340px;} }

    
    .platinum {
      padding: 5px 15px 0px 15px;
      border: #e4e5e7 1px solid;
      font-weight:bold; 
      font-size: 2em;
      color:#34495e;
      text-align: justify;
      line-height: 0;
    }

    
    .platinum .stretch {
      width: 100%;
      display: inline-block;
      font-size: 0;
      line-height: 0;  
    }
    
    .platinum > table {
      width:100%;
    }
    
    .plateventlogo {
      padding-right: 10px;  
    }
    
    .platinum h4 {
      font-size: 1.5em;
      margin: 10px 0px 40px 0px;
      padding:0px;
    }

    
    .icobox {
      cursor: pointer;
      cursor: hand;
      vertical-align:bottom;
      display: inline-block;
      position: relative;
      padding: 0px;
      color: black;
    }
    
    
    .icobox table {
      width: 100%;
      height: 100%;
    }
    
    .icobox table td {
      padding: 0px;
    }                   
    
    
    .icobox h4 {
      margin: 2px 0px 0px 0px;
    }
    
    
    .icobox-text {
      line-height: 1.2;
    }
    
    
    .category {
      text-align: center;
      height: 20px;
      background-color: #5E4FA0;
      font-weight: normal;
      color: #fff; 
      font-size: 0.85em;
    }
    
    
    .gold {
      background-image: url(https://www.coinschedule.com/img/goldplate.png);
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 100% 100%;
      margin: 0px 5px 5px 0px;
      width: 210px;
      height: 150px;
      text-align: center;
      border: #F7A61C 2px solid;
      font-weight: bold;       
    }
    
    
    .gold h4 {
      font-weight: bold;
    }
    


    .gold .icobox-text {
      font-size: 1.3em;
      padding: 0px 5px 0px 5px;
      vertical-align: middle;
    }
    
    .gold .done {
      font-size: 0.75em;
      padding-top: 2px;
    }
    
    .silver {
      background-image: url(https://www.coinschedule.com/img/silverplate.png?1);
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: 100% 100%;
      margin: 0px 5px 5px 0px;
      width: 210px;
      height: 80px;
      border: #A9A9A9 2px solid;
    }    
    
    .silver img {
      padding: 6px 3px 0px 3px;
      display: inline-block;
    }
    
    .silver .icobox-text {
      width: 150px;
      padding: 0px 5px 0px 5px;
      vertical-align:middle;
      text-align: left;
    }
    
    .silver h4 {
      font-weight: 600;
    }
    
    .silver .done {
      font-size: 0.9em;
      color: #000;  
    }
    
    .standard {
      color: #34495e;
      width: 135px;
      height: 68px;
      text-align: center;
      margin: 0px 5px 5px 0px;
      border: 1px solid;
      border-radius: 3px;
      font-size: 0.9em;
      font-weight: normal;
    }
    
    .standard:hover {
      background-color: #eee;
    }
    
        
    .standard .category {
      height: 16px;
      font-size: 0.9em;
    }
    
    .standard .icobox-text {
      padding: 0px 3px 0px 3px;
      position: relative;
    }
    
    .standard h4 {
      font-weight: 600;
    }
    
    .standard .done {
      font-size: 0.9em;
      color: #a7afb8;  
    }

    .red {
      color:red !important;  
    }
    
    .green {
      color:green !important;  
    }
    
    .disclaimer {
      padding-top: 5px;
      font-style: italic;
    }
    
    
    
    /* ************************************* */
    /* List Table                            */
    /* ************************************* */
    
    .list-table {
      position: relative;
      padding-top: 37px;
      background-color: #5E4FA0;
    }

    .list-table .list-container {
      overflow-y: auto;
      overflow-x: hidden;
      max-height: 685px;
    }
    
    
    .list-tableheading {
      padding-right: 18px;
      background-color: #5E4FA0;
    }
    
    .list-table table {
      border-collapse: collapse;
      width:100%;
    }
    
    .list-table table th {
      text-align: left;
      padding: 0px 8px 0px 8px;
      height: 0;
      line-height: 0;
      color: transparent;
      border: none;
      white-space: nowrap;
    }
    
    .list-table table th div{
      position: absolute;
      background: transparent;
      color: #fff;
      padding: 10px;
      top: 0;
      margin-left: -8px;
      line-height: normal;
      border-left: 1px solid #ddd;
    }
    
    .list-table table th:nth-child(1) div{   
      border-left: none;
    }
        
    .list-table>.list-container>table>tbody>tr {
      background-color: #FFF;
    } 
     
    .list-table>.list-container>table>tbody>tr:nth-child(odd) {
      background-color: #EAF3F3;
    }
    
    .list-table>.list-container>table>tbody>tr>td {
      padding: 6px;
      line-height: 1.42857143;
      vertical-align: top;
      border: 1px solid #ddd;
    }
    
    .list-table table tr:hover td{
      background-color: #D9E4E6;
      cursor: pointer;
    }
    
    .list-table table tr td:nth-child(1){
      width: 300px;
    }
    
    
    /* ************************************* */
    /* Upcoming Table                        */
    /* ************************************* */
    
    .upcoming .details {
      display: none;
    }
    
    .upcoming .link td {
      vertical-align: top;
    }
    
    .upcoming .projlogo {
      padding-top: 2px;
    }
    
    /* ************************************* */
    /* Events Table                        */
    /* ************************************* */
    
    .events section {
      max-height: 420px;
    }
    
    .events .details {
      display: none;
    }
    
    .events .link td {
      vertical-align: top;
    }
    
    .events .eventlogo {
      padding-top: 2px;
    }
    

    
    

    /* ************************************* */
    /* From Blog                             */
    /* ************************************* */
    
    .fromblog {
      text-align: center;
    }
    
    .blogpost {
        padding: 15px 15px 10px 15px;
        margin: 0px 5px 10px 5px;
        height: 450px;
        background-color: #fff;
        border: 1px solid #ddd;  
        text-align: left;
        font-size: 0.9em;   
    }

    .blogpost hr {
      margin: 0px 0px 10px 0px;
    }    
    
    .blogpost em {
      font-size: 0.9em;
    }
        
    .blogpost table {
      width: 300px;
      margin: 0 auto;
    }

    .blogpost table img {
      width: 100%
    }
    
    
    .blogpost h2 {
      margin-top: 5px;
      font-size: 1.5em; 
    }
    
    
    .blogpost h3 {
      font-size: 1em; 
      font-weight: normal;
    }
    
    
    .blogpost p {
      color: #a7afb8;
      margin: 0 0 10px;
    }


    /* ************************************* */
    /* Press Mentions                        */
    /* ************************************* */    
    
    .pressmentions {
      text-align: center;
    }
    
    
    .press {
      padding: 6px;
      margin: 0px 5px 10px 5px;
      border: 1px solid #eee; 
    }
    
    .press:hover {
      border-color: #ddd; 
    }
    
    
    .press img {
      display: block;
    }
    
    
    
    /* ************************************* */
    /* Clock                                 */
    /* ************************************* */   
    
    .clock {
       margin: 22px 0px 5px 10px;
       font-weight: bold;
    }
    
    #startclock, #endclock{
    	font-family: sans-serif;
      color: #fff;
    	text-align: center;
    	font-size: 16px;
    }
    
    #startclock > div{
    	padding: 0px;
    	display: inline-block;  
      margin-right: 4px;
    }    
    
    #startclock div > span, #endclock div > span{
    	padding: 28px 12px 28px 12px;
    	border-radius: 3px;
    	background: #00816A;
      display: inline-block;
      font-size: 1.6em;
      width: 30px;
    }  
    
    #endclock > div{
    	padding: 0px;
    	display: inline-block; 
      margin-right: 4px;  
    }
    
    #endclock div > span{
    	background: #FF5733;
    }
    
    .smalltext{
      color: #000;
    	padding-top: 10px;
    	font-size: 0.9em;
    }
    



    
    /* ************************************* */
    /* Responsive                            */
    /* ************************************* */
    
    @media screen and (max-width: 1000px) {

      .platinum {
        text-align: center;
      }
      
      .plateventimage {
        display: none;
      }
      
      .filter {
        font-size: 1em;
      }
      
      .filteritem {
        width: 150px;
        padding-right: 0px;
      }
      
     .filtercategory .filteritem {
        width: 200px;
      }
    
      
      .gold {
        font-size: 0.9em;
        width: 189px;
        height: 140px;
      }
      
      .silver {
        font-size: 0.9em;
        width: 189px;
        height: 80px;
      }
      
      .list-table .list-container {
        max-height: 60vh;
      }
      
      .upcoming th:nth-child(2), .upcoming>.list-container>table>tbody>tr>td:nth-child(2), .upcoming th:nth-child(3), .upcoming>.list-container>table>tbody>tr>td:nth-child(3) {
        display: none;
      }
      
      .upcoming .details {
        display: block;
      }
      
      .upcoming a {
        font-weight: bold;
      }
      
      
      .blogpost table {
        width: 260px
      }
      
      .events th:nth-child(2), .events>.list-container>table>tbody>tr>td:nth-child(2), .events th:nth-child(3), .events>.list-container>table>tbody>tr>td:nth-child(3) {
        display: none;
      }
      
      .events .details {
        display: block;
      }
      
      .events a {
        font-weight: bold;
      }
      
      .press img {
        width: 120px;
        height: 45px;
      }

    }
    
    
    @media screen and (max-width: 600px){
      
      .filter {
        font-size: 0.9em;
      }
      
      .filteritem {
        width: 160px;
      }
      
      .filtercategory .filteritem {
        width: 160px;
      }
      
      .platinum {
        font-size: 1.8em;
      }
      
      .plateventlogo {
        display: none;
      }
      
      .platinum table {
        font-size: 0.8em;
      }
      
      .platinum h4 {
        margin: 10px 0px 30px 0px;
      }
      
      .gold {
        font-size: 0.8em;
        width: 159px;
        height: 130px;
      }
      
      .silver {
        width: 159px;
        height: 70px;
      }
      
      .silver img {
        width: 32px;
        height: 32px;
      }
      
      .standard {
        width: 159px;
      }
      
      
      .blogpost {
        height: 220px;
        padding: 13px;
      }

      .blogpost table {
        width: 300px;
      }
        
      .blogpost .details {
        display: none;
      }
      

      .press img {
        width: 80px;
        height: 30px;
      }

    }
    

    /* ************************************* */
    /* Tool Tip                              */
    /* ************************************* */
    
    .tooltipster-fall,.tooltipster-grow.tooltipster-show{-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1);-moz-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-ms-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-o-transition-timing-function:cubic-bezier(.175,.885,.32,1.15)}.tooltipster-base{display:flex;pointer-events:none;position:absolute}.tooltipster-box{flex:1 1 auto}.tooltipster-content{box-sizing:border-box;max-height:100%;max-width:100%;overflow:auto}.tooltipster-ruler{bottom:0;left:0;overflow:hidden;position:fixed;right:0;top:0;visibility:hidden}.tooltipster-fade{opacity:0;-webkit-transition-property:opacity;-moz-transition-property:opacity;-o-transition-property:opacity;-ms-transition-property:opacity;transition-property:opacity}.tooltipster-fade.tooltipster-show{opacity:1}.tooltipster-grow{-webkit-transform:scale(0,0);-moz-transform:scale(0,0);-o-transform:scale(0,0);-ms-transform:scale(0,0);transform:scale(0,0);-webkit-transition-property:-webkit-transform;-moz-transition-property:-moz-transform;-o-transition-property:-o-transform;-ms-transition-property:-ms-transform;transition-property:transform;-webkit-backface-visibility:hidden}.tooltipster-grow.tooltipster-show{-webkit-transform:scale(1,1);-moz-transform:scale(1,1);-o-transform:scale(1,1);-ms-transform:scale(1,1);transform:scale(1,1);-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);transition-timing-function:cubic-bezier(.175,.885,.32,1.15)}.tooltipster-swing{opacity:0;-webkit-transform:rotateZ(4deg);-moz-transform:rotateZ(4deg);-o-transform:rotateZ(4deg);-ms-transform:rotateZ(4deg);transform:rotateZ(4deg);-webkit-transition-property:-webkit-transform,opacity;-moz-transition-property:-moz-transform;-o-transition-property:-o-transform;-ms-transition-property:-ms-transform;transition-property:transform}.tooltipster-swing.tooltipster-show{opacity:1;-webkit-transform:rotateZ(0);-moz-transform:rotateZ(0);-o-transform:rotateZ(0);-ms-transform:rotateZ(0);transform:rotateZ(0);-webkit-transition-timing-function:cubic-bezier(.23,.635,.495,1);-webkit-transition-timing-function:cubic-bezier(.23,.635,.495,2.4);-moz-transition-timing-function:cubic-bezier(.23,.635,.495,2.4);-ms-transition-timing-function:cubic-bezier(.23,.635,.495,2.4);-o-transition-timing-function:cubic-bezier(.23,.635,.495,2.4);transition-timing-function:cubic-bezier(.23,.635,.495,2.4)}.tooltipster-fall{-webkit-transition-property:top;-moz-transition-property:top;-o-transition-property:top;-ms-transition-property:top;transition-property:top;-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);transition-timing-function:cubic-bezier(.175,.885,.32,1.15)}.tooltipster-fall.tooltipster-initial{top:0!important}.tooltipster-fall.tooltipster-dying{-webkit-transition-property:all;-moz-transition-property:all;-o-transition-property:all;-ms-transition-property:all;transition-property:all;top:0!important;opacity:0}.tooltipster-slide{-webkit-transition-property:left;-moz-transition-property:left;-o-transition-property:left;-ms-transition-property:left;transition-property:left;-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1);-webkit-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-moz-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-ms-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);-o-transition-timing-function:cubic-bezier(.175,.885,.32,1.15);transition-timing-function:cubic-bezier(.175,.885,.32,1.15)}.tooltipster-slide.tooltipster-initial{left:-40px!important}.tooltipster-slide.tooltipster-dying{-webkit-transition-property:all;-moz-transition-property:all;-o-transition-property:all;-ms-transition-property:all;transition-property:all;left:0!important;opacity:0}@keyframes tooltipster-fading{0%{opacity:0}100%{opacity:1}}.tooltipster-update-fade{animation:tooltipster-fading .4s}@keyframes tooltipster-rotating{25%{transform:rotate(-2deg)}75%{transform:rotate(2deg)}100%{transform:rotate(0)}}.tooltipster-update-rotate{animation:tooltipster-rotating .6s}@keyframes tooltipster-scaling{50%{transform:scale(1.1)}100%{transform:scale(1)}}.tooltipster-update-scale{animation:tooltipster-scaling .6s}.tooltipster-sidetip .tooltipster-box{background:#565656;border:2px solid #000;border-radius:4px}.tooltipster-sidetip.tooltipster-bottom .tooltipster-box{margin-top:8px}.tooltipster-sidetip.tooltipster-left .tooltipster-box{margin-right:8px}.tooltipster-sidetip.tooltipster-right .tooltipster-box{margin-left:8px}.tooltipster-sidetip.tooltipster-top .tooltipster-box{margin-bottom:8px}.tooltipster-sidetip .tooltipster-content{color:#fff;line-height:18px;padding:6px 14px}.tooltipster-sidetip .tooltipster-arrow{overflow:hidden;position:absolute}.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow{height:10px;margin-left:-10px;top:0;width:20px}.tooltipster-sidetip.tooltipster-left .tooltipster-arrow{height:20px;margin-top:-10px;right:0;top:0;width:10px}.tooltipster-sidetip.tooltipster-right .tooltipster-arrow{height:20px;margin-top:-10px;left:0;top:0;width:10px}.tooltipster-sidetip.tooltipster-top .tooltipster-arrow{bottom:0;height:10px;margin-left:-10px;width:20px}.tooltipster-sidetip .tooltipster-arrow-background,.tooltipster-sidetip .tooltipster-arrow-border{height:0;position:absolute;width:0}.tooltipster-sidetip .tooltipster-arrow-background{border:10px solid transparent}.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-background{border-bottom-color:#565656;left:0;top:3px}.tooltipster-sidetip.tooltipster-left .tooltipster-arrow-background{border-left-color:#565656;left:-3px;top:0}.tooltipster-sidetip.tooltipster-right .tooltipster-arrow-background{border-right-color:#565656;left:3px;top:0}.tooltipster-sidetip.tooltipster-top .tooltipster-arrow-background{border-top-color:#565656;left:0;top:-3px}.tooltipster-sidetip .tooltipster-arrow-border{border:10px solid transparent;left:0;top:0}.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-border{border-bottom-color:#000}.tooltipster-sidetip.tooltipster-left .tooltipster-arrow-border{border-left-color:#000}.tooltipster-sidetip.tooltipster-right .tooltipster-arrow-border{border-right-color:#000}.tooltipster-sidetip.tooltipster-top .tooltipster-arrow-border{border-top-color:#000}.tooltipster-sidetip .tooltipster-arrow-uncropped{position:relative}.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-uncropped{top:-10px}.tooltipster-sidetip.tooltipster-right .tooltipster-arrow-uncropped{left:-10px} .tooltipster-sidetip.tooltipster-punk .tooltipster-box{border-radius:5px;border:none;border-bottom:3px solid #f71169;background:#2a2a2a}.tooltipster-sidetip.tooltipster-punk.tooltipster-top .tooltipster-box{margin-bottom:7px}.tooltipster-sidetip.tooltipster-punk .tooltipster-content{color:#fff;padding:8px 16px}.tooltipster-sidetip.tooltipster-punk .tooltipster-arrow-background{display:none}.tooltipster-sidetip.tooltipster-punk.tooltipster-bottom .tooltipster-arrow-border{border-bottom-color:#2a2a2a}.tooltipster-sidetip.tooltipster-punk.tooltipster-left .tooltipster-arrow-border{border-left-color:#2a2a2a}.tooltipster-sidetip.tooltipster-punk.tooltipster-right .tooltipster-arrow-border{border-right-color:#2a2a2a}.tooltipster-sidetip.tooltipster-punk.tooltipster-top .tooltipster-arrow-border{border-top-color:#f71169}