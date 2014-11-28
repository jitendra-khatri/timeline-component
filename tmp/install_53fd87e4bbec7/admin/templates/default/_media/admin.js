/**
* @contact 		jitendra.kumar@dotsquares.com
* @author 		Jitendra Khatri
*/

//define valogs, if not defined.
if (typeof(valogs)=='undefined'){
	var valogs  = {};
	valogs.$    = valogs.jQuery = rb.jQuery;
	valogs.ajax	= rb.ajax;
}

// all admin function should be in admin scope 
if(typeof(valogs.admin)=='undefined'){
	valogs.admin = {};
}

//all admin function should be in admin scope 
if(typeof(Joomla)=='undefined'){
	Joomla = {};
}


(function($){
// START : 	
// Scoping code for easy and non-conflicting access to $.
// Should be first line, write code below this line.	
	
valogs.admin = {
	removeArticleImage : function( fieldName, articleId) {
		var args = { 'event_args' : {'fieldName' : fieldName, 'articleId' : articleId} };
		var url = 'index.php?option=com_valogs&view=article&task=ajaxRequestRemoveImage&articleId='+articleId+'&fieldName='+fieldName;
		valogs.ajax.go(url, args);
	},
	
	removeVoucherImage : function( fieldName, voucherId) {
		var args = { 'event_args' : {'fieldName' : fieldName, 'articleId' : voucherId} };
		var url = 'index.php?option=com_valogs&view=voucher&task=ajaxRequestRemoveImage&voucherId='+voucherId+'&fieldName='+fieldName;
		valogs.ajax.go(url, args);
	},
	
	getAreaUsers : function( fieldName, areaAdminId) {
		var args = { 'event_args' : {'fieldName' : fieldName, 'articleId' : areaAdminId} };
		var url = 'index.php?option=com_valogs&view=article&task=ajaxRequestGetAreaUsers&area_admin_id='+areaAdminId+'&field_name='+fieldName;
		
		valogs.ajax.go(url, args, function(userRecords){
			
			var options = "";
			var selectedText = jQuery('#valogs_formowner_id option:selected').text();
			var selectedValue = jQuery('#valogs_formowner_id option:selected').val();
			
			options += '<option value="'+selectedValue+'" selected="selected" >'+selectedText+'</option>';

			userRecords = userRecords[0][1];
			
			if(userRecords != "no result found" && userRecords != "invalid area admin")
			{
				for (var i = 0; i < userRecords.length; i++) {
					var a = userRecords[i]['user_id'];
					if(selectedValue == a)
					{
						continue;
					}
					
					options += '<option value="'+userRecords[i]['user_id']+'">'+userRecords[i]['cb_company']+'</option>'; 
				}
			}
			
			jQuery('#valogs_formowner_id').html(options);
		});
	}
}

/*--------------------------------------------------------------
valogs.admin.grid
	submit
	filters
--------------------------------------------------------------*/
valogs.admin.grid = {
		
		//default submit function
		submit : function( view, action, validActions){
			
			// try views function if exist
			var funcName = view+'_'+ action ; 
			if(this[funcName] instanceof Function) {
				if(this[funcName].apply(this) == false)
					return false;
			}
			
			// then lastly submit form
			//submitform( action );
			if (action) {
		        document.adminForm.task.value=action;
		    }
			
			// validate actions
			//XITODO : send values as key of array , saving a loop
			validActions = eval(validActions);
			var isValidAction = false;
			for(var i=0; i < validActions.length ; i++){
				if(validActions[i] == action){
					isValidAction = true;
					break;
				}
			}
			
						
			var result = true;
		    if (document.adminForm.onsubmit instanceof Function) {
			    result = document.adminForm.onsubmit.apply(this, Array(isValidAction));
				// below code is not working on IE7+, so added above line
		        //result=document.adminForm.onsubmit(isValidAction);
		    }
		    if(result){
		    	document.adminForm.submit();
		    }
		},
		
		filters : {
			reset : function(form){
				 // loop through form elements
			    var str = new Array();
                            var i=0;
			    for(i=0; i<form.elements.length; i++)
			    {
			        var string = form.elements[i].name;
			        if (string && string.substring(0,6) == 'filter' && (string!='filter_reset' && string!='filter_submit'))
			        {
			            form.elements[i].value = '';
			        }
			    }
			    valogs.admin.grid.submit(view,null,validActions);
			}
		}		
};


/*--------------------------------------------------------------
  on Document ready 
--------------------------------------------------------------*/

//ENDING :
//Scoping code for easy and non-conflicting access to $.
//Should be last line, write code above this line.
})(valogs.jQuery);