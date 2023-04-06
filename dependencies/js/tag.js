
var cookieSend = false;
var cookieExists = false;

$.gdprcookie({
    message: 'We use our own and third-party  cookies for website functionality,  to personalize ads, analyze or measure site usage and develop audience insight. <br />By continuing to use the site or closing this banner without changing your preferences, you agree to our use of cookies and to our <a style="text-decoration:underline" target="_blank" href="https://www.motorhub.co.ke/privacy-policy-terms-of-use" rel="noreferrer"><strong>Privacy Policy & Terms Of Use</strong></a>.<br /><br />You can change your consent setting (except those essential for browsing the website) via customize preferences button below.<br /><br /> Select cookies for which you want to express consent:',
    delay: 1500,
    expires: 30,
    acceptBtnLabel: "Accept",
    advancedBtnLabel: "Customize Preferences",
    subtitle: "Select cookies for which you want to express consent:",				        
    cookieTypes: [
                  {
                    type: "Essentials",
                    value: "essential",
                    description: "This type of cookie allows the correct operation of certain sections of the Website. These cookies, always sent from our domain, are necessary to view the site correctly and in relation to the technical services offered, will therefore always be used and sent, unless the user does not change the settings in your browser (thus disrupting the display of pages of the site)."
                  },
                  {
	                 type: "Functional",
	                 value: "functional",
	                 description: "This type of cookie allows advanced features of the website to work, like the Live Chat functionality. It stores information about the user and so it's required to opt-in for its use."
	              },	                  	                  
                  {
                    type: "Analytics",
                    value: "analytics",
                    description: "Cookies in this category are used to collect information on how the website is used. www.motorhub.co.ke will use this information in respect of anonymous statistical analysis in order to improve the use of the Site and to make the content more interesting and relevant to the wishes of users."
                  },
                  {
                    type: "Marketing",
                    value: "marketing",
                    description: "These cookies are necessary to create user profiles in order to send advertising messages in line with the preferences expressed by the user within the pages of the Site."
                  }
                ],
      
});

$(document).on("gdpr:advanced", function() {
	 if(cookieExists){
		 $('.gdprcookie-types input').prop('checked', false);
		 for(i=0;i<$.gdprcookie.preference().length;i++){
			 $('.gdprcookie-types input[value='+$.gdprcookie.preference()[i]+']').prop('checked', true);
		}
			
	 
     }  
	 
	})

 $(document).on("gdpr:accept", function() {
		if(!cookieSend){
    		initCookiePrefs();
		}

		cookieExists = true;
    })


   if($.gdprcookie.preference()){
       
	   if(!cookieSend){
    		initCookiePrefs();
		}	
   }
    
function initCookiePrefs(){
	 cookieSend = true;
	 if ($.gdprcookie.preference().indexOf('analytics') != -1) {
		 	
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5VX83TT');
  
  
				
		var script = document.createElement('script');
script.src = 'https://www.googletagmanager.com/gtag/js?id=UA-216929793-1';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
		 

  	var script2 = document.createElement('script');
script2.src = 'https://www.googletagmanager.com/gtag/js?id=G-S41JNJ3CLJ';
script2.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script2);


	var script3 = document.createElement('script');
script3.src = 'https://www.googletagmanager.com/gtag/js?id=AW-386089303';
script3.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script3);


		 
	 }
 
	 if ($.gdprcookie.preference().indexOf('marketing') != -1) {



 
	 }
	 
	 if ($.gdprcookie.preference().indexOf('functional') != -1) {
		 
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/591130a64ac4446b24a6df10/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();

		
	 }
	   window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-216929793-1');
  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S41JNJ3CLJ'); 
  
  gtag('config', 'AW-386089303');
	 
	
}

