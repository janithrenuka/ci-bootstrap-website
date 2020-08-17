function bmi () {
    var height = Number(document.getElementById("height").value);
    var weight = Number(document.getElementById("weight").value);
    var result = weight / (height * height);
    var r= result.toFixed(2);
    
    document.getElementById("result").innerHTML = "BMI : " + r ;
    document.reset();
    }

    