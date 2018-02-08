<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GulpTheme
 */

 get_header();

    while ( have_posts() ) : the_post();

       $file = get_field('pdf'); ?>



<div id="aboutPage">
  <div id="din">

    <div class="aboutclose">✕</div>
    <p>17 MANIFESTOS<br><br>
      Edited by Andrea Sick <br>
      Design concept and layout: <a href="https://www.esthersophie.de/" target="_blank">Sarah Käsmayr</a> and <a href="http://cassiavila.com/" target="_blank"> Cássia Vila</a><br>
      Website: <a href="http://www.maximiliankiepe.de" target="_blank">Maximilian Kiepe</a> and Guida Ribeiro <br>
      © 2018 by the authors and Textem Verlag, Hamburg<br>
      ISBN: 978-3-86485-190-2<br><br>

      Distributed by Textem Verlag<br>
      <a href="http://www.textem-verlag.de" target="_blank">www.textem-verlag.de</a>
    </p>
  </div>
  <img class="loading" src="<?php bloginfo('stylesheet_directory'); ?>/images/loading-icon.gif">

</div>

<div id="infoSection" onclick="printJS('http://localhost/mani/wp-content/uploads/2018/02/biotic_explorers_manifesto.pdf')">
 
  <!-- <div class="sec">
    <div class="c">©</div><p> GUIDA RIBEIRO — RAW MANIFESTO</p><br>
  </div>
  <div class="sec">
    <div class="square"></div><p> PRINT RAW MANIFESTO</p><br>
  </div>
  <div class="sec">
    <div class="play">►</div><p> PLAY AUDIOFILE</p>
    <div class="play">❙❙</div><p> PAUSE AUDIOFILE</p>
  </div>
  </p> -->
