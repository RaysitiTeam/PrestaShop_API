/**
* 2015 Skrill
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
*
*  @author Skrill <contact@skrill.com>
*  @copyright  2015 Skrill
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

$(document).ready(function(){
	
	$('.skrill-tabs nav .tab-title').click(function(){
		var elem = $(this);
		var target = $(elem.data('target'));
		elem.addClass('active').siblings().removeClass('active');
		target.show().siblings().hide();
	})
	
	if ($('.skrill-tabs nav .tab-title.active').length == 0){
		$('.skrill-tabs nav .tab-title:first').trigger("click");
	}

	$('[data-toggle="tooltip"]').tooltip();

	var list_payment = [
		'wlt',
		'psc',
		'acc',
		'vsa',
		'msc',
		'vse',
		'mae',
		'amx',
		'din',
		'jcb',
		'gcb',
		'dnk',
		'psp',
		'csi',
		'obt',
		'gir',
		'did',
		'sft',
		'ebt',
		'idl',
		'npy',
		'pli',
		'pwy',
		'epy',
		'glu',	
		'ali',
		'ntl'	
	];

	var list_cards = [
		"vsa",
		"msc",
		"amx",
		"din",
		"jcb"
	];

	$("input:radio[name='SKRILL_FLEXIBLE_ACTIVE']").change(function(){
		if ($(this).is(':checked') && $(this).val() == '1') {
			for(i=0; i<list_payment.length;i++){
		    	payment = list_payment[i].toUpperCase();
		    	$("#SKRILL_"+payment+"_MODE_on").removeAttr("checked");
		    	$("#SKRILL_"+payment+"_MODE_off").attr("checked", true);
	    	}	
		}
	});

	$("input:radio[name='SKRILL_ACC_ACTIVE']").change(function(){
		if ($(this).is(':checked') && $(this).val() == '1') {	
			validationAllCardsOn(list_cards);
		}
		else{
			validationAllCardsOff(list_cards);
		}
	});

	$("input:radio[name='SKRILL_ACC_MODE']").change(function(){
		if ($(this).is(':checked') && $(this).val() == '1') {	
			validationAllCardsOn(list_cards);
		}
		else{
			validationAllCardsOff(list_cards);
		}
	});


	function validationAllCardsOn(list_cards){
		if($("input:radio[name='SKRILL_ACC_ACTIVE']:checked").val() == '1' && $("input:radio[name='SKRILL_ACC_MODE']:checked").val() == '1')
		{
		    for(i=0; i<list_cards.length;i++){
		    	payment = list_cards[i].toUpperCase();

		    	$("#SKRILL_"+payment+"_MODE_on").removeAttr("checked");
		    	$("#SKRILL_"+payment+"_MODE_off").attr("checked", true);

				var active = $("input:radio[name='SKRILL_"+payment+"_ACTIVE']:checked").val();
				var mode = $("input:radio[name='SKRILL_"+payment+"_MODE']:checked").val();

		    	$('<input>').attr({
				    type: 'hidden',
				    id: 'HIDDEN_'+payment+'_ACTIVE',
				    name: 'SKRILL_'+payment+'_ACTIVE',
				    value: active,
				}).insertAfter("#SKRILL_"+payment+"_ACTIVE_on");

				$('<input>').attr({
				    type: 'hidden',
				    id: 'HIDDEN_'+payment+'_MODE',
				    name: 'SKRILL_'+payment+'_MODE',
				    value: mode,
				}).insertAfter("#SKRILL_"+payment+"_MODE_on");

				$("#SKRILL_"+payment+"_ACTIVE_on").attr("disabled", true);
		    	$("#SKRILL_"+payment+"_ACTIVE_off").attr("disabled", true);
		    	$("#SKRILL_"+payment+"_MODE_on").attr("disabled", true);
		    	$("#SKRILL_"+payment+"_MODE_off").attr("disabled", true);	    	
		    }
		}	
	}

	function validationAllCardsOff(list_cards){
		if($("input:radio[name='SKRILL_ACC_ACTIVE']:checked").val() == '0' || $("input:radio[name='SKRILL_ACC_MODE']:checked").val() == '0')
		{
			for(i=0; i<list_cards.length;i++){
		    	payment = list_cards[i].toUpperCase();
		    	$("#SKRILL_"+payment+"_ACTIVE_on").removeAttr("disabled");
		    	$("#SKRILL_"+payment+"_MODE_on").removeAttr("disabled");
		    	$("#SKRILL_"+payment+"_ACTIVE_off").removeAttr("disabled");
		    	$("#SKRILL_"+payment+"_MODE_off").removeAttr("disabled");

		    	$("#HIDDEN_"+payment+"_ACTIVE").remove();
		    	$("#HIDDEN_"+payment+"_MODE").remove();
		    }
		}
	}

	validationAllCardsOn(list_cards);

});