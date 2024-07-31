

if(typeof JQuery=="undefind"){
    alert("JQuery is undefind");
}
$(document).ready(function(){ 
    $("#btn2").click(function(){
        $('#sladeUp').slideUp(2000);
        $(this).css("display", "none");
        $('#btn3').css("display", "block");
    });
    $("#btn3").click(function(){
        $('#sladeUp').slideDown(2000);
        $(this).css("display", "none");
        $('#btn2').css("display", "block");
    });

}); 






function calculateBMR(){
    var error = "";
    var age = document.getElementById("age").value;
    var gender = document.getElementById("gender").value;
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    var Activity_level = document.getElementById("activity-level").value;    
    var bmrWoman = ((weight*10) + (6.25* height) - (5*age)) - 161;
    var bmrMan = ((weight*10) + (6.25* height) - (5*age)) + 5;
    var goal = document.getElementById("goal").value;


    if(Activity_level == "" || goal == "" || gender == "" || weight==0 || height==0 || age==0){
        if(Activity_level == ""){
            error = error + "אתה חייב לבחור רמת פעילות";
            error = error + "\n";
        }
        if(goal == ""){
            error = error + "אתה חייב לבחור את המטרה שלך";
            error = error + "\n";
        }
        if(gender == ""){
            error = error + "אתה חייב לבחור את המגדר שלך";
            error = error + "\n";
        }
        if(weight==0){
            error = error + "אתה חייב לבחור את המשקל שלך";
            error = error + "\n";
        }
        if(height==0){
            error = error + "אתה חייב לבחור את הגובה שלך";
            error = error + "\n";
        }
        if(age==0){
            error = error + "אתה חייב לבחור את הל שלך";
            error = error + "\n";
        }
        window.alert(error);

    }

    else{
        if(Activity_level == "Sedentary"){
        bmrMan = bmrMan*1.2;
        bmrWoman = bmrWoman*1.2;
        }
        if(Activity_level == "Lightly active"){
            bmrMan = bmrMan*1.375;
            bmrWoman = bmrWoman*1.375;
        }
        if(Activity_level == "Moderately active"){
            bmrMan = bmrMan*1.55;
            bmrWoman = bmrWoman*1.55;
        }
        if(Activity_level == "Very active"){
            bmrMan = bmrMan*1.725;
            bmrWoman = bmrWoman*1.725;
        }
        if(Activity_level == "Extremely active"){
            bmrMan = bmrMan*1.9;
            bmrWoman = bmrWoman*1.9;  
        }
    

        if(gender =="male"){
            if (goal=="maintain"){
                document.getElementById("BMRResult").innerHTML = "צריכת הקולוריות היומית שלך היא: " +bmrMan;
            }
            else if(goal=="lose"){
                document.getElementById("BMRResult").innerHTML = "צריכת הקולוריות היומית שלך היא: " +bmrMan*0.8;
            }
            else if(goal=="gain"){
                document.getElementById("BMRResult").innerHTML = "צריכת הקולוריות היומית שלך היא: " +bmrMan*1.2;
            }
        }
        else{
            if (goal=="maintain"){
                document.getElementById("BMRResult").innerHTML = "צריכת הקולוריות היומית שלך היא: " +bmrWoman;
            }
            else if(goal=="lose"){
                document.getElementById("BMRResult").innerHTML = "צריכת הקולוריות היומית שלך היא: " +bmrWoman*0.8;
            }
            else if(goal=="gain"){
                document.getElementById("BMRResult").innerHTML = "צריכת הקולוריות היומית שלך היא: " +bmrWoman*1.2;
            }
        } 
    }
}

    function calculateFood(){

        var error = "";
        var protain = parseInt(document.getElementById("protain").value);
        var fat = parseInt(document.getElementById("fat").value);
        var pahmemot = parseInt(document.getElementById("pahmemot").value);
        var protainAmount = document.getElementById("protainAmount").value;
        var pahmemotAmount = document.getElementById("pahmemotAmount").value;
        var fatAmount = document.getElementById("fatAmount").value;

        if(protain != 0 && protainAmount == 0 || fat != 0 &&  fatAmount == 0|| pahmemot != 0 && pahmemotAmount == 0 ){
            if (protain != 0 && protainAmount == 0 ){
                error = error + "אתה חייב לבחור את כמות החלבון הרצויה";
                error = error + "<br>";
            }
            if (fat != 0 &&  fatAmount == 0){
                
                error = error + "אתה חייב לבחור את כמות השומן הרצויה";
                error = error + "<br>";
            }
            if(pahmemot != 0 && pahmemotAmount == 0){
                error = error + "אתה חייב לבחור את כמות הפחמימות הרצויה";
                error = error + "<br>";
            }
            
            document.getElementById("validationCalories").innerHTML = error;
    
        }
        else{
            
            calories = (protain*protainAmount) + (fat*fatAmount) + (pahmemot*pahmemotAmount);
            document.getElementById("validationCalories").innerHTML = "סך  הקלוריות: " + calories;
            if(calories != 0){
                $(document).ready(function(){ 
                    $("#div4").css('display', 'block');
                }); 
        }
            
            
        }

    

}

function notAvaliable(){
    window.alert("לינק שלא מומש");
}