</div>


   <input id="url" type="hidden" value="<?php echo $file['url']; ?>">
    <div id="outerContainer">

      <div id="sidebarContainer">
        <div id="toolbarSidebar">
          <div class="splitToolbarButton toggled">
            <button id="viewThumbnail" class="toolbarButton toggled" title="Show Thumbnails" tabindex="2" data-l10n-id="thumbs">
               <span data-l10n-id="thumbs_label">Thumbnails</span>
            </button>
            <button id="viewOutline" class="toolbarButton" title="Show Document Outline (double-click to expand/collapse all items)" tabindex="3" data-l10n-id="document_outline">
               <span data-l10n-id="document_outline_label">Document Outline</span>
            </button>
            <button id="viewAttachments" class="toolbarButton" title="Show Attachments" tabindex="4" data-l10n-id="attachments">
               <span data-l10n-id="attachments_label">Attachments</span>
            </button>
          </div>
        </div>
        <div id="sidebarContent">

        <div id="thumbnailView" style="display: none"> </div>

          <div id="thumbnailView_manifestos">
             <a href="#page=4" title="Page 1" style="display: inline;">
                <div class="thumbnail" data-page-number="4" data-loaded="true">
                    <div class="thumbnailSelectionRing" style="width: 100px; height: 71px;">
                        <img id="thumbnail1" class="thumbnailImage" src="http://localhost/mani/wp-content/uploads/2018/02/undecided.png" aria-label="Thumbnail of Page 1" style="width: 98px; height: 69px;">
                      </div>
                  </div>
              </a>

               <a href="#page=6" title="Page 1" style="display: inline;">
                <div class="thumbnail" data-page-number="4" data-loaded="true">
                    <div class="thumbnailSelectionRing" style="width: 100px; height: 71px;">
                        <img id="thumbnail1" class="thumbnailImage" src="http://localhost/mani/wp-content/uploads/2018/02/raw.png" aria-label="Thumbnail of Page 1" style="width: 98px; height: 69px;">
                      </div>
                  </div>
              </a>

          </div>
          <div id="outlineView" class="hidden">
          </div>
          <div id="attachmentsView" class="hidden">
          </div>
        </div>
      </div>  <!-- sidebarContainer -->

      <div id="mainContainer">

      <!--
        <div class="reiter_wrapper">
          <div class="reiter active">
            <p>RAW MANIDFESTO</p>
          </div>
          <div class="reiter">
            <p>LUIZ MANIFEST</p>
          </div>
          <div class="reiter">
            <p>BLABLABLA</p>
          </div>
        </div>
      -->

        <div class="findbar hidden doorHanger" id="findbar">
          <div id="findbarInputContainer">
            <input id="findInput" class="toolbarField" title="Find" placeholder="Find in document…" tabindex="91" data-l10n-id="find_input">
            <div class="splitToolbarButton">
              <button id="findPrevious" class="toolbarButton findPrevious" title="Find the previous occurrence of the phrase" tabindex="92" data-l10n-id="find_previous">
                <span data-l10n-id="find_previous_label">Previous</span>
              </button>
              <div class="splitToolbarButtonSeparator"></div>
              <button id="findNext" class="toolbarButton findNext" title="Find the next occurrence of the phrase" tabindex="93" data-l10n-id="find_next">
                <span data-l10n-id="find_next_label">Next</span>
              </button>
            </div>
          </div>

          <div id="findbarOptionsContainer">
            <input type="checkbox" id="findHighlightAll" class="toolbarField" tabindex="94">
            <label for="findHighlightAll" class="toolbarLabel" data-l10n-id="find_highlight">Highlight all</label>
            <input type="checkbox" id="findMatchCase" class="toolbarField" tabindex="95">
            <label for="findMatchCase" class="toolbarLabel" data-l10n-id="find_match_case_label">Match case</label>
            <span id="findResultsCount" class="toolbarLabel hidden"></span>
          </div>

          <div id="findbarMessageContainer">
            <span id="findMsg" class="toolbarLabel"></span>
          </div>
        </div>  <!-- findbar -->

        <div id="secondaryToolbar" class="secondaryToolbar hidden doorHangerRight">
          <div id="secondaryToolbarButtonContainer">
            <button id="secondaryPresentationMode" class="secondaryToolbarButton presentationMode visibleLargeView" title="Switch to Presentation Mode" tabindex="51" data-l10n-id="presentation_mode">
              <span data-l10n-id="presentation_mode_label">Presentation Mode</span>
            </button>

            <button id="secondaryOpenFile" class="secondaryToolbarButton openFile visibleLargeView" title="Open File" tabindex="52" data-l10n-id="open_file">
              <span data-l10n-id="open_file_label">Open</span>
            </button>

            <button id="secondaryPrint" class="secondaryToolbarButton print visibleMediumView" title="Print" tabindex="53" data-l10n-id="print">
              <span data-l10n-id="print_label">Print</span>
            </button>

            <button id="secondaryDownload" class="secondaryToolbarButton download visibleMediumView" title="Download" tabindex="54" data-l10n-id="download">
              <span data-l10n-id="download_label">Download</span>
            </button>

            <a href="#" id="secondaryViewBookmark" class="secondaryToolbarButton bookmark visibleSmallView" title="Current view (copy or open in new window)" tabindex="55" data-l10n-id="bookmark">
              <span data-l10n-id="bookmark_label">Current View</span>
            </a>

            <div class="horizontalToolbarSeparator visibleLargeView"></div>

            <button id="firstPage" class="secondaryToolbarButton firstPage" title="Go to First Page" tabindex="56" data-l10n-id="first_page">
              <span data-l10n-id="first_page_label">Go to First Page</span>
            </button>
            <button id="lastPage" class="secondaryToolbarButton lastPage" title="Go to Last Page" tabindex="57" data-l10n-id="last_page">
              <span data-l10n-id="last_page_label">Go to Last Page</span>
            </button>

            <div class="horizontalToolbarSeparator"></div>

            <button id="pageRotateCw" class="secondaryToolbarButton rotateCw" title="Rotate Clockwise" tabindex="58" data-l10n-id="page_rotate_cw">
              <span data-l10n-id="page_rotate_cw_label">Rotate Clockwise</span>
            </button>
            <button id="pageRotateCcw" class="secondaryToolbarButton rotateCcw" title="Rotate Counterclockwise" tabindex="59" data-l10n-id="page_rotate_ccw">
              <span data-l10n-id="page_rotate_ccw_label">Rotate Counterclockwise</span>
            </button>

            <div class="horizontalToolbarSeparator"></div>

            <button id="cursorSelectTool" class="secondaryToolbarButton selectTool toggled" title="Enable Text Selection Tool" tabindex="60" data-l10n-id="cursor_text_select_tool">
              <span data-l10n-id="cursor_text_select_tool_label">Text Selection Tool</span>
            </button>
            <button id="cursorHandTool" class="secondaryToolbarButton handTool" title="Enable Hand Tool" tabindex="61" data-l10n-id="cursor_hand_tool">
              <span data-l10n-id="cursor_hand_tool_label">Hand Tool</span>
            </button>

            <div class="horizontalToolbarSeparator"></div>

            <button id="documentProperties" class="secondaryToolbarButton documentProperties" title="Document Properties…" tabindex="62" data-l10n-id="document_properties">
              <span data-l10n-id="document_properties_label">Document Properties…</span>
            </button>
          </div>
        </div>  <!-- secondaryToolbar -->

        <div class="toolbar">
          <div id="toolbarContainer">
            <div id="toolbarViewer">
              <div id="toolbarViewerLeft">
                <button id="sidebarToggle" class="toolbarButton" title="Toggle Sidebar" tabindex="11" data-l10n-id="toggle_sidebar">
                  <div class="arrow_left">←</div><p>SIDEBAR</p>
                </button>
                <!-- <button id="highlights" class="toolbarButton highlights hiddenMediumView">
                  <div class="dot"></div><p>SHOW HIGHLIGHTS</p>
                </button> -->

                <div class="toolbarButtonSpacer"></div>
                <button id="viewFind" class="toolbarButton" title="Find in Document" tabindex="12" data-l10n-id="findbar">
                  <span data-l10n-id="findbar_label">Find</span>
                </button>
                <div class="splitToolbarButton hiddenSmallView">
                  <button class="toolbarButton pageUp" title="Previous Page" id="previous" tabindex="13" data-l10n-id="previous">
                    <span data-l10n-id="previous_label">Previous</span>
                  </button>
                  <div class="splitToolbarButtonSeparator"></div>
                  <button class="toolbarButton pageDown" title="Next Page" id="next" tabindex="14" data-l10n-id="next">
                    <span data-l10n-id="next_label">Next</span>
                  </button>
                </div>
                <input type="number" id="pageNumber" class="toolbarField pageNumber" title="Page" value="1" size="4" min="1" tabindex="15" data-l10n-id="page">
                <span id="numPages" class="toolbarLabel"></span>
              </div>
              <div id="toolbarViewerRight">
                <button id="presentationMode" class="toolbarButton presentationMode hiddenLargeView" title="Switch to Presentation Mode" tabindex="31" data-l10n-id="presentation_mode">
                  <span data-l10n-id="presentation_mode_label">Presentation Mode</span>
                </button>

                <button id="openFile" class="toolbarButton openFile hiddenLargeView" title="Open File" tabindex="32" data-l10n-id="open_file">
                  <span data-l10n-id="open_file_label">Open</span>
                </button>


                <!-- <button id="highlighttool" class="toolbarButton highlighttool hiddenMediumView" >
                  <div class="highlighttool"></div><p>HIGHLIGHT</p>
                </button>


                <button id="marktool" class="toolbarButton marktool hiddenMediumView">
                  <div class="marktool"></div><p>COMMENT</p>
                </button> -->

                <button id="marks" class="toolbarButton marks hiddenMediumView">
                  <div class="dot"></div><p>COMMENT</p>
                </button>

                <audio  id="audio" controls >
              
                  <source id="audio_source" src="http://localhost/mani/wp-content/uploads/2018/02/raw.mp3" type="audio/mpeg">
            
                </audio>
                <button id="print" class="toolbarButton print hiddenMediumView" title="Print" tabindex="33" data-l10n-id="print">
                  <div class="square"></div><p>PRINT ALL</p>
                </button>

                <button id="download" class="toolbarButton download hiddenMediumView" title="Download" tabindex="34" data-l10n-id="download">
                  <div class="arrow_down">↓</div><p>DOWNLOAD</p>
                </button>
                <button id="about" class="toolbarButton about hiddenMediumView">
                  <div class="about">?</div>
                </button>
                <a href="#" id="viewBookmark" class="toolbarButton bookmark hiddenSmallView" title="Current view (copy or open in new window)" tabindex="35" data-l10n-id="bookmark">
                  <span data-l10n-id="bookmark_label">Current View</span>
                </a>

                <div class="verticalToolbarSeparator hiddenSmallView"></div>

                <button id="secondaryToolbarToggle" class="toolbarButton" title="Tools" tabindex="36" data-l10n-id="tools">
                  <span data-l10n-id="tools_label">Tools</span>
                </button>
              </div>
              <div id="toolbarViewerMiddle">
                <div class="splitToolbarButton">
                  <button id="zoomOut" class="toolbarButton zoomOut" title="Zoom Out" tabindex="21" data-l10n-id="zoom_out">
                    <span data-l10n-id="zoom_out_label">Zoom Out</span>
                  </button>
                  <div class="splitToolbarButtonSeparator"></div>
                  <button id="zoomIn" class="toolbarButton zoomIn" title="Zoom In" tabindex="22" data-l10n-id="zoom_in">
                    <span data-l10n-id="zoom_in_label">Zoom In</span>
                   </button>
                </div>
                <span id="scaleSelectContainer" class="dropdownToolbarButton">
                  <select id="scaleSelect" title="Zoom" tabindex="23" data-l10n-id="zoom">
                    <option id="pageAutoOption" title="" value="auto" selected="selected" data-l10n-id="page_scale_auto">Automatic Zoom</option>
                    <option id="pageActualOption" title="" value="page-actual" data-l10n-id="page_scale_actual">Actual Size</option>
                    <option id="pageFitOption" title="" value="page-fit" data-l10n-id="page_scale_fit">Page Fit</option>
                    <option id="pageWidthOption" title="" value="page-width" data-l10n-id="page_scale_width">Page Width</option>
                    <option id="customScaleOption" title="" value="custom" disabled="disabled" hidden="true"></option>
                    <option title="" value="0.5" data-l10n-id="page_scale_percent" data-l10n-args='{ "scale": 50 }'>50%</option>
                    <option title="" value="0.75" data-l10n-id="page_scale_percent" data-l10n-args='{ "scale": 75 }'>75%</option>
                    <option title="" value="1" data-l10n-id="page_scale_percent" data-l10n-args='{ "scale": 100 }'>100%</option>
                    <option title="" value="1.25" data-l10n-id="page_scale_percent" data-l10n-args='{ "scale": 125 }'>125%</option>
                    <option title="" value="1.5" data-l10n-id="page_scale_percent" data-l10n-args='{ "scale": 150 }'>150%</option>
                    <option title="" value="2" data-l10n-id="page_scale_percent" data-l10n-args='{ "scale": 200 }'>200%</option>
                    <option title="" value="3" data-l10n-id="page_scale_percent" data-l10n-args='{ "scale": 300 }'>300%</option>
                    <option title="" value="4" data-l10n-id="page_scale_percent" data-l10n-args='{ "scale": 400 }'>400%</option>
                  </select>
                </span>
              </div>
            </div>
            <div id="loadingBar">
              <div class="progress">
                <div class="glimmer">
                </div>
              </div>
            </div>
          </div>
        </div>

        <menu type="context" id="viewerContextMenu">
          <menuitem id="contextFirstPage" label="First Page"
                    data-l10n-id="first_page"></menuitem>
          <menuitem id="contextLastPage" label="Last Page"
                    data-l10n-id="last_page"></menuitem>
          <menuitem id="contextPageRotateCw" label="Rotate Clockwise"
                    data-l10n-id="page_rotate_cw"></menuitem>
          <menuitem id="contextPageRotateCcw" label="Rotate Counter-Clockwise"
                    data-l10n-id="page_rotate_ccw"></menuitem>
        </menu>

        <div id="viewerContainer" tabindex="0">
          <div id="viewer" class="pdfViewer">

          </div>
        </div>

        <div id="errorWrapper" hidden='true'>
          <div id="errorMessageLeft">
            <span id="errorMessage"></span>
            <button id="errorShowMore" data-l10n-id="error_more_info">
              More Information
            </button>
            <button id="errorShowLess" data-l10n-id="error_less_info" hidden='true'>
              Less Information
            </button>
          </div>
          <div id="errorMessageRight">
            <button id="errorClose" data-l10n-id="error_close">
              Close
            </button>
          </div>
          <div class="clearBoth"></div>
          <textarea id="errorMoreInfo" hidden='true' readonly="readonly"></textarea>
        </div>
      </div> <!-- mainContainer -->

      <div id="overlayContainer" class="hidden">
        <div id="passwordOverlay" class="container hidden">
          <div class="dialog">
            <div class="row">
              <p id="passwordText" data-l10n-id="password_label">Enter the password to open this PDF file:</p>
            </div>
            <div class="row">
              <input type="password" id="password" class="toolbarField">
            </div>
            <div class="buttonRow">
              <button id="passwordCancel" class="overlayButton"><span data-l10n-id="password_cancel">Cancel</span></button>
              <button id="passwordSubmit" class="overlayButton"><span data-l10n-id="password_ok">OK</span></button>
            </div>
          </div>
        </div>
        <div id="documentPropertiesOverlay" class="container hidden">
          <div class="dialog">
            <div class="row">
              <span data-l10n-id="document_properties_file_name">File name:</span> <p id="fileNameField">-</p>
            </div>
            <div class="row">
              <span data-l10n-id="document_properties_file_size">File size:</span> <p id="fileSizeField">-</p>
            </div>
            <div class="separator"></div>
            <div class="row">
              <span data-l10n-id="document_properties_title">Title:</span> <p id="titleField">-</p>
            </div>
            <div class="row">
              <span data-l10n-id="document_properties_author">Author:</span> <p id="authorField">-</p>
            </div>
            <div class="row">
              <span data-l10n-id="document_properties_subject">Subject:</span> <p id="subjectField">-</p>
            </div>
            <div class="row">
              <span data-l10n-id="document_properties_keywords">Keywords:</span> <p id="keywordsField">-</p>
            </div>
            <div class="row">
              <span data-l10n-id="document_properties_creation_date">Creation Date:</span> <p id="creationDateField">-</p>
            </div>
            <div class="row">
              <span data-l10n-id="document_properties_modification_date">Modification Date:</span> <p id="modificationDateField">-</p>
            </div>
            <div class="row">
              <span data-l10n-id="document_properties_creator">Creator:</span> <p id="creatorField">-</p>
            </div>
            <div class="separator"></div>
            <div class="row">
              <span data-l10n-id="document_properties_producer">PDF Producer:</span> <p id="producerField">-</p>
            </div>
            <div class="row">
              <span data-l10n-id="document_properties_version">PDF Version:</span> <p id="versionField">-</p>
            </div>
            <div class="row">
              <span data-l10n-id="document_properties_page_count">Page Count:</span> <p id="pageCountField">-</p>
            </div>
            <div class="buttonRow">
              <button id="documentPropertiesClose" class="overlayButton"><span data-l10n-id="document_properties_close">Close</span></button>
            </div>
          </div>
        </div>
        <div id="printServiceOverlay" class="container hidden">
          <div class="dialog">
            <div class="row">
              <span data-l10n-id="print_progress_message">Preparing document for printing…</span>
            </div>
            <div class="row">
              <progress value="0" max="100"></progress>
              <span data-l10n-id="print_progress_percent" data-l10n-args='{ "progress": 0 }' class="relative-progress">0%</span>
            </div>
            <div class="buttonRow">
              <button id="printCancel" class="overlayButton"><span data-l10n-id="print_progress_close">Cancel</span></button>
            </div>
          </div>
        </div>
      </div>  <!-- overlayContainer -->

    </div> <!-- outerContainer -->
    <div id="printContainer"></div>
    <?php

      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>




