jQuery(document).ready(function($) {

    document.addEventListener('textlayerrendered', function (e) {
      if (e.detail.pageNumber === PDFViewerApplication.page) {
          console.log('hello');
     // $('.thumbnailImage').hide();   	
    


     		
     	

 };

    }, true);

});




	function update_page_data(page){
     	 var manifesto_title;
     	var manifesto_pdf;
     	var manifesto_sound;
     
     		if(page < 4){
     			manifesto_title = "Introduction";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}
     			
     		if( page == 4 || page == 5 || page == 11 || page == 18 || page == 19 || page == 37 || page == 38 || page == 58  || page ==73 || page ==74|| page ==79|| page ==80){
     			manifesto_title = "The undecided manifesto";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 6 || page == 7){
     			manifesto_title = "Raw Manifesto";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 8 || page == 9 || page == 10){
     			manifesto_title = "The stage, things and no body manifesto";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 12 || page == 13){
     			manifesto_title = "Biotic Explorers Manifesto";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 14 || page == 15){
     			manifesto_title = "On Materiality or How To Intra-Act";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}
     		if(page == 16 || page == 17){
     			manifesto_title = "The Outlier Manifesto";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}	
     		if(page >= 20 && page <35){
     			manifesto_title = "Clowns. Variant of a Manifesto";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}
     		if(page == 35 || page == 36){
     			manifesto_title = "We Do Not Sound Like That";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page >= 39 && page <53){
     			manifesto_title = "Light-Writting From Las Vegas";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 53 || page == 54){
     			manifesto_title = "The Sonic Shamans Manifesto";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 55 || page == 56|| page == 57){
     			manifesto_title = "Media Culture in The Deep Time";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 59 || page == 60){
     			manifesto_title = "Manifesto On Telepathy";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page >= 61 && page < 67){
     			manifesto_title = "Virtual Materialism - A Manifesto";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 67 || page == 68){
     			manifesto_title = "Serial 3D-Printing";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page >= 69 && page < 73){
     			manifesto_title = "The Algorithmic Art Manifesto";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 75 || page == 76){
     			manifesto_title = "the seRnJdiPtoR";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page == 77 || page == 78){
     			manifesto_title = "Complexity Takeover";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

     		if(page >= 81){
     			manifesto_title = "Authors";
     			manifesto_pdf = "";
     			manifesto_sound;
     		}

	
     		document.getElementById("infoSection").innerHTML = "<p>PRINT "+manifesto_title +"</p>";
     
	
     	}


