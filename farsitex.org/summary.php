<!doctype html>
<!-- Server: sfs-consume-20 -->

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]>--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <script type='text/javascript'>
            /*global unescape, window, SF*/
            // Setup our namespace
            if (!window.SF) { window.SF = {}; }
            if (!window.net) { window.net = {}; }
            if (!window.net.sf) { window.net.sf = {}; }
            SF.Ads = {};
            SF.cdn = '//a.fsdn.com/con';
            SF.deploy_time = '1513198786';
            SF.sandiego = false;
            SF.sandiego_chrome = false;
            
            SF.Breakpoints = {
              small: 0,
              medium: 640,
              leaderboard: 743,
              billboard: 985,
              large: 1053,
              xlarge: 1295,
              xxlarge: 1366
            };
            SF.initial_breakpoints_visible = {};
            for (var bp in SF.Breakpoints) {
                if (!SF.Breakpoints.hasOwnProperty(bp)) {
                    continue;
                }
                SF.initial_breakpoints_visible[bp] = !window.matchMedia || window.matchMedia('(min-width: ' + SF.Breakpoints[bp] + 'px)').matches;
            }
        </script><script type='text/javascript'>
            SF.Ads.prebidOptions = {
                showIndicators: false,
                analytics: true,
                timeout: 650,
                timeouts_by_bids: {500: 5, 650: 0},
                };

            SF.Ads.prebidUnits = [];
            if (SF.initial_breakpoints_visible.leaderboard) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364652'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '728x90', 'ct': '472229'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407704}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [2], 'accountId': '15680', 'zoneId': '486000'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265107}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224507, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178246}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1394209358853-0',
                    tag: 'SF_ProjectSum_728x90_A',
                    
                    sizes: [[728, 90]]
                });
            }
            if (SF.initial_breakpoints_visible.large) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364649'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472224'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407717}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [15, 10], 'accountId': '15680', 'zoneId': '486000'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265108}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224499, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178242}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1394209358855-0',
                    tag: 'SF_ProjectSum_300x250_A',
                    
                    sizes: [[300, 250], [300, 600], [300, 1050]]
                });
            }
            if (SF.initial_breakpoints_visible.large) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364650'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472225'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407693}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'sizes': [15], 'accountId': '15680', 'zoneId': '486010'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265109}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224496, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178243}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1394209358856-0',
                    tag: 'SF_ProjectSum_300x250_B',
                    
                    sizes: [[300, 250]]
                });
            }
            if (SF.initial_breakpoints_visible.large) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364651'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472226'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407694}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'sizes': [15], 'accountId': '15680', 'zoneId': '486010'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265110}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224501, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178245}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1394209358857-0',
                    tag: 'SF_ProjectSum_300x250_C',
                    
                    sizes: [[300, 250]]
                });
            }
            if (SF.initial_breakpoints_visible.leaderboard) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364655'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '728x90', 'ct': '472228'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407705}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'sizes': [2], 'accountId': '15680', 'zoneId': '486010'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265111}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224512, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178247}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1392148208790-0',
                    tag: 'SF_ProjectSum_728x90_B',
                    
                    sizes: [[728, 90]]
                });
            }
            SF.Ads.prebidAdjustments = {"bidder_deflations": {"komoona": 0.92, "onefiftytwo": 0.9, "indexexchange": 0.95, "sovrn": 0.91, "aardvark": 0.95, "aol": 0.94, "brealtime": 0.87, "districtmdmx": 0.79, "oftmedia": 0.9, "appnexus": 0.81, "pulsepoint": 0.87, "rubicon": 1, "indexex#hange": 0.98, "springserve": 0.001, "rubiconlite": 0.9, "rhythmone": 0.85}, "inflation": 1.2, "floor": 0.02};
        </script>
        <script type="text/javascript" id="pbjs_script" data-dom="https://d3tglifpd8whs6.cloudfront.net"  src="http://a.fsdn.com/con/js/sftheme/vendor/bizx-prebid.js?1513198786" ></script>
        
        <meta id="project_name" name="project_name" content="farsitex">
    <meta name="description" content="Download FarsiTeX for free.  FarsiTeX is a free Persian/English bidirectional typesetting system based on Donald Knuth&#39;s TeX and Leslie Lamport&#39;s LaTeX. Currently FarsiTeX is based on old LaTeX2.09." />



<meta property="og:title" content="FarsiTeX"/>
<meta property="og:type" content="product"/>
<meta property="og:url" content="https://sourceforge.net/projects/farsitex/"/>
<meta property="og:site_name" content="SourceForge"/>
<meta property="og:description" content="Download FarsiTeX for free.  FarsiTeX is a free Persian/English bidirectional typesetting system based on Donald Knuth&#39;s TeX and Leslie Lamport&#39;s LaTeX. Currently FarsiTeX is based on old LaTeX2.09."/>


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FarsiTeX download | SourceForge.net</title>
        <link rel="shortcut icon" href="http://a.fsdn.com/con/img/sftheme/favicon.ico">
        
        <script type="text/javascript">
            /*global unescape, window, console, jQuery, $, net, SF, DD_belatedPNG, ga */
            if (!window.SF) {
                window.SF = {};
            }
        </script>

        <script type="text/javascript">
            SF.EU_country_codes = ["BE", "FR", "BG", "DK", "VG", "WF", "HR", "BM", "DE", "HU", "JE", "FI", "FK", "YT", "NL", "PT", "CW", "NC", "LV", "RE", "LT", "LU", "PF", "GI", "TF", "RO", "PN", "TC", "PL", "PM", "GS", "GR", "GP", "EE", "IT", "GG", "CZ", "CY", "SX", "IO", "AT", "AW", "AX", "GL", "IE", "KY", "ES", "ME", "MF", "BL", "GF", "SK", "MT", "SI", "SH", "MQ", "MS", "AI", "SE", "GB"];
            SF.unknown_country_codes = ["", "A1", "A2", "O1"];
        </script>
        
<script src="http://a.fsdn.com/con/js/sftheme/vendor/modernizr.3.3.1.custom.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/sftheme/vendor/jquery-1.11.1.min.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery.core.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/bootstrap.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/sftheme/sticky.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/sftheme/shared_head.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/sftheme-typescript/compliance.js?1513198786" type="text/javascript"></script>


<!--[if lt IE 7 ]>
  <script src="//a.fsdn.com/con/js/sftheme/vendor/dd_belatedpng.js"></script>
  <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->


<link href='http://fonts.googleapis.com/css?family=Ubuntu:regular' rel='stylesheet' type='text/css'>
<style type="text/css">
    @font-face {
        font-family: "Pictos";
        src: url('http://a.fsdn.com/con/css/fonts/sftheme/pictos-web.eot');
        src: local("☺"), url('http://a.fsdn.com/con/css/fonts/sftheme/pictos-web.woff') format('woff'), url('http://a.fsdn.com/con/css/fonts/sftheme/pictos-web.ttf') format('truetype'), url('http://a.fsdn.com/con/css/fonts/sftheme/pictos-web.svg') format('svg');
    }
</style>
 
