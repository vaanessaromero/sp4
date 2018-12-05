$(document).ready(function(){
	
	siteFunctions.dataTable();	
	siteFunctions.ladda_init();
	
	$('.input-datepicker').datepicker();
	
	$('.input-daterange').daterangepicker({
		"dateLimit": {
			"days": 7
		},
		autoUpdateInput : true,
	},function(start, end, label) {
		this.element.val(start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
		this.element.change();
	});
	
	toastr.options = {
	  "preventDuplicates": true,
	}
	
	var _valid = $.fn.valid;
	$.fn.valid = function (alsoDisabled) {
		var alsoDisabled = alsoDisabled || false;
		if (alsoDisabled) {
			this.find('[disabled]').prop('disabled', false);
		}
		var retVal = _valid.apply(this);
		if (alsoDisabled) {
			this.find('[disabled]').prop('disabled', true);
		}
		return retVal;
	};
	
	// setInterval(function() {
		// console.log('update data');
	// }, 5000);
	
	
	
});


var siteFunctions = {
	
	encrypt_string : function(string,encrypt_type){
		encrypt_type = typeof encrypt_type !== 'undefined' ? encrypt_type : '';
		
		if(encrypt_type=='sha512'){
			var hashedString = new jsSHA("SHA-512", "TEXT");
						hashedString.update(string);
			
			return hashedString.getHash("HEX");
		}else{
			return 'Invalid Encrypt type';
		}
		
	},
	bloodhound : function (object,name){
		var objectData = new Bloodhound({
		  datumTokenizer: Bloodhound.tokenizers.obj.whitespace(name),
		  queryTokenizer: Bloodhound.tokenizers.whitespace,
		  local: object
		});
		return objectData;
	},
	alert_message : function(title,message,skin){
		
		if(skin=='danger'){
			var fa = 'fa-ban';
			var theme= ''
		}
		if(skin=='info'){
			var fa = 'fa-info';
		}
		if(skin=='warning'){
			var fa = 'fa-warning';
		}
		if(skin=='success'){
			var fa = 'fa-check';
		}
		if(skin=='fire'){
			var fa = 'fa-fire-extinguisher';
			skin = 'danger';
		}
		
		if(skin=='medic'){
			var fa = 'fa-ambulance';
			skin = 'warning';
		}
		
		var alert = '<div class="alert alert-'+skin+' alert-dismissable">\
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
                    <h4><i class="icon fa '+fa+'"></i> '+title+'</h4>\
                    '+message+'\
                  </div>';
		
		$('.notification-div').html(alert);
	},
	alert_internal_error : function(){
		siteFunctions.alert_message('Internal Server Error!','The server encountered an internal error or misconfiguration and was unable to complete your request.','danger');
	},
	remove_message : function(){
		$('.notification-div div').fadeOut(500);
	},
	ladda_init : function(){

        Ladda.bind( '.progress-demo .ladda-button',{
            callback: function( instance ){
                var progress = 0;
                var interval = setInterval( function(){
                    progress = Math.min( progress + Math.random() * 0.1, 1 );
                    instance.setProgress( progress );

                    if( progress === 1 ){
                        instance.stop();
                        clearInterval( interval );
                    }
                }, 200 );
            }
        });

	},
	dataTable : function(){
		$('.datatable').DataTable( {
		  "autoWidth": false,
		  "order": [],
		});
	},
	number_only : function(evt){
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}
}
