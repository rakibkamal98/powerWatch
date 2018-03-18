//Filename: fileUpload.js

var fileElement = document.getElementById("file-select");
var male = [];
var female = [];

var totalMale = 0;
var totalFemale = 0;

var meanMale;
var meanFemale;


document.getElementById('file-select').onchange = function(){

  var file = this.files[0];

  var reader = new FileReader();
  reader.onload = function(progressEvent){
    // Entire file
    console.log(this.result);

    // By lines
    var lines = this.result.split('\n');
    for(var line = 0; line < lines.length; line++){
    	var elements = lines[line].split(" ");


    	console.log( "elements[2] =" + elements[2]);
    	if (elements[2].trim() == "Male"){
    		male.push(elements);
    	}

    	if (elements[2].trim() == "Female"){
    		female.push(elements);
    	}

    	for(var element = 0; element < elements.length; element++){
    		console.log(elements[element]);
    	}

      console.log(lines[line]);
    }

    for(var i = 0; i < male.length; i++){
    	totalMale += Number(male[i][1]);
    }

    for(var i = 0; i < female.length; i++){
    	totalFemale += Number(female[i][1]);
    }

    meanMale = totalMale / male.length;

    meanFemale = totalFemale / female.length;

  };
  reader.readAsText(file);
};