<link rel="stylesheet" href="http://a.fsdn.com/con/css/sf-psp.css?1513198786" type="text/css">



    <style type="text/css" >.sfdl { width:250px;height:48px;padding:0;position:relative;font:bold 12px/1.17 sans-serif !important; border:1px solid #aaa;display:inline;float:left;text-decoration:none;box-shadow:rgba(255, 255, 255, 0.6) 0 1px 0 0;border-radius:4px;background:no-repeat #e5e5e5 8px center url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAANCAYAAABPeYUaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANFJREFUeNqcUosNgjAUbE0HcARGwAnqZxBxBCbQDXQE2UOkTIAj4AZsgPfMa1JeGqhecimU63HvvepxHFUq6mebY2nAdbi/Ur/hKg0IRv2H3WFvnX/Rj9qRcxH7A+BIjDK2eCYewQy8g2/WDJSk4w8xWDICz2ziUchyvMGLXIVJK9acE0+0VM53PIitE6bTcKJJT0wg6ESSHiwhHpbMDYszjhrDKcVkE5mO5dhZyrwNx72J2i9iGvMmODB372U/aCpV2NSlG0sGVbiBw2VM+BFgALYfPdL6UCEWAAAAAElFTkSuQmCC);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAANCAYAAABPeYUaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANFJREFUeNqcUosNgjAUbE0HcARGwAnqZxBxBCbQDXQE2UOkTIAj4AZsgPfMa1JeGqhecimU63HvvepxHFUq6mebY2nAdbi/Ur/hKg0IRv2H3WFvnX/Rj9qRcxH7A+BIjDK2eCYewQy8g2/WDJSk4w8xWDICz2ziUchyvMGLXIVJK9acE0+0VM53PIitE6bTcKJJT0wg6ESSHiwhHpbMDYszjhrDKcVkE5mO5dhZyrwNx72J2i9iGvMmODB372U/aCpV2NSlG0sGVbiBw2VM+BFgALYfPdL6UCEWAAAAAElFTkSuQmCC), linear-gradient(to bottom, #fff 0%, #ccc 100%);background-position:8px center, 0 0;margin:0 10px 0px 0;overflow:hidden;color:#555 !important;}.sfdl:hover { cursor:pointer;text-decoration:none;background:8px center no-repeat #eee url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAANCAYAAABPeYUaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANFJREFUeNqcUosNgjAUbE0HcARGwAnqZxBxBCbQDXQE2UOkTIAj4AZsgPfMa1JeGqhecimU63HvvepxHFUq6mebY2nAdbi/Ur/hKg0IRv2H3WFvnX/Rj9qRcxH7A+BIjDK2eCYewQy8g2/WDJSk4w8xWDICz2ziUchyvMGLXIVJK9acE0+0VM53PIitE6bTcKJJT0wg6ESSHiwhHpbMDYszjhrDKcVkE5mO5dhZyrwNx72J2i9iGvMmODB372U/aCpV2NSlG0sGVbiBw2VM+BFgALYfPdL6UCEWAAAAAElFTkSuQmCC);}.sfdl-lite { background:0 center no-repeat #337733 none;color:white !important;height:auto;padding:0.5em 1em;text-align:center;border-radius:4px;background-image:linear-gradient(to bottom, #339933 0%, #337733 100%);}.sfdl-lite:hover { background:0 center no-repeat #339933;}.sfdl span { border-radius:3px;display:block;margin:3px;margin-left:35px;padding:4px;text-align:left;color:#FFF;background:#363;background-image:linear-gradient(to bottom, #393 0%, #373 100%);overflow:hidden;height:34px;}.sfdl b { display:block;line-height:17.0px;}.sfdl small { display:block;line-height:17.0px;color:#ADC2AD; font-weight:normal;white-space:nowrap;overflow:hidden;font-size:77%;}.info-circle{ right:10px;bottom:16px;}.direct-dl{ font-size:10px;text-align:right;display:inline-block;width:100%;}</style>


        <style type="text/css">.t5b6615021b3b07e15525778c29756e9914f7475b { display: none !important; }</style>
    <link rel="alternate" type="application/rss+xml" title="FarsiTeX&#8230;Recent Activity" href="http://sourceforge.net/p/farsitex/activity/feed" />
    <link rel="alternate" type="application/rss+xml" title="FarsiTeX&#8230;File Releases" href="http://sourceforge.net/projects/farsitex/rss?path=/" />
    <link rel="canonical" href="bugs_submit.php">

        
<script type="text/javascript">
    SF.adblock = true;
</script><script type='text/javascript'>
       /*global Foundation */
           /*global googletag, bizxPrebid */
       var gptadslots=[];
       var gptadHandlers={};
       var gptadRenderers=[];
       var gptadComplements={};

       googletag.cmd.push(function() {
           var leaderboard = googletag.sizeMapping()
               .addSize([970, 200], [[970, 250], [728, 90]])
               .addSize([728, 200], [[728, 90]])
               .build();
           var leaderboardInContent = googletag.sizeMapping()
               .addSize([1280, 200], [[970, 250], [728, 90]])
               .addSize([728, 200], [[728, 90]])
               .build();

            //prebid_log('GPT push define slots and targeting');
            googletag.pubads()
               .setForceSafeFrame(true)
               .setTargeting('usingSafeFrame','1')
               .setSafeFrameConfig({
                    allowOverlayExpansion: true,
                    allowPushExpansion: true,
                    sandbox: true
            });
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_728x90_A',[728, 90],'div-gpt-ad-1394209358853-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','728x90')
                                                        .setTargeting('page_type','pg_project'));
            gptadComplements['/41014381/Sourceforge/SF_ProjectSum_728x90_A'] = ["SF_ProjectSum_HubIcon_200x90_A", ["728x90"]] ;
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_HubIcon_200x90_A',[200, 90],'div-gpt-ad-1394209358854-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','200x90')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_300x250_A',[[300, 250], [300, 600], [300, 1050]],'div-gpt-ad-1394209358855-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','300x250,300x600,300x1050')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_300x250_B',[300, 250],'div-gpt-ad-1394209358856-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','300x250')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_300x250_C',[300, 250],'div-gpt-ad-1394209358857-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','300x250')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_728x90_B',[728, 90],'div-gpt-ad-1392148208790-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','728x90')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/7346874/SF-300x250',[300, 250],'div-gpt-ad-1392148208795-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','300x250')
                                                        .setTargeting('page_type','pg_project'));
            

            googletag.pubads().setTargeting('requestSource', 'GPT');
            googletag.pubads().enableAsyncRendering();

            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().addEventListener('slotOnload', function(event) {
                SF.Ads.Helpers.getSizeAndSetClass.call(this, event);
            });
            googletag.pubads().addEventListener('slotRenderEnded', function(event) {
                var unitName = event.slot.getName();
                if ( unitName in gptadHandlers ) {
                   for (var i = 0; i < gptadHandlers[unitName].length; i++) {
                       try {
                           SF.Ads.RenderHandlers[gptadHandlers[unitName][i]].call(this, event);
                       } catch (e) {
                       }
                   }
                }

                SF.Ads.RenderHandlers.decorateSizeDelivered.call(this, event);
            });
            googletag.pubads().addEventListener('impressionViewable', SF.Ads.RenderHandlers.viewabilityInstrumentation);
            
            googletag.pubads().addEventListener('slotRenderEnded', SF.Ads.listenerForBlockThis);
            bizxPrebid.Ads.pushToGoogle();

            googletag.enableServices();
        });
   </script> 

        

        
<!-- CCM Tag -->
<script type="text/javascript">
  (function () {
    /*global _ml:true, window */
    _ml = window._ml || {};
    _ml.eid = '771';

    var s = document.getElementsByTagName('script')[0], cd = new Date(), mltag = document.createElement('script');
    mltag.type = 'text/javascript'; mltag.async = true;
    mltag.src = '//ml314.com/tag.aspx?' + cd.getDate() + cd.getMonth() + cd.getFullYear();
    s.parentNode.insertBefore(mltag, s);
  })();
</script>
<!-- End CCM Tag -->

        
        <script type="text/javascript" src="http://a.fsdn.com/con/js/adframe.js?1513198786"></script>
        <script type="text/javascript">

            /*jshint ignore:start*/
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function() {
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            /*jshint ignore:end*/

            //var $ = jQuery.noConflict(); // jshint ignore:line
        </script>
        <script type="text/javascript">
            SF.devicePixelRatio = Math.round(window.getDevicePixelRatio()*10)/10;
                ga('create', 'UA-36130941-1', {
                    'name': '1', 'sampleRate': 9});
                ga('create', 'UA-36130941-1', 'auto', {   'sampleRate': 9});
            /*global _ml:true */
            if (typeof _ml !== 'undefined' && _ml.us) {
                if (_ml.us.tp && _ml.us.tp.length > 0) {
                    ga('set', 'dimension2', _ml.us.tp[0]);
                }
                if (_ml.us.pc && _ml.us.pc.length > 0) {
                    ga('set', 'dimension7', _ml.us.pc[0]);
                }
                ga('set', 'dimension3', _ml.us.ind);
                ga('set', 'dimension4', _ml.us.cr);
                ga('set', 'dimension5', _ml.us.cs);
                ga('set', 'dimension6', _ml.us.dm);
                ga('set', 'dimension8', _ml.us.sn);
            }

            
                ga('set', 'dimension9', 'farsitex');
                ga('set', 'dimension10', 'pg_project');
                ga('set', 'dimension12', 'psp_normal');
                    
                ga('set', 'dimension13', 'Logged Out');
                ga('set', 'dimension14', 'No');  
                ga('set', 'dimension15', 'desktop');
                ga('set', 'dimension16', 'sync');
                ga('set', 'dimension17', SF.devicePixelRatio);
                ga('send', 'pageview');

            
        </script>
        <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(['trackPageView', document.title, {
                dimension1: 'farsitex',
            dimension2: 'pg_project',
            dimension3: SF.devicePixelRatio
        }]);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//analytics.slashdotmedia.com/";
            _paq.push(['setTrackerUrl', u+'sf.php']);
            _paq.push(['setSiteId', 39]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'sf.js'; s.parentNode.insertBefore(g,s);
        })();
        </script>

