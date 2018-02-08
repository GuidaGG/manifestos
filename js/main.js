jQuery(document).ready(function($) {

    document.addEventListener('textlayerrendered', function (e) {
      if (e.detail.pageNumber === PDFViewerApplication.page) {
          console.log('hello');
       	

 }

    }, true);

});
