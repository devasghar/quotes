<?php

?>
<html>
<head>
  <title>Quptes</title>
  <script type="application/javascript">

  </script>
  <style>
    @media (min-width: 1025px){
      .content-container {
        position: absolute;
        height: 100%;
        width: 100%;
      }
    }

    .content-container {
      z-index: 2;
      margin: 0;
      border-radius: 100%;
      border: 5px solid #fff;
      position: absolute;
      width: 470px;
      height: 470px;
      top: 20%;
      left: 30%;
    }

    .content-container .content-inner {
      position: absolute;
      left: 57%;
      top: 50%;
      width: 80%;
      -webkit-transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
      transform: translate(-50%,-50%);
    }

    .content-container .title {
      font: 800 3vw/2.5vw Raleway, sans-serif;
      width: 75%;
      text-transform: uppercase;
      white-space: nowrap;
    }

    .content-container .title .branding {
      display: block;
      color: #fff;
      font-size: 2.5vw;
      line-height: 2.5vw;
      opacity: 1;
      -webkit-transition: all .5s ease-in-out;
      transition: all .5s ease-in-out;
    }

    .content-container .title .top {
      color: #666;
      text-align: left;
    }

    .content-container .title .bottom {
      color: #b3b3b3;
      margin-left: 1.5rem;
      text-align: right;
    }

    .content-container .title span {
      display: block;
      opacity: 1;
      -webkit-transition: all .5s ease-in-out;
      transition: all .5s ease-in-out;
    }

    .content-container .body .body-content{
      width: 109%;
      margin-left: -3rem;
      margin-bottom: 3rem;
    }

    .content-container .body {
      color: #e6f4f4;
      width: auto;
      font-family: "Source Sans Pro",sans-serif;
      font-weight: 100;
    }

    .content-container .body .body-byline{
      text-align: right;
      padding-right: 3rem;
    }

    .overlay {
      position: fixed;
      display: block;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0,0,0,0.6);
      z-index: 2;
      cursor: pointer;
    }

    /*Additional do not include*/
    .back-text{
      padding: 3rem;
      line-height: 3rem;
    }

  </style>
</head>
<body>
<div class="overlay">
  <div class="content-container">
    <div class="content-inner">
      <h1 class="title">
        <i class="branding icon icon-forbes-logo"></i>
        <span class="top">Quote of</span>
        <span class="bottom">the Day</span>
      </h1>
      <div class="body">
        <blockquote class="body-content">
          We may not have the power to create the world we want immediately, but we can all start working on the long term today.
        </blockquote>
        <p class="body-byline">
          -Mark Zuckerberg,
          <br>
          Cofounder and CEO of Facebook
        </p>

      </div>
    </div>
  </div>
</div>




<p class="back-text">Although the way cages in POPs and data centers are laid out and deployed is somewhat different, there is still a set of shared principles about how we build our facilities. We aim to have cabinet types be as homogenous as possible to increase repeatability. There is one type of cabinet in the POPs which includes management and production border routers, optical networking gear, and enough compute hardware to run core services. Our data centers have three different types of cabinets — networking, compute, and storage. The majority of the cabinets are for compute and storage hardware, each of which are in specific sets of cabinets rather than mixing them to allow the tiers to be grown independently. The other thing we focus on across both the POPs and data centers is having a clear separation between our infrastructure and things like cross connects run by data center providers. In the POPs we use pre-labeled and cabled points of demarcation to make adding new transit, transport, or direct connect providers a matter of interacting with a single side of one patch panel.</p>

<p class="back-text">The data centers are built to simplify adding new capacity through the use of structured cabling. When the west coast data center was built the structured cabling was deployed for the whole space, including cabinet positions not yet in use. Each storage and compute cabinet is connected to the structured cabling via an overhead patch panel. Each cabinet-side patch panel is connected to a pair of matching panels in a set of two-post racks that reside between a pair of networking cabinets. Connecting a cabinet to the spine and aggregation switches in the networking cabinets is a matter of patching a set of links from leaf switches and the console device to the overhead panel then patching from the two-post racks to networking cabinets. The two-post to networking patching is done using pre-labeled and tapered fiber looms, which help keep the network cabinets tidy despite the high density of fiber that lands in them.</p>


</body>
</html>