<script type="text/javascript">
/*global _taboola*/
window._taboola = window._taboola || [];
_taboola.push({ category:'auto'});
(function (e, f, u) {
    e.async = 1;
    e.src = u;
    f.parentNode.insertBefore(e, f);
})(document.createElement('script'),
    document.getElementsByTagName('script')[0],
    '//cdn.taboola.com/libtrc/sourceforge/loader.js');
</script>


        <script type="text/javascript"> try{(function(){ var cb = new Date().getTime(); var s = document.createElement("script"); s.defer = true; s.src = "//tag.crsspxl.com/s1.js?d=2396&cb="+cb; var s0 = document.getElementsByTagName('script')[0]; s0.parentNode.insertBefore(s, s0); })();}catch(e){} </script>


        
        
<script>
 /*jshint ignore:start*/
 (function (s,o,n,a,r,i,z,e) {s['StackSonarObject']=r;s[r]=s[r]||function(){
 (s[r].q=s[r].q||[]).push(arguments)},s[r].l=1*new Date();i=o.createElement(n),
 z=o.getElementsByTagName(n)[0];i.async=1;i.src=a;z.parentNode.insertBefore(i,z)
 })(window,document,'script','https://www.stack-sonar.com/ping.js','stackSonar');
 stackSonar('stack-connect', '105');
 /*jshint ignore:end*/
</script>

        
    </head>
    <body id="pg_project" class="bluesteel user anonymous  body_class">
        
        <div id="busy-spinner"></div>
        

<header id="site-header">
    <div class="wrapper">
        <a href="http://sourceforge.net/" class="logo">
            <span>SourceForge</span>
        </a>
        <form method="get" action="http://sourceforge.net/directory/">
            <input type="text" id="words" name="q" placeholder="Search">
        </form>
        <!--Switch to {language}-->
        <nav id="nav-site">
            <a href="http://sourceforge.net/directory/" title="Browse our software.">Browse</a>
            <a href="http://sourceforge.net/directory/enterprise" title="Browse our Enterprise software.">Enterprise</a>
            <a href="http://sourceforge.net/blog/" title="Read the latest news from the SF HQ.">Blog</a>
            <a href="http://sourceforge.net/articles/" title="Read the latest industry news about products and updates from leading cloud, network, and developer tool service providers">Articles</a>
            <a href="http://deals.sourceforge.net/?utm_source=sourceforge&amp;utm_medium=navbar&amp;utm_campaign=homepage" title="Discover and Save on the Best Gear, Gadgets, and Software" class="featured-link" target="_blank">Deals</a>
            <a href="http://sourceforge.net/support" title="Contact us for help and feedback.">Help</a>
            <a href="http://sourceforge.net/create"  class="featured-link blue" title="Create and publish Open Source software for free.">Create</a>
        </nav>
        <nav id="nav-account">
            
              <div class="logged_out">
                  <a href="https://sourceforge.net/auth/">Log In</a>
                <span>or</span>
                <a href="https://sourceforge.net/user/registration">Join</a>
              </div>
            
        </nav>
    </div>
</header>
<header id="site-sec-header">
    <div class="wrapper">
        <nav id="nav-hubs">
            <h4>Solution Centers</h4>
            
        </nav>
        <nav id="nav-collateral">
            <a href="https://library.slashdotmedia.com/">Resources</a>
            <a href="http://sourceforge.net/user/newsletters?source=sfnet_header">Newsletters</a>

            <a href="http://sourceforge.net/cloud-storage-providers/?source=sfnet_header">Cloud Storage Providers</a>
            <a href="http://sourceforge.net/business-voip/?source=sfnet_header">Business VoIP Providers</a>
            
            <a href="http://sourceforge.net/speedtest/?source=sfnet_header">Internet Speed Test</a>
            
            <a href="http://sourceforge.net/call-center-providers/?source=sfnet_header">Call Center Providers</a>
        </nav>
        <nav id="nav-social">
            
<span></span>
<a href="https://twitter.com/sourceforge" class="twitter" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/></svg></a>
<a href="https://www.facebook.com/sourceforgenet/" class="facebook" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"/></svg></a>
<a href="https://plus.google.com/+sourceforge" class="google" rel="nofollow publisher" target="_blank">

<svg   viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M896 786h725q12 67 12 128 0 217-91 387.5t-259.5 266.5-386.5 96q-157 0-299-60.5t-245-163.5-163.5-245-60.5-299 60.5-299 163.5-245 245-163.5 299-60.5q300 0 515 201l-209 201q-123-119-306-119-129 0-238.5 65t-173.5 176.5-64 243.5 64 243.5 173.5 176.5 238.5 65q87 0 160-24t120-60 82-82 51.5-87 22.5-78h-436v-264z"/></svg></a>
<a href="https://www.linkedin.com/company/sourceforge.net" class="linkedin" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"/></svg></a>
<span></span>
        </nav>
    </div>
</header>



        
        
        
<div id="messages">
</div>



        <div id="page-body">

    <div id="banner-sterling" class="sterling">
        
        
        


 
    


<div class="sticky-anchor"></div>
<div class="sticky">

<div id="SF_ProjectSum_728x90_A_wrapped" data-id="div-gpt-ad-1394209358853-0" class="draper leaderboard  
visibility_rules 
 v_728_leaderboard  v_970_billboard "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358853-0"></div>');
}());

gptadRenderers['SF_ProjectSum_728x90_A'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358853-0');
    });
};
gptadRenderers['SF_ProjectSum_728x90_A']();  // jshint ignore:line
}
</script>
</div>


</div>
<script type="text/javascript">
    if (!SF.adblock) {
        SF.Ads.stickyLeader = new SF.Stickify($('.sticky').eq(0));
    }
</script>
        
        


 
    



<div id="SF_ProjectSum_HubIcon_200x90_A_wrapped" data-id="div-gpt-ad-1394209358854-0" class="draper hub  
visibility_rules 
 v_200_billboard "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.billboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358854-0"></div>');
}());

gptadRenderers['SF_ProjectSum_HubIcon_200x90_A'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358854-0');
    });
};
gptadRenderers['SF_ProjectSum_HubIcon_200x90_A']();  // jshint ignore:line
}
</script>
</div>


    </div>

    
    <nav id="breadcrumbs" class="breadcrumbs">
        <ul>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a itemprop="url" href="http://sourceforge.net/"><span itemprop="title">Home</span></a></li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="http://sourceforge.net/directory"><span itemprop="title">Browse</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="http://sourceforge.net/directory/science-engineering/"><span itemprop="title">Science &amp; Engineering</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="http://sourceforge.net/directory/science-engineering/mathematics/"><span itemprop="title">Mathematics</span></a></li><li class="project">FarsiTeX</li>
            
        </ul>
    </nav>

    <div id="project-header" itemscope itemtype="http://schema.org/SoftwareApplication">
        

<section id="project-icon" class="noneditable">
    <img itemscope itemtype="http://schema.org/ImageObject" itemprop="image" alt="FarsiTeX Icon" 



    src="http://a.fsdn.com/con/img/project_default.png?&amp;w=48"
    
 height="48" width="48"/>
