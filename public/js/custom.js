$(document).ready(function(){
  // Slick banner for main login page
  $('.banner-slick').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
  });

  // This is for add new form certificate
  var max_fields_cert       = 10; // Maximum input boxes allowed
  var wrapperCertificate    = $(".wrapperCertificate"); // Fields wrapper
  var addCertificate        = $("#addCertificate"); // Add button ID

  var x = 1; // Initlal text box count
  $(addCertificate).click(function(e){ // On add input button click
    e.preventDefault();
    if(x < max_fields_cert){ // Max input box allowed
      x++; // Text box increment
      $(wrapperCertificate).append('<div class="wrapperCertificate"><div id="removeCertificate" class="form-group"><div class="row"><label class="col-md-3 col-sm-3 col-xs-12 control-label">Certificate <small class="text-danger">(required)</small></label><div class="col-md-5 col-sm-4 col-xs-12"><input type="text" class="form-control" placeholder="Certificate" disabled></div><div class="col-md-3 col-sm-4 col-xs-6 margin-top-med-and-down"><input type="file"><p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document Certificate)</p></div><div class="col-md-1 col-sm-1 col-xs-6 margin-top-med-and-down"><a href="#" class="btn btn-danger remove_cert"><i class="fa fa-minus"></i></a></div></div></div></div>'); //add input box
    }
  });

  $(wrapperCertificate).on("click", ".remove_cert", function(e){ // User click on remove text
    e.preventDefault(); $(this).parents('div#removeCertificate').remove(); x--;
  });

    // This is for add new form catalogue
  var wrapperCatalogue      = $(".wrapperCatalogue"); // Fields wrapper
  var addCatalogue          = $("#addCatalogue"); // Add button ID

  $(addCatalogue).click(function(e){ // On add input button click
    e.preventDefault();
    if(x < max_fields_cert){ // Max input box allowed
      x++; // Text box increment
      $(wrapperCatalogue).append('<div class="wrapperCatalogue"><div id="removeCatalogue" class="form-group"><div class="row"><label class="col-md-3 col-sm-3 col-xs-12 control-label">Product Catalogue <small>(optional)</small></label><div class="col-md-5 col-sm-4 col-xs-12"><input type="text" class="form-control" placeholder="Product Catalogue" disabled></div><div class="col-md-3 col-sm-4 col-xs-6 margin-top-med-and-down"><input type="file"><p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document Product Catalogue)</p></div><div class="col-md-1 col-sm-1 col-xs-6 margin-top-med-and-down"><a href="#" class="btn btn-danger remove_catl"><i class="fa fa-minus"></i></a></div></div></div></div>'); //add input box
    }
  });

  $(wrapperCatalogue).on("click", ".remove_catl", function(e){ // User click on remove text
    e.preventDefault(); $(this).parents('div#removeCatalogue').remove(); x--;
  });

  // This is for add new form catalogue in profile page
  var wrapperCataloguePrf      = $(".wrapperCataloguePrf"); // Fields wrapper
  var addCataloguePrf          = $("#addCataloguePrf"); // Add button ID

  $(addCataloguePrf).click(function(e){ // On add input button click
    e.preventDefault();
    if(x < max_fields_cert){ // Max input box allowed
      x++; // Text box increment
      $(wrapperCataloguePrf).append('<div class="wrapperCataloguePrf"><div id="removeCataloguePrf" class="form-group"><div class=""><label class="col-md-2 col-sm-12 col-xs-12 control-label">Product Catalogue</label><div class="col-md-6 col-sm-12 col-xs-12"><input type="text" class="form-control" placeholder="Product Catalogue" disabled></div><div class="col-md-3 col-sm-4 col-xs-6 margin-top-med-and-down"><input type="file"><p class="help-block hide-on-med-and-down">(.docx, .pdf, or photo of document Product Catalogue)</p></div><div class="col-md-1 col-sm-1 col-xs-6 margin-top-med-and-down"><a href="#" class="btn btn-danger remove_catl_prf"><i class="fa fa-minus"></i></a></div></div></div></div>'); //add input box
    }
  });

  $(wrapperCataloguePrf).on("click", ".remove_catl_prf", function(e){ // User click on remove text
    e.preventDefault(); $(this).parents('div#removeCataloguePrf').remove(); x--;
  });


  $('body').on('click','#addMainProduct', function (event) {
    //event.preventDefault();
    var $initNumber = $(".main-product").length;
    $initNumber++;
    var $newId = "mp-"+$initNumber;
    if ($initNumber<=4)
    {
      var $orginal = $('.main-product:first');
      var $cloned = $orginal.clone().addClass('cloned');
      $cloned.find("#mp-1").attr('id',$newId);
      $cloned.appendTo('#appendMp');
      $cloned.find(".labelfirst").html("");
      $('.btn-remove-main-product:last').css('visibility','visible');
    }
  });

  $('.btn-remove-main-product:first').css('visibility','hidden');

  $('body').on('click','.btn-remove-main-product', function (event) {
    $(this).closest('.main-product').remove();
  });

  // Initialize DataTable
  // Table Company Membership
  companyMembershipTable = $('#companyMembershipTable').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  $('#findCompanyID').on('keyup', function(){
    companyMembershipTable.column(0).search(this.value).draw();
  });
  $('#findCompanyName').on('keyup', function(){
    companyMembershipTable.column(1).search(this.value).draw();
  });
  // Table New Member Request
  newMemberRequest = $('#newMemberRequest').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  $('#findCompanyIDMemberRequest').on('keyup', function(){
    newMemberRequest.column(0).search(this.value).draw();
  });
  $('#findCompanyNameMemberRequest').on('keyup', function(){
    newMemberRequest.column(1).search(this.value).draw();
  });
  // Table Business Category
  businessCategory = $('#businessCategory').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  $('#findSection').on('keyup', function(){
    businessCategory.column(0).search(this.value).draw();
  });
  $('#findSectName').on('keyup', function(){
    businessCategory.column(1).search(this.value).draw();
  });
  $('#findDivision').on('keyup', function(){
    businessCategory.column(2).search(this.value).draw();
  });
  // Table Section Category
  sectionCategory = $('#sectionCategory').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  // Table Division Category
  divisionCategory = $('#divisionCategory').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  // Table Group Category
  groupCategory = $('#groupCategory').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  // Table Shipping Term
  shippingTerm = $('#shippingTerm').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  $('#findShipping').on('keyup', function(){
    shippingTerm.column(0).search(this.value).draw();
  });
  $('#findShippingDesc').on('keyup', function(){
    shippingTerm.column(1).search(this.value).draw();
  });
  // Table RFQ List
  rfqTable = $('#rfqTable').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  $('#findBuyCi').on('keyup', function(){
    rfqTable.column(0).search(this.value).draw();
  });
  $('#findBuyBc').on('keyup', function(){
    rfqTable.column(1).search(this.value).draw();
  });
  // Table Company Database
  cmpDb = $('#cmpDb').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  $('#findCmpDb').on('keyup', function(){
    cmpDb.search( this.value ).draw();
  });
  // Table History RFQ
  historyRfq = $('#historyRfq').DataTable({
    searching: true,
    "dom": '<"top">rt<"bottom"ip><"clear">'
  });
  $('#searchHistory').on('keyup', function(){
    historyRfq.search( this.value ).draw();
  });
  // Table Quotation
  quotation = $('#quotation').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  // Table Discussion
  discuss = $('#discuss').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  // Table Post Buy Lead
  Tablepbl = $('#Tablepbl').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  $('#searchItem').on('keyup', function(){
    Tablepbl.column(1).search(this.value).draw();
  });
  $('#searchStaff').on('keyup', function(){
    Tablepbl.column(2).search(this.value).draw();
  });
  // Table List Quotation
  listQuote = $('#listQuote').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  // Table Potential Vendor
  potentialVendor = $('#potentialVendor').DataTable({
    searching: true,
    "dom": '<"top"l>rt<"bottom"ip><"clear">'
  });
  // Table Broadcast
  tableBroadcast = $('#tableBroadcast').DataTable();
  // Table Unit Post Buy Lead
  unitPbl = $('#unitPbl').DataTable();
  // Table Item Quotation
  tableItemQuotation = $('#tableItemQuotation').DataTable({
    searching: true,
    //"dom": '<"top">rt<"bottom"ip><"clear">'
  });
  // Table Detail Item Quotation
  detailItem = $('#detailItem').DataTable({
    searching: true,
    "dom": '<"top">rt<"bottom"ip><"clear">'
  });
  listBroadcast = $('#listBroadcast').DataTable({
    searching: true,
    //"dom": '<"top">rt<"bottom"ip><"clear">'
  });
  meetingSummary = $('#meetingSummary').DataTable({
    searching: true,
    //"dom": '<"top">rt<"bottom"ip><"clear">'
  });

  // Datetimepicker
  $('#expDate').datetimepicker({
    format: 'dddd, MMMM Do YYYY',
  });

  // Date Buy Lead List Page
  $('#cd').datetimepicker({
    format: 'dddd, MMMM Do YYYY',
  });
  $('#dd').datetimepicker({
    format: 'dddd, MMMM Do YYYY',
  });

  // Date Post Buy Lead
  $('#Editcd').datetimepicker({
    format: 'dddd, MMMM Do YYYY',
  });
  $('#Editdd').datetimepicker({
    format: 'dddd, MMMM Do YYYY',
  });

  // Date Add Calendar Meeting Schedule
  // AD Add Calendar
  $('#ac').datetimepicker({
    format: 'dddd, MMMM Do YYYY',
  });
  // TC Time Calendar
  $('#tc').datetimepicker({
    format: 'h:mm A',
  });
  // Search By Time
  $('#sbt').datetimepicker({
    format: 'dddd, MMMM Do YYYY, h:mm A',
  });

  // Izitoast
  // Company Membership Page
  $(".re-activate").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Company Re-Activate',
      message: 'has been approved.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".add-account").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'New Account',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".add-bc").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'New Business Category',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".edit-bc").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Business Category',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-bc").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Business Category',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-doc").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Document',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".add-sect").on('click', function (event) {
    // //event.preventDefault();

    iziToast.success({
      title: 'New Section',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".edit-sect").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Section',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-sect").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Section',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".add-div").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'New Division',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".edit-div").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Division',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-div").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Division',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".add-group").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'New Group',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".edit-group").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Group',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-group").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Group',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // New Member Request Page
  $(".btn-approve").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Company',
      message: 're-activate has been approved.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".btn-reject").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Company',
      message: 'has been rejected.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Shipping Term Page
  $(".add-shipping-term").on('click', function (event) {
    // //event.preventDefault();

    iziToast.success({
      title: 'New Shipping Term',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });

  $(".edit-shipping-term").on('click', function (event) {
    // //event.preventDefault();

    iziToast.success({
      title: 'Shipping Term',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-shipping-term").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Shipping Term',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // RFQ Page
  $(".edit-rfq").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'RFQ',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-rfq").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'RFQ',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // City & Area Page
  $(".add-c").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'New Province',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".edit-c").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Province',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-c").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Province',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Area Table
  $(".add-a").on('click', function (event) {
    // //event.preventDefault();

    iziToast.success({
      title: 'New Area',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".edit-a").on('click', function (event) {
    // //event.preventDefault();

    iziToast.success({
      title: 'Area',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-a").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Area',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Table Post Buy Lead
  $(".add-pbl").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'New Post Buy Lead',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".edit-pbl").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Post Buy Lead',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-pbl").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Post Buy Lead',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Table Unit Weight
  $(".add-uw").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'New Unit Weight',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".edit-uw").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Unit Weight',
      message: 'has been changed.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".delete-uw").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Unit Weight',
      message: 'has been deleted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Procurement Manager Item
  $(".accept-item").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Quotation',
      message: 'has been approved.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".send-quote").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Quotation',
      message: 'has been sent.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  $(".reject-offer").on('click', function (event) {
    //event.preventDefault();

    iziToast.error({
      title: 'Buy Lead',
      message: 'has been rejected.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Meeting Summary
  $(".add-m-summary").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Meeting Summary',
      message: 'has been added.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Submit Reply
  $(".submit-reply").on('click', function(event){
    //event.preventDefault();

    iziToast.success({
      title: 'Message',
      message: 'has been submitted',
      position: 'topRight',
      transitionIn: 'bounceInLeft',

      onOpen: function(instance,toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy:' + closedBy)
      }
    });
  });
  // Request Job
  $(".req-job").on('click', function(event){
    //event.preventDefault();

    iziToast.success({
      title: 'Your',
      message: 'request has been sent to manager',
      position: 'topRight',
      transitionIn: 'bounceInLeft',

      onOpen: function(instance,toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy:' + closedBy)
      }
    });
  });
  // Reactivate Subscription
  $(".reactivate-subs").on('click', function(event){
    //event.preventDefault();

    iziToast.success({
      title: 'Your',
      message: 're-activate request has been sent',
      position: 'topRight',
      transitionIn: 'bounceInLeft',

      onOpen: function(instance,toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy:' + closedBy)
      }
    });
  });
  // Delete Meeting Summary
  $(".delete-ms").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Successfully',
      message: 'deleted meeting summary.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Accept Request
  $(".accept-request").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Request',
      message: 'has been accepted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Accept Meeting
  $(".acc-meeting").on('click', function (event) {
    //event.preventDefault();

    iziToast.success({
      title: 'Meeting',
      message: 'has been accepted.',
      position: 'topRight',
      transitionIn: 'bounceInLeft',
      // iconText: 'star',
      onOpen: function(instance, toast){
      },

      onClose: function(instance, toast, closedBy){
        console.info('closedBy: ' + closedBy);
      }
    });
  });
  // Menu Internal dashboard
  $('#menu-share').on('click', function (event) {
    var $menuvisible = $('#main-mobile-menu').css('visibility');
    //console.log($menuvisible);
    if($menuvisible == "hidden") {
      //console.log("test");
      $('#main-mobile-menu').css({'visibility':'visible'});
    }
    else {
      $('#main-mobile-menu').css('visibility','hidden');
    }
  });
});


//collapse caret
  $('.panel-collapse').on('click', function(event){
    var $collapse = $('#collapse1').hasClass('in');
    console.log("test");
    if ($collapse == true) {
      console.log("test 2");
      $('.chevron').children('.fa').removeClass('fa-chevron-up');
      $('.chevron').children('.fa').addClass('fa-chevron-down');
    }else{
      console.log("test 3");
      $('.chevron').children('.fa').removeClass('fa-chevron-down');
      $('.chevron').children('.fa').addClass('fa-chevron-up');
    }
  });


/*  var x = 1; // Initlal text box count
  $(addMp).click(function(e){ // On add input button click
    e.preventDefault();
    if(x < max_fields_mp){ // Max input box allowed
      x++; // Text box increment
      $(wpMainProduct).append('<div id="wpMainProduct"><div id="removeMp" class="form-group"><label class="col-md-2 col-sm-12 col-xs-12 control-label">Main Product</label><div class="col-md-4 col-sm-12 col-xs-12"><input type="text" class="form-control"></div><div class="col-md-2 col-sm-12 col-xs-12"><button type="button" class="btn btn-danger remove_mp"><i class="fa fa-minus"></i></button></div></div></div>'); //add input box
    }
  });

  $(wpMainProduct).on("click", ".remove_mp", function(e){ // User click on remove text
    e.preventDefault(); $(this).parents('div#removeMp').remove(); x--;
  });*/

  // Edit Business Category Modal
  $('.btnEditBc').on('click', function(event){
    $(this).closest('div').find('.btnSaveBc').css('display','block');
    $(this).css('display','none');
    $(this).closest('.row').find('.btnToggleDiv').removeAttr('disabled');
    $(this).closest('.row').find('.btnToggleGroup').removeAttr('disabled');
  });

  $('.btnSaveBc').on('click', function(event){
    $(this).css('display','none');
    $(this).closest('div').find('.btnEditBc').css('display','block');
    $(this).closest('.row').find('.btnToggleDiv').attr('disabled','true');
    $(this).closest('.row').find('.btnToggleGroup').attr('disabled','true');
  });

  $('body').on('click', '.accept-request' ,function(event){
    event.preventDefault();
    name = $(this).closest('.user-row').find('.user-name').html();
    id = $(this).closest('.user-row').find('.user-id').html();
    link = $('#req-link').attr('href')+'/'+id;
    $('#req-link').attr('href',link)
    $('#user-req').html(name);
  });

    $('body').on('click','.btn-add-assign', function (event) {
      console.log('test');
      var $initNumber = $(".assign-row").length;
      $initNumber++;
      var $newId = "assign-to-"+$initNumber;
      var $orginal = $('.assign-row:first');
      var $cloned = $orginal.clone().addClass('cloned');
      $cloned.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
      $cloned.find('select').selectpicker();
      $cloned.find("#assign-to-1").attr('id',$newId);
      $cloned.appendTo('.duplicate-assign');
      $('.btn-remove-assign:last').css('visibility','visible');
    });

    //delete assign row
    $('body').on('click','.btn-remove-assign', function (event) {
      $(this).closest('.assign-row').remove();
      console.log("removed");
    });
    
    //clone Modal First
    var $assignModal = $('#assignTo').clone();
    //remove modal when hidden than append clone
    $('body').on('hidden.bs.modal', '#assignTo', function () {
      $('#assignTo').modal('hide').remove();
      var $myClone = $assignModal.clone();
      $myClone.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
      $myClone.find('select').selectpicker();
      console.log($myClone);
      $('body').append($myClone);
      console.log("test");
    });
    //hide first remove button when modal shown
    $("body").on('show.bs.modal', '#assignTo', function () {
      $('.btn-remove-assign:first').css('visibility','hidden')
    });

//add send to
$('body').on('click','.btn-add-send-to-company', function (event) {
    console.log('test');
    var $initNumber = $(".send-to-company").length;
    $initNumber++;
    var $newId = "send-to-company-"+$initNumber;
    var $orginal = $('.send-to-company:first');
    var $cloned = $orginal.clone().addClass('cloned');
    $cloned.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
    $cloned.find('select').selectpicker();
    //$cloned.find('.btn-add-send-to-company').replaceWith('<a class="btn btn-danger btn-remove-send-to-company"><i class="fa fa-minus"></i></a>');
    $cloned.find(".btn-remove-send-to-company").css('visibility','visible');
    $cloned.find("#send-to-company-1").attr('id',$newId);
    $cloned.appendTo('.append-send-to-company');
});

//add send to
$('body').on('click','.btn-add-send-to-user', function (event) {
    console.log('test');
    var $initNumber = $(".send-to-user").length;
    $initNumber++;
    var $newId = "send-to-user-"+$initNumber;
    var $orginal = $('.send-to-user:first');
    var $cloned = $orginal.clone().addClass('cloned');
    $cloned.find('.bootstrap-select').replaceWith(function() { return $('select', this); });
    $cloned.find('select').selectpicker();
    //$cloned.find('.btn-add-send-to-company').replaceWith('<a class="btn btn-danger btn-remove-send-to-company"><i class="fa fa-minus"></i></a>');
    $cloned.find(".btn-remove-send-to-user").css('visibility','visible');
    $cloned.find("#send-to-user-1").attr('id',$newId);
    $cloned.appendTo('.append-send-to-user');
});
    //delete send to
$('body').on('click','.btn-remove-send-to-company', function (event) {
    $(this).closest('.send-to-company').remove();
    console.log("removed");
});
$('body').on('click','.btn-remove-send-to-user', function (event) {
    $(this).closest('.send-to-user').remove();
    console.log("removed");
});
/*    $("body").on('show.bs.modal', '#addMs', function () {
        $('.btn-remove-send-to-company:first').css('visibility','hidden')
    });
*/
function openNav() {
  if (window.matchMedia("(max-width: 768px)").matches){
    document.getElementById("mySidenav").style.width = "260px";
  }else{
    document.getElementById("mySidenav").style.width = "260px";
  }

  document.getElementById("nav-btn-close").style.display = "block";
  document.getElementById("nav-btn-open").style.display = "none";
/*  document.getElementById("main-container").style.opacity = "0.5";*/
}

function closeNav() {
/*  document.getElementById("nav-btn-open").style.display = "block";*/
  document.getElementById("nav-btn-close").style.display = "block";
  document.getElementById("mySidenav").style.width = "0px";
  /*  document.getElementById("main-container").style.opacity = "1";*/
}

$(function () {

  $('body').on('click', function(event) {
    var $navwidth = $('#mySidenav').css('width');
    var $menuvisible = $('#main-mobile-menu').css('visibility');
    if ($menuvisible == "visible")
    {
      $('#main-mobile-menu').css('visibility','hidden');
      console.log('sudah diubah');
    }
    if($navwidth!=='0px') {
      console.log('cek');
      $("#mySidenav").css('width','0px');
      /* document.getElementById("mySidenav").style.width = "0px"; */
    }
  });

  $('#menu-share').on('click', function(event){
    event.stopPropagation();
  });

  // Enable iCheck plugin for checkboxes
  // iCheck for checkbox and radio inputs
  $('.mailbox-messages input[type="checkbox"]').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });

  // Enable check and uncheck all functionality
  $(".checkbox-toggle").click(function () {
    var clicks = $(this).data('clicks');
    if (clicks) {
      // Uncheck all checkboxes
      $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
      $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
    } else {
      // Check all checkboxes
      $(".mailbox-messages input[type='checkbox']").iCheck("check");
      $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
    }
    $(this).data("clicks", !clicks);
  });

  // Handle starring for glyphicon and font awesome
  $(".mailbox-star").click(function (e) {
    e.preventDefault();
    //detect type
    var $this = $(this).find("a > i");
    var glyph = $this.hasClass("glyphicon");
    var fa = $this.hasClass("fa");

    // Switch states
    if (glyph) {
      $this.toggleClass("glyphicon-star");
      $this.toggleClass("glyphicon-star-empty");
    }

    if (fa) {
      $this.toggleClass("fa-star");
      $this.toggleClass("fa-star-o");
    }
  });

  // Click function to close sidenav when body clicked
  $('body').on('click', function(event) {
    var $navwidth = $('#mySidenav').css('width');
    console.log($navwidth);
    var $menuvisible = $('#main-mobile-menu').css('visibility');
    console.log($menuvisible);
    console.log('test');
    if ($menuvisible = "visible")
    {
      console.log('cek');
      $('#main-mobile-menu').css('visibility','hidden');
    }
    if($navwidth!=='0px') {
      console.log('cek');
      $("#mySidenav").css('width','0px');
      /* document.getElementById("mySidenav").style.width = "0px"; */
    }
  });
});

$(function() {
  //Add text editor
  $("#compose-textarea").wysihtml5();
});

function withaddOn() {
  if (document.getElementById('with').checked) {
    document.getElementById('ifWith').style.display = 'block';
  } else {
    document.getElementById('ifWith').style.display = 'none';
  }
}