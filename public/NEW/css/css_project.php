<?php
    header("Content-type: text/css; charset: UTF-8");
?>
     /* ************************************* */
    /* Project                               */
    /* ************************************* */
     
    h1 {
      font-size: 2.5em;
    }
    
    .projectinfo table td {
      vertical-align: top;
    }
      
    .sponsbadge {
      padding-left: 5px;
    }  
    
    
    .project-logo { 
      padding: 0px 10px 5px 0px;
    }
    
    
    .project-heading {
      text-align: center;
    }  
    
    .project-desc {
      padding: 19px;
      border: 1px solid #e3e3e3;
      border-radius: 4px;   
      max-width: 800px;   
      display: block;  
      margin: auto; 
    }

    .projectinfo {
      max-width: 1200px;
      margin: 0 auto;
      margin-top: 20px;
      margin-bottom: 20px;
    }
    
    .projectinfo h2 {
      color: #34495e;
      font-size: 1.5em;
    }
    
    .infoitem {
      padding: 7px 0px 7px 5px;
      border-top: 1px solid #ddd;
    }
    
    .infolabel {
      font-weight: bold;
      width: 240px;
      vertical-align: top;
    }
    
    .infovalue {
     vertical-align: top;
    }    
    
    .infoitem .date {
      width: 250px;
    }
    
    
    .crowdfund {
      margin-top: 40px;
    }
    
    .crowdfund h2 {
      color: #34495e;
      font-size: 2em;  
    }
    
    .crowdfund-details {
      margin-bottom: 20px;
    }
    
    .crowdfund-details .infoitem, .crowdfund-rates .infoitem, .crowdfund-distro .infoitem
    {
      border-bottom: 1px solid #ddd;  
      margin-bottom: 5px;  
    }
    
    .crowdfund-details .infodetails
    {
      padding: 7px 0px 7px 5px;    
    }
    
    .crowdfund-rates .infodetails, .crowdfund-distro .infodetails {
      padding: 0px 0px 7px 5px;   
    }
    
    
    #startclock, #endclock{
    	font-family: sans-serif;
      color: #fff;
    	display: inline-block;
    	font-weight: 100;
    	text-align: center;
    	font-size: 16px;
    }
    
    #startclock > div{
    	padding: 0px;
    	display: inline-block;  
      margin-right: 4px;
    }    
    
    #startclock div > span{
    	padding: 12px;
    	border-radius: 3px;
    	background: #00816A;
    	display: inline-block; 
      min-width: 20px
    }  
    
    #endclock > div{
    	padding: 0px;
    	display: inline-block;   
      margin-right: 4px;
    }
    
    #endclock div > span{
    	padding: 12px;
    	border-radius: 3px;
    	background: #FF5733;
    	display: inline-block;
      min-width: 20px
    }
    
    .smalltext{
      color: #000;
    	padding-top: 5px;
    	font-size: 12px;
    }
    
    .crowdfund-distro, .project-links, .project-team, .project-events {
      margin-top: 40px;
    }

    .proj-link {
      width: 120px;
      margin-bottom: 5px;
    }
    
    .proj-link img {
      margin-right: 5px;
    }
    
    .teamtable, .eventstable {
      width: 100%;
    }
    
    .projectinfo table th, td {
      padding: 10px 10px 10px 0px;
      border-bottom: 1px solid #ddd;
    }
    
    
    .projectinfo table img {
      padding-right: 10px;
    }
    

    
    .distrotable thead th, .ratestable thead th {
      padding: 0px;
      border-bottom: 0px solid #ddd;
    }
    
    .distrotable td, .ratestable td{
     padding: 5px 10px 5px 0px;
     border-bottom: 0px solid #ddd;  
    }
    


    
    
    /* ************************************* */
    /* Responsive                            */
    /* ************************************* */
    
    @media screen and (max-width: 600px){
    
      h1 {
        font-size: 2em;
      }
      
      .crowdfund h2 {
        font-size: 1.5em;
      }
      
      .infolabel {
        width: 140px;
      }
    }
   