</section>
<div id="project-title" class="project-mirror">
    <div>
        <div>
            <h1 itemprop="name">
                    FarsiTeX</h1>
        </div>
        <p id="maintainers" itemprop="author" itemscope itemtype="http://schema.org/Person">
        Brought to you by:
        <a href="http://sourceforge.net/users/behdad" itemprop="url"><span itemprop="name">behdad</span></a></p>
        
    </div>
    

</div>
    </div>
<article id="project" class="content-wrapper" itemscope itemtype="http://schema.org/SoftwareApplication">
    <meta itemprop="image" content="https://a.fsdn.com/con/img/project_default.png"/>
    <nav>
        
    <div id="top_nav"><div id="top_nav_admin">
        <ul class="dropdown">
            
            <li class="selected">
                <a href="http://sourceforge.net/projects/farsitex/?source=navbar"
                >
                <span>Summary</span></a>
                
            </li>
            
            <li >
                <a href="http://sourceforge.net/projects/farsitex/files/?source=navbar"
                >
                <span>Files</span></a>
                
            </li>
            
            <li >
                <a href="http://sourceforge.net/projects/farsitex/reviews?source=navbar"
                >
                <span>Reviews</span></a>
                
            </li>
            
            <li >
                <a href="http://sourceforge.net/projects/farsitex/support?source=navbar"
                >
                <span>Support</span></a>
                
            </li>
            
            <li >
                <a href="http://sourceforge.net/p/farsitex/wiki/?source=navbar"
                >
                <span>Wiki</span></a>
                
            </li>
            
            <li >
                <a href="http://sourceforge.net/p/farsitex/mailman/?source=navbar"
                >
                <span>Mailing Lists</span></a>
                
            </li>
            
            <li >
                <a href="http://sourceforge.net/p/farsitex/patches/?source=navbar"
                >
                <span>Patches</span></a>
                
            </li>
            
            <li >
                <a href="http://sourceforge.net/p/farsitex/news/?source=navbar"
                >
                <span>News</span></a>
                
            </li>
            
            <li >
                <a href="http://sourceforge.net/p/farsitex/donate/?source=navbar"
                data-external=true>
                <span>Donate</span></a>
                
            </li>
            
            <li >
                <a href="http://sourceforge.net/p/farsitex/code/?source=navbar"
                >
                <span>Code</span></a>
                
            </li>
            
            
        </ul>
        
    </div></div>
    
    </nav>

    
    <section id="main-content">
        <section id="call-to-action">
            <section id="counts-sharing">
                <section class="project-info">
                    <section class="content">
                        <b data-icon="" class="ico" title="Star">&#9733;</b>
                        <a href="http://sourceforge.net/projects/farsitex/reviews/" title="Browse reviews" id="call-to-action-reviews">0.0 Stars</a>
                        <span>(1)</span>
                    </section>
                </section>
                <section id="download-stats" class="project-info">
                    <section class="content">
                        <b data-icon="}" class="ico ico-downarrow" title="Down"></b>
                        
                        <a href="http://sourceforge.net/projects/farsitex/files/stats/timeline" title="Downloads This Week" id="call-to-action-stats">11 Downloads</a>
                        <span>(This Week)</span>
                    </section>
                </section>
                <section id="last-updated" class="project-info">
                    <section class="content">
                        <b data-icon="\" class="ico ico-calendar" title="Last Update"></b>
                        Last Update:
                        <time class="dateUpdated" datetime="2013-04-03">2013-04-03</time>
                    </section>
                </section>

                
<section class="social-sharing">
    <!-- Twitter -->
    <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
    <a href="https://twitter.com/share"
       rel="nofollow"
       class="twitter-share-button"
       data-count="horizontal"
       data-url="https://sf.net/projects/farsitex/"
       data-counturl="https://sourceforge.net/projects/farsitex/"
       data-via="sourceforge"
       data-text="Download FarsiTeX for free! "></a>
    <!-- Google +1 -->
    <script type="text/javascript">
        (function() {
         var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
         po.src = '//apis.google.com/js/plusone.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
         })();
    </script>
    
    <div class="g-plusone"
         data-size="medium"
         data-annotation="bubble"
         data-href="https://sourceforge.net/projects/farsitex/"></div>
    <!-- Facebook -->
    <iframe src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fsourceforge.net%2Fprojects%2Ffarsitex%2F&amp;send=false&amp;layout=button_count&amp;width=80&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe>
</section>


                
                
    

                
            </section>

            <section id="download_button">
                    
                        
                        
<a href="http://sourceforge.net/projects/farsitex/files/latest/download" title="Download /FarsiTeX (experimental)/1.0pre1/farsitex-1.0pre1-setup.exe from SourceForge  - 23.8 MB" class="sfdl ">
    
        <span>
            <b>Download</b>
            <small >farsitex-1.0pre1-setup.exe</small>
        </span>
    
</a>
                    <meta itemprop="fileSize" content="23781603"/><meta itemprop="fileFormat" content="application/octet-stream; charset=binary"/><div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <meta itemprop="price" content="0"/>
                        <meta itemprop="priceCurrency" content="USD" />
                        <link itemprop="availability" href="http://schema.org/InStock" />
                    </div>
                    <a href="http://sourceforge.net/projects/farsitex/files/" id="files-link" title="Browse All Files">Browse All Files</a>
                    <section class="project-info">
                        
                        <span class="platform-icon windows"><meta itemprop="operatingSystems" content="Windows"/>Windows</span>
                        
                        <span class="platform-icon mac"><meta itemprop="operatingSystems" content="Mac"/>Mac</span>
                        
                        <span class="platform-icon linux"><meta itemprop="operatingSystems" content="Linux"/>Linux</span>
                        
                    </section>
            </section>
        </section>

        


        <section id="project-description">
            <header>
                <h2>Description</h2>
            </header>
            <p id="description" itemprop="description">FarsiTeX is a free Persian/English bidirectional typesetting system based on Donald Knuth&#39;s TeX and Leslie Lamport&#39;s LaTeX. Currently FarsiTeX is based on old LaTeX2.09. Windows and Linux ports are available.</p>

            
            <p>
            <a id="homepage" class="pspbtn" href="index.html" title="FarsiTeX Web Site" rel="nofollow">FarsiTeX Web Site</a>
            </p>
        </section>

        <section id="project-categories-and-license">
            <div class="project-container">
                <section>
                    <header>
                        <h4>Categories</h4>
                    </header><a href="http://sourceforge.net/directory/science-engineering/mathematics/" itemprop="softwareApplicationSubCategory">Mathematics</a>, <a href="http://sourceforge.net/directory/other/nonlisted-topic/other/" itemprop="softwareApplicationSubCategory">Other/Nonlisted Topic</a>, <a href="http://sourceforge.net/directory/development/wordprocessors/" itemprop="softwareApplicationSubCategory">Word Processors</a></section>
                <section>
                    <section class="project-info">
    <header>
        <h3>License</h3>
    </header>
    <section class="content"><a href="http://sourceforge.net/directory/license:gpl/">GNU General Public License version 2.0 (GPLv2)</a></section>
</section>


                </section>
            </div>
        </section>

        <div class="psp_newsletter_subscribe">
              <h3>KEEP ME UPDATED</h3>
              <span class="subscribe-tagline">Get project updates, sponsored content from our select partners, and more.</span>

              

<form action="http://sourceforge.net/user/newsletters/subscribe?source=PSP" method="post" class="newsletter-subscribe-form compliance-form optin-wide kmunl-subscribe-form" data-shortname="farsitex" data-handler="KMUNSWidget">
    <input type="hidden" name="XGf91i2J1eYV8w65aIMULAc0wi50" value="user">
    <input type="hidden" name="XDO91i35ibsMPHNEgetF1NBFMXj0" value="PSP">
    <div class="clearfix input-group-main">
        <div class="nsw-error-container input-set stacked">
            <div class="error-message"><i>Invalid email address. Please try again.</i></div>
            <input type="email" class="subscriber-email" name="XD_l3n2VtNNCfsN8BDpcix7b0LaY" placeholder="Enter your email address" value="" required>
        </div>
        

        <label class="input-set stacked">
            <span class="label">Country</span>
            <span class="input">
