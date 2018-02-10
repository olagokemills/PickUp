function CustomInvalidities(){
	
	this.invalidities = [];
}

CustomValidation.prototype = {
	
	addInvalidity: function(message){

	this.invalidities.push(message);

	},
	getInvalidities: function(){



	return this.invalidities.join('.  \n');

	},

	CheckValidity: fu
}