<script>
jQuery(document).ready(function($) {

    document.addEventListener('textlayerrendered', function (e) {
      if (e.detail.pageNumber === PDFViewerApplication.page) {
          console.log('hello');


    var canvas = document.getElementById("page" + $('#pageNumber').val());
    var context = canvas.getContext("2d");



   
    $count = 0;


    /*initialize highliter */
    var applier = rangy.createClassApplier("highlight", {
                ignoreWhiteSpace: true,
                tagNames: ["span", "a"]
            });
    var highlighter = rangy.createHighlighter();
    highlighter.addClassApplier(applier);


/* print each manifesto */

$('#print_button').click(function(){
      var doc = document.getElementById('pdfDocument');

   
        doc.print();

});
/* print each manifesto */



/* LOAD COMENTS AND HIGHLIGHTS */
$( ".comment_positioned" ).each(function( index ) {
  $(this).prependTo($('.page[data-page-number="' + $( this ).data('page')+ '"]'));

  /* this can be removed */
 /* var high =  $(this).find('.c_highlight').data('attr');

    if(high){
      // console.log(high);
       // highlighter.deserialize(high);
    }*/
});




      $( ".commentdot" ).each(function( index ) {
        $(this).prependTo($('.page[data-page-number="' + $( this ).data('page')+ '"]'));
      });

      // $(".commentdot").show();
      $(".comment_positioned").toggleClass('hidden');
      $(".commentdot").toggleClass('hidden');


      $('.commentdot').click(function(){
        var currentId = $(this).attr("id");
        $('.'+currentId).toggleClass('hidden');
      });

      $('#highlights').mouseover(function(){
        $(this).find('.dot').toggleClass('hoverstateh');
      });

      $('#highlights').mouseout(function(){
        $(this).find('.dot').toggleClass('hoverstateh');
      });

      $('.highlight').toggleClass('unhidden');

      $('#highlights').click(function(){
        $('.highlight').toggleClass('unhidden');
        $(this).find('.dot').toggleClass('fillh');
        if ($(this).find('.dot').hasClass('fillh')) {
          $(this).find('p').html("HIDE HIGHLIGHTS");
        } else {
          $(this).find('p').html("SHOW HIGHLIGHTS");
        }
      });


document.getElementById("viewer").addEventListener('mouseup', comment, false);

      $('#marks').mouseover(function(){
        $(this).find('.dot').toggleClass('hoverstatem');
      });


      $('#marks').mouseout(function(){
        $(this).find('.dot').toggleClass('hoverstatem');
      });

      $('#print').mouseover(function(){
        $(this).find('.square').toggleClass('hoverstatep');
      });

      $('#print').mouseout(function(){
        $(this).find('.square').toggleClass('hoverstatep');
      });


/*
var myFunction = function() {

  var page = "page" + $('#pageNumber').val() ;
   highlighter.highlightSelection("highlight");

    /*var newsel = highlighter.highlightSelection("highlight");

    if(newsel[0].end - newsel[0].start > 0){
    $('#new_post_highlight').val(newsel );*/

    /*  serial = highlighter.serialize()
      console.log("serial");
     $('#new_post_highlight').val(serial );


    };*/
//}*/
  /*  var classname = document.getElementsByClassName("textLayer");

      for (var i = 0; i < classname.length; i++) {
        classname[i].addEventListener('mouseup', myFunction, false);
      }
*/

$('input#decline').click(function(){
  $('#respond').css({
      left: '-9999px',
  });
});

$('#sidebarContent').toggleClass('hidden');
$('#sidebarToggle').click(function(){
  $('.arrow_left').toggleClass('arrow_switch');
  $('#sidebarContent').toggleClass('hidden');
});

// $('#aboutPage').toggleClass('show');
// $('div.about').click(function(){
//   console.log('check');
//   $('#aboutPage').toggleClass('show');
// });
//
// $('div.aboutclose').click(function(){
//   $('#aboutPage').toggleClass('show');
// });


      $('#marks').click(function(){
        $('.commentdot').toggleClass('hidden');
        $(this).find('.dot').toggleClass('fillm');
        if ($(this).find('.dot').hasClass('fillm')) {
          // $(this).find('p').html("HIDE MARKS");
        } else {
          // $(this).find('p').html("SHOW MARKS");
          $(".comment_positioned").each(function(){
            if(!$(this).hasClass('hidden')){
              $(this).toggleClass('hidden')
            }
          });
        }
      });

      $('#play').click(function(){
        $('#play').toggleClass('pause');
        // $(this).find('.dot').toggleClass('fillm');
        if ($(this).hasClass('pause')) {
          $(this).find('.play').html("❘ ❘");
          $(this).find('.play').css('vertical-align','middle');
          $(this).find('p').html('PAUSE AUDIOFILE')
        } else {
          $(this).find('.play').html("▷");
          $(this).find('.play').css('vertical-align','top');
          $(this).find('p').html('PLAY AUDIOFILE')
        }
      });

      $('input#decline').click(function(){
        $('#respond').css({
          left: '-9999px',
        });
      });

      $('#sidebarContent').toggleClass('hidden');

      $('#sidebarToggle').click(function(){
        $('.arrow_left').toggleClass('arrow_switch');
        $('#sidebarContent').toggleClass('hidden');
      });

      // $('#aboutPage').toggleClass('hidden');

      $('div.about').click(function(){
        $('#aboutPage').toggleClass('showabout');
      });

      $('div.aboutclose').click(function(){
        $('#aboutPage').toggleClass('showabout');
      });

    //}

    // HERE HOW DO I MAKE THAT THIS HAPPENS WHEN YOU CLICK ON WINDOWS BUT NEVER WHEN YOU CLICK INSIDE THE DIV OF THE COMMENT?
    function comment(e){
      if(e.target.id != "comment" && e.target.id != "submit" ){


        canvas = document.getElementById("page" + $('#pageNumber').val());
        context = canvas.getContext("2d");
        var pos = getMousePos(canvas, e);
        posx = pos.x;
        posy = pos.y;
        //alert("change")

        $(".comment-respond").prependTo($('.page[data-page-number="' + $('#pageNumber').val()+ '"]'));
        $(".comment-respond").css({top: posy, left: posx , position:'absolute', 'z-index':"100"});
        $("#new_post_data").val(posx + ',' + posy + ',' + $('#pageNumber').val())
      }
    }

    /* GUIDA ADDED THIS - KEEP */

    function getSelectionText() {
    var text = "";
    if (window.getSelection) {
        text = window.getSelection().toString();
      } else if (document.selection && document.selection.type != "Control") {
        text = document.selection.createRange().text;
      }
      return documentselection();
    }

    function getMousePos(canvas, evt) {
      var rect = canvas.getBoundingClientRect();
      return {
        x: evt.clientX - rect.left,
        y: evt.clientY - rect.top
      };
    }


}

    }, true);

});

</script>

<?php
get_footer();
?>