<select id="country" name="XDf91i2J1eYUcjH0uW6UzY:Lr5k4" required class="use-placeholder-color">
    <option value=""></option>
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, The Democratic Republic of the</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D&#39;Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and McDonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People&#39;s Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People&#39;s Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn Islands</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US" selected>United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
</span>
        </label>
        <label class="input-set stacked input-set-state">
            <span class="label">State</span>
            <span class="input">
<select id="state" name="XD:9un3hkNNCfsN8BDpcix7b0LaY"  class="use-placeholder-color">
    <option value=""></option>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA" selected>California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="PR">Puerto Rico</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
</span>
        </label>
    </div>

    <div class="clearfix input-group-kmunl-optins">
        
 

<label class="input-set input-set input-set-kmu kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XCfd3izMtt:w9n4ozHzN22H0c_OU" value="farsitex"  data-consent-action data-consent-id=59aed8e456585fa9603b60e8 ></span>
    <span class="checkbox-label">Get notifications on updates for this project.</span>
    

</label>


        
 

<label class="input-set input-set input-set-newsletters-optin-sitewide allow-precheck loose-consent-requirement kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XAfJ_iX9tbohXxbNNerbEfqZ9o_U" value="sitewide"  data-consent-action data-consent-id=59aed8e456585fa9603b60e9 ></span>
    <span class="checkbox-label">Get the SourceForge newsletter.</span>
    

</label>


        
 

<label class="input-set input-set input-set-newsletters-optin-all kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XAfJ_iX9tbohXxbNNerbEfqZ9o_U" value="sitewide research"  data-consent-action data-consent-id=59aed8e456585fa9603b60ea ></span>
    <span class="checkbox-label">Get newsletters and notices that include site news, special offers and exclusive discounts about IT products &amp; services.</span>
    

</label>



        

<div class="gdpr-consent-requirement gdpr-consent-topics">
    <h4>
        Yes, also send me special offers about products &amp; services regarding:
        </h4>

        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="artificial-intelligence"  data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="cloud"  data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="network-security"  data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="hardware"  data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="software-development"  data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XBf91kHhgaIh8zaRKLfUcHYduVOg" value="email"  data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XBf91kHhgaIh8zaRKLfUcHYduVOg" value="phone"  data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XBf91kHhgaIh8zaRKLfUcHYduVOg" value="sms"  data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    <label class="input-set inset input-phone hide ">
        <span class="label">Phone</span>
        <span class="input">
            <input type="tel" name="XD:xykWJkNNCfsN8BDpcix7b0LaY" value="">
        </span>
        <span class="error-message"></span>
    </label>
</div>


        <input type="hidden" name="XAfJ_iX9tbohXxbNNerbEfqZ9o_U" class="input-assumed-newsletters" value="">
        <input type="hidden" name="XCfd3izMtt:w9n4ozHzN22H0c_OU" class="input-assumed-kmu" value="">
    </div>

        
 

<label class="input-set stacked input-set-agree-general allow-precheck">
    <span class="checkbox"> <input type="checkbox" name="XDf91kH9kZYgcjH0uW6UzY:Lr5k4" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd377 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="http://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


    
 

<label class="input-set stacked input-set-agree-general-gdpr minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XDf91kH9kZYgcjH0uW6UzY:Lr5k4" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd378 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="http://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>



        

      
        
    
    <div class="js-required fielderror">JavaScript is required for this form.</div>
    
    <div class="g-recaptcha"
          data-sitekey="6LeVgCEUAAAAACtawUTrPTBy0mTrGtjpPn_Xh-ZW"
          data-badge="inline"
          data-size="invisible"
          >
    </div>


        <button type="submit" class="subscriber-submit  right">
            <span>
                Follow
            </span>
        </button>
    
  <input type="hidden" name="_visit_cookie" value=""/>
    <input type='hidden' name='timestamp' value='1513322900'/>
    <input type='hidden' name='spinner' value='XCpwa_gwBC_wjoME:RZp4brhC6Pg'/>
    <p class='t5b6615021b3b07e15525778c29756e9914f7475b'><label for='XDfR1kGl4O8wcjH0uW6UzY:Lr5k4'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XDfR1kGl4O8wcjH0uW6UzY:Lr5k4' name='XDPR1kGl4O8MPHNEgetF1NBFMXj0' type=
             'text'/></p>
    <p class='t5b6615021b3b07e15525778c29756e9914f7475b'><label for='XDfR1kGl4O80cjH0uW6UzY:Lr5k4'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XDfR1kGl4O80cjH0uW6UzY:Lr5k4' name='XDPR1kGl4OsMPHNEgetF1NBFMXj0' type=
             'text'/></p>
</form>
<script>
    $('.newsletter-subscribe-form').each(SF.wire_up_subscribe_form);
</script>



          </div>





<section id="project-nel" class="">
    <header>
        <h2>Other Useful Business Software</h2>
    </header>
    




<div class="enhanced-listing standard">
    <img class="icon-image" itemprop="image" width="48" height="48" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6OUVBRjk2RDk1NTJDMTFFNzgxNTdFREJFQ0E3NTJDM0MiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6OUVBRjk2REE1NTJDMTFFNzgxNTdFREJFQ0E3NTJDM0MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCOTlEQ0E1NjU1MTcxMUU3ODE1N0VEQkVDQTc1MkMzQyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5RUFGOTZEODU1MkMxMUU3ODE1N0VEQkVDQTc1MkMzQyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PuSyZ3QAABHGSURBVHja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" alt="The Leading Provider of Business VoIP Phone Systems Icon">
    <div class="project_info">
        <header><a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=22096__zoneid=18304__cb=4d0eae6c13__oadest=https%3A%2F%2Fwww.vonage.com%2Fbusiness%2Fstatic%2Flp-gen-voipreview%2F%3Futm_source%3Dvoipreviewc%26utm_medium%3Dcpc%26utm_campaign%3Dvoipreview" target="_blank" rel="nofollow" itemprop="url" title="Find out more about The Leading Provider of Business VoIP Phone Systems"><span itemprop="name">The Leading Provider of Business VoIP Phone Systems</span></a></header>

        <p class="teaser">Award-Winning Business VoIP Phone System</p>
    </div>
    <div class="listing-body clearfix standard">
        

        <div class="tile clearfix">
            <a class="application-image thumbnail " >
                <img  itemprop="image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALYAAACJCAYAAACB3MJ8AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyhpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKE1hY2ludG9zaCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Qjk5RENBNTA1NTE3MTFFNzgxNTdFREJFQ0E3NTJDM0MiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Qjk5RENBNTE1NTE3MTFFNzgxNTdFREJFQ0E3NTJDM0MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCOTlEQ0E0RTU1MTcxMUU3ODE1N0VEQkVDQTc1MkMzQyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCOTlEQ0E0RjU1MTcxMUU3ODE1N0VEQkVDQTc1MkMzQyIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PlbarqYAADkHSURBVHja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" alt="The Leading Provider of Business VoIP Phone Systems Icon">
                
            </a>

            

            <div itemprop="description" class="description with-rating">
            
            <a href="https://www.voipreview.org/reviews/vonage-business-solutions" class="reviews" target="_blank" rel="nofollow">
                


<div class="review-rating">

<span title="1 of 5" class="rating star">1 of 5</span>

<span title="2 of 5" class="rating star">2 of 5</span>

<span title="3 of 5" class="rating star">3 of 5</span>

<span title="4 of 5" class="rating star">4 of 5</span>

<span title="5 of 5" class="rating ">5 of 5</span>

</div>

                <span class="review-count">62 Reviews</span>
            </a>
            

            <ul>
 	<li>Unlimited Calling, Faxing, Video Conferencing</li>
 	<li>24/7 U.S Based Customer Support</li>
 	<li>Super Reliable, Simple to Use</li>
</ul>
            </div>

            <div class="download standard">
                
                <img src="https://a.slashdotmedia.com/www/delivery/lg.php?bannerid=22096&amp;campaignid=3345&amp;zoneid=18304&amp;cb=4d0eae6c13" alt="The Leading Provider of Business VoIP Phone Systems" width="1" height="1" style="display: none;"/>

                

                
                <a class="sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=22096__zoneid=18304__cb=4d0eae6c13__oadest=https%3A%2F%2Fwww.vonage.com%2Fbusiness%2Fstatic%2Flp-gen-voipreview%2F%3Futm_source%3Dvoipreviewc%26utm_medium%3Dcpc%26utm_campaign%3Dvoipreview">Get Quote!</a>
                
            </div>
        </div> 

        

    </div> 
    <div class="sponsored-by">Advertisement</div>
