/**
* @contact 		jitendra.kumar@dotsquares.com
* @author 		Jitendra Khatri
*/

//define timeline, if not defined.
if (typeof(timeline)=='undefined'){
	var timeline  = {};
	timeline.$    = timeline.jQuery = rb.jQuery;
	timeline.ajax	= rb.ajax;
}

// all admin function should be in admin scope 
if(typeof(timeline.admin)=='undefined'){
	timeline.admin = {};
}

//all admin function should be in admin scope 
if(typeof(Joomla)=='undefined'){
	Joomla = {};
}


(function($){
// START : 	
// Scoping code for easy and non-conflicting access to $.
// Should be first line, write code below this line.	
	
timeline.admin = {
}

/*--------------------------------------------------------------
timeline.admin.grid
	submit
	filters
--------------------------------------------------------------*/
timeline.admin.grid = {
		
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
			    timeline.admin.grid.submit(view,null,validActions);
			}
		}		
};


/*--------------------------------------------------------------
  on Document ready 
--------------------------------------------------------------*/

//ENDING :
//Scoping code for easy and non-conflicting access to $.
//Should be last line, write code above this line.
})(timeline.jQuery);