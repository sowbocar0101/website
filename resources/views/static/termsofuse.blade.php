@include('layouts.app')

@include('layouts.header')

<div class="container">
	<div class="terms mt-5 mb-5" id="terms"></div>
</div>

<div id="data-table_processing" class="dataTables_processing panel panel-default" style="display: none;">
    {{trans('lang.processing')}}
</div>

@include('layouts.footer');

<script type="text/javascript">

		jQuery("#data-table_processing").show();

		var termsAndConditionsRef = database.collection('settings').doc('termsAndConditions');
		termsAndConditionsRef.get().then(async function (termsAndConditionsSnapshots) {
	        var termsAndConditionsData = termsAndConditionsSnapshots.data();
			$('#terms').html(termsAndConditionsData.termsAndConditions);
			jQuery("#data-table_processing").hide();
		});	
			
</script>