</div>


</section>



        
<section id="ratings">
    
    <header class="ui-helper-clearfix">
        <h2>
            User Ratings
        </h2>
        

    </header>
    

    
    <section class="recommended-percentage item" itemscope itemtype="http://schema.org/AggregateRating" itemprop="aggregateRating">
        <span class="rating">
            <span class="average" itemprop="ratingValue">0.0</span>
            <meta itemprop="bestRating" content="5"/>
            <meta itemprop="worstRating" content="1"/>
            <meta itemprop="ratingCount" content="1"/>
            <span class="recommended">out of 5 stars</span>
        </span>
    </section>
    <section class="stars">
        <div class="star-text stars-5">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <div class="star-text stars-4">&#9733;&#9733;&#9733;&#9733;</div>
        <div class="star-text stars-3">&#9733;&#9733;&#9733;</div>
        <div class="star-text stars-2">&#9733;&#9733;</div>
        <div class="star-text stars-1">&#9733;</div>
    </section>
    <section class="bargraph">
        <div class="stars-5" style="border-left-width: 1px">
            0
        </div>
        <div class="stars-4" style="border-left-width: 1px">
            0
        </div>
        <div class="stars-3" style="border-left-width: 1px">
            0
        </div>
        <div class="stars-2" style="border-left-width: 1px">
            0
        </div>
        <div class="stars-1" style="border-left-width: 1px">
            0
        </div>
    </section>

    
<div class="dimensional-ratings">
    

<div class="dimensional-rating">
    
    <span class="label">ease</span>
    <span title="1 of 5" class="rating ">1 of 5</span>
    <span title="2 of 5" class="rating ">2 of 5</span>
    <span title="3 of 5" class="rating ">3 of 5</span>
    <span title="4 of 5" class="rating ">4 of 5</span>
    <span title="5 of 5" class="rating ">5 of 5</span>
    <span class="rating-score">
        <span class="dim-rate">0</span> / 5
    </span>
</div>

    

<div class="dimensional-rating">
    
    <span class="label">features</span>
    <span title="1 of 5" class="rating ">1 of 5</span>
    <span title="2 of 5" class="rating ">2 of 5</span>
    <span title="3 of 5" class="rating ">3 of 5</span>
    <span title="4 of 5" class="rating ">4 of 5</span>
    <span title="5 of 5" class="rating ">5 of 5</span>
    <span class="rating-score">
        <span class="dim-rate">0</span> / 5
    </span>
</div>

    

<div class="dimensional-rating">
    
    <span class="label">design</span>
    <span title="1 of 5" class="rating ">1 of 5</span>
    <span title="2 of 5" class="rating ">2 of 5</span>
    <span title="3 of 5" class="rating ">3 of 5</span>
    <span title="4 of 5" class="rating ">4 of 5</span>
    <span title="5 of 5" class="rating ">5 of 5</span>
    <span class="rating-score">
        <span class="dim-rate">0</span> / 5
    </span>
</div>

    

<div class="dimensional-rating">
    
    <span class="label">support</span>
    <span title="1 of 5" class="rating ">1 of 5</span>
    <span title="2 of 5" class="rating ">2 of 5</span>
    <span title="3 of 5" class="rating ">3 of 5</span>
    <span title="4 of 5" class="rating ">4 of 5</span>
    <span title="5 of 5" class="rating ">5 of 5</span>
    <span class="rating-score">
        <span class="dim-rate">0</span> / 5
    </span>
</div>

</div>


    <div id="divider-bottom"></div>

</section>


        


    
        <aside class="project-activity-main" id="project-activity"></aside>
    

    <script type="text/x-handlebars-template" id="project-activity-template">
        <header>
        
            <h2>
                Project Activity
                <a id="follow-action" class="header-links {{#if following}}active{{/if}}" href="http://sourceforge.net/projects/farsitex/{{followee.activity_url}}activity/follow?source=project_activity" title="{{followee.activity_name}}">
                    <b data-icon="S" class="ico ico-star"></b>
                </a>
                <a id="rss-feed" class="header-links" href="http://sourceforge.net/projects/farsitex/{{followee.activity_url}}activity/feed?source=project_activity" title="RSS"><b data-icon="f" class="ico ico-feed"></b></a>
            </h2>
        
        </header>
        
        <ul class="list-of-activities">
            {{#each timeline}}
            <li class="item">
                <h4>
                    {{#ifTagged "release"}}
                      {{ cap this.verb }}
                    {{else}}
                      {{ icon this.actor.activity_extras.icon_url }}
                      {{ activity_obj this.actor }}
                      {{ this.verb }}
                    {{/ifTagged}}
                    {{ activity_obj this.obj }}
                    {{#if this.target.activity_name}} on {{ activity_obj this.target }}{{/if}}
                </h4>
                {{#if this.obj.activity_extras.summary}}
                  <p>{{ this.obj.activity_extras.summary }}</p>
                {{/if}}
                <time datetime="{{ this.published }}" title="{{ this.published }}">{{ ago this.published }}</time>
            </li>
            {{/each}}
        </ul>
        <a class="all-activities" href="http://sourceforge.net/projects/farsitex/{{followee.activity_url}}activity?source=project_activity">See All Activities</a>
        
    </script>



        
<section id="reviews-n-ratings">
    <header>
        <a class="pspbtn" href="http://sourceforge.net/projects/farsitex/reviews/new">Write a Review</a>
        <h2>User Reviews</h2>
    </header>
    <section class="content">
                <p>Be the first to <a href="http://sourceforge.net/projects/farsitex/reviews/new">post a review</a> of FarsiTeX!</p>
    </section>
</section>


        
<section id="project-additional-trove" class="content-supplement">
    <header>
        <h2>Additional Project Details</h2>
    </header>
    <div class="project-container">
        <section class="project-info">
    <header>
        <h3>Languages</h3>
    </header>
    <section class="content"><a href="http://sourceforge.net/directory/natlanguage:english/" itemprop=inLanguage>English</a>, <a href="http://sourceforge.net/directory/natlanguage:persian/" itemprop=inLanguage>Persian</a></section>
</section>


        <section class="project-info">
    <header>
        <h3>Intended Audience</h3>
    </header>
    <section class="content"><a href="http://sourceforge.net/directory/audience:endusers/">End Users/Desktop</a>, <a href="http://sourceforge.net/directory/audience:scienceresearch/">Science/Research</a></section>
</section>


        <section class="project-info">
    <header>
        <h3>User Interface</h3>
    </header>
    <section class="content"><a href="http://sourceforge.net/directory/environment:win32/">Win32 (MS Windows)</a>, <a href="http://sourceforge.net/directory/environment:x11/">X Window System (X11)</a></section>
</section>


        <section class="project-info">
    <header>
        <h3>Programming Language</h3>
    </header>
    <section class="content"><a href="http://sourceforge.net/directory/language:c/">C</a>, <a href="http://sourceforge.net/directory/language:cpp/">C++</a></section>
</section>


        <section class="project-info">
            <header>
                <h4>Registered</h4>
            </header>
            <section class="content">
                2000-07-02
            </section>
        </section>

        
    </div>
</section>


    </section>

    <section id="sidebar" class="scroll-fixable">

        
        <section class="sterling">
            


 
    
    



<div id="SF_ProjectSum_300x250_A_wrapped" data-id="div-gpt-ad-1394209358855-0" class="draper multisize  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358855-0"></div>');
}());

gptadRenderers['SF_ProjectSum_300x250_A'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358855-0');
    });
};
gptadRenderers['SF_ProjectSum_300x250_A']();  // jshint ignore:line
}
</script>
</div>


            


 
    



<div id="SF_ProjectSum_300x250_B_wrapped" data-id="div-gpt-ad-1394209358856-0" class="draper medrec  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358856-0"></div>');
}());

gptadRenderers['SF_ProjectSum_300x250_B'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358856-0');
    });
};
gptadRenderers['SF_ProjectSum_300x250_B']();  // jshint ignore:line
}
</script>
</div>


        </section>

        

<div id="taboola-right-rail-thumbnails"></div>
<script type="text/javascript">
/*global _taboola*/
window._taboola = window._taboola || [];
_taboola.push({
    mode: 'thumbnails-rr-abp',
    container: 'taboola-right-rail-thumbnails',
    placement: 'Right Rail Thumbnails',
    target_type: 'mix'
});
</script>

        <aside class="sidebar-widget">
        <header>
        <h3>Recommended Projects</h3>
        </header>
    <ul class="vertical">

        

            
                <li class="item odd">
                <a href="http://sourceforge.net/projects/texniccenter/?source=recommended" title="TeXnicCenter"><img alt="Icon" src="http://a.fsdn.com/allura/p/texniccenter/icon?1372637505" /></a>
                <div class="pinfo-content recommended">
                <a class="project-name" href="http://sourceforge.net/projects/texniccenter/?source=recommended"
                        title="Learn more about TeXnicCenter ">TeXnicCenter</a>
                        <div class="summary">
                        A feature-rich environment for writing LaTeX documents on Windows
                        </div>
                    </div>

            </li>
            
                <li class="item even">
                <a href="http://sourceforge.net/projects/virastyar/?source=recommended" title="Virastyar"><img alt="Icon" src="http://a.fsdn.com/allura/p/virastyar/icon?1399223752" /></a>
                <div class="pinfo-content recommended">
                <a class="project-name" href="http://sourceforge.net/projects/virastyar/?source=recommended"
                        title="Learn more about Virastyar ">Virastyar</a>
                        <div class="summary">
                        Virastyar is an spell checker for Persian Language
                        </div>
                    </div>

            </li>
            
                <li class="item odd last">
                <a href="http://sourceforge.net/projects/miktex/?source=recommended" title="MiKTeX"><img alt="Icon" src="http://a.fsdn.com/allura/p/miktex/icon?1504598967" /></a>
                <div class="pinfo-content recommended">
                <a class="project-name" href="http://sourceforge.net/projects/miktex/?source=recommended"
                        title="Learn more about MiKTeX ">MiKTeX</a>
                        <div class="summary">
                        MiKTeX source code moved to GitHub
                        </div>
                    </div>

            </li>
            
        
    </ul>
</aside>


    
        
    
        <aside class="sidebar-widget stackcommerce-widget">
        <header id="stackcommerce-header">
            <img src="http://a.fsdn.com/con/img/sf_logo250x32.png" width="125" height="16" alt="sourceforge.net logo" />
            <h3>Deals</h3>
        </header>
        


 
    



<div id="SF-300x250_wrapped" data-id="div-gpt-ad-1392148208795-0" class="draper medrec  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148208795-0"></div>');
}());

gptadRenderers['SF-300x250'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148208795-0');
    });
};
gptadRenderers['SF-300x250']();  // jshint ignore:line
}
</script>
</div>


    </aside>
    
    

    
    <section class="sterling">
        


 
    



<div id="SF_ProjectSum_300x250_C_wrapped" data-id="div-gpt-ad-1394209358857-0" class="draper medrec  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358857-0"></div>');
}());

gptadRenderers['SF_ProjectSum_300x250_C'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358857-0');
    });
};
gptadRenderers['SF_ProjectSum_300x250_C']();  // jshint ignore:line
}
</script>
</div>


    </section>

        

    
    
        <aside class="sidebar-widget project-related-keywords ">
            <header>
                <h3>Top Searches</h3>
            </header>
            <ul id="project-top-searches">
            
                <li class="search_term">
                    <b><a href="http://sourceforge.net/directory/?q=farsitex">farsitex</a></b>
                </li>
            
            </ul>
        </aside>
    
        <a id="report-inappropriate" href="http://sourceforge.net/projects/farsitex/report_inappropriate">Report inappropriate content</a>

    </section>
    

    
<script type="text/javascript">
if (!SF.adblock) {
    
    SF.Ads.scrollFixable = new SF.ScrollFixable($('.scroll-fixable').eq(0), null);
    
}
</script>
</article>
        </div>
  
    <div class="project-footer-drapercontainer">
    


 
    



<div id="SF_ProjectSum_728x90_B_wrapped" data-id="div-gpt-ad-1392148208790-0" class="draper leaderboard  
visibility_rules 
 v_728_leaderboard  v_970_xlarge "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148208790-0"></div>');
}());

gptadRenderers['SF_ProjectSum_728x90_B'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148208790-0');
    });
};
gptadRenderers['SF_ProjectSum_728x90_B']();  // jshint ignore:line
}
</script>
</div>


    </div>
  

        

        
            
    <div id="overlay-blockthis-wrapper">
    <div id="overlay-blockthis">
        <div class="instructions">
            <h2>Thanks for helping keep SourceForge clean.</h2>
            <p>
            <u>Screenshot instructions:</u><br>
            <a data-external target=_blank href="http://windows.microsoft.com/en-us/windows/take-screen-capture-print-screen#take-screen-capture-print-screen=windows-8">Windows</a><br>
            <a data-external target=_blank href="https://support.apple.com/en-us/HT201361">Mac</a><br>
            <a data-external target=_blank href="https://access.redhat.com/solutions/2178">Red Hat Linux</a> &nbsp;
            <a data-external target=_blank href="https://help.ubuntu.com/stable/ubuntu-help/screen-shot-record.html">Ubuntu</a>
            </p>
            <p>
                <u>Click URL instructions:</u><br>
                Right-click on ad, choose "Copy Link", then paste here &rarr;<br>
                (This may not be possible with some types of ads)
            </p>
            <a class="more-info" href="https://sourceforge.net/p/forge/documentation/Report%20a%20problem%20with%20Ad%20content/" target="_blank">More information about our ad policies</a>
        </div>
        <form class="dropzone" action="http://sourceforge.net/api/instrumentation/gpt" id="blockthisForm" method="POST">
            <a href="summary.php#" id="btn-blockthis-close">X</a>
            
  <input type="hidden" name="_visit_cookie" value=""/>
                <input type='hidden' name='timestamp' value='1513322900'/>
                <input type='hidden' name='spinner' value='XCpwa_gwBC_wjoME:RZp4brhC6Pg'/>
                <p class='t5b6615021b3b07e15525778c29756e9914f7475b'><label for='XDfR1kGl4OswcjH0uW6UzY:Lr5k4'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XDfR1kGl4OswcjH0uW6UzY:Lr5k4' name='XDPR1kGl4O8MPHNEgetF1NBFMXj0' type=
             'text'/></p>
                <p class='t5b6615021b3b07e15525778c29756e9914f7475b'><label for='XDfR1kGl4Os0cjH0uW6UzY:Lr5k4'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XDfR1kGl4Os0cjH0uW6UzY:Lr5k4' name='XDPR1kGl4OsMPHNEgetF1NBFMXj0' type=
             'text'/></p>
            <p>Briefly describe the problem (required):
            <input name="XAfh_jW9zYoxXya5QerbEfqZ9o_U" type="text" required>
            </p>

            <div class="upload-text">Upload screenshot of ad (required):</div>
            <div id='upload-it'>
                <a href="summary.php#" onclick="return false">Select a file</a>, or drag & drop file here.
            </div>
            <div id="upload-it-placeholder"></div> 

            <div class="dropzone-previews" style="display: none"></div>
            <div class="dz-message" style="display: none"></div> 
            
            <div id="dropzone-preview-template" style="display: none">
                <div class="dz-preview dz-file-preview">
                    <img data-dz-thumbnail src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt=""/>
                    <div class="dz-success-mark"><span>✔</span></div>
                    <div class="dz-error-mark"><span>✘</span></div>
                    <div class="dz-error-message"><span data-dz-errormessage></span></div>
                </div>
            </div>
            <p></p>
            <p>Please provide the ad click URL, if possible:
            <input name="XA_92l29qVIlRzP4S:YpmUfNPslE" type="url">
            </p>
            <textarea id="gpt-info" name="XDvh7im0:J0Azvv51SMDRYA6Htuw"></textarea>
            <input type="submit" id="btn-blockthis-submit" value="Submit Report">
        </form>
    </div>
    </div>

        

        <script type="text/javascript" src="http://ads.pro-market.net/ads/scripts/site-143572.js"></script>

<footer id="site-footer">
    <div class="wrapper">
        <nav>
            <h5>SourceForge</h5>
            <a href="http://sourceforge.net/about">About</a>
            <a href="http://sourceforge.net/blog/category/sitestatus/">Site Status</a>
            <a href="https://twitter.com/sfnet_ops">@sfnet_ops</a>
        </nav>
        <nav>
            <h5>Find and Develop Software</h5>
            <a href="http://sourceforge.net/create/">Create a Project</a>
            <a href="http://sourceforge.net/directory/">Software Directory</a>
            <a href="http://sourceforge.net/top">Top Downloaded Projects</a>
        </nav>
        <nav>
            <h5>Community</h5>
            <a href="http://sourceforge.net/blog/">Blog</a>
            <a href="https://twitter.com/sourceforge">@sourceforge</a>
            <a href="https://library.slashdotmedia.com/">Resources</a>
        </nav>
        <nav>
            <h5>Help</h5>
            <a href="https://p.sf.net/sourceforge/docs">Site Documentation</a>
            <a href="http://sourceforge.net/support">Support Request</a>
        </nav>
    </div>
</footer>
<footer id="site-copyright-footer">
    <div class="wrapper">
        <div id="copyright">
            &copy; 2017 Slashdot Media. All Rights Reserved.<br />
        </div>
        <nav>
            <a href="https://slashdotmedia.com/terms-of-use/">Terms</a>
            <a href="https://slashdotmedia.com/privacy-statement/">Privacy</a>
            <span id='teconsent'></span>
            <a href="https://slashdotmedia.com/opt-out-choices/">Opt Out Choices</a>
            <a href="https://slashdotmedia.com">Advertise</a>
        </nav>
    </div>
</footer>

        
<div id="newsletter-floating" class="goth-form">
    <h2>Get latest updates about Open Source Projects, Conferences and News.</h2>
    <div class="teaser">
    <input type="submit" value="Sign Up" class="bt">
    </div>
    <div class="form-itself">
    


<form action="http://sourceforge.net/user/newsletters/subscribe" method="post" class="newsletter-subscribe-form compliance-form "  >

    <div class="form">
        <div class="fielderror"></div>
        <input type="email" name="XD_l3n2VtNNCfsN8BDpcix7b0LaY"  placeholder="email@address.com" value="" required>

        <label class="input-set stacked input-set-country">
            
            <span class="label">Country</span>
            
            <span class="input">
<select id="country-floating" name="XDf91i2J1eYUcjH0uW6UzY:Lr5k4" required class="use-placeholder-color">
    <option value=""></option>
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, The Democratic Republic of the</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D&#39;Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and McDonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People&#39;s Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People&#39;s Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn Islands</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US" selected>United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
</span>
        </label>
        <label class="input-set stacked input-set-state">
            
            <span class="label">State</span>
            
            <span class="input">
<select id="state-floating" name="XD:9un3hkNNCfsN8BDpcix7b0LaY"  class="use-placeholder-color">
    <option value=""></option>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA" selected>California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="PR">Puerto Rico</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
</span>
        </label>

        

<div class="gdpr-consent-requirement gdpr-consent-topics">
    <h4>
        Yes, also send me special offers about products &amp; services regarding:
        </h4>

        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="artificial-intelligence"  data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="cloud"  data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="network-security"  data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="hardware"  data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XB_N8mGlzeKNXz7FXJulHQgRS9sc" value="software-development"  data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XBf91kHhgaIh8zaRKLfUcHYduVOg" value="email"  data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XBf91kHhgaIh8zaRKLfUcHYduVOg" value="phone"  data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XBf91kHhgaIh8zaRKLfUcHYduVOg" value="sms"  data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    <label class="input-set inset input-phone hide ">
        <span class="label">Phone</span>
        <span class="input">
            <input type="tel" name="XD:xykWJkNNCfsN8BDpcix7b0LaY" value="">
        </span>
        <span class="error-message"></span>
    </label>
</div>


        

      
        
    
    <div class="js-required fielderror">JavaScript is required for this form.</div>
    
    <div class="g-recaptcha"
          data-sitekey="6LeVgCEUAAAAACtawUTrPTBy0mTrGtjpPn_Xh-ZW"
          data-badge="inline"
          data-size="invisible"
          >
    </div>


    </div>

    <p class="details">
    <span class="fielderror"></span>
    <input type="hidden" name="XAfJ_iX9tbohXxbNNerbEfqZ9o_U" value="sitewide" class="newsletter-optin-assume">
    
 

<label class="input-set input-set-agree-general allow-precheck">
    <span class="checkbox"> <input type="checkbox" name="XDf91kH9kZYgcjH0uW6UzY:Lr5k4" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd377 required></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="http://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


            
 

<label class="input-set input-set-agree-general-gdpr allow-precheck hide-initially">
    <span class="checkbox"> <input type="checkbox" name="XDf91kH9kZYgcjH0uW6UzY:Lr5k4" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd378 required></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="http://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


    </p>

    <input type="submit" value="Subscribe" class="bt button blue">

    <input type="hidden" name="source" value="floating">
    <input type="hidden" name="XGf91i2J1eYV8w65aIMULAc0wi50" value="user">
    <input type="hidden" name="XCfd3izMtt:w9n4ozHzN22H0c_OU" value="">


  <input type="hidden" name="_visit_cookie" value=""/>
<input type='hidden' name='timestamp' value='1513322900'/>
<input type='hidden' name='spinner' value='XCpwa_gwBC_wjoME:RZp4brhC6Pg'/>
<p class='t5b6615021b3b07e15525778c29756e9914f7475b'><label for='XDfR1kGl4OcwcjH0uW6UzY:Lr5k4'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XDfR1kGl4OcwcjH0uW6UzY:Lr5k4' name='XDPR1kGl4O8MPHNEgetF1NBFMXj0' type=
             'text'/></p>
<p class='t5b6615021b3b07e15525778c29756e9914f7475b'><label for='XDfR1kGl4Oc0cjH0uW6UzY:Lr5k4'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XDfR1kGl4Oc0cjH0uW6UzY:Lr5k4' name='XDPR1kGl4OsMPHNEgetF1NBFMXj0' type=
             'text'/></p>
</form>


    </div>
    <a id="btn-float-close">No, Thank you</a>
</div>

        

<script src="http://a.fsdn.com/con/js/sftheme/vendor/dropzone-4.3.0.min.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/sftheme/vendor/dragster.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery.metadata.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery-ui-1.11.1.custom.min.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery.cookie.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery.fancybox-2.1.5.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery.nivo.slider.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery.rating.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery.pajinate.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery.qtip.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/date.format.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/string.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/bootstrap-scrollspy.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/handlebars.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/lib/jquery.dotdotdot-1.8.3.min.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/sftheme/jquery.notify.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/sftheme/shared.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/widgets.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/global.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/project.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/reviews.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/screenshots.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/callouts.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/activity.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/madmen.js?1513198786" type="text/javascript"></script>
<script src="http://a.fsdn.com/con/js/nel.js?1513198786" type="text/javascript"></script>



        
            <script type="text/javascript" src="http://consent-st.truste.com/get?name=notice.js&amp;domain=slashdot.org&amp;c=teconsent&amp;text=true"></script>
            <noscript><p><img src="http://analytics.slashdotmedia.com/sf.php?idsite=39" style="border:0;" alt="" /></p></noscript><script src="https://www.google.com/recaptcha/api.js?onload=recaptchaLoadCallback&render=explicit" async defer></script><script type="text/javascript">
            _linkedin_data_partner_id = "97055";
            </script><script type="text/javascript">
            (function(){var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);})();
            </script>
            <noscript>
            <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=97055&fmt=gif" />
            </noscript>




<script type="text/javascript">
/*global _taboola*/
window._taboola = window._taboola || [];
_taboola.push({flush: true});
</script>

      </body>
